<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_bit";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to fetch the current Bitcoin price from Binance API
function getBitcoinPrice()
{
    $apiUrl = "https://api.binance.com/api/v3/ticker/price?symbol=BTCUSDT";
    $response = @file_get_contents($apiUrl); // Add error suppression to avoid warnings

    if ($response === FALSE) {
        return null; // Return null if the API call fails
    }

    $data = json_decode($response, true);
    return $data['price'] ?? null; // Use null coalescing in case 'price' is not found
}

// Handle AJAX request for Bitcoin price
if (isset($_GET['action']) && $_GET['action'] == 'get_btc_price') {
    $price = getBitcoinPrice();
    if ($price !== null) {
        echo json_encode(['price' => number_format($price, 2, '.', '')]);
    } else {
        echo json_encode(['error' => 'Error fetching Bitcoin price']);
    }
    exit;
}

// Check if the session variable for the user ID is set
if (!isset($_SESSION['loggedInUser']['username'])) {
    die("User not logged in or session expired.");
}

$userId = $_SESSION['loggedInUser']['username'];

// Use prepared statement to fetch the current credit limit for the user
$stmt = $conn->prepare("SELECT user_credit FROM users WHERE username = ?");
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}
$stmt->bind_param("s", $userId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $creditLimit = $row['user_credit'];
} else {
    die("Error: Credit limit not found for the user.");
}

$stmt->close();

// Check if the form is submitted via AJAX
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $percentage = $_POST['percentage'];

    // Validate the percentage input
    if (!is_numeric($percentage) || $percentage <= 0 || $percentage > 100) {
        echo json_encode(['success' => false, 'error' => 'Invalid percentage input']);
        exit;
    }

    $usdAmount = ($creditLimit * $percentage) / 100;
    $btcPrice = getBitcoinPrice();

    if ($btcPrice === null) {
        echo json_encode(['success' => false, 'error' => 'Unable to fetch Bitcoin price']);
        exit;
    }

    $btcAmount = $usdAmount / $btcPrice;

    // Update the credit limit in the database
    $newCreditLimit = $creditLimit - $usdAmount;
    $stmt = $conn->prepare("UPDATE users SET user_credit = ? WHERE username = ?");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("ds", $newCreditLimit, $userId);

    if ($stmt->execute()) {
        // Insert the transaction into the transactions table with the updated current_bal
        $stmt = $conn->prepare("INSERT INTO transactions (user_id, current_bal, usd_amount, btc_amount, btc_price) VALUES (?, ?, ?, ?, ?)");
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }
        $stmt->bind_param("sdddd", $userId, $newCreditLimit, $usdAmount, $btcAmount, $btcPrice);

        if ($stmt->execute()) {
            echo json_encode([
                'success' => true,
                'btcAmount' => number_format($btcAmount, 8, '.', ''),
                'currentBal' => number_format($newCreditLimit, 2, '.', ''),
                'usdAmount' => number_format($usdAmount, 2, '.', ''),
                'btcPrice' => number_format($btcPrice, 2, '.', ''),
                'newCreditLimit' => number_format($newCreditLimit, 2, '.', '')
            ]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Transaction failed']);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'Failed to update credit limit']);
    }

    $stmt->close();
    exit;
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitcoin Purchase</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }

        h1 {
            color: #333;
        }

        .tradeBtn {
            list-style-type: none;
            padding: 0;
        }

        .trade_button {
            display: inline-block;
            margin: 5px;
        }

        .trade_button button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }

        .trade_button button:hover {
            background-color: #218838;
        }

        #result {
            margin-top: 20px;
        }

        #purchase-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #calculated-usd {
            width: 100px;
            padding: 5px;
            margin-top: 10px;
            display: block;
        }

        #history_area {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .history_wrap .summary dl {
            display: inline-block;
            margin-right: 20px;
        }

        .list_area table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .list_area th,
        .list_area td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .list_area th {
            background-color: #f4f4f4;
        }

        @media (max-width: 600px) {
            .trade_button {
                display: block;
                margin: 10px auto;
                text-align: center;
            }
        }

        /* Add styles for icons */
        .price-change-icon {
            font-size: 20px;
            margin-left: 10px;
        }

        .price-up {
            color: blue;
        }

        .price-down {
            color: red;
        }
    </style>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</head>

<body>
    <h1>Purchase Bitcoin</h1>

    <p>Current Bitcoin Price: <span id="btc-price">Loading...</span><i id="price-change-icon" class="fas fa-minus price-change-icon"></i></p>
    <p>Your Credit Limit: $<?php echo number_format($creditLimit, 2, '.', ''); ?></p>

    <div id="purchase-container">
        <ul class="tradeBtn">
            <li class="trade_button">
                <button type="button" value="10" class="tr_btn01" onclick="calculateUsd(10)">10%</button>
            </li>
            <li class="trade_button">
                <button type="button" value="25" class="tr_btn02" onclick="calculateUsd(25)">25%</button>
            </li>
            <li class="trade_button">
                <button type="button" value="50" class="tr_btn03" onclick="calculateUsd(50)">50%</button>
            </li>
            <li class="trade_button">
                <button type="button" value="100" class="tr_btn04" onclick="calculateUsd(100)">100%</button>
            </li>
        </ul>

        <p id="credit-limit-percentage">Your Credit Limit: 0%</p>
        <p id="calculated-percentage-usd">USD Amount for 0%: $0.00, BTC Amount: 0.00000000 BTC</p>
        <label for="calculated-usd">Calculated USD:</label>
        <input type="text" id="calculated-usd" value="0.00" readonly>

        <button type="button" onclick="submitPurchase()">Buy Bitcoin</button>
    </div>

    <div id="result"></div>
    <!-- Added Trading History Table -->
    <div id="history_area" class="history_wrap">
        <div id="history-div" class="history_area">
            <!-- trade_list -->
            <?php
            include "inc/connect.php"; // Ensure this is correctly included

            // Check if the user is logged in
            if (!isset($_SESSION['loggedInUser']['username'])) {
                die("User not logged in or session expired.");
            }

            $userid = $_SESSION['loggedInUser']['username']; // Assuming username is used for user_id in transactions

            // Query to fetch user transactions using prepared statements
            $chk_query = $conn->prepare("SELECT * FROM transactions WHERE user_id = ? ORDER BY transaction_date DESC LIMIT 1");
            $chk_query->bind_param("s", $userid);

            if ($chk_query->execute()) {
                $result = $chk_query->get_result();

                if ($result->num_rows > 0) {
                    // Fetch user credit once (optimization)
                    $users_query = $conn->prepare("SELECT user_credit FROM users WHERE username = ?");
                    $users_query->bind_param("s", $userid);

                    if ($users_query->execute()) {
                        $user_result = $users_query->get_result();

                        if ($user_result->num_rows > 0) {
                            $user_row = $user_result->fetch_assoc();
                            $user_credit = htmlspecialchars($user_row['user_credit']);
                        } else {
                            echo "<p>No user data found.</p>";
                            exit; // Stop further execution if no user data is found
                        }
                    } else {
                        echo "<p>Error retrieving user data. Please try again later.</p>";
                        exit;
                    }

                    $users_query->close();

                    // Iterate through each transaction
                    while ($row = $result->fetch_assoc()) {
                        $usd_amount = htmlspecialchars($row['usd_amount']);
                        $btc_amount = $row['btc_amount']; // Assuming this value is stored
                        $btc_price = $row['btc_price']; // Assuming this value is stored

                        // Get the current Bitcoin price
                        $currentBtcPrice = getBitcoinPrice();

                        if ($currentBtcPrice !== null) {
                            // Calculate current USD value and profit
                            $currentUsdValue = $btc_amount * $currentBtcPrice;
                            $purchaseUsdValue = $btc_amount * $btc_price;
                            $profit = $currentUsdValue - $purchaseUsdValue;

                            // Calculate profit rate
                            $profitRate = ($purchaseUsdValue != 0) ? ($profit / $purchaseUsdValue) * 100 : 0;

                            // Format profit and rate for display
                            $profitFormatted = number_format($profit, 2, '.', '');
                            $profitRateFormatted = number_format($profitRate, 2, '.', '');
                        } else {
                            $profitFormatted = 'Error fetching price';
                            $profitRateFormatted = 'Error fetching price';
                        }
            ?>
                        <div id="tradHistoryTab1" class="trade_list tabPage active">

                            <div class="summary">
                                <dl>
                                    <dt>Available USDT</dt>
                                    <dd><span class="mb-tp"><?= number_format($user_credit, 2) ?> USDT</span></dd>
                                </dl>
                                <dl>
                                    <dt>Estimated USDT</dt>
                                    <dd><span class="mb-estimated-tp"><?= number_format($usd_amount, 2) ?></span></dd>
                                </dl>
                                <dl>
                                    <dt>Total Margin USDT</dt>
                                    <dd><span class="totlaBalancePoint"><?= number_format($usd_amount, 2) ?></span></dd>
                                </dl>
                                <dl>
                                    <dt>Profit USDT</dt>
                                    <dd id="sum-settle-tp" class="minus"><?= $profitFormatted ?> USDT</dd>
                                </dl>
                                <dl>
                                    <dt>Total USDT</dt>
                                    <dd id="tot-settle-tp" class="minus">0.00 USDT</dd> <!-- Will be updated by JS -->
                                </dl>
                                <dl>
                                    <dt>Total Rate</dt>
                                    <dd id="tot-settle-rate" class="minus">0.00%</dd> <!-- Will be updated by JS -->
                                </dl>
                                <dl>
                                    <dt>BTC Amount</dt>
                                    <dd class="btc-amount"><?= number_format($btc_amount, 8) ?></dd>
                                </dl>
                                <dl>
                                    <dt>BTC Purchase Price</dt>
                                    <dd class="btc-price"><?= number_format($btc_price, 2) ?></dd>
                                </dl>
                            </div>





                        </div>

            <?php
                    }
                } else {
                    echo "<p>No transactions found.</p>";
                }
            } else {
                echo "<p>Error retrieving transactions. Please try again later.</p>";
            }

            $chk_query->close();
            $conn->close();
            ?>



        </div>
    </div>

    <script>
        let creditLimit = <?php echo $creditLimit; ?>;
        let previousPrice = 0; // Store the previous price for comparison
        let selectedPercentage = 0; // Store the selected percentage
        let isProcessing = false; // Prevent multiple submissions

        // Function to fetch Bitcoin price every second
        function fetchBitcoinPrice() {
            const apiUrl = '?action=get_btc_price';

            fetch(apiUrl)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.price) {
                        const currentPrice = parseFloat(data.price);
                        displayPriceChange(currentPrice);
                        previousPrice = currentPrice; // Update previous price for the next comparison
                    } else if (data.error) {
                        console.error('Error from API: ', data.error);
                        document.getElementById('btc-price').innerText = 'Error fetching Bitcoin price';
                    } else {
                        console.error('Unexpected response format: ', data);
                    }
                })
                .catch(error => {
                    console.error('Error fetching Bitcoin price:', error);
                    document.getElementById('btc-price').innerText = 'Error fetching Bitcoin price';
                });
        }

        // Function to display price and highlight the changes
        function displayPriceChange(currentPrice) {
            const priceElement = document.getElementById('btc-price');
            const iconElement = document.getElementById('price-change-icon');

            // Update the price
            priceElement.innerText = `$${currentPrice.toFixed(2)}`;

            // Compare with the previous price and highlight change
            if (previousPrice) {
                if (currentPrice > previousPrice) {
                    priceElement.style.color = 'blue'; // Price went up
                    iconElement.className = 'fas fa-arrow-up price-change-icon price-up';
                } else if (currentPrice < previousPrice) {
                    priceElement.style.color = 'red'; // Price went down
                    iconElement.className = 'fas fa-arrow-down price-change-icon price-down';
                } else {
                    priceElement.style.color = 'black'; // No change
                    iconElement.className = 'fas fa-minus price-change-icon';
                }
            }
        }

        // Calculate USD and BTC amounts dynamically
        function calculateUsd(percentage) {
            selectedPercentage = percentage;
            let usdAmount = (creditLimit * percentage) / 100;
            document.getElementById('calculated-usd').value = usdAmount.toFixed(2); // Display the calculated USD
            document.getElementById('credit-limit-percentage').innerText = `Your Credit Limit: ${percentage}%`;

            // Fetch the current Bitcoin price to calculate the BTC amount
            const apiUrl = '?action=get_btc_price';
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    if (data.price) {
                        const btcPrice = parseFloat(data.price);
                        const btcAmount = usdAmount / btcPrice; // Calculate BTC amount

                        // Update the display for USD and BTC amounts
                        document.getElementById('calculated-percentage-usd').innerText =
                            `USD Amount for ${percentage}%: $${usdAmount.toFixed(2)}, BTC Amount: ${btcAmount.toFixed(8)} BTC`;
                    } else {
                        document.getElementById('calculated-percentage-usd').innerText = `Error fetching Bitcoin price`;
                    }
                })
                .catch(error => {
                    console.error('Error fetching Bitcoin price:', error);
                });
        }


        // Function to calculate the profit or loss based on the current price and purchase price
        function calculateProfit($btcPriceNow, $btcPricePurchase, $btcAmount) {
            $currentUsdValue = $btcAmount * $btcPriceNow;
            $purchaseUsdValue = $btcAmount * $btcPricePurchase;
            $profit = $currentUsdValue - $purchaseUsdValue; // Calculate profit/loss
            return $profit;
        }


        // Function to submit purchase
        function submitPurchase(event) {
            if (isProcessing) return; // Prevent multiple submissions
            isProcessing = true;

            // Prevent default form submission behavior if event is passed
            if (event) {
                event.preventDefault();
            }

            const formData = new FormData();
            formData.append('percentage', selectedPercentage);

            fetch('', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            title: 'Purchase Successful!',
                            text: `You bought ${data.btcAmount} BTC for $${data.usdAmount} USD at a price of $${data.btcPrice} per BTC.\n\n` +
                                `Your updated credit limit is $${data.newCreditLimit}.\n\n` +
                                `Total USD Amount Computed by ${selectedPercentage}% is: $${data.usdAmount}, BTC Amount: ${data.btcAmount} BTC`,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Refresh the page
                                window.location.reload();
                            }
                        });
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: data.error,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                })
                .catch(error => {
                    console.error('Error during purchase:', error);
                    Swal.fire({
                        title: 'Error!',
                        text: 'An error occurred during the purchase. Please try again.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                })
                .finally(() => {
                    isProcessing = false; // Allow further submissions
                });
        }



        // Ensure Bitcoin price is fetched every second
        setInterval(fetchBitcoinPrice, 1000);



        // Ensure to attach the function properly to avoid unwanted form behavior
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('button[onclick="submitPurchase()"]').addEventListener('click', submitPurchase);
        });


        // Call this once to initialize the price on page load
        window.onload = fetchBitcoinPrice;
    </script>
    
    <script>
        // Function to update profit, total USDT, and total rate dynamically
        function updateProfitAndRate() {
            fetch('?action=get_btc_price')
                .then(response => response.json())
                .then(data => {
                    if (data.price) {
                        const currentBtcPrice = parseFloat(data.price); // Get the current BTC price
                        let totalProfit = 0; // Total gain/loss across all transactions
                        let totalInitialAmount = 0; // Sum of initial investments for percentage calculation

                        // Iterate over each transaction to calculate individual profits
                        document.querySelectorAll('.trade_list').forEach((transaction, index) => {
                            const btcAmount = parseFloat(transaction.querySelector('.btc-amount').innerText); // BTC amount
                            const purchaseBtcPrice = parseFloat(transaction.querySelector('.btc-price').innerText); // Purchase price

                            // Calculate the current value and purchase value in USD
                            const currentUsdValue = btcAmount * currentBtcPrice;
                            const purchaseUsdValue = btcAmount * purchaseBtcPrice;

                            // Calculate individual profit/loss in USDT
                            const profit = currentUsdValue - purchaseUsdValue;

                            // Add individual profit to the total profit (Total USDT)
                            totalProfit += profit;

                            // Accumulate the total initial investment for percentage calculation
                            totalInitialAmount += purchaseUsdValue;

                            // Update the individual Profit USDT field dynamically
                            const profitElement = transaction.querySelector('#sum-settle-tp');
                            profitElement.innerText = (profit >= 0 ? "+" : "") + profit.toFixed(2) + " USDT";

                            // Apply color changes based on individual gain/loss
                            if (profit > 0) {
                                profitElement.style.color = 'green'; // Gain
                            } else if (profit < 0) {
                                profitElement.style.color = 'red'; // Loss
                            } else {
                                profitElement.style.color = 'black'; // No change
                            }
                        });

                        // Update Total USDT (sum of all individual gains/losses)
                        const totalProfitElement = document.querySelector('#tot-settle-tp');
                        totalProfitElement.innerText = (totalProfit >= 0 ? "+" : "") + totalProfit.toFixed(2) + " USDT";

                        // Apply color changes based on total gain/loss
                        if (totalProfit > 0) {
                            totalProfitElement.style.color = 'green'; // Gain
                        } else if (totalProfit < 0) {
                            totalProfitElement.style.color = 'red'; // Loss
                        } else {
                            totalProfitElement.style.color = 'black'; // No change
                        }

                        // Calculate the Total Rate as a percentage of the total initial investment
                        const totalRate = (totalInitialAmount !== 0) ? (totalProfit / totalInitialAmount) * 100 : 0;

                        // Update Total Rate dynamically
                        const totalRateElement = document.querySelector('#tot-settle-rate');
                        totalRateElement.innerText = totalRate.toFixed(2) + "%";

                        // Apply color changes based on percentage gain/loss
                        if (totalRate > 0) {
                            totalRateElement.style.color = 'green'; // Positive percentage
                        } else if (totalRate < 0) {
                            totalRateElement.style.color = 'red'; // Negative percentage
                        } else {
                            totalRateElement.style.color = 'black'; // No change
                        }
                    }
                })
                .catch(error => {
                    console.error('Error fetching Bitcoin price:', error);
                });
        }

        // Ensure DOM is fully loaded before executing the script
        document.addEventListener('DOMContentLoaded', function() {
            // Call the update function every second for real-time updates
            setInterval(updateProfitAndRate, 1000); // Update every second

            // Fetch Bitcoin price on page load
            updateProfitAndRate(); // Call the function immediately to initialize
        });
    </script>



</body>

</html>
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
    $response = @file_get_contents($apiUrl);

    if ($response === FALSE) {
        return null; // Return null if the API call fails
    }

    $data = json_decode($response, true);
    return $data['price'] ?? null; // Return price if found, otherwise return null
}

// Handle AJAX request to get Bitcoin price
if (isset($_GET['action']) && $_GET['action'] == 'get_btc_price') {
    $price = getBitcoinPrice();
    if ($price !== null) {
        echo json_encode(['price' => number_format($price, 2, '.', '')]);
    } else {
        echo json_encode(['error' => 'Error fetching Bitcoin price']);
    }
    exit;
}

// Check if the session variable for the user is set
if (!isset($_SESSION['loggedInUser']['username'])) {
    die("User not logged in or session expired.");
}

$userId = $_SESSION['loggedInUser']['username'];

// Fetch the user's credit limit
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

// Fetch user's transactions for history display
$transactions = [];
$chk_query = $conn->prepare("SELECT * FROM transactions WHERE user_id = ? ORDER BY transaction_date DESC LIMIT 2");
$chk_query->bind_param("s", $userId);
$chk_query->execute();
$result = $chk_query->get_result();

while ($row = $result->fetch_assoc()) {
    $transactions[] = $row;
}

$chk_query->close();

// Handle POST request to make a purchase
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $percentage = $_POST['percentage'];
    $btcPrice = getBitcoinPrice();

    if ($btcPrice === null) {
        echo json_encode(['success' => false, 'error' => 'Unable to fetch Bitcoin price']);
        exit;
    }

    // Calculate USD amount and BTC amount
    $usdAmount = ($creditLimit * $percentage) / 100;
    $btcAmount = $usdAmount / $btcPrice;

    // Update the user's credit limit
    $newCreditLimit = $creditLimit - $usdAmount;
    $stmt = $conn->prepare("UPDATE users SET user_credit = ? WHERE username = ?");
    $stmt->bind_param("ds", $newCreditLimit, $userId);

    if ($stmt->execute()) {
        // Insert the transaction into the transactions table
        $stmt = $conn->prepare("INSERT INTO transactions (user_id, current_bal, usd_amount, btc_amount, btc_price) VALUES (?, ?, ?, ?, ?)");
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

    <!-- Include FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        #purchase-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #result,
        #history_area {
            margin-top: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .trade_button button {
            margin: 5px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }

        .trade_button button:hover {
            background-color: #218838;
        }

        .price-up {
            color: blue;
        }

        .price-down {
            color: red;
        }

        .trade_list {
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .trade_list dl {
            margin: 0;
            padding: 0;
        }

        .trade_list dt,
        .trade_list dd {
            margin: 0;
            padding: 5px;
            text-align: left;
        }

        input[type="number"] {
            width: 100px;
            padding: 5px;
            margin-top: 10px;
            display: block;
        }
    </style>

    <script>
        let creditLimit = <?php echo $creditLimit; ?>;
        let previousPrice = 0;
        let selectedPercentage = 0;
        let isProcessing = false;

        // Fetch Bitcoin price every second
        function fetchBitcoinPrice() {
            fetch('?action=get_btc_price')
                .then(response => response.json())
                .then(data => {
                    if (data.price) {
                        displayPriceChange(parseFloat(data.price));
                        updateProfitAndRate(parseFloat(data.price));
                    } else {
                        console.error('Error fetching Bitcoin price:', data.error);
                    }
                })
                .catch(error => console.error('Error fetching Bitcoin price:', error));
        }

        // Display the price change visually and highlight if it increased or decreased
        function displayPriceChange(currentPrice) {
            const priceElement = document.getElementById('btc-price');
            const iconElement = document.getElementById('price-change-icon');

            priceElement.innerText = `$${currentPrice.toFixed(2)}`;

            if (previousPrice > 0) {
                if (currentPrice > previousPrice) {
                    priceElement.style.color = 'blue';
                    iconElement.className = 'fas fa-arrow-up price-change-icon price-up';
                } else if (currentPrice < previousPrice) {
                    priceElement.style.color = 'red';
                    iconElement.className = 'fas fa-arrow-down price-change-icon price-down';
                } else {
                    priceElement.style.color = 'black';
                    iconElement.className = 'fas fa-minus price-change-icon';
                }
            }

            previousPrice = currentPrice; // Update the previous price for future comparisons
        }

        // Update Profit and Rate for each transaction dynamically
        function updateProfitAndRate(currentBtcPrice) {
            document.querySelectorAll('.trade_list').forEach(transaction => {
                const usdAmount = parseFloat(transaction.querySelector('.mb-estimated-tp').innerText.replace(/[^0-9.-]+/g, ""));
                const btcAmount = parseFloat(transaction.querySelector('.btc-amount').innerText);

                const currentUsdValue = btcAmount * currentBtcPrice;
                const purchaseUsdValue = btcAmount * usdAmount;

                const profit = currentUsdValue - purchaseUsdValue;
                const profitRate = (purchaseUsdValue !== 0) ? (profit / purchaseUsdValue) * 100 : 0;

                transaction.querySelector('#sum-settle-tp').innerText = `${profit.toFixed(2)} USDT`;
                transaction.querySelector('#sum-settle-rate').innerText = `${profitRate.toFixed(2)}%`;
            });
        }

        // Insert percentage value into the input field
        function insertPercentage(value) {
            document.getElementById('percentage-input').value = value;
        }

        // Submit purchase
        function submitPurchase() {
            if (isProcessing) return; // Prevent multiple submissions

            const percentageInput = document.getElementById('percentage-input');
            selectedPercentage = parseFloat(percentageInput.value);

            if (isNaN(selectedPercentage) || selectedPercentage <= 0 || selectedPercentage > 100) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Please enter a valid percentage between 1 and 100.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return;
            }

            isProcessing = true;

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
                            text: `You bought ${data.btcAmount} BTC for $${data.usdAmount} USD at a price of $${data.btcPrice} per BTC.\n\nYour updated credit limit is $${data.newCreditLimit}.`,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => window.location.reload());
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
                .finally(() => isProcessing = false); // Reset the processing flag
        }

        // Fetch Bitcoin price every second
        setInterval(fetchBitcoinPrice, 1000);
    </script>

</head>

<body>

    <h1>Purchase Bitcoin</h1>

    <p>Current Bitcoin Price: <span id="btc-price">Loading...</span><i id="price-change-icon" class="fas fa-minus price-change-icon"></i></p>
    <p>Your Credit Limit: $<?php echo number_format($creditLimit, 2, '.', ''); ?></p>

    <div id="purchase-container">
        <!-- Option Buttons for Percentage Selection -->
        <ul class="tradeBtn">
            <li class="trade_button">
                <button type="button" onclick="insertPercentage(10)">10%</button>
            </li>
            <li class="trade_button">
                <button type="button" onclick="insertPercentage(25)">25%</button>
            </li>
            <li class="trade_button">
                <button type="button" onclick="insertPercentage(50)">50%</button>
            </li>
            <li class="trade_button">
                <button type="button" onclick="insertPercentage(100)">100%</button>
            </li>
        </ul>

        <!-- Input Field for Custom Percentage -->
        <label for="percentage-input">Or Enter Custom Percentage (%):</label>
        <input type="number" id="percentage-input" min="1" max="100" placeholder="Enter percentage (1-100)">

        <!-- Submit Button -->
        <button type="button" onclick="submitPurchase()">Submit Purchase</button>
    </div>

    <div id="result"></div>

    <!-- Display User's Transaction History -->
    <div id="history_area">
        <?php foreach ($transactions as $transaction): ?>
            <?php
            $btcAmount = $transaction['btc_amount'];
            $btcPrice = $transaction['btc_price'];
            ?>
            <div class="trade_list">
                <dl>
                    <dt>Estimated USDT</dt>
                    <dd><span class="mb-estimated-tp"><?= number_format($btcPrice, 2) ?></span></dd>
                </dl>
                <dl>
                    <dt>BTC Amount</dt>
                    <dd class="btc-amount"><?= number_format($btcAmount, 8) ?></dd>
                </dl>
                <dl>
                    <dt>Profit USDT</dt>
                    <dd id="sum-settle-tp">0.00 USDT</dd>
                </dl>
                <dl>
                    <dt>Profit Rate</dt>
                    <dd id="sum-settle-rate">0.00%</dd>
                </dl>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>
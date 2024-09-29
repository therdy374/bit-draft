<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bitcoin_purchase";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to fetch the current Bitcoin price from Binance API
function getBitcoinPrice() {
    $apiUrl = "https://api.binance.com/api/v3/ticker/price?symbol=BTCUSDT";
    $response = file_get_contents($apiUrl);

    if ($response === FALSE) {
        die('Error occurred while fetching Bitcoin price');
    }

    $data = json_decode($response, true);
    return $data['price'];
}

// Handle AJAX request for Bitcoin price
if (isset($_GET['action']) && $_GET['action'] == 'get_btc_price') {
    $price = getBitcoinPrice();
    echo json_encode(['price' => number_format($price, 2, '.', '')]); // No commas
    exit;
}

// Define the user ID (for demonstration purposes)
$userId = 1;

// Fetch the current credit limit for the user
$result = $conn->query("SELECT credit_limit FROM user_credit_limits WHERE user_id = $userId");
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $creditLimit = $row['credit_limit'];
} else {
    die("Error: Credit limit not found for the user.");
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $percentage = $_POST['percentage'];
    $usdAmount = ($creditLimit * $percentage) / 100;

    $btcPrice = getBitcoinPrice();
    $btcAmount = $usdAmount / $btcPrice;

    // Update the credit limit in the database
    $newCreditLimit = $creditLimit - $usdAmount;
    $stmt = $conn->prepare("UPDATE user_credit_limits SET credit_limit = ? WHERE user_id = ?");
    $stmt->bind_param("di", $newCreditLimit, $userId);
    $stmt->execute();

    // Insert the transaction into the transactions table
    $stmt = $conn->prepare("INSERT INTO transactions (user_id, usd_amount, btc_amount, btc_price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iddd", $userId, $usdAmount, $btcAmount, $btcPrice);

    if ($stmt->execute()) {
        echo "<p>Purchase successful! You bought " . number_format($btcAmount, 8, '.', '') . " BTC for $" . number_format($usdAmount, 2, '.', '') . " USD at a price of $" . number_format($btcPrice, 2, '.', '') . " per BTC.</p>";
        echo "<p>Your updated credit limit is $" . number_format($newCreditLimit, 2, '.', '') . ".</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

$conn->close();
?>
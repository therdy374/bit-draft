<?php
// Start a session to hold balances and prices
session_start();

// Set initial cryptocurrency prices (in USD)
$prices = [
    "BTC" => 50000,
    "ETH" => 1800,
];

// Initialize user balance if not set
if (!isset($_SESSION['balance'])) {
    $_SESSION['balance'] = 10000; // User starts with $10,000
}

// Initialize cryptocurrency holdings if not set
if (!isset($_SESSION['crypto'])) {
    $_SESSION['crypto'] = [
        "BTC" => 0,
        "ETH" => 0,
    ];
}

// Handle buy or sell action
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $crypto = $_POST['crypto'];
    $action = $_POST['action'];
    $amount = (float)$_POST['amount'];

    if ($action === 'buy') {
        $cost = $amount * $prices[$crypto];
        if ($_SESSION['balance'] >= $cost) {
            $_SESSION['balance'] -= $cost;
            $_SESSION['crypto'][$crypto] += $amount;
        } else {
            $error = "Not enough balance to buy!";
        }
    } elseif ($action === 'sell') {
        if ($_SESSION['crypto'][$crypto] >= $amount) {
            $_SESSION['crypto'][$crypto] -= $amount;
            $_SESSION['balance'] += $amount * $prices[$crypto];
        } else {
            $error = "Not enough cryptocurrency to sell!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Buy/Sell</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Cryptocurrency Trading</h1>
        <p>Your Balance: $<?php echo number_format($_SESSION['balance'], 2); ?></p>
        <h2>Holdings:</h2>
        <ul>
            <li>BTC: <?php echo $_SESSION['crypto']['BTC']; ?> (Price: $<?php echo number_format($prices['BTC'], 2); ?>)</li>
            <li>ETH: <?php echo $_SESSION['crypto']['ETH']; ?> (Price: $<?php echo number_format($prices['ETH'], 2); ?>)</li>
        </ul>

        <?php if (isset($error)) { ?>
            <p class="error"><?php echo $error; ?></p>
        <?php } ?>

        <form action="crypto.php" method="POST">
            <label for="crypto">Cryptocurrency:</label>
            <select name="crypto" id="crypto">
                <option value="BTC">Bitcoin (BTC)</option>
                <option value="ETH">Ethereum (ETH)</option>
            </select>

            <label for="amount">Amount:</label>
            <input type="number" name="amount" id="amount" step="0.01" required>

            <button type="submit" name="action" value="buy">Buy</button>
            <button type="submit" name="action" value="sell">Sell</button>
        </form>
    </div>
</body>
</html>

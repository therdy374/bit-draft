<?php
// Coinbase API endpoint for real-time prices
$apiUrl = 'https://api.coinbase.com/v2/prices/spot?currency=USD';

// Use cURL to fetch data
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $apiUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// Execute the request and fetch the response
$response = curl_exec($curl);
curl_close($curl);

// Decode the JSON response
$priceData = json_decode($response, true);

// Check if the response contains the Bitcoin price
if (isset($priceData['data']['amount'])) {
    $bitcoinPrice = $priceData['data']['amount'];
    echo "Real-Time Bitcoin Price: $" . $bitcoinPrice . " USD";
} else {
    echo "Unable to fetch the Bitcoin price.";
}
?>

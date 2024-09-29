<?php
session_start();
?>
<html lang="ko">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="nosnippet">
    <meta name="robots" content="noarchive">
    <meta name="robots" content="noindex, nofollow">
    <title>bit-pro</title>
    
    <script>var selectCoinInfo = { symbol: "btcusdt@ticker", name: "BTC", nameKr: "비트코인", fixed: 2, fixed2: 5 }; var fixed = 0; var fixed2 = 0;</script>
    <script>var tradeCommision = { market_commision: "0.040", limit_commision: "0.040" };</script>

    <script>
        var selectCoinInfo = {
            symbol: "btcusdt@ticker",
            name: "BTC",
            nameKr: "비트코인",
            fixed: 2,
            fixed2: 5,
        };
        var fixed = 0;
        var fixed2 = 0;
    </script>
    <script>
        var tradeCommision = {
            market_commision: "0.040",
            limit_commision: "0.040",
        };
    </script>

    <link rel="stylesheet" href="css/jquery.toast.css" />

    <script>
        var userSkipOrder = 1;
        var maxLeverage = 125;
        var user_id = "";
    </script>

    <style>
        div[class^="layer_"] {
            display: none;
        }
    </style>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <script src="js/jquery-latest.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/custom.js"></script>
    <link rel="stylesheet" href="css/import.css" />

    <!-- Add SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
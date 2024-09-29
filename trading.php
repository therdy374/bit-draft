<?php
session_start();

// Database connection parameters
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
    $response = file_get_contents($apiUrl);

    if ($response === FALSE) {
        return null; // Return null instead of halting the script
    }

    $data = json_decode($response, true);
    return $data['price'];
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
    die("Prepare failed: " . $conn->error); // Debugging statement
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
        die("Prepare failed: " . $conn->error); // Debugging statement
    }
    $stmt->bind_param("di", $newCreditLimit, $userId);

    if ($stmt->execute()) {
        // Insert the transaction into the transactions table
        $stmt = $conn->prepare("INSERT INTO transactions (user_id, usd_amount, btc_amount, btc_price) VALUES (?, ?, ?, ?)");
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error); // Debugging statement
        }
        $stmt->bind_param("sddd", $userId, $usdAmount, $btcAmount, $btcPrice);

        if ($stmt->execute()) {
            echo json_encode([
                'success' => true,
                'btcAmount' => number_format($btcAmount, 8, '.', ''),
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
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="nosnippet">
    <meta name="robots" content="noarchive">
    <meta name="robots" content="noindex, nofollow">
    <title>bit-pro</title>

    <script>
        var selectCoinInfo = {
            symbol: "btcusdt@ticker",
            name: "BTC",
            nameKr: "비트코인",
            fixed: 2,
            fixed2: 5
        };
        var fixed = 0;
        var fixed2 = 0;
    </script>
    <script>
        var tradeCommision = {
            market_commision: "0.040",
            limit_commision: "0.040"
        };
    </script>

    <link rel="stylesheet" href="css/jquery.toast.css">

    <script>
        var userSkipOrder = 1;
        var maxLeverage = 125;
        var user_id = '';
    </script>

    <style>
        div[class^='layer_'] {
            display: none;
        }
    </style>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="js/jquery-latest.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/custom.js"></script>
    <link rel="stylesheet" href="css/import.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        let creditLimit = <?php echo $creditLimit; ?>; // Fetch the credit limit from PHP
        let selectedPercentage = 0; // Holds the selected percentage value

        function fetchBitcoinPrice() {
            const apiUrl = '?action=get_btc_price';

            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('btc-price').innerText = '$' + data.price;
                })
                .catch(error => {
                    console.error('Error fetching Bitcoin price:', error);
                });
        }

        // Function to calculate USD based on selected percentage
        function calculateUsd(percentage) {
            selectedPercentage = percentage; // Set the selected percentage
            const usdAmount = (creditLimit * percentage) / 100;
            document.getElementById('calculated-usd').value = usdAmount.toFixed(2); // Display the calculated USD

            // Update the percentage display in the paragraph
            document.getElementById('credit-limit-percentage').innerText = `${percentage}`;
        }

        function submitPurchase() {
            const formData = new FormData();
            formData.append('percentage', selectedPercentage);

            fetch('', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById('result').innerHTML = `
                        <p>Purchase successful! You bought ${data.btcAmount} BTC for $${data.usdAmount} USD at a price of $${data.btcPrice} per BTC.</p>
                        <p>Your updated credit limit is $${data.newCreditLimit}.</p>
                    `;
                    } else {
                        document.getElementById('result').innerHTML = '<p>Error: ' + data.error + '</p>';
                    }
                })
                .catch(error => {
                    console.error('Error during purchase:', error);
                });
        }

        setInterval(fetchBitcoinPrice, 1000);
        window.onload = fetchBitcoinPrice;
    </script>
</head>

<body>

    <?php
    session_start();
    require 'config/function.php';

    if (!isset($_SESSION['loggedIn'])) {

        echo
        "<script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Opps! Please Login First',
                    text: 'Oops! Please login first'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'Login';
                    }
                });
            </script>
            ";
    } else {

    ?>

        <article class="headerArticle">
            <header>
                <div>
                    <h1>
                        <a href="index"></a>
                    </h1>

                    <nav>
                        <ul>

                            <li><a href="Trading">거래소</a></li>
                            <li><a href="TradeList">거래내역</a></li>
                            <li><a href="Balance">입출금</a></li>
                            <li><a href="Board/List">공지사항</a></li>
                            <li><a href="Board/Qna">고객센터</a></li>

                        </ul>
                    </nav>

                    <div>
                        <ul>
                            <li>
                                <?php


                                $username = $_SESSION['loggedInUser']['username'];

                                $query = "SELECT * FROM users WHERE username = '$username'";
                                $runquery = mysqli_query($conn, $query);

                                if (mysqli_num_rows($runquery) > 0) {
                                    while ($row = mysqli_fetch_assoc($runquery)) {
                                        $user_credit = $row['user_credit'];
                                    }
                                }

                                ?>
                                <!-- <a class="mb-tp"><?= number_format($_SESSION['loggedInUser']['user_credit']) ?> USDT</a> -->
                                <a class="mb-ts"><?= number_format($user_credit) ?> USDT</a>

                            </li>
                            <li class="userTarget">
                                <a><i class="fa fa-user"></i> <?= $_SESSION['loggedInUser']['username'] ?></a>
                                <ol>
                                    <li><a href="Board/List?id=modify">개인정보 수정</a></li>
                                    <li><a href="Board/List?id=message">메세지 함</a></li>
                                    <li><a href="Logout">로그아웃 Logout</a></li>
                                </ol>
                            </li>
                        </ul>

                        <div class="pcSwitch">
                            <input type="checkbox" id="modeSwitch">
                            <label for="modeSwitch"><span></span></label>
                        </div>

                        <input type="button" value="gnbToggle" data-panel="gnbPanel" id="gnbBtn">
                    </div>
                </div>
                <nav id="gnbPanel">
                    <input type="button" value="close" class="closeBtn">
                    <ul>
                        <li>
                            <!-- <a class="mb-tp"><?= number_format($_SESSION['loggedInUser']['user_credit']) ?> USDT</a> -->
                            <a class="mb-ts"><?= number_format($user_credit) ?> USDT</a>
                        </li>
                        <li class="userTarget"><a><i class="fa fa-user"></i> <?= $_SESSION['loggedInUser']['username'] ?></a>
                            <ol>
                                <li><a href="Board/List?id=modify">개인정보 수정</a></li>
                                <li><a href="Board/List?id=message">메세지 함</a></li>
                                <li><a href="Logout">로그아웃 logout</a></li>
                            </ol>
                        </li>
                    </ul>

                    <ul>
                        <li><a href="Board/List?id=modify">개인정보 수정</a></li>
                        <li><a href="Board/List?id=message">메세지 함</a></li>
                        <li><a href="Logout">로그아웃logout</a></li>
                    </ul>

                    <ul>

                        <li><a href="Trading">거래소</a></li>
                        <li><a href="TradeList">거래내역</a></li>
                        <li><a href="Balance">입출금</a></li>
                        <li><a href="Board/List?id=notice">공지사항</a></li>
                        <li><a href="Board/List?id=qna">고객센터</a></li>
                    </ul>

                    <ol id="slideToggle">
                        <li>
                            <div>
                                <span>Theme</span>
                                <input type="checkbox" id="modeSwitch2">
                                <label for="modeSwitch2"><span></span></label>
                            </div>
                        </li>
                    </ol>
                </nav>
            </header>
        </article>

        <div class="subRouteContent">
            <div class="wrapper">
                <div class="sub-contents-layout">
                    <div class="frameWrapper">
                        <div class="_layer_background"></div>

                        <div class="layer_order_confirm">
                            <h2 class="tit"><span class="coinTitle">(BTC/USDT)</span> 주문확인</h2>
                            <div class="summary">
                                <div class="order">
                                    <span id="position-str" class="type"></span>
                                    <span class="amount"><span class="real-tp">0</span> USDT</span> 시장가 <span class="coinTitle">USDT</span>
                                    <span class="curr_price buy-price"></span>
                                </div>
                                <div class="leverage">
                                    <div class="inner">
                                        <strong id="leverage-bar" style="left: 1%;">x<span class="leverage-number">1</span></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="detail">
                                <div class="column">
                                    <dl>
                                        <dt>투자금</dt>
                                        <dd><span class="bet-tp">0</span> USDT</dd>
                                    </dl>
                                    <dl>
                                        <dt>�&nbsp;�버리지 x <span class="leverage-number">1</span> 배 </dt>
                                        <dd><span class="leverage-tp">0</span> USDT</dd>
                                    </dl>
                                    <dl>
                                        <dt>수수료 (<span class="commision"></span>% x <span class="leverage-number">1</span>)</dt>
                                        <dd><span class="fee-tp">0</span> USDT</dd>
                                    </dl>
                                    <dl>
                                        <dt>진입가</dt>
                                        <dd><span class="buy-price"></span><span class="orderCoinTitle">USDT</span></dd>
                                    </dl>
                                    <dl>
                                        <dt>예상 청산가</dt>
                                        <dd><span class="break-price"></span><span class="orderCoinTitle">USDT</span></dd>
                                    </dl>
                                    <dl>
                                        <dt>예상 청산퍼센트</dt>
                                        <dd><span id="break-diff" class="minus"><span class="break-percent"></span>%</span><span></span></dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="btn_area">
                                <button type="button" onclick="hideOrderConfirm();">취소</button>
                                <button type="button" onclick="addOrder(this);this.disabled=true;this.innerText='처리중';"
                                    id="btnAddOrder">확인</button>
                            </div>
                        </div>
                        <div class="layer_stoploss_confirm">
                            <ul class="layer_stoploss_confirm_tit">
                                <li>
                                    <h2 class="tit"><span class="coinTitle2">(BTC/USDT)</span> 손실_수익 �&nbsp;�한 설�&nbsp;�
                                        <div>
                                            <input type="button" value="?" data-popup="tip8Popup">
                                            <div id="tip8Popup">
                                                <input type="button" value="close" class="closeBtn">
                                                <span>�&nbsp;�한 설�&nbsp;� 안내</span>
                                                <p>포인트 기준으로 청산되기 때문에 �&nbsp;�한설�&nbsp;� 퍼센트지와 실�&nbsp;� 수익�&nbsp;의 퍼센트지가 상이�&nbsp; 수 있습니다.</p>
                                            </div>
                                        </div>
                                    </h2>
                                </li>
                                <li>
                                    <ul class="layer_stoploss_confirm_btn">
                                        <li>
                                            <button id="loss" class="btn1 selected" value="loss" onclick="stopType(this.value)">손실</button>
                                        </li>
                                        <li>
                                            <button id="profit" class="btn2" value="profit" onclick="stopType(this.value)">수익</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="detail">
                                <div class="detailLeft">
                                    <div class="column">
                                        <dl>
                                            <dt>현재가</dt>
                                            <dd><span id="liquidation-price" class="liquidation-price2"></span><span
                                                    class="orderStopCoinTitle">USDT</span></dd>
                                        </dl>
                                        <dl>
                                            <dt>진입가</dt>
                                            <dd><span id="stop-buy-price" class="buy-price2"></span><span class="orderStopCoinTitle">USDT</span>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="column">
                                        <dl>
                                            <dt>예상 청산가</dt>
                                            <dd><span id="stop-break-price" class="brake-price"></span><span
                                                    class="orderStopCoinTitle">USDT</span></dd>
                                        </dl>
                                    </div>
                                </div>

                                <div class="detailRight">
                                    <div class="column">
                                        <dl>
                                            <dt>
                                                <sapn id="stop_type">STOP LOSS</sapn>
                                            </dt>
                                            <dd>
                                                <span class="tx"><span id="stopPercent" class="display_red"></span>%</span>
                                                <span class="stop_price"><span id="stop-point" class="display"></span><span
                                                        class="orderStopCoinTitle">USDT</span></span>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="column">
                                        <div class="stopBar selected">
                                            <input type="range" id="stopBet" name="rangeInput" step="0.01" list="tickmarksStop" min="0"
                                                max="100" value="0" oninput="stopTextInput(this.value);">

                                            <datalist id="tickmarksStop">
                                                <option value="0" label="0%"></option>
                                                <option value="25" label="25%"></option>
                                                <option value="50" label="50%"></option>
                                                <option value="75" label="75%"></option>
                                                <option value="100" label="100%"></option>
                                            </datalist>

                                            <button type="button" class="directBtn selected" onclick="seletePriceType('direct');">직�&nbsp;�
                                                입�&nbsp;�</button>
                                        </div>

                                        <div class="direct_input">
                                            <input type="number" id="directView" value="0"
                                                onkeyup="if(window.event.keyCode==13){seletePriceType('directChk')}">
                                            <span class="directPercent">%</span>
                                            <button type="button" class="confirmBtn" onclick="seletePriceType('directChk');">확인</button>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="btn_area">
                                <button type="button" onclick="addStopReset(this);disabled=true;this.innerText='처리중';">�&nbsp;�한 설�&nbsp;�
                                    삭�&nbsp;�</button>
                                <div>
                                    <button type="button" onclick="hideStopOrderConfirm();">취소</button>
                                    <button type="button" onclick="addStopOrder(this);this.disabled=true;this.innerText='처리중';"
                                        id="btnStoploss">확인</button>
                                </div>
                            </div>
                        </div>
                        <div class="layer_liquidation_confirm">
                            <h2 class="tit"><span class="coinTitle2">(BTC/USDT)</span> <span class="coinPosition2"></span>청산확인</h2>
                            <div class="summary">

                                <div id="liquidation-percent-select" class="option">
                                    <button type="button" class="liquidation-percent-btn" data-percent="10"
                                        onclick="selectLiquidationPercentButton(this);">10%</button>
                                    <button type="button" class="liquidation-percent-btn" data-percent="20"
                                        onclick="selectLiquidationPercentButton(this);">20%</button>
                                    <button type="button" class="liquidation-percent-btn" data-percent="30"
                                        onclick="selectLiquidationPercentButton(this);">30%</button>
                                    <button type="button" class="liquidation-percent-btn" data-percent="40"
                                        onclick="selectLiquidationPercentButton(this);">40%</button>
                                    <button type="button" class="liquidation-percent-btn" data-percent="50"
                                        onclick="selectLiquidationPercentButton(this);">50%</button>
                                    <button type="button" class="liquidation-percent-btn" data-percent="60"
                                        onclick="selectLiquidationPercentButton(this);">60%</button>
                                    <button type="button" class="liquidation-percent-btn" data-percent="70"
                                        onclick="selectLiquidationPercentButton(this);">70%</button>
                                    <button type="button" class="liquidation-percent-btn" data-percent="80"
                                        onclick="selectLiquidationPercentButton(this);">80%</button>
                                    <button type="button" class="liquidation-percent-btn" data-percent="90"
                                        onclick="selectLiquidationPercentButton(this);">90%</button>
                                    <button type="button" class="liquidation-percent-btn selected" data-percent="100"
                                        onclick="selectLiquidationPercentButton(this);">100%</button>
                                </div>

                            </div>
                            <div class="detail">
                                <div class="column">
                                    <dl>
                                        <dt>투자원금</dt>
                                        <dd><span class="bet-tp2">0</span> USDT</dd>
                                    </dl>
                                    <dl>
                                        <dt>�&nbsp;�버리지 x<span class="leverage-number2">1</span> 배 </dt>
                                        <dd><span class="leverage-tp2">0</span> USDT</dd>
                                    </dl>
                                    <dl>
                                        <dt>청산금</dt>
                                        <dd><span class="liq-bet-tp2">0</span> USDT</dd>
                                    </dl>
                                    <dl>
                                        <dt>청산�&nbsp;�버리지</dt>
                                        <dd><span class="liq-leverage-tp2">0</span> USDT</dd>
                                    </dl>
                                </div>
                                <div class="column">
                                    <dl>
                                        <dt>진입가</dt>
                                        <dd><span class="buy-price2"></span><span class="orderCoinTitle2">USDT</span></dd>
                                    </dl>
                                    <dl>
                                        <dt>예상청산가</dt>
                                        <dd><span class="liquidation-price2"></span><span class="orderCoinTitle2">USDT</span></dd>
                                    </dl>
                                    <dl>
                                        <dt>수익율</dt>
                                        <dd><span id="rate-percent2" class="minus"><span class="break-percent"></span>%</span></dd>
                                    </dl>
                                    <dl>
                                        <dt>수익금</dt>
                                        <dd><span id="rate-price2" class="minus"><span class="break-percent"></span></span></dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="btn_area">
                                <button type="button" onclick="hideLiquidationConfirm();">취소</button>
                                <button type="button" id="liquidationButton" data-tradeid="0"
                                    onclick="liquidationOrder(this.getAttribute('data-tradeid'),false);this.disabled=true;this.innerText='처리중';">확인</button>
                            </div>
                        </div>
                        <div class="layer_limits_confirm">
                            <h2 class="tit"><span class="coinTitle2">(BTC/USDT)</span> <span class="coinPosition2"></span>지�&nbsp;�가 진입
                                취소</h2>
                            <div class="detail">
                                <div class="column">
                                    <dl>
                                        <dt>투자원금</dt>
                                        <dd><span class="bet-tp2">0</span> USDT</dd>
                                    </dl>
                                    <dl>
                                        <dt>�&nbsp;�버리지 x<span class="leverage-number2">1</span> 배 </dt>
                                        <dd><span class="leverage-tp2">0</span> USDT</dd>
                                    </dl>
                                </div>
                                <div class="column">
                                    <dl>
                                        <dt>진입가</dt>
                                        <dd><span class="buy-price2"></span><span class="orderCoinTitle2">USDT</span></dd>
                                    </dl>
                                    <dl>
                                        <dt>현재가</dt>
                                        <dd><span class="now-lo-price"></span><span class="orderCoinTitle2">USDT</span></dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="btn_area">
                                <button type="button" onclick="hideLimitsConfirm();">취소</button>
                                <button type="button" id="limitsButton" data-tradeid="0"
                                    onclick="deleteTradeLo(this);this.disabled=true;this.innerText='처리중';">확인</button>

                            </div>
                        </div>
                        <!-- trading Popup -->

                        <dl class="item sell_buy" data-panel="sellBuyPanel">
                            <dd>
                                <button type="button" class="position-btn long" data-position="LONG" onclick="selectPosition(this);">매수
                                    (LONG)</button>
                                <button type="button" class="position-btn short" data-position="SHORT" onclick="selectPosition(this);">매도
                                    (SHORT)</button>
                            </dd>
                        </dl>
                        <!-- mob sellBuy Panal button-->

                        <div id="sellBuyPanel" class="invest_area">
                            <input type="button" value="close" class="closeBtn">
                            <h2 class="tit"><span class="coinTitle">(BTC/USDT)</span> 투자</h2>
                            <div class="invest">
                                <dl class="item cross_isol">
                                    <dd>
                                        <button type="button" id="Mbtn_cross" class="ci-btn cross selected" data-ci="C"
                                            onclick="selectCI(this);">
                                            교차</button>
                                        <button type="button" id="Mbtn_isol" class="ci-btn isol" data-ci="I" onclick="selectCI(this);">
                                            격리</button>
                                    </dd>
                                </dl>
                                <dl class="item sell_buy">
                                    <dd>
                                        <button type="button" id="Mbtn_long" class="position-btn long" data-position="LONG"
                                            onclick="selectPosition(this);">
                                            매수<br>
                                            LONG</button>
                                        <button type="button" id="Mbtn_short" class="position-btn short" data-position="SHORT"
                                            onclick="selectPosition(this);">
                                            매도<br>
                                            SHORT</button>
                                    </dd>
                                </dl>
                                <div class="select_type">
                                    <div class="select_type_price">
                                        <button type="button" id="Mbtn_market" class="inprice-btn active" name="chkType" value="MARKET"
                                            onclick="selectPrice(this.value)">시장가</button>
                                        <button type="button" id="Mbtn_limits" class="inprice-btn" name="chkType" value="LIMITS"
                                            onclick="selectPrice(this.value)" data-tabnumb="MlimitsTab2">지정가ssss</button>
                                    </div>
                                </div>
                                <div class="limits" id="MlimitsTab2">
                                    <input id="Mlimits" class="input" type="number" value="0" autocomplete="off">
                                    <span onclick="limitsUpDown('up_mo');" class="ep_up"><i>+</i></span>
                                    <span onclick="limitsUpDown('down_mo');" class="ep_down"><i>-</i></span>
                                </div>

                                <dl class="item trade_point">
                                    <dt>
                                        <span class="tx">보�&nbsp;금 <span id="MdisplayPercent" style="color: red" class="display">0</span>%
                                        </span>
                                        <span class="curr_point">
                                            <strong><span class="mb-tps"></span></strong>
                                            <?php
                                            // Fetch the user credit from the session and display it with number formatting
                                            $credit = $_SESSION['loggedInUser']['user_credit'];
                                            echo number_format($credit, 2);
                                            ?>
                                            USDT 진입가능
                                        </span>
                                    </dt>
                                    <dd class="trade_pointBox">
                                        <input id="Mbet-point" class="input" type="number" value="0" autocomplete="off"
                                            onkeyup="updateRange(this.value)">
                                        <div class="tradePoint">
                                            <ul class="tradeBtn">
                                                <li class="trade_button">
                                                    <button type="button" value="10" class="tr_btn01" onclick="trBetPoint(this.value)">10%</button>
                                                </li>
                                                <li class="trade_button">
                                                    <button type="button" value="25" class="tr_btn02" onclick="trBetPoint(this.value)">25%</button>
                                                </li>
                                                <li class="trade_button">
                                                    <button type="button" value="50" class="tr_btn03" onclick="trBetPoint(this.value)">50%</button>
                                                </li>
                                                <li class="trade_button">
                                                    <button type="button" value="100" class="tr_btn04"
                                                        onclick="trBetPoint(this.value)">100%</button>
                                                </li>
                                                <li class="tr_direct_input">
                                                    <button type="button" id="MrangeBetPercent" class="tr_btn05 selected"
                                                        onclick="trBetFreePoint()">스크롤</button>
                                                </li>
                                            </ul>
                                            <div class="tr_point_bar">
                                                <div class="pointBar_inner">
                                                    <div class="range-wrap" style="width: 100%;">
                                                        <input type="range" id="MrangeBet" class="range" name="rangeInput" min="0" max="100" value="0"
                                                            step="1" list="tickmarks" oninput="updateTextInput(this.value);">
                                                        <output class="bubble" id="Mtr_bubble"></output>
                                                    </div>
                                                    <datalist id="Mtickmarks">
                                                        <option value="0" label="0%"></option>
                                                        <option value="25" label="25%"></option>
                                                        <option value="50" label="50%"></option>
                                                        <option value="75" label="75%"></option>
                                                        <option value="100" label="100%"></option>
                                                    </datalist>
                                                </div>
                                                <button class="trade_check" onclick="betChker('mo')">확인</button>
                                            </div>
                                        </div>
                                    </dd>
                                </dl>



                                <div class="item leverage">
                                    <div>
                                        <div class="tx">
                                            �&nbsp;�버리지 <span id="MdisplayLeverage" class="display" style="color: red">125</span>배
                                            <div>
                                                <span onclick="leverageUpDown('down');"><i>-</i></span>
                                                <span onclick="leverageUpDown('up');"><i>+</i></span>
                                            </div>
                                            <p class="maxLeverage">Max : <span class="maxLeverage_color" style="color: red">125</span></p>
                                        </div>
                                    </div>
                                    <div class="leveragePoint">
                                        <ul class="leverageBtn">
                                            <li class="leverage_button">
                                                <button type="button" class="le_btn01" value="10" onclick="leBetPoint(this.value)">x10</button>
                                            </li>
                                            <li class="leverage_button">
                                                <button type="button" class="le_btn02" value="25" onclick="leBetPoint(this.value)">x25</button>
                                            </li>
                                            <li class="leverage_button">
                                                <button type="button" class="le_btn03" value="50" onclick="leBetPoint(this.value)">x50</button>
                                            </li>
                                            <li class="leverage_button">
                                                <button type="button" class="le_btn04" value="100" onclick="leBetPoint(this.value)">x100</button>
                                            </li>
                                            <li class="leverage_button">
                                                <button type="button" class="le_btn05" value="125" onclick="leBetPoint(this.value)">x125</button>
                                            </li>
                                            <li class="le_direct_input">
                                                <button type="button" id="MlePoint" class="le_btn_direct selected"
                                                    onclick="leBetFreePoint()">X125</button>
                                            </li>
                                        </ul>
                                        <div class="leverage_pointBar">
                                            <div class="li_point_bar">
                                                <div class="range-wrap" style="width: 100%;">
                                                    <input type="range" id="MrangeLeverage" class="range" name="rangeInput" min="1" max="125"
                                                        step="1" list="tickmarkslev" value="125" oninput="updateTextInputLeverage(this.value);">
                                                    <output class="bubble" id="Mle_bubble"></output>
                                                </div>
                                                <div id="Mleverage-select" class="option leverage-input">
                                                    <datalist id="Mtickmarkslev">
                                                        <option value="1" label="x1"></option>
                                                        <option value="25" label="x25"></option>
                                                        <option value="50" label="x50"></option>
                                                        <option value="75" label="x75"></option>
                                                        <option value="100" label="x100"></option>
                                                        <option value="125" label="x125"></option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <button class="leverage_check" onclick="leverageChker('mo')">확인</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="fees">
                                    수수료 <span class="commision">0.040</span>% : <strong><span class="fee-tp">0</span></strong> USDT
                                </div>
                                <button class="btn_submit" type="button" onclick="showOrderConfirm();">포지션 진입</button>
                            </div>
                        </div>
                        <!-- mob sellBuy Panal-->


                        <div class="invest_wrap">
                            <!-- 메인컨텐츠 시작 -->
                            <section class="tradingContainer">
                                <div>
                                    <div class="chart_wrap">
                                        <h2 class="tit">
                                            <div data-panel="sybolPanel"><span class="coinTitle">(BTC/USDT)</span> <span
                                                    class="current-price"></span></div>
                                            <div>
                                                <input type="button" value="?" data-popup="tip1Popup">
                                                <div id="tip1Popup">
                                                    <input type="button" value="close" class="closeBtn">
                                                    <span><span class="coinTitle">(BTC/USDT)</span>차트 안내</span>
                                                    <p>해당 차트는 바이낸스에서 �&nbsp;�공하는 실시간 차트입니다.</p>
                                                </div>
                                            </div>
                                        </h2>

                                        <div class="chart">
                                            <div class="tradingview-widget-container">
                                                <div id="tradingview_fd5a7">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 차트 -->

                                    <div id="history_area" class="history_wrap">
                                        <ul class="tab">
                                            <li data-tabnumb="tradHistoryTab1" class="active"><a class="history-btn selected" data-menu="ready" href="javascript:;" onclick="selectTradingList(this);"><span class="tab1">실시간 수익률</span></a></li>
                                            <li data-tabnumb="tradHistoryTab2"><a class="history-btn" data-menu="ready" href="javascript:;" onclick="selectTradingList(this);"><span class="tab2">지정가 리스트</span></a></li>
                                        </ul>
                                        <div id="history-div" class="history_area">
                                            <!-- trade_list -->
                                            <div id="tradHistoryTab1" class="trade_list tabPage active">
                                                <div class="summary">
                                                    <dl>
                                                        <dt>진입가능 USDT</dt>
                                                        <dd><span class="mb-tp">-537.46 USDT</span></dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>추정 USDT</dt>
                                                        <dd><span class="mb-estimated-tp">523.73</span></dd>
                                                    </dl>
                                                    <dl>
                                                        <dt><span id="marginText">총진입설정증거금</span> USDT</dt>
                                                        <dd><span class="totlaBalancePoint">1343.61</span></dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>수익 USDT</dt>
                                                        <dd id="sum-settle-tp" class="minus">-223.52</dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>수익률</dt>
                                                        <dd id="sum-settle-rate" class="minus">-16.70%</dd>
                                                    </dl>
                                                </div>


                                                <div class="list_area">
                                                    <table class="list" border="1">
                                                        <caption>결과리스트</caption>

                                                        <thead>
                                                            <tr>
                                                                <th class="cell_price">투자코인</th>
                                                                <th class="cell_price">진입가</th>
                                                                <th>현재가 (대비)<br>
                                                                    <span id="liq_crossIm">유지증거금</span>
                                                                </th>
                                                                <th>포지션<br>
                                                                    교차/격리</th>
                                                                <th>진입증거금</th>
                                                                <th>레버리지</th>
                                                                <th>수익</th>
                                                                <th>수익률</th>
                                                                <th class="cell_btn">청산
                                                                    <div>
                                                                        <input type="button" value="?" data-popup="tip6Popup">
                                                                        <div id="tip6Popup">
                                                                            <input type="button" value="close" class="closeBtn">
                                                                            <span>레버리지란?</span>
                                                                            <p>
                                                                                회원님이 가진 예수금에 추가로 금액을 대여해서 투자함으로써, 원래 회원님이 가진 투자금 이상의 수익을 거두는 투자기법입니다.<br>
                                                                                최대 100배까지 레버리지 투자가 가능합니다.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="dataListTbody">
                                                            <tr>
                                                                <td class="cell_price"><a href="/Trading.aspx?coinName=btcusdt">BTC</a></td>
                                                                <td class="cell_price"><span class="price">60018.86</span><br><span class="date">2024-09-14 18:07:02</span></td>
                                                                <td class="cell_price"><span id="liq-price-2409141807029892169" class="price minus" onclick="stopOrderConfirm(0)">59020.01 (-1.66%)</span><button class="btn_submit" type="button" onclick="stopOrderConfirm('0');">32.25</button><br> </td>
                                                                <td class="cell_type long">매수<br>교차</td>
                                                                <td class="cell_size">1338.24</td>
                                                                <td class="cell_leverage">13430.77 (x10)</td>
                                                                <td id="rate-point-2409141807029892169" class="cell_pnl minus">-223.52</td>
                                                                <td id="rate-percent-2409141807029892169" class="cell_roe minus">-16.70%</td>
                                                                <td style="display:none" id="hiden-rate-point-2409141807029892169">-223.52</td>
                                                                <td class="cell_btn"><button type="button" data-trade-id="2409141807029892169" onclick="showLiquidationConfirm('0');">청산</button></td>
                                                            </tr>
                                                            <tr></tr>
                                                        </tbody>
                                                        <!-- <tbody class="no_history" style="display: none;">
                                                            <tr>
                                                                <td colspan="9">투자 내역이 없습니다.</td>
                                                            </tr>
                                                        </tbody> -->
                                                    </table>
                                                </div>
                                            </div>
                                            <!--// trade_list -->

                                            <!-- trade_lo_list -->
                                            <div id="tradHistoryTab2" class="trade_lo_list tabPage">
                                                <div class="list_area">
                                                    <table class="list" border="1">
                                                        <caption>결과리스트</caption>

                                                        <thead>
                                                            <tr>
                                                                <th class="cell_price">투자코인</th>
                                                                <th class="cell_price">지정가</th>
                                                                <th>현재가</th>
                                                                <th>포지션</th>
                                                                <th>투자</th>
                                                                <th>레버리지</th>
                                                                <th>수수료</th>
                                                                <th class="cell_btn">취소
                                                                    <div>
                                                                        <input type="button" value="?" data-popup="tip7Popup">
                                                                        <div id="tip7Popup">
                                                                            <input type="button" value="close" class="closeBtn">
                                                                            <span>레버리지란?</span>
                                                                            <p>
                                                                                회원님이 가진 예수금에 추가로 금액을 대여해서 투자함으로써, 원래 회원님이 가진 투자금 이상의 수익을 거두는 투자기법입니다.<br>
                                                                                최대 100배까지 레버리지 투자가 가능합니다.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="dataLoListTbody">
                                                        </tbody>
                                                        <!-- <tbody class="no_lo_history">
                                                            <tr>
                                                                <td colspan="9">투자 내역이 없습니다.</td>
                                                            </tr>
                                                        </tbody> -->
                                                    </table>
                                                </div>
                                            </div>
                                            <!--// trade_lo_list -->
                                        </div>
                                    </div>
                                    <!-- 실시간 수익률 -->

                                    <div>
                                        <div class="tradingOpenClose">
                                            <input type="button" value="openCloseButton" id="openCloseButton">
                                        </div>
                                        <div class="order_wrap">
                                            <div class="order_book_area">
                                                <h2 class="tit">
                                                    <span class="coinTitle">(BTC/USDT)</span> 주문장

                                                    <div>
                                                        <input type="button" value="?" data-popup="tip2Popup">
                                                        <div id="tip2Popup">
                                                            <input type="button" value="close" class="closeBtn">
                                                            <span><span class="coinTitle">(BTC/USDT)</span> 주문장</span>
                                                            <p>중앙에 표기되는 가격이 현재 시세이며 상단은 매도 주문(숏), 하단은 매수 주문(롱)입니다.</p>
                                                        </div>
                                                    </div>
                                                </h2>
                                                <div class="order_book">
                                                    <ul class="top">
                                                        <li class="price">가격</li>
                                                        <li class="volume">수량</li>
                                                        <li class="total">총액</li>
                                                    </ul>
                                                    <ul id="asks-ul" class="sell book"></ul>

                                                    <p id="order-book-current-price" class="curr_price">
                                                        <span class="current-price"></span><span class="current-price-mark"></span>
                                                    </p>

                                                    <ul id="bids-ul" class="buy book"></ul>
                                                </div>
                                            </div>
                                            <!-- 주문장 -->

                                            <div class="transaction_area">
                                                <h2 class="tit"><span class="coinTitle">(BTC/USDT)</span> 최근거래
                                                    <div>
                                                        <input type="button" value="?" data-popup="tip3Popup">
                                                        <div id="tip3Popup">
                                                            <input type="button" value="close" class="closeBtn">
                                                            <span><span class="coinTitle">(BTC/USDT)</span> 최근거래</span>
                                                            <p>시간순으로 가장 최근 거래된 내역의 리스트입니다. 구분에서 B(BUY)는 매수, S(SELL)는 매도입니다.</p>
                                                        </div>
                                                    </div>
                                                </h2>

                                                <div class="recent">
                                                    <ul class="top">
                                                        <li class="price">가격</li>
                                                        <li class="volume">수량</li>
                                                        <li class="time">시간</li>
                                                        <li class="type">구분</li>
                                                    </ul>
                                                    <ul id="recent-ul" class="list">
                                                    </ul>
                                                    <div class="loadingDiv">
                                                        <img src="images/loading.gif" style="width: 150px; height: 150px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 최근거래 -->


                                            <!-- desktop -->

                                            <div class="invest_area">
                                                <h2 class="tit"><span class="coinTitle">(BTC/USDT)</span> 투자</h2>
                                                <div class="invest">
                                                    <dl class="item cross_isol">
                                                        <dd>
                                                            <button type="button" id="btn_cross" class="ci-btn cross selected" data-ci="C"
                                                                onclick="selectCI(this);">
                                                                교차</button>
                                                            <button type="button" id="btn_isol" class="ci-btn isol" data-ci="I"
                                                                onclick="selectCI(this);">
                                                                격리</button>
                                                        </dd>
                                                    </dl>
                                                    <dl class="item sell_buy">
                                                        <dd>
                                                            <button type="button" id="btn_long" class="position-btn long" data-position="LONG"
                                                                onclick="selectPosition(this);">
                                                                매수<br>
                                                                LONG</button>
                                                            <button type="button" id="btn_short" class="position-btn short" data-position="SHORT"
                                                                onclick="selectPosition(this);">
                                                                매도<br>
                                                                SHORT</button>
                                                        </dd>
                                                    </dl>
                                                    <div class="select_type">
                                                        <div class="select_type_price">
                                                            <button type="button" id="btn_market" class="inprice-btn active" name="chkType"
                                                                value="MARKET" onclick="selectPrice(this.value)">시장가</button>
                                                            <button type="button" id="btn_limits" class="inprice-btn" name="chkType" value="LIMITS"
                                                                onclick="selectPrice(this.value)" data-tabnumb="limitsTab2">지정가wide</button>
                                                        </div>
                                                    </div>
                                                    <div class="limits" id="limitsTab2">
                                                        <input id="limits" class="input" value="0" autocomplete="off">
                                                        <span onclick="limitsUpDown('up');" class="ep_up"><i>+</i></span>
                                                        <span onclick="limitsUpDown('down');" class="ep_down"><i>-</i></span>
                                                    </div>



                                                    <dl class="item trade_point">
                                                        <div id="result"></div><br>
                                                        <dt>
                                                            <!-- <span class="tx">보유금 <span id="displayPercent" class="display">0</span>% </span> -->
                                                            <span class="tx">보유금 <span id="credit-limit-percentage" class="display">0</span>% </span>
                                                            <span class="curr_point">
                                                                <strong id="user_credit">
                                                                    <?php
                                                                    // Fetch the user credit from the session and display it with number formatting
                                                                    // $credit = $_SESSION['loggedInUser']['user_credit'];
                                                                    // echo number_format($credit, 2);
                                                                    echo number_format($user_credit)
                                                                    ?>
                                                                </strong>
                                                                USDT 진입가능
                                                            </span>
                                                        </dt>

                                                        <dd class="trade_pointBox">

                                                            <!-- <p>Current Bitcoin Price: <span id="btc-price">Loading...</span></p>
                                                            <p>Your Credit Limit: $<?php echo number_format($creditLimit, 2, '.', ''); ?></p>
                                                            
                                                            <div id="purchase-container">
                                                                <label for="percentage">Select Percentage of Credit Limit:</label>
                                                                <select id="percentage" onchange="calculateUsd()" required>
                                                                    <option value="10">10%</option>
                                                                    <option value="25">25%</option>
                                                                    <option value="50">50%</option>
                                                                    <option value="100">100%</option>
                                                                </select>

                                                                <div id="result"></div>
                                                            </div> -->



                                                            <!-- <input id="bet-point" class="input" type="number" value="01" autocomplete="off"> -->
                                                            <input id="calculated-usd" class="input" type="number" value="$0.00" autocomplete="off">
                                                            <div class="tradePoint">
                                                                <!-- <ul class="tradeBtn">
                                                                    <li class="trade_button">
                                                                        <button type="button" value="10" class="tr_btn01" onclick="trBetPoint(10)">10%</button>
                                                                    </li>
                                                                    <li class="trade_button">
                                                                        <button type="button" value="25" class="tr_btn02" onclick="trBetPoint(25)">25%</button>
                                                                    </li>
                                                                    <li class="trade_button">
                                                                        <button type="button" value="50" class="tr_btn03" onclick="trBetPoint(50)">50%</button>
                                                                    </li>
                                                                    <li class="trade_button">
                                                                        <button type="button" value="100" class="tr_btn04" onclick="trBetPoint(100)">100%</button>
                                                                    </li>
                                                                    <li class="tr_direct_input">
                                                                        <button type="button" id="rangeBetPercent" class="tr_btn05 selected" onclick="trBetFreePoint()">스크롤</button>
                                                                    </li>
                                                                </ul> -->

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
                                                                    <li class="tr_direct_input">
                                                                        <button type="button" id="rangeBetPercent" class="tr_btn05 selected" onclick="alert('Custom scroll input not implemented')">스크롤</button>
                                                                    </li>
                                                                </ul>



                                                                <div class="tr_point_bar">
                                                                    <div class="pointBar_inner">
                                                                        <div class="range-wrap" style="width: 100%;">
                                                                            <input type="range" id="rangeBet" class="range" name="rangeInput" min="0" max="100" value="0" step="1" list="tickmarks" oninput="updateTextInput(this.value);">
                                                                            <output class="bubble" id="tr_bubble"></output>
                                                                        </div>
                                                                        <datalist id="tickmarks">
                                                                            <option value="0" label="0%"></option>
                                                                            <option value="25" label="25%"></option>
                                                                            <option value="50" label="50%"></option>
                                                                            <option value="75" label="75%"></option>
                                                                            <option value="100" label="100%"></option>
                                                                        </datalist>
                                                                    </div>
                                                                    <button class="trade_check" onclick="betChker('pc')">확인</button>

                                                                </div>


                                                            </div>
                                                        </dd>
                                                    </dl>


                                                    <div class="item leverage">
                                                        <div>
                                                            <div class="tx">
                                                                레버리지 <span id="displayLeverage" class="display" style="color: red">125</span>배
                                                                <div>
                                                                    <span onclick="leverageUpDown('down');"><i>-</i></span>
                                                                    <span onclick="leverageUpDown('up');"><i>+</i></span>
                                                                </div>
                                                                <div>
                                                                    <input type="button" value="?" data-popup="tip4Popup">
                                                                    <div id="tip4Popup">
                                                                        <input type="button" value="close" class="closeBtn">
                                                                        <span>�&nbsp;�버리지란?</span>
                                                                        <p>
                                                                            회원님이 가진 예수금에 추가로 금액을 대여해서 투자함으로써, 원래 회원님이 가진 투자금 이상의 수익을 거두는 투자기법입니다.<br>
                                                                            최대 125배까지 �&nbsp;�버리지 투자가 가능합니다.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <p class="maxLeverage">Max : <span class="maxLeverage_color">125</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="leveragePoint">
                                                            <ul class="leverageBtn">
                                                                <li class="leverage_button">
                                                                    <button type="button" class="le_btn01" value="10"
                                                                        onclick="leBetPoint(this.value)">x10</button>
                                                                </li>
                                                                <li class="leverage_button">
                                                                    <button type="button" class="le_btn02" value="25"
                                                                        onclick="leBetPoint(this.value)">x25</button>
                                                                </li>
                                                                <li class="leverage_button">
                                                                    <button type="button" class="le_btn03" value="50"
                                                                        onclick="leBetPoint(this.value)">x50</button>
                                                                </li>
                                                                <li class="leverage_button">
                                                                    <button type="button" class="le_btn04" value="100"
                                                                        onclick="leBetPoint(this.value)">x100</button>
                                                                </li>
                                                                <li class="leverage_button">
                                                                    <button type="button" class="le_btn05" value="125"
                                                                        onclick="leBetPoint(this.value)">x125</button>
                                                                </li>
                                                                <li class="le_direct_input">
                                                                    <button type="button" id="lePoint" class="le_btn_direct selected"
                                                                        onclick="leBetFreePoint()">X125</button>
                                                                </li>
                                                            </ul>
                                                            <div class="leverage_pointBar">
                                                                <div class="li_point_bar">
                                                                    <div class="range-wrap" style="width: 100%;">
                                                                        <input type="range" id="rangeLeverage" class="range" name="rangeInput" min="1"
                                                                            max="125" step="1" list="tickmarkslev" value="125"
                                                                            oninput="updateTextInputLeverage(this.value);">
                                                                        <output class="bubble" id="le_bubble"></output>
                                                                    </div>
                                                                    <div id="leverage-select" class="option leverage-input">
                                                                        <datalist id="tickmarkslev">
                                                                            <option value="1" label="x1"></option>
                                                                            <option value="25" label="x25"></option>
                                                                            <option value="50" label="x50"></option>
                                                                            <option value="75" label="x75"></option>
                                                                            <option value="100" label="x100"></option>
                                                                            <option value="125" label="x125"></option>
                                                                        </datalist>
                                                                    </div>
                                                                </div>
                                                                <button class="leverage_check" onclick="leverageChker('pc')">확인</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fees">
                                                        수수료 <span class="commision">0.040</span>% : <strong><span class="fee-tp">0</span></strong>
                                                        USDT
                                                        <div>
                                                            <input type="button" value="?" data-popup="tip5Popup">
                                                            <div id="tip5Popup">
                                                                <input type="button" value="close" class="closeBtn">
                                                                <span>수수료 안내</span>
                                                                <p>
                                                                    진입/청산시 투자금액의 수수료가 차감됩니다.<br>
                                                                    시장가 수수료 : 0.040 %<br>
                                                                    지�&nbsp;�가 수수료 : 0.040 %<br>
                                                                    �&nbsp;�버리지 수수료 : 투자금액 * �&nbsp;�버리지 * 수수료
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <button class="btn_submit" type="button" onclick="showOrderConfirm();">포지션 진입desk</button> -->
                                                    <button class="btn_submit" onclick="submitPurchase()">포지션 진입desk</button>

                                                </div>


                                            </div>


                                            <style>
                                                /* Default button styling */
                                                .tradeBtn button {
                                                    background-color: #f0f0f0;
                                                    border: 1px solid #ccc;
                                                    color: #333;
                                                    padding: 10px;
                                                    cursor: pointer;
                                                }

                                                /* Highlighted button styling */
                                                .tradeBtn button.highlight {
                                                    background-color: #007bff;
                                                    /* Highlight background */
                                                    color: white;
                                                    /* Text color when highlighted */
                                                    border-color: #0056b3;
                                                    /* Border color for highlight */
                                                }
                                            </style>

                                            <script>
                                                window.onload = function() {
                                                    // Get the user's current credit from the PHP variable echoed into the page
                                                    let userCredit = parseFloat(<?php echo json_encode($credit); ?>);

                                                    // Select all buttons with the class `trade_button`
                                                    let tradeButtons = document.querySelectorAll('.tradeBtn button');

                                                    // Add click event listeners to each button
                                                    tradeButtons.forEach(button => {
                                                        button.addEventListener('click', function() {
                                                            // Remove the highlight class from all buttons
                                                            tradeButtons.forEach(btn => btn.classList.remove('highlight'));

                                                            // Add the highlight class to the clicked button
                                                            this.classList.add('highlight');

                                                            // Get the percentage from the button text and calculate the new credit value
                                                            let percentage = parseInt(this.textContent);
                                                            let newAmount = (userCredit * percentage) / 100;

                                                            // Update the input field with the new calculated value
                                                            let betPointInput = document.getElementById('bet-point');
                                                            betPointInput.value = newAmount.toFixed(2); // Show two decimal places

                                                            // Update the displayed percentage at the top
                                                            let displayPercent = document.getElementById('displayPercent');
                                                            displayPercent.textContent = percentage;
                                                        });
                                                    });
                                                };
                                            </script>
                                            <!-- end desk -->
                                            <!-- 투자 -->
                                        </div>
                                    </div>
                                    <!-- 주문장 -->


                                </div>


                                <section class="ty02" id="sybolPanel">
                                    <article>
                                        <span class="favoritesOn searchB">
                                            <div class="search">
                                                <input type="text" placeholder="코인명/심볼검색" id="searchInput"><a href="#" class="btn" title="검색">검색</a>
                                            </div>
                                        </span>
                                        <span class="tabB">
                                            <div id="myGrid" class="slickgrid_796416 ui-widget slickgrid_345196" style="height: 1600px; overflow: hidden; outline: 0px; position: relative;">
                                                <div tabindex="0" hidefocus="" style="position:fixed;width:0;height:0;top:0;left:0;outline:0;"></div>
                                                <div class="slick-header ui-state-default" style="overflow:hidden;position:relative;">
                                                    <div class="slick-header-columns" style="left: -997px; width: 1411px;" unselectable="on">
                                                        <div class="ui-state-default slick-header-column" id="slickgrid_345196" title="" style="width: 55px;">
                                                            <div class="slick-column-name"></div>
                                                            <div class="slick-resizable-handle"></div>
                                                        </div>
                                                        <div class="ui-state-default slick-header-column slick-header-sortable" id="slickgrid_345196name" title="" style="width: 118px;">
                                                            <div class="slick-column-name">한글명<span class="slick-sort-indicator"></span></div>
                                                            <div class="slick-resizable-handle"></div>
                                                        </div>
                                                        <div class="ui-state-default slick-header-column currency slick-header-sortable" id="slickgrid_345196price" title="" style="width: 74px;">
                                                            <div class="slick-column-name">현재가<span class="slick-sort-indicator"></span></div>
                                                            <div class="slick-resizable-handle"></div>
                                                        </div>
                                                        <div class="ui-state-default slick-header-column currency slick-header-sortable" id="slickgrid_345196percent" title="" style="width: 74px;">
                                                            <div class="slick-column-name">전일대비<span class="slick-sort-indicator"></span></div>
                                                            <div class="slick-resizable-handle"></div>
                                                        </div>
                                                        <div class="ui-state-default slick-header-column currency slick-header-sortable" id="slickgrid_345196volume" title="" style="width: 75px;">
                                                            <div class="slick-column-name">거래량<span class="slick-sort-indicator"></span></div>
                                                            <div class="slick-resizable-handle"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slick-headerrow ui-state-default" style="overflow: hidden; position: relative; display: none;">
                                                    <div class="slick-headerrow-columns" style="width: 396px;"></div>
                                                    <div style="display: block; height: 1px; position: absolute; top: 0px; left: 0px; width: 411px;"></div>
                                                </div>
                                                <div class="slick-top-panel-scroller ui-state-default" style="overflow: hidden; position: relative; display: none;">
                                                    <div class="slick-top-panel" style="width:10000px"></div>
                                                </div>
                                                <div class="slick-viewport" style="width: 100%; overflow: auto; outline: 0px; position: relative; height: 1580px;">
                                                    <div class="grid-canvas" style="height: 4326px; width: 396px;">
                                                        <div class="ui-widget-content slick-row even" style="top:840px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/btc.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">BTC</span><span class="symbolNameKr">비트코인/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">65853.53</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-0.40%</span><span class="changePriceSpan slick-down">-266.48</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">589.44M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:882px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/bts.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">BTS</span><span class="symbolNameKr">비트쉐어/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center">0</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-center">0%</span><span class="changePriceSpan">0</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">0M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:924px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/celo.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">CELO</span><span class="symbolNameKr">셀로/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-up">0.660</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-up">+1.59%</span><span class="changePriceSpan slick-up">0.0103</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">10.00M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:966px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/chr.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">CHR</span><span class="symbolNameKr">크로미아/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.2166</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-6.03%</span><span class="changePriceSpan slick-down">-0.0139</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">2.24M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:1008px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/chz.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">CHZ</span><span class="symbolNameKr">칠리즈/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.0688</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-1.43%</span><span class="changePriceSpan slick-down">-0.001</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">5.12M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:1050px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/comp.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">COMP</span><span class="symbolNameKr">컴파운드/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">48.28</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-4.62%</span><span class="changePriceSpan slick-down">-2.34</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">1.49M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:1092px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/crv.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">CRV</span><span class="symbolNameKr">커브/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.304</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-5.11%</span><span class="changePriceSpan slick-down">-0.0164</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">18.07M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:1134px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/ctsi.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">CTSI</span><span class="symbolNameKr">카르테시/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.1437</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-3.10%</span><span class="changePriceSpan slick-down">-0.0046</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">0.89M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:1176px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/dar.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">DAR</span><span class="symbolNameKr">달라니아/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.16698</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-7.58%</span><span class="changePriceSpan slick-down">-0.01369</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">1.57M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:1218px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/dash.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">DASH</span><span class="symbolNameKr">대시/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">25.66</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-2.62%</span><span class="changePriceSpan slick-down">-0.69</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">3.14M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:1260px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/dent.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">DENT</span><span class="symbolNameKr">덴트/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.000944</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-5.22%</span><span class="changePriceSpan slick-down">-0.000052</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">1.95M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:1302px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/dgb.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">DGB</span><span class="symbolNameKr">디지바이트/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.00714</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-1.79%</span><span class="changePriceSpan slick-down">-0.00013</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">0.37M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:1344px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/doge.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">DOGE</span><span class="symbolNameKr">도지/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-up">0.12956</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-up">+2.45%</span><span class="changePriceSpan slick-up">0.0031</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">220.69M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:1386px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/dot.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">DOT</span><span class="symbolNameKr">폴카닷/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">4.820</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-2.03%</span><span class="changePriceSpan slick-down">-0.1</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">11.26M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:1428px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/enj.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">ENJ</span><span class="symbolNameKr">엔진/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.1707</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-3.61%</span><span class="changePriceSpan slick-down">-0.0064</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">2.02M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:1470px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/ens.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">ENS</span><span class="symbolNameKr">이더리움네임/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">20.15</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-3.40%</span><span class="changePriceSpan slick-down">-0.71</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">11.98M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:1512px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/eos.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">EOS</span><span class="symbolNameKr">이오스/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.536</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-2.51%</span><span class="changePriceSpan slick-down">-0.0138</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">2.76M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:1554px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/etc.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">ETC</span><span class="symbolNameKr">이더리움클래식/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">20.59</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-1.53%</span><span class="changePriceSpan slick-down">-0.32</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">8.78M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:1596px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/eth.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">ETH</span><span class="symbolNameKr">이더리움/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">2676.39</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-0.91%</span><span class="changePriceSpan slick-down">-24.62</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">359.73M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:1638px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/fil.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">FIL</span><span class="symbolNameKr">파일코인/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">4.125</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-2.00%</span><span class="changePriceSpan slick-down">-0.084</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">18.08M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:1680px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/flow.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">FLOW</span><span class="symbolNameKr">플로우/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.613</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-2.54%</span><span class="changePriceSpan slick-down">-0.016</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">1.17M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:1722px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/gmt.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">GMT</span><span class="symbolNameKr">스테픈/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.1550</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-4.62%</span><span class="changePriceSpan slick-down">-0.0075</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">5.28M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:210px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/ankr.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">ANKR</span><span class="symbolNameKr">앵커/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.03026</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-2.67%</span><span class="changePriceSpan slick-down">-0.00083</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">2.05M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:252px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/ant.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">ANT</span><span class="symbolNameKr">아라곤/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center">0</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-center">0%</span><span class="changePriceSpan">0</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">0M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:294px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/ape.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">APE</span><span class="symbolNameKr">에이프/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.837</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-3.90%</span><span class="changePriceSpan slick-down">-0.034</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">8.30M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:336px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/api3.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">API3</span><span class="symbolNameKr">에이피아이3/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">1.640</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-3.92%</span><span class="changePriceSpan slick-down">-0.067</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">1.53M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:378px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/arb.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">ARB</span><span class="symbolNameKr">아비트럼/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.6478</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-3.00%</span><span class="changePriceSpan slick-down">-0.02</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">31.39M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:420px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/arpa.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">ARPA</span><span class="symbolNameKr">알파체인/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.04657</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-5.06%</span><span class="changePriceSpan slick-down">-0.00248</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">1.90M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:462px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/atom.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">ATOM</span><span class="symbolNameKr">코스모스아톰/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">5.040</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-2.10%</span><span class="changePriceSpan slick-down">-0.108</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">7.93M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:504px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/audio.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">AUDIO</span><span class="symbolNameKr">오디우스/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.1384</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-3.01%</span><span class="changePriceSpan slick-down">-0.0043</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">1.00M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:546px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/avax.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">AVAX</span><span class="symbolNameKr">아발란체/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">29.18</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-4.73%</span><span class="changePriceSpan slick-down">-1.45</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">34.93M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:588px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/axs.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">AXS</span><span class="symbolNameKr">엑시인피니티/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">5.38</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-2.45%</span><span class="changePriceSpan slick-down">-0.135</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">2.70M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:630px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/bat.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">BAT</span><span class="symbolNameKr">베이직어텐션토큰/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.1921</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-3.22%</span><span class="changePriceSpan slick-down">-0.0064</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">0.49M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:672px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/bch.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">BCH</span><span class="symbolNameKr">비트코인캐시/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">352.7</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-2.14%</span><span class="changePriceSpan slick-down">-7.7</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">14.10M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:714px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/blz.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">BLZ</span><span class="symbolNameKr">블루젤/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.1513</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-5.32%</span><span class="changePriceSpan slick-down">-0.0085</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">0.88M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:756px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/bnb.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">BNB</span><span class="symbolNameKr">바이낸스/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">600.5</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-1.31%</span><span class="changePriceSpan slick-down">-8</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">148.96M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:798px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/bnx.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">BNX</span><span class="symbolNameKr">바이너리엑스/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">1.1</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-4.90%</span><span class="changePriceSpan slick-down">-0.0553</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">13.17M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:0px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/1inch.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">1INCH</span><span class="symbolNameKr">1인치/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.301</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-5.46%</span><span class="changePriceSpan slick-down">-0.0174</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">3.79M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:42px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/aave.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">AAVE</span><span class="symbolNameKr">에이브/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">162.8</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-4.85%</span><span class="changePriceSpan slick-down">-8.29</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">18.29M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:84px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/ada.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">ADA</span><span class="symbolNameKr">에이다/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.3995</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-1.16%</span><span class="changePriceSpan slick-down">-0.0047</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">21.80M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row odd" style="top:126px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/algo.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">ALGO</span><span class="symbolNameKr">알고랜드/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.1415</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-2.41%</span><span class="changePriceSpan slick-down">-0.0035</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">3.42M</div>
                                                        </div>
                                                        <div class="ui-widget-content slick-row even" style="top:168px">
                                                            <div class="slick-cell l0 r0"><img style="width:30px; height:30px;" src="/images/coin/alpha.png"></div>
                                                            <div class="slick-cell l1 r1"><span class="symbolName">ALPHA</span><span class="symbolNameKr">알파파이낸스랩/USDT</span></div>
                                                            <div class="slick-cell l2 r2 slick-coulumns-text-right slick-down">0.0669</div>
                                                            <div class="slick-cell l3 r3 slick-coulumns-text-right"><span class="percentSpan slick-down">-3.74%</span><span class="changePriceSpan slick-down">-0.0026</span></div>
                                                            <div class="slick-cell l4 r4 slick-coulumns-text-right">0.84M</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div tabindex="0" hidefocus="" style="position:fixed;width:0;height:0;top:0;left:0;outline:0;"></div>
                                            </div>
                                        </span>
                                    </article>
                                </section>

                                <!-- 사이드 -->
                            </section>
                            <!-- 메인컨텐츠 끝 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "includes/footer.php"; ?>

    <?php } ?>
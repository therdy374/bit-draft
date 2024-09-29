<!DOCTYPE html>
<html lang="zxx">

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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="js/jquery-latest.min.js"></script>
    <script src="js/slick.min.js"></script>

    <script src="js/common.js"></script>
    <script src="js/custom.js"></script>

    <link rel="stylesheet" href="css/import.css">

</head>

<body>
    <article class="headerArticle">
        <header>
            <div>
                <h1>
                    <a href="/Default.aspx"></a>
                </h1>

                <nav>
                    <ul>


                        <li><a href="/Trading.aspx">거래소</a></li>
                        <li><a href="/TradeList.aspx">거래내역</a></li>
                        <li><a href="/Balance.aspx">입출금</a></li>
                        <li><a href="/Board/List.aspx?id=notice">공지사항</a></li>
                        <li><a href="/Board/List.aspx?id=qna">고객센터</a></li>

                    </ul>
                </nav>

                <div>
                    <ul>
                        <li><a class="mb-tp">720.3122 USDT</a></li>
                        <li class="userTarget"><a><i class="fa fa-user"></i> d</a>
                            <ol>
                                <li><a href="/Board/List.aspx?id=modify">개인정보 수정</a></li>
                                <li><a href="/Board/List.aspx?id=message">메세지 함</a></li>
                                <li><a href="/Logout.aspx" onclick="Logout()">로그아웃</a></li>
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
                    <li><a class="mb-tp">720.31222 USDT</a></li>
                    <li class="userTarget"><a><i class="fa fa-user"></i> d</a>
                        <ol>
                            <li><a href="/Board/List.aspx?id=modify">개인정보 수정</a></li>
                            <li><a href="/Board/List.aspx?id=message">메세지 함</a></li>
                            <li><a href="/Logout.aspx" onclick="Logout()">로그아웃</a></li>
                        </ol>
                    </li>
                </ul>

                <ul>
                    <li><a href="/Board/List.aspx?id=modify">개인정보 수정</a></li>
                    <li><a href="/Board/List.aspx?id=message">메세지 함</a></li>
                    <li><a href="/Logout.aspx" onclick="Logout()">로그아웃</a></li>
                </ul>

                <ul>

                    <li><a href="/Trading.aspx">거래소</a></li>
                    <li><a href="/TradeList.aspx">거래내역</a></li>
                    <li><a href="/Balance.aspx">입출금</a></li>
                    <li><a href="/Board/List.aspx?id=notice">공지사항</a></li>
                    <li><a href="/Board/List.aspx?id=qna">고객센터</a></li>


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
                        <h2 class="tit"><span class="coinTitle">비트코인(BTC/USDT)</span> 주문확인</h2>
                        <div class="summary">
                            <div class="order">
                                <span id="position-str" class="type"></span>
                                <span class="amount"><span class="real-tp">0.00000000</span> USDT</span> 시장가 <span
                                    class="coinTitle">비트코인(BTC/USDT)</span> <span class="curr_price buy-price">65517.31</span>
                            </div>
                            <div class="leverage">
                                <div class="inner">
                                    <strong id="leverage-bar" style="left: 125%;">x<span class="leverage-number">125</span></strong>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <div class="column">
                                <dl>
                                    <dt>투자금</dt>
                                    <dd><span class="bet-tp">0.00000000</span> USDT</dd>
                                </dl>
                                <dl>
                                    <dt>레버리지 x <span class="leverage-number">125</span> 배 </dt>
                                    <dd><span class="leverage-tp">0.00000000</span> USDT</dd>
                                </dl>
                                <dl>
                                    <dt>수수료 (<span class="commision">0.040</span>% x <span class="leverage-number">125</span>)</dt>
                                    <dd><span class="fee-tp">0.00000000</span> USDT</dd>
                                </dl>
                                <dl>
                                    <dt>진입가</dt>
                                    <dd><span class="buy-price">65517.31</span><span class="orderCoinTitle"> BTC</span></dd>
                                </dl>
                                <dl>
                                    <dt>예상 청산가</dt>
                                    <dd><span class="break-price">0.00</span><span class="orderCoinTitle"> BTC</span></dd>
                                </dl>
                                <dl>
                                    <dt>예상 청산퍼센트</dt>
                                    <dd><span id="break-diff" class="minus"><span
                                                class="break-percent">Infinity</span>%</span><span></span></dd>
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
                                <h2 class="tit"><span class="coinTitle2">(BTC/USDT)</span> 손실_수익 제한 설정
                                    <div>
                                        <input type="button" value="?" data-popup="tip8Popup">
                                        <div id="tip8Popup">
                                            <input type="button" value="close" class="closeBtn">
                                            <span>제한 설정 안내</span>
                                            <p>포인트 기준으로 청산되기 때문에 제한설정 퍼센트지와 실제 수익률의 퍼센트지가 상이할 수 있습니다.</p>
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

                                        <button type="button" class="directBtn selected" onclick="seletePriceType('direct');">직접 입력</button>
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
                            <button type="button" onclick="addStopReset(this);disabled=true;this.innerText='처리중';">제한 설정 삭제</button>
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
                                    <dt>레버리지 x<span class="leverage-number2">1</span> 배 </dt>
                                    <dd><span class="leverage-tp2">0</span> USDT</dd>
                                </dl>
                                <dl>
                                    <dt>청산금</dt>
                                    <dd><span class="liq-bet-tp2">0</span> USDT</dd>
                                </dl>
                                <dl>
                                    <dt>청산레버리지</dt>
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
                                    <dd><span id="rate-percent2" class="minus"><span class="break-percent">Infinity</span>%</span></dd>
                                </dl>
                                <dl>
                                    <dt>수익금</dt>
                                    <dd><span id="rate-price2" class="minus"><span class="break-percent">Infinity</span></span></dd>
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
                        <h2 class="tit"><span class="coinTitle2">(BTC/USDT)</span> <span class="coinPosition2"></span>지정가 진입 취소</h2>
                        <div class="detail">
                            <div class="column">
                                <dl>
                                    <dt>투자원금</dt>
                                    <dd><span class="bet-tp2">0</span> USDT</dd>
                                </dl>
                                <dl>
                                    <dt>레버리지 x<span class="leverage-number2">1</span> 배 </dt>
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
                        <h2 class="tit"><span class="coinTitle">비트코인(BTC/USDT)</span> 투자</h2>
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
                                        onclick="selectPrice(this.value)" data-tabnumb="MlimitsTab2">지정가</button>
                                </div>
                            </div>
                            <div class="limits" id="MlimitsTab2">
                                <input id="Mlimits" class="input" type="number" value="0" autocomplete="off">
                                <span onclick="limitsUpDown('up_mo');" class="ep_up"><i>+</i></span>
                                <span onclick="limitsUpDown('down_mo');" class="ep_down"><i>-</i></span>
                            </div>
                            <dl class="item trade_point">
                                <dt>
                                    <span class="tx">보유금 <span id="MdisplayPercent" style="color: red" class="display">0</span>% </span>
                                    <span class="curr_point"><strong><span class="mb-tp">720.3122 USDT</span></strong>USDT 진입가능</span>
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
                                        레버리지 <span id="MdisplayLeverage" class="display" style="color: red">125</span>배
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
                                수수료 <span class="commision">0.040</span>% : <strong><span class="fee-tp">0.00000000</span></strong> USDT
                            </div>
                            <button class="btn_submit" type="button" onclick="showOrderConfirm();">포지션 진입</button>
                        </div>
                    </div>
                    <!-- mob sellBuy Panal-->


                    <div class="invest_wrap">
                        <!-- 메인컨텐츠 시작 -->
                        <section class="tradingContainer cross">
                            <div>
                                <div class="chart_wrap">
                                    <h2 class="tit">
                                        <div data-panel="sybolPanel"><span class="coinTitle">비트코인(BTC/USDT)</span> <span
                                                class="current-price">65517.32</span></div>
                                        <div>
                                            <input type="button" value="?" data-popup="tip1Popup">
                                            <div id="tip1Popup">
                                                <input type="button" value="close" class="closeBtn">
                                                <span><span class="coinTitle">비트코인(BTC/USDT)</span>차트 안내</span>
                                                <p>해당 차트는 바이낸스에서 제공하는 실시간 차트입니다.</p>
                                            </div>
                                        </div>
                                    </h2>

                                    <div class="chart">
                                        <div class="tradingview-widget-container">
                                            <div id="tradingview_fd5a7">
                                                <div id="tradingview_bc925-wrapper"
                                                    style="position: relative; box-sizing: content-box; font-family: -apple-system, BlinkMacSystemFont, &quot;Trebuchet MS&quot;, Roboto, Ubuntu, sans-serif; margin: 0px auto !important; padding: 0px !important; width: 837px; height: 600px;">
                                                    <iframe title="advanced chart TradingView widget" lang="en" id="tradingview_bc925"
                                                        frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen="true"
                                                        src="https://s.tradingview.com/widgetembed/?hideideas=1&amp;overrides=%7B%22mainSeriesProperties.style%22%3A1%2C%22mainSeriesProperties.candleStyle.upColor%22%3A%22%23e14549%22%2C%22mainSeriesProperties.candleStyle.downColor%22%3A%22%233498db%22%2C%22mainSeriesProperties.candleStyle.wickUpColor%22%3A%22%23e14549%22%2C%22mainSeriesProperties.candleStyle.wickDownColor%22%3A%22%233498db%22%2C%22mainSeriesProperties.candleStyle.borderUpColor%22%3A%22%23e14549%22%2C%22mainSeriesProperties.candleStyle.borderDownColor%22%3A%22%233498db%22%2C%22mainSeriesProperties.hollowCandleStyle.upColor%22%3A%22%23e14549%22%2C%22mainSeriesProperties.hollowCandleStyle.downColor%22%3A%22%233498db%22%2C%22mainSeriesProperties.hollowCandleStyle.wickUpColor%22%3A%22%23e14549%22%2C%22mainSeriesProperties.hollowCandleStyle.wickDownColor%22%3A%22%233498db%22%2C%22mainSeriesProperties.hollowCandleStyle.borderUpColor%22%3A%22%23e14549%22%2C%22mainSeriesProperties.hollowCandleStyle.borderDownColor%22%3A%22%233498db%22%2C%22mainSeriesProperties.haStyle.upColor%22%3A%22%23e14549%22%2C%22mainSeriesProperties.haStyle.downColor%22%3A%22%233498db%22%2C%22mainSeriesProperties.haStyle.wickUpColor%22%3A%22%23e14549%22%2C%22mainSeriesProperties.haStyle.wickDownColor%22%3A%22%233498db%22%2C%22mainSeriesProperties.haStyle.borderUpColor%22%3A%22%23e14549%22%2C%22mainSeriesProperties.haStyle.borderDownColor%22%3A%22%233498db%22%2C%22study_Overlay%40tv-basicstudies.style%22%3A1%2C%22study_Overlay%40tv-basicstudies.lineStyle.color%22%3A%22%23351c75%22%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=kr#%7B%22symbol%22%3A%22binance%3Abtcusdt%22%2C%22frameElementId%22%3A%22tradingview_bc925%22%2C%22interval%22%3A%221%22%2C%22hide_side_toolbar%22%3A%220%22%2C%22save_image%22%3A%221%22%2C%22studies%22%3A%22%5B%5D%22%2C%22theme%22%3A%22light%22%2C%22style%22%3A%221%22%2C%22timezone%22%3A%22Asia%2FSeoul%22%2C%22studies_overrides%22%3A%22%7B%7D%22%2C%22utm_source%22%3A%22www.bit-testtest.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22chart%22%2C%22utm_term%22%3A%22binance%3Abtcusdt%22%2C%22page-uri%22%3A%22www.bit-testtest.com%2FTrading.aspx%3FcoinName%3Dbtcusdt%22%7D"
                                                        style="width: 100%; height: 100%; margin: 0px !important; padding: 0px !important;"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 차트 -->

                                <div id="history_area" class="history_wrap">
                                    <ul class="tab">
                                        <li data-tabnumb="tradHistoryTab1" class="active"><a class="history-btn selected" data-menu="ready"
                                                href="javascript:;" onclick="selectTradingList(this);"><span class="tab1">실시간 수익률</span></a>
                                        </li>
                                        <li data-tabnumb="tradHistoryTab2"><a class="history-btn" data-menu="ready" href="javascript:;"
                                                onclick="selectTradingList(this);"><span class="tab2">지정가 리스트</span></a></li>
                                    </ul>
                                    <div id="history-div" class="history_area">
                                        <!-- trade_list -->
                                        <div id="tradHistoryTab1" class="trade_list tabPage active">
                                            <div class="summary">
                                                <dl>
                                                    <dt>진입가능 USDT</dt>
                                                    <dd><span class="mb-tp">720.3122 USDT</span></dd>
                                                </dl>
                                                <dl>
                                                    <dt>추정 USDT</dt>
                                                    <dd><span class="mb-estimated-tp">766.62</span></dd>
                                                </dl>
                                                <dl>
                                                    <dt><span id="marginText">총진입설정증거금</span> USDT</dt>
                                                    <dd><span class="totlaBalancePoint">80.03</span></dd>
                                                </dl>
                                                <dl>
                                                    <dt>수익 USDT</dt>
                                                    <dd id="sum-settle-tp" class="minus">-30.22</dd>
                                                </dl>
                                                <dl>
                                                    <dt>수익률</dt>
                                                    <dd id="sum-settle-rate" class="minus">-37.91%</dd>
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
                                                            <td class="cell_price"><span class="price">63132.57</span><br><span
                                                                    class="date">2024-09-24 14:38:15</span></td>
                                                            <td class="cell_price"><span id="liq-price-2409241438155776565" class="price minus"
                                                                    onclick="stopOrderConfirm(0)">65517.31 (-3.78%)</span><button class="btn_submit"
                                                                    type="button" onclick="stopOrderConfirm('0');">1.92</button><br> </td>
                                                            <td class="cell_type short">매도<br>교차</td>
                                                            <td class="cell_size">79.71</td>
                                                            <td class="cell_leverage">800.03 (x10)</td>
                                                            <td id="rate-point-2409241438155776565" class="cell_pnl minus">-30.22</td>
                                                            <td id="rate-percent-2409241438155776565" class="cell_roe minus">-37.91%</td>
                                                            <td style="display:none" id="hiden-rate-point-2409241438155776565">-30.22</td>
                                                            <td class="cell_btn"><button type="button" data-trade-id="2409241438155776565"
                                                                    onclick="showLiquidationConfirm('0');">청산</button></td>
                                                        </tr>
                                                        <tr></tr>
                                                    </tbody>
                                                    <tbody class="no_history" style="display: none;">
                                                        <tr>
                                                            <td colspan="9">투자 내역이 없습니다.</td>
                                                        </tr>
                                                    </tbody>
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
                                                    <tbody class="no_lo_history">
                                                        <tr>
                                                            <td colspan="9">투자 내역이 없습니다.</td>
                                                        </tr>
                                                    </tbody>
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
                                                <span class="coinTitle">비트코인(BTC/USDT)</span> 주문장

                                                <div>
                                                    <input type="button" value="?" data-popup="tip2Popup">
                                                    <div id="tip2Popup">
                                                        <input type="button" value="close" class="closeBtn">
                                                        <span><span class="coinTitle">비트코인(BTC/USDT)</span> 주문장</span>
                                                        <p>중앙에 표기되는 가격이 현재 시세이며 상단은 매도 주문(숏), 하단은 매수 주문(롱)입니다.</p>
                                                    </div>
                                                </div>
                                            </h2>
                                            <div class="order_book">
                                                <ul class="top" style="display: table;">
                                                    <li class="price">가격</li>
                                                    <li class="volume">수량</li>
                                                    <li class="total">총액</li>
                                                </ul>
                                                <ul id="asks-ul" class="sell book">
                                                    <li onmousedown="selectType(65517.78);">
                                                        <p class="price">65517.78</p>
                                                        <p class="volume order-book-size">0.00963</p>
                                                        <p class="total"><span class="inner" style="width:1%;"><em class="num">630.93622</em></span>
                                                        </p>
                                                    </li>
                                                    <li onmousedown="selectType(65517.76);">
                                                        <p class="price">65517.76</p>
                                                        <p class="volume order-book-size">0.00008</p>
                                                        <p class="total"><span class="inner" style="width:0%;"><em class="num">5.24142</em></span>
                                                        </p>
                                                    </li>
                                                    <li onmousedown="selectType(65517.60);">
                                                        <p class="price">65517.60</p>
                                                        <p class="volume order-book-size">0.00012</p>
                                                        <p class="total"><span class="inner" style="width:0%;"><em class="num">7.86211</em></span>
                                                        </p>
                                                    </li>
                                                    <li onmousedown="selectType(65517.59);">
                                                        <p class="price">65517.59</p>
                                                        <p class="volume order-book-size">0.16010</p>
                                                        <p class="total"><span class="inner" style="width:16%;"><em
                                                                    class="num">10489.36616</em></span></p>
                                                    </li>
                                                    <li onmousedown="selectType(65517.50);">
                                                        <p class="price">65517.50</p>
                                                        <p class="volume order-book-size">0.00070</p>
                                                        <p class="total"><span class="inner" style="width:0%;"><em class="num">45.86225</em></span>
                                                        </p>
                                                    </li>
                                                    <li onmousedown="selectType(65517.46);">
                                                        <p class="price">65517.46</p>
                                                        <p class="volume order-book-size">0.00009</p>
                                                        <p class="total"><span class="inner" style="width:0%;"><em class="num">5.89657</em></span>
                                                        </p>
                                                    </li>
                                                    <li onmousedown="selectType(65517.32);">
                                                        <p class="price">65517.32</p>
                                                        <p class="volume order-book-size">5.06249</p>
                                                        <p class="total"><span class="inner" style="width:100%;"><em
                                                                    class="num">331680.77733</em></span></p>
                                                    </li>
                                                </ul>

                                                <p id="order-book-current-price" class="curr_price" style="visibility: visible;">
                                                    <span class="current-price">65517.32</span><span class="current-price-mark">　</span>
                                                </p>

                                                <ul id="bids-ul" class="buy book">
                                                    <li onmousedown="selectType(65517.31);">
                                                        <p class="price">65517.31</p>
                                                        <p class="volume order-book-size volume-size-down">2.89603</p>
                                                        <p class="total"><span class="inner" style="width:100%;"><em
                                                                    class="num">189740.09528</em></span></p>
                                                    </li>
                                                    <li onmousedown="selectType(65517.29);">
                                                        <p class="price">65517.29</p>
                                                        <p class="volume order-book-size">0.00010</p>
                                                        <p class="total"><span class="inner" style="width:0%;"><em class="num">6.55173</em></span>
                                                        </p>
                                                    </li>
                                                    <li onmousedown="selectType(65517.28);">
                                                        <p class="price">65517.28</p>
                                                        <p class="volume order-book-size">0.00010</p>
                                                        <p class="total"><span class="inner" style="width:0%;"><em class="num">6.55173</em></span>
                                                        </p>
                                                    </li>
                                                    <li onmousedown="selectType(65517.27);">
                                                        <p class="price">65517.27</p>
                                                        <p class="volume order-book-size">0.00010</p>
                                                        <p class="total"><span class="inner" style="width:0%;"><em class="num">6.55173</em></span>
                                                        </p>
                                                    </li>
                                                    <li onmousedown="selectType(65517.18);">
                                                        <p class="price">65517.18</p>
                                                        <p class="volume order-book-size">0.00019</p>
                                                        <p class="total"><span class="inner" style="width:0%;"><em class="num">12.44826</em></span>
                                                        </p>
                                                    </li>
                                                    <li onmousedown="selectType(65517.17);">
                                                        <p class="price">65517.17</p>
                                                        <p class="volume order-book-size">0.30622</p>
                                                        <p class="total"><span class="inner" style="width:31%;"><em
                                                                    class="num">20062.66780</em></span></p>
                                                    </li>
                                                    <li onmousedown="selectType(65517.16);">
                                                        <p class="price">65517.16</p>
                                                        <p class="volume order-book-size">0.36855</p>
                                                        <p class="total"><span class="inner" style="width:37%;"><em
                                                                    class="num">24146.34932</em></span></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- 주문장 -->

                                        <div class="transaction_area">
                                            <h2 class="tit"><span class="coinTitle">비트코인(BTC/USDT)</span> 최근거래
                                                <div>
                                                    <input type="button" value="?" data-popup="tip3Popup">
                                                    <div id="tip3Popup">
                                                        <input type="button" value="close" class="closeBtn">
                                                        <span><span class="coinTitle">비트코인(BTC/USDT)</span> 최근거래</span>
                                                        <p>시간순으로 가장 최근 거래된 내역의 리스트입니다. 구분에서 B(BUY)는 매수, S(SELL)는 매도입니다.</p>
                                                    </div>
                                                </div>
                                            </h2>

                                            <div class="recent">
                                                <ul class="top" style="display: table;">
                                                    <li class="price">가격</li>
                                                    <li class="volume">수량</li>
                                                    <li class="time">시간</li>
                                                    <li class="type">구분</li>
                                                </ul>
                                                <ul id="recent-ul" class="list" style="display: table;">
                                                    <li class="buy"><span class="price">65517.32</span><span class="volume">0.00037</span><span
                                                            class="time">15:18:59</span><span class="type"><em>B</em></span></li>
                                                    <li class="buy"><span class="price">65517.32</span><span class="volume">0.00100</span><span
                                                            class="time">15:18:59</span><span class="type"><em>B</em></span></li>
                                                    <li class="sell"><span class="price">65517.31</span><span class="volume">0.00092</span><span
                                                            class="time">15:18:59</span><span class="type"><em>S</em></span></li>
                                                    <li class="sell"><span class="price">65517.31</span><span class="volume">0.00180</span><span
                                                            class="time">15:18:59</span><span class="type"><em>S</em></span></li>
                                                    <li class="sell"><span class="price">65517.31</span><span class="volume">0.00058</span><span
                                                            class="time">15:18:59</span><span class="type"><em>S</em></span></li>
                                                    <li class="buy"><span class="price">65517.32</span><span class="volume">0.00011</span><span
                                                            class="time">15:18:58</span><span class="type"><em>B</em></span></li>
                                                    <li class="buy"><span class="price">65517.32</span><span class="volume">0.00020</span><span
                                                            class="time">15:18:58</span><span class="type"><em>B</em></span></li>
                                                    <li class="sell"><span class="price">65517.31</span><span class="volume">0.00014</span><span
                                                            class="time">15:18:57</span><span class="type"><em>S</em></span></li>
                                                    <li class="sell"><span class="price">65517.31</span><span class="volume">0.00011</span><span
                                                            class="time">15:18:57</span><span class="type"><em>S</em></span></li>
                                                    <li class="sell"><span class="price">65517.31</span><span class="volume">0.00010</span><span
                                                            class="time">15:18:57</span><span class="type"><em>S</em></span></li>
                                                    <li class="buy"><span class="price">65517.32</span><span class="volume">0.05600</span><span
                                                            class="time">15:18:56</span><span class="type"><em>B</em></span></li>
                                                    <li class="sell"><span class="price">65517.31</span><span class="volume">0.00107</span><span
                                                            class="time">15:18:56</span><span class="type"><em>S</em></span></li>
                                                    <li class="sell"><span class="price">65517.31</span><span class="volume">0.00039</span><span
                                                            class="time">15:18:56</span><span class="type"><em>S</em></span></li>
                                                    <li class="sell"><span class="price">65517.31</span><span class="volume">0.00028</span><span
                                                            class="time">15:18:55</span><span class="type"><em>S</em></span></li>
                                                    <li class="buy"><span class="price">65517.17</span><span class="volume">0.00135</span><span
                                                            class="time">15:18:54</span><span class="type"><em>B</em></span></li>
                                                    <li class="buy"><span class="price">65517.17</span><span class="volume">0.00014</span><span
                                                            class="time">15:18:54</span><span class="type"><em>B</em></span></li>
                                                    <li class="buy"><span class="price">65517.17</span><span class="volume">0.00013</span><span
                                                            class="time">15:18:54</span><span class="type"><em>B</em></span></li>
                                                </ul>
                                                <div class="loadingDiv" style="display: none;">
                                                    <img src="/images/loading.gif" style="width: 150px; height: 150px;">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 최근거래 -->

                                        <div class="invest_area">
                                            <h2 class="tit"><span class="coinTitle">비트코인(BTC/USDT)</span> 투자</h2>
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
                                                            onclick="selectPrice(this.value)" data-tabnumb="limitsTab2">지정가</button>
                                                    </div>
                                                </div>
                                                <div class="limits" id="limitsTab2">
                                                    <input id="limits" class="input" value="0" autocomplete="off">
                                                    <span onclick="limitsUpDown('up');" class="ep_up"><i>+</i></span>
                                                    <span onclick="limitsUpDown('down');" class="ep_down"><i>-</i></span>
                                                </div>
                                                <dl class="item trade_point">
                                                    <dt>
                                                        <span class="tx">보유금 <span id="displayPercent" class="display">0</span>% </span>
                                                        <span class="curr_point"><strong><span class="mb-tp">720.31222 USDT</span></strong>USDT
                                                            진입가능</span>
                                                    </dt>
                                                    <dd class="trade_pointBox">
                                                        <input id="bet-point" class="input" type="number" value="0" autocomplete="off"
                                                            onkeyup="updateRange(this.value)">
                                                        <div class="tradePoint">
                                                            <ul class="tradeBtn">
                                                                <li class="trade_button">
                                                                    <button type="button" value="10" class="tr_btn01"
                                                                        onclick="trBetPoint(this.value)">10%</button>
                                                                </li>
                                                                <li class="trade_button">
                                                                    <button type="button" value="25" class="tr_btn02"
                                                                        onclick="trBetPoint(this.value)">25%</button>
                                                                </li>
                                                                <li class="trade_button">
                                                                    <button type="button" value="50" class="tr_btn03"
                                                                        onclick="trBetPoint(this.value)">50%</button>
                                                                </li>
                                                                <li class="trade_button">
                                                                    <button type="button" value="100" class="tr_btn04"
                                                                        onclick="trBetPoint(this.value)">100%</button>
                                                                </li>
                                                                <li class="tr_direct_input">
                                                                    <button type="button" id="rangeBetPercent" class="tr_btn05 selected"
                                                                        onclick="trBetFreePoint()">스크롤</button>
                                                                </li>
                                                            </ul>
                                                            <div class="tr_point_bar">
                                                                <div class="pointBar_inner">
                                                                    <div class="range-wrap" style="width: 100%;">
                                                                        <input type="range" id="rangeBet" class="range" name="rangeInput" min="0" max="100"
                                                                            value="0" step="1" list="tickmarks" oninput="updateTextInput(this.value);">
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
                                                                    <span>레버리지란?</span>
                                                                    <p>
                                                                        회원님이 가진 예수금에 추가로 금액을 대여해서 투자함으로써, 원래 회원님이 가진 투자금 이상의 수익을 거두는 투자기법입니다.<br>
                                                                        최대 125배까지 레버리지 투자가 가능합니다.
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
                                                    수수료 <span class="commision">0.040</span>% : <strong><span
                                                            class="fee-tp">0.00000000</span></strong> USDT
                                                    <div>
                                                        <input type="button" value="?" data-popup="tip5Popup">
                                                        <div id="tip5Popup">
                                                            <input type="button" value="close" class="closeBtn">
                                                            <span>수수료 안내</span>
                                                            <p>
                                                                진입/청산시 투자금액의 수수료가 차감됩니다.<br>
                                                                시장가 수수료 : 0.040 %<br>
                                                                지정가 수수료 : 0.040 %<br>
                                                                레버리지 수수료 : 투자금액 * 레버리지 * 수수료
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn_submit" type="button" onclick="showOrderConfirm();">포지션 진입</button>
                                            </div>
                                        </div>
                                        <!-- 투자 -->
                                    </div>
                                </div>
                                <!-- 주문장 -->


                            </div>


                            <section class="ty02" id="sybolPanel">
                                <article>
                                    <span class="favoritesOn searchB">
                                        <div class="search">
                                            <input type="text" placeholder="코인명/심볼검색" id="searchInput"><a href="#" class="btn"
                                                title="검색">검색</a>
                                        </div>
                                    </span>
                                    <span class="tabB">
                                        <div id="myGrid" class="slickgrid_796416 ui-widget"
                                            style="height: 1600px; overflow: hidden; outline: 0px; position: relative;">
                                            <div tabindex="0" hidefocus="" style="position:fixed;width:0;height:0;top:0;left:0;outline:0;">
                                            </div>
                                            <div class="slick-header ui-state-default" style="overflow:hidden;position:relative;">
                                                <div class="slick-header-columns" style="left: -997px; width: 1413px;" unselectable="on">
                                                    <div class="ui-state-default slick-header-column" id="slickgrid_796416" title=""
                                                        style="width: 55px;">
                                                        <div class="slick-column-name"></div>
                                                        <div class="slick-resizable-handle"></div>
                                                    </div>
                                                    <div class="ui-state-default slick-header-column slick-header-sortable"
                                                        id="slickgrid_796416name" title="" style="width: 118px;">
                                                        <div class="slick-column-name">한글명<span class="slick-sort-indicator"></span></div>
                                                        <div class="slick-resizable-handle"></div>
                                                    </div>
                                                    <div class="ui-state-default slick-header-column currency slick-header-sortable"
                                                        id="slickgrid_796416price" title="" style="width: 74px;">
                                                        <div class="slick-column-name">현재가<span class="slick-sort-indicator"></span></div>
                                                        <div class="slick-resizable-handle"></div>
                                                    </div>
                                                    <div class="ui-state-default slick-header-column currency slick-header-sortable"
                                                        id="slickgrid_796416percent" title="" style="width: 74px;">
                                                        <div class="slick-column-name">전일대비<span class="slick-sort-indicator"></span></div>
                                                        <div class="slick-resizable-handle"></div>
                                                    </div>
                                                    <div class="ui-state-default slick-header-column currency slick-header-sortable"
                                                        id="slickgrid_796416volume" title="" style="width: 75px;">
                                                        <div class="slick-column-name">거래량<span class="slick-sort-indicator"></span></div>
                                                        <div class="slick-resizable-handle"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slick-headerrow ui-state-default"
                                                style="overflow: hidden; position: relative; display: none;">
                                                <div class="slick-headerrow-columns" style="width: 396px;"></div>
                                                <div
                                                    style="display: block; height: 1px; position: absolute; top: 0px; left: 0px; width: 413px;">
                                                </div>
                                            </div>
                                            <div class="slick-top-panel-scroller ui-state-default"
                                                style="overflow: hidden; position: relative; display: none;">
                                                <div class="slick-top-panel" style="width:10000px"></div>
                                            </div>
                                            <div class="slick-viewport"
                                                style="width: 100%; overflow: auto; outline: 0px; position: relative; height: 1580px;">
                                                <div class="grid-canvas" style="height: 4326px; width: 396px;">
                                                    <div class="ui-widget-content slick-row even" style="top:0px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="./images/coin/1inch.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">1INCH</span><span
                                                                class="symbolNameKr">1인치/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.311</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+4.61%</span><span
                                                                class="changePriceSpan slick-up">0.0137</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">4.26M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:42px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/aave.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">AAVE</span><span
                                                                class="symbolNameKr">에이브/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">168.6</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+1.24%</span><span
                                                                class="changePriceSpan slick-up">2.07</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">33.27M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:84px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/ada.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">ADA</span><span
                                                                class="symbolNameKr">에이다/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.4134</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+6.08%</span><span
                                                                class="changePriceSpan slick-up">0.0237</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">43.55M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:126px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/algo.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">ALGO</span><span
                                                                class="symbolNameKr">알고랜드/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.1458</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+4.37%</span><span
                                                                class="changePriceSpan slick-up">0.0061</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">5.24M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:168px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/alpha.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">ALPHA</span><span
                                                                class="symbolNameKr">알파파이낸스랩/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.0675</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+3.37%</span><span
                                                                class="changePriceSpan slick-up">0.0022</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">0.92M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:210px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/ankr.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">ANKR</span><span
                                                                class="symbolNameKr">앵커/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.03183</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+5.15%</span><span
                                                                class="changePriceSpan slick-up">0.00156</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">2.44M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:252px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/ant.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">ANT</span><span
                                                                class="symbolNameKr">아라곤/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center">0</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center">0%</span><span class="changePriceSpan">0</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">0M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:294px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/ape.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">APE</span><span
                                                                class="symbolNameKr">에이프/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-down">0.848</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-down">-0.70%</span><span
                                                                class="changePriceSpan slick-down">-0.006</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">7.29M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:336px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/api3.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">API3</span><span
                                                                class="symbolNameKr">에이피아이3/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">1.687</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+4.65%</span><span
                                                                class="changePriceSpan slick-up">0.075</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">2.30M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:378px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/arb.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">ARB</span><span
                                                                class="symbolNameKr">아비트럼/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.6385</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+3.97%</span><span
                                                                class="changePriceSpan slick-up">0.0244</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">56.30M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:420px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/arpa.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">ARPA</span><span
                                                                class="symbolNameKr">알파체인/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.04846</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+1.40%</span><span
                                                                class="changePriceSpan slick-up">0.00067</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">3.74M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:462px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/atom.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">ATOM</span><span
                                                                class="symbolNameKr">코스모스아톰/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">5.156</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+6.35%</span><span
                                                                class="changePriceSpan slick-up">0.308</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">17.77M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:504px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/audio.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">AUDIO</span><span
                                                                class="symbolNameKr">오디우스/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.1407</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+4.22%</span><span
                                                                class="changePriceSpan slick-up">0.0057</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">2.86M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:546px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/avax.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">AVAX</span><span
                                                                class="symbolNameKr">아발란체/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">29.62</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+6.20%</span><span
                                                                class="changePriceSpan slick-up">1.73</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">87.44M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:588px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/axs.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">AXS</span><span
                                                                class="symbolNameKr">엑시인피니티/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">5.45</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+3.06%</span><span
                                                                class="changePriceSpan slick-up">0.162</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">4.31M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:630px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/bat.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">BAT</span><span
                                                                class="symbolNameKr">베이직어텐션토큰/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.1985</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+3.33%</span><span
                                                                class="changePriceSpan slick-up">0.0064</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">1.68M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:672px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/bch.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">BCH</span><span
                                                                class="symbolNameKr">비트코인캐시/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">360.5</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+4.13%</span><span
                                                                class="changePriceSpan slick-up">14.3</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">23.48M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:714px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/blz.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">BLZ</span><span
                                                                class="symbolNameKr">블루젤/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.1578</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+4.23%</span><span
                                                                class="changePriceSpan slick-up">0.0064</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">1.04M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:756px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/bnb.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">BNB</span><span
                                                                class="symbolNameKr">바이낸스/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">605.0</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+2.01%</span><span
                                                                class="changePriceSpan slick-up">11.9</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">211.17M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:798px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/bnx.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">BNX</span><span
                                                                class="symbolNameKr">바이너리엑스/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-down">1.1</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-down">-4.22%</span><span
                                                                class="changePriceSpan slick-down">-0.0494</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">16.34M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:840px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/btc.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">BTC</span><span
                                                                class="symbolNameKr">비트코인/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">65517.31</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+2.74%</span><span
                                                                class="changePriceSpan slick-up">1749.32</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">1818.78M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:882px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/bts.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">BTS</span><span
                                                                class="symbolNameKr">비트쉐어/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center">0</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center">0%</span><span class="changePriceSpan">0</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">0M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:924px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/celo.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">CELO</span><span
                                                                class="symbolNameKr">셀로/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-down">0.637</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-down">-2.64%</span><span
                                                                class="changePriceSpan slick-down">-0.0173</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">20.55M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:966px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/chr.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">CHR</span><span
                                                                class="symbolNameKr">크로미아/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.2257</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+5.42%</span><span
                                                                class="changePriceSpan slick-up">0.0116</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">3.98M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:1008px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/chz.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">CHZ</span><span
                                                                class="symbolNameKr">칠리즈/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.0711</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+7.56%</span><span
                                                                class="changePriceSpan slick-up">0.005</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">11.57M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:1050px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/comp.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">COMP</span><span
                                                                class="symbolNameKr">컴파운드/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">49.99</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+1.34%</span><span
                                                                class="changePriceSpan slick-up">0.66</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">2.62M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:1092px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/crv.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">CRV</span><span
                                                                class="symbolNameKr">커브/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.309</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+1.21%</span><span
                                                                class="changePriceSpan slick-up">0.0037</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">35.67M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:1134px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/ctsi.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">CTSI</span><span
                                                                class="symbolNameKr">카르테시/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.1474</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+2.65%</span><span
                                                                class="changePriceSpan slick-up">0.0038</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">1.76M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:1176px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/dar.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">DAR</span><span
                                                                class="symbolNameKr">달라니아/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.18094</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+5.91%</span><span
                                                                class="changePriceSpan slick-up">0.01009</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">2.93M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:1218px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/dash.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">DASH</span><span
                                                                class="symbolNameKr">대시/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">26.21</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+0.58%</span><span
                                                                class="changePriceSpan slick-up">0.15</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">1.77M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:1260px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/dent.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">DENT</span><span
                                                                class="symbolNameKr">덴트/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.000979</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+5.27%</span><span
                                                                class="changePriceSpan slick-up">0.000049</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">1.82M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:1302px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/dgb.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">DGB</span><span
                                                                class="symbolNameKr">디지바이트/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.00717</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+2.43%</span><span
                                                                class="changePriceSpan slick-up">0.00017</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">0.57M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:1344px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/doge.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">DOGE</span><span
                                                                class="symbolNameKr">도지/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.12336</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+11.48%</span><span
                                                                class="changePriceSpan slick-up">0.0127</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">221.25M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:1386px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/dot.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">DOT</span><span
                                                                class="symbolNameKr">폴카닷/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">4.956</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+3.44%</span><span
                                                                class="changePriceSpan slick-up">0.165</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">21.40M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:1428px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/enj.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">ENJ</span><span
                                                                class="symbolNameKr">엔진/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.1730</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+6.00%</span><span
                                                                class="changePriceSpan slick-up">0.0098</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">2.79M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:1470px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/ens.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">ENS</span><span
                                                                class="symbolNameKr">이더리움네임/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">19.90</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+2.90%</span><span
                                                                class="changePriceSpan slick-up">0.56</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">13.50M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:1512px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/eos.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">EOS</span><span
                                                                class="symbolNameKr">이오스/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.545</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+1.81%</span><span
                                                                class="changePriceSpan slick-up">0.0097</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">5.40M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:1554px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/etc.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">ETC</span><span
                                                                class="symbolNameKr">이더리움클래식/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">20.60</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+5.21%</span><span
                                                                class="changePriceSpan slick-up">1.02</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">14.10M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:1596px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/eth.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">ETH</span><span
                                                                class="symbolNameKr">이더리움/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">2667.52</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+1.82%</span><span
                                                                class="changePriceSpan slick-up">47.66</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">723.64M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:1638px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/fil.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">FIL</span><span
                                                                class="symbolNameKr">파일코인/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">4.232</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+3.25%</span><span
                                                                class="changePriceSpan slick-up">0.133</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">25.65M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row even" style="top:1680px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/flow.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">FLOW</span><span
                                                                class="symbolNameKr">플로우/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.636</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+4.26%</span><span
                                                                class="changePriceSpan slick-up">0.026</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">1.58M</div>
                                                    </div>
                                                    <div class="ui-widget-content slick-row odd" style="top:1722px">
                                                        <div class="slick-cell l0 r0"><img style="width:30px; height:30px;"
                                                                src="/images/coin/gmt.png"></div>
                                                        <div class="slick-cell l1 r1"><span class="symbolName">GMT</span><span
                                                                class="symbolNameKr">스테픈/USDT</span></div>
                                                        <div class="slick-cell l2 r2 slick-coulumns-text-right slick-center slick-up">0.1590</div>
                                                        <div class="slick-cell l3 r3 slick-coulumns-text-right"><span
                                                                class="percentSpan slick-center slick-up">+0.25%</span><span
                                                                class="changePriceSpan slick-up">0.0004</span></div>
                                                        <div class="slick-cell l4 r4 slick-coulumns-text-right">5.79M</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div tabindex="0" hidefocus="" style="position:fixed;width:0;height:0;top:0;left:0;outline:0;">
                                            </div>
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

    <!-- Js Plugins -->
    <script>
        var initData = {
            "ask": null,
            "bid": null,
            "order": {
                "ci": null,
                "position": null,
                "betPoint": 0,
                "leverage": 1
            },
            "orderResult": {},
            "mbTp": 764.30232705,
            "mbEstimatedTp": 764.30232705,
            "cross": true,
            "crossTradeId": 2409241438155776565,
            "crossIm": 1.92084,
            "dataList": [{
                "ci": "C",
                "position": "SHORT",
                "leverage": 10,
                "betPoint": 80.035,
                "balancePoint": 79.71486,
                "breakPercent": "0.00",
                "breakPrice": "0",
                "buyPrice": "63132.57",
                "leveragePoint": 720.315,
                "date": "2024-09-24 14:38:15",
                "realTradePoint": 800.02986,
                "tradeId": "2409241438155776565",
                "socketUrl": "btcusdt",
                "socketCheck": false,
                "symbol": "BTCUSDT",
                "name": "BTC",
                "ask": "65472.02",
                "bid": "65472.01",
                "stopPercent": "0",
                "stopPrice": "0",
                "profitPercent": "0",
                "profitPrice": "0",
                "coinMaxLeverage": "125"
            }],
            "memberBalancePoint": 764.30232705,
            "realBalancePoint": 720.31,
            "totlaBalancePoint": 0
        };
        localStorage.setItem("localTradeData", JSON.stringify(initData));
    </script>
    <script>
        var initData = {
            "ask": null,
            "bid": null,
            "order": {
                "ci": null,
                "position": null,
                "betPoint": 0,
                "leverage": 1
            },
            "orderResult": {},
            "mbTp": 764.30232705,
            "mbEstimatedTp": 764.30232705,
            "cross": true,
            "crossTradeId": 2409241438155776565,
            "crossIm": 1.92084,
            "dataList": [],
            "totlaBalancePoint": 0
        };
        localStorage.setItem("localTradeLoData", JSON.stringify(initData));
    </script>
    <script src="https://s3.tradingview.com/tv.js"></script>

    <script>
        var coinNameInfo = [];
        coinNameInfo = [{
            symbol: "1inchusdt@ticker",
            name: "1INCH",
            nameKr: "1인치",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "aaveusdt@ticker",
            name: "AAVE",
            nameKr: "에이브",
            fixed: 1,
            fixed2: 3
        }, {
            symbol: "adausdt@ticker",
            name: "ADA",
            nameKr: "에이다",
            fixed: 4,
            fixed2: 1
        }, {
            symbol: "algousdt@ticker",
            name: "ALGO",
            nameKr: "알고랜드",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "alphausdt@ticker",
            name: "ALPHA",
            nameKr: "알파파이낸스랩",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "ankrusdt@ticker",
            name: "ANKR",
            nameKr: "앵커",
            fixed: 5,
            fixed2: 1
        }, {
            symbol: "antusdt@ticker",
            name: "ANT",
            nameKr: "아라곤",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "apeusdt@ticker",
            name: "APE",
            nameKr: "에이프",
            fixed: 3,
            fixed2: 2
        }, {
            symbol: "api3usdt@ticker",
            name: "API3",
            nameKr: "에이피아이3",
            fixed: 3,
            fixed2: 2
        }, {
            symbol: "arbusdt@ticker",
            name: "ARB",
            nameKr: "아비트럼",
            fixed: 4,
            fixed2: 1
        }, {
            symbol: "arpausdt@ticker",
            name: "ARPA",
            nameKr: "알파체인",
            fixed: 5,
            fixed2: 1
        }, {
            symbol: "atomusdt@ticker",
            name: "ATOM",
            nameKr: "코스모스아톰",
            fixed: 3,
            fixed2: 2
        }, {
            symbol: "audiousdt@ticker",
            name: "AUDIO",
            nameKr: "오디우스",
            fixed: 4,
            fixed2: 1
        }, {
            symbol: "avaxusdt@ticker",
            name: "AVAX",
            nameKr: "아발란체",
            fixed: 2,
            fixed2: 2
        }, {
            symbol: "axsusdt@ticker",
            name: "AXS",
            nameKr: "엑시인피니티",
            fixed: 2,
            fixed2: 2
        }, {
            symbol: "batusdt@ticker",
            name: "BAT",
            nameKr: "베이직어텐션토큰",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "bchusdt@ticker",
            name: "BCH",
            nameKr: "비트코인캐시",
            fixed: 1,
            fixed2: 3
        }, {
            symbol: "blzusdt@ticker",
            name: "BLZ",
            nameKr: "블루젤",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "bnbusdt@ticker",
            name: "BNB",
            nameKr: "바이낸스",
            fixed: 1,
            fixed2: 3
        }, {
            symbol: "bnxusdt@ticker",
            name: "BNX",
            nameKr: "바이너리엑스",
            fixed: 1,
            fixed2: 3
        }, {
            symbol: "btcusdt@ticker",
            name: "BTC",
            nameKr: "비트코인",
            fixed: 2,
            fixed2: 5
        }, {
            symbol: "btsusdt@ticker",
            name: "BTS",
            nameKr: "비트쉐어",
            fixed: 5,
            fixed2: 1
        }, {
            symbol: "celousdt@ticker",
            name: "CELO",
            nameKr: "셀로",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "chrusdt@ticker",
            name: "CHR",
            nameKr: "크로미아",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "chzusdt@ticker",
            name: "CHZ",
            nameKr: "칠리즈",
            fixed: 4,
            fixed2: 3
        }, {
            symbol: "compusdt@ticker",
            name: "COMP",
            nameKr: "컴파운드",
            fixed: 2,
            fixed2: 3
        }, {
            symbol: "crvusdt@ticker",
            name: "CRV",
            nameKr: "커브",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "ctsiusdt@ticker",
            name: "CTSI",
            nameKr: "카르테시",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "darusdt@ticker",
            name: "DAR",
            nameKr: "달라니아",
            fixed: 5,
            fixed2: 0
        }, {
            symbol: "dashusdt@ticker",
            name: "DASH",
            nameKr: "대시",
            fixed: 2,
            fixed2: 3
        }, {
            symbol: "dentusdt@ticker",
            name: "DENT",
            nameKr: "덴트",
            fixed: 6,
            fixed2: 0
        }, {
            symbol: "dgbusdt@ticker",
            name: "DGB",
            nameKr: "디지바이트",
            fixed: 5,
            fixed2: 1
        }, {
            symbol: "dogeusdt@ticker",
            name: "DOGE",
            nameKr: "도지",
            fixed: 5,
            fixed2: 3
        }, {
            symbol: "dotusdt@ticker",
            name: "DOT",
            nameKr: "폴카닷",
            fixed: 3,
            fixed2: 2
        }, {
            symbol: "enjusdt@ticker",
            name: "ENJ",
            nameKr: "엔진",
            fixed: 4,
            fixed2: 1
        }, {
            symbol: "ensusdt@ticker",
            name: "ENS",
            nameKr: "이더리움네임",
            fixed: 2,
            fixed2: 2
        }, {
            symbol: "eosusdt@ticker",
            name: "EOS",
            nameKr: "이오스",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "etcusdt@ticker",
            name: "ETC",
            nameKr: "이더리움클래식",
            fixed: 2,
            fixed2: 2
        }, {
            symbol: "ethusdt@ticker",
            name: "ETH",
            nameKr: "이더리움",
            fixed: 2,
            fixed2: 4
        }, {
            symbol: "filusdt@ticker",
            name: "FIL",
            nameKr: "파일코인",
            fixed: 3,
            fixed2: 2
        }, {
            symbol: "flowusdt@ticker",
            name: "FLOW",
            nameKr: "플로우",
            fixed: 3,
            fixed2: 2
        }, {
            symbol: "gmtusdt@ticker",
            name: "GMT",
            nameKr: "스테픈",
            fixed: 4,
            fixed2: 1
        }, {
            symbol: "grtusdt@ticker",
            name: "GRT",
            nameKr: "더그래프",
            fixed: 4,
            fixed2: 3
        }, {
            symbol: "gtcusdt@ticker",
            name: "GTC",
            nameKr: "깃코인",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "hbarusdt@ticker",
            name: "HBAR",
            nameKr: "헤데라",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "hookusdt@ticker",
            name: "HOOK",
            nameKr: "훅트",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "icxusdt@ticker",
            name: "ICX",
            nameKr: "아이콘",
            fixed: 4,
            fixed2: 1
        }, {
            symbol: "idexusdt@ticker",
            name: "IDEX",
            nameKr: "아이덱스",
            fixed: 5,
            fixed2: 1
        }, {
            symbol: "imxusdt@ticker",
            name: "IMX",
            nameKr: "이뮤터블엑스",
            fixed: 3,
            fixed2: 2
        }, {
            symbol: "injusdt@ticker",
            name: "INJ",
            nameKr: "인젝티브",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "iostusdt@ticker",
            name: "IOST",
            nameKr: "이오스트",
            fixed: 5,
            fixed2: 0
        }, {
            symbol: "iotausdt@ticker",
            name: "IOTA",
            nameKr: "아이오타",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "iotxusdt@ticker",
            name: "IOTX",
            nameKr: "아이오텍스",
            fixed: 5,
            fixed2: 0
        }, {
            symbol: "kavausdt@ticker",
            name: "KAVA",
            nameKr: "카바",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "klayusdt@ticker",
            name: "KLAY",
            nameKr: "클레이튼",
            fixed: 4,
            fixed2: 1
        }, {
            symbol: "kncusdt@ticker",
            name: "KNC",
            nameKr: "카이버",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "linausdt@ticker",
            name: "LINA",
            nameKr: "리니어파이낸스",
            fixed: 6,
            fixed2: 2
        }, {
            symbol: "linkusdt@ticker",
            name: "LINK",
            nameKr: "링크",
            fixed: 3,
            fixed2: 2
        }, {
            symbol: "lptusdt@ticker",
            name: "LPT",
            nameKr: "라이브피어",
            fixed: 2,
            fixed2: 2
        }, {
            symbol: "lrcusdt@ticker",
            name: "LRC",
            nameKr: "루프링",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "ltcusdt@ticker",
            name: "LTC",
            nameKr: "라이트코인",
            fixed: 2,
            fixed2: 3
        }, {
            symbol: "manausdt@ticker",
            name: "MANA",
            nameKr: "디센트럴랜드",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "maskusdt@ticker",
            name: "MASK",
            nameKr: "마스크",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "maticusdt@ticker",
            name: "MATIC",
            nameKr: "폴리곤",
            fixed: 4,
            fixed2: 1
        }, {
            symbol: "mkrusdt@ticker",
            name: "MKR",
            nameKr: "메이커",
            fixed: 0,
            fixed2: 4
        }, {
            symbol: "mtlusdt@ticker",
            name: "MTL",
            nameKr: "메탈",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "nearusdt@ticker",
            name: "NEAR",
            nameKr: "니어프로토콜",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "neousdt@ticker",
            name: "NEO",
            nameKr: "네오",
            fixed: 2,
            fixed2: 2
        }, {
            symbol: "nknusdt@ticker",
            name: "NKN",
            nameKr: "엔케이엔",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "oceanusdt@ticker",
            name: "OCEAN",
            nameKr: "오션프로토콜",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "ognusdt@ticker",
            name: "OGN",
            nameKr: "오리진",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "omgusdt@ticker",
            name: "OMG",
            nameKr: "오미세고",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "ontusdt@ticker",
            name: "ONT",
            nameKr: "온톨로지",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "opusdt@ticker",
            name: "OP",
            nameKr: "옵티미즘",
            fixed: 3,
            fixed2: 2
        }, {
            symbol: "qtumusdt@ticker",
            name: "QTUM",
            nameKr: "퀀텀",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "rlcusdt@ticker",
            name: "RLC",
            nameKr: "아이젝",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "rndrusdt@ticker",
            name: "RNDR",
            nameKr: "렌더토큰",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "rsrusdt@ticker",
            name: "RSR",
            nameKr: "리저브라이트",
            fixed: 6,
            fixed2: 1
        }, {
            symbol: "rvnusdt@ticker",
            name: "RVN",
            nameKr: "레이븐코인",
            fixed: 5,
            fixed2: 1
        }, {
            symbol: "sandusdt@ticker",
            name: "SAND",
            nameKr: "샌드박스",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "scusdt@ticker",
            name: "SC",
            nameKr: "시아",
            fixed: 5,
            fixed2: 3
        }, {
            symbol: "snxusdt@ticker",
            name: "SNX",
            nameKr: "신세틱스",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "solusdt@ticker",
            name: "SOL",
            nameKr: "솔라나",
            fixed: 2,
            fixed2: 2
        }, {
            symbol: "stmxusdt@ticker",
            name: "STMX",
            nameKr: "스톰엑스",
            fixed: 6,
            fixed2: 1
        }, {
            symbol: "storjusdt@ticker",
            name: "STORJ",
            nameKr: "스토리지",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "stxusdt@ticker",
            name: "STX",
            nameKr: "스택스",
            fixed: 4,
            fixed2: 1
        }, {
            symbol: "sxpusdt@ticker",
            name: "SXP",
            nameKr: "스와이프",
            fixed: 4,
            fixed2: 1
        }, {
            symbol: "thetausdt@ticker",
            name: "THETA",
            nameKr: "쎄타토큰",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "tomousdt@ticker",
            name: "TOMO",
            nameKr: "토모",
            fixed: 4,
            fixed2: 1
        }, {
            symbol: "trxusdt@ticker",
            name: "TRX",
            nameKr: "트론",
            fixed: 5,
            fixed2: 1
        }, {
            symbol: "uniusdt@ticker",
            name: "UNI",
            nameKr: "유니스왑",
            fixed: 3,
            fixed2: 2
        }, {
            symbol: "vetusdt@ticker",
            name: "VET",
            nameKr: "비체인",
            fixed: 5,
            fixed2: 1
        }, {
            symbol: "wavesusdt@ticker",
            name: "WAVES",
            nameKr: "웨이브즈",
            fixed: 3,
            fixed2: 2
        }, {
            symbol: "xemusdt@ticker",
            name: "XEM",
            nameKr: "넴",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "xlmusdt@ticker",
            name: "XLM",
            nameKr: "스텔라루멘",
            fixed: 4,
            fixed2: 3
        }, {
            symbol: "xmrusdt@ticker",
            name: "XMR",
            nameKr: "모네로",
            fixed: 1,
            fixed2: 3
        }, {
            symbol: "xrpusdt@ticker",
            name: "XRP",
            nameKr: "리플",
            fixed: 4,
            fixed2: 0
        }, {
            symbol: "xtzusdt@ticker",
            name: "XTZ",
            nameKr: "테조스",
            fixed: 3,
            fixed2: 1
        }, {
            symbol: "yfiusdt@ticker",
            name: "YFI",
            nameKr: "와이언파이낸스",
            fixed: 0,
            fixed2: 4
        }, {
            symbol: "zecusdt@ticker",
            name: "ZEC",
            nameKr: "지캐시",
            fixed: 1,
            fixed2: 3
        }, {
            symbol: "zenusdt@ticker",
            name: "ZEN",
            nameKr: "호라이젠",
            fixed: 2,
            fixed2: 2
        }, {
            symbol: "zilusdt@ticker",
            name: "ZIL",
            nameKr: "질리카",
            fixed: 5,
            fixed2: 1
        }, {
            symbol: "zrxusdt@ticker",
            name: "ZRX",
            nameKr: "제로엑스",
            fixed: 4,
            fixed2: 0
        }, ];
    </script>

    <!-- 필수 jquery library -->
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/jquery.event.drag-2.0.min.js"></script>

    <!-- 필수 슬릭그리드 library -->
    <script src="js/slick.core.js"></script>
    <script src="js/slick.grid.js"></script>
    <script src="js/sidecoinmenu.js"></script>
    <script src="js/slick.dataview.js"></script>
    <script src="js/jquery.toast.js"></script>

    <script src="js/trading_new.js?d=20240602_001"></script>





    <div id="positionCheck"></div>
    <footer>
        <div>
            <div>
                <h4></h4>
                <ul>
                    <li>모든 컨텐츠 저작권은 비트프로에 있으며, 무단도용시 법적 불이익을 받습니다.</li>
                    <li>Copyright © 비트프로. All rights reserved</li>
                    <li>
                        <ol>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ol>
                    </li>
                </ul>
            </div>

            <ul>
                <li>
                    <b>파트너</b>
                    <ol>
                        <li><a href="https://www.binance.com">바이낸스</a></li>
                        <li><a href="https://www.upbit.com">업비트</a></li>
                    </ol>
                </li>
                <li>
                    <b>회사 소개</b>
                    <ol>
                        <li><a href="#">회사소개</a></li>
                        <li><a href="/Board/List.aspx?id=notice">공지사항</a></li>
                        <li><a href="#">이용약관</a></li>
                        <li><a href="#">Open API 이용약관</a></li>
                    </ol>
                </li>
            </ul>
        </div>
    </footer>
    <script>
        var rCnt = 0;
        if (rCnt > 0 && window.location.href.indexOf("qna") < 0) {
            Swal.fire('확인하지 않은 관리자 댓글이 있습니다.').then(function() {
                window.location = '/Board/List.aspx?id=qna';
            })
        }
        var rCnt2 = 0;
        if (rCnt2 > 0 && window.location.href.indexOf("message") < 0) {
            Swal.fire('확인하지 않은 알림이 있습니다.').then(function() {
                window.location = '/Board/List.aspx?id=message';
            })
        }
    </script>



    <style>
        .tradingview-widget-copyright {
            font-size: 13px !important;
            line-height: 32px !important;
            text-align: center !important;
            vertical-align: middle !important;
            font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
            color: #B2B5BE !important;
        }

        .tradingview-widget-copyright .blue-text {
            color: #2962FF !important;
        }

        .tradingview-widget-copyright a {
            text-decoration: none !important;
            color: #B2B5BE !important;
        }

        .tradingview-widget-copyright a:visited {
            color: #B2B5BE !important;
        }

        .tradingview-widget-copyright a:hover .blue-text {
            color: #1E53E5 !important;
        }

        .tradingview-widget-copyright a:active .blue-text {
            color: #1848CC !important;
        }

        .tradingview-widget-copyright a:visited .blue-text {
            color: #2962FF !important;
        }
    </style>
</body>

</html>
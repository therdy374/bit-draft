    <!-- Header -->
    <?php include "includes/header.php" ?>

    <script src="js/home.js"></script>

    <section class="mainContainer">
        <h2>main</h2>
        <div class="mainVisualBox">
            <div>
                <h4>글로벌 표준 디지털 자산 거래소</h4>
                <p>안전하고 투명한 시스템으로 빠르고 편리한 거래환경을 제공합니다.</p>
                <a href="trading.html">거래소 둘러보기</a>
            </div>
        </div>
        <!-- main Visual -->

        <div class="mainVisualBottomBox">
            <div class="mvBottomWrap">
                <div>
                    <span>글로벌 표준 거래소 </span>
                    <img src="images/logo_mvBottom.png">
                    <span>를 통해 입출금 수수료 및 최저 수수료까지 모두 챙겨가세요!</span>
                    <a href="signUp.html">회원가입 바로가기</a>
                </div>
            </div>
        </div>
        <!-- main Visual -->

        <div class="tradBox">
            <h3>코인 시세</h3>
            <ul class="tradSlider">
                <li id="crypto-table-body1" class="" aria-hidden="true" tabindex="0">
                    <div><img src="images/coin/btc.png"><b>BTC</b></div><span class="whitey">56786.03</span><span class="greeney">+0.46</span><span>28348432953.7131</span><a href="/Trading.aspx?coinName=btcusdt">Trade</a>
                </li>
                <li id="crypto-table-body2" class="slick-current slick-active" aria-hidden="false" tabindex="-1">
                    <div><img src="images/coin/xrp.png"><b>XRP</b></div><span class="whitey">0.549165</span><span class="dangeralarm">-0.52</span><span>867852536.0736473</span><a href="/Trading.aspx?coinName=xrpusdt">Trade</a>
                </li>
                <li id="crypto-table-body3" class="" aria-hidden="true" tabindex="-1">
                    <div><img src="images/coin/eth.png"><b>ETH</b></div><span class="whitey">2392.21</span><span class="dangeralarm">-0.04</span><span>10542472084.713392</span><a href="/Trading.aspx?coinName=ethusdt">Trade</a>
                </li>
                <li id="crypto-table-body4" class="" aria-hidden="true" tabindex="-1">
                    <div><img src="images/coin/bnb.png"><b>BNB</b></div><span class="whitey">503.57</span><span class="greeney">+0.87</span><span>660115656.1568526</span><a href="/Trading.aspx?coinName=bnbusdt">Trade</a>
                </li>
                <li id="crypto-table-body5" class="" aria-hidden="true" tabindex="-1">
                    <div><img src="images/coin/ada.png"><b>ADA</b></div><span class="whitey">0.323189</span><span class="greeney">+0.88</span><span>213492917.8772509</span><a href="/Trading.aspx?coinName=adausdt">Trade</a>
                </li>
            </ul>
        </div>
        <!-- main Silde -->

        <div class="welBox">
            <div>
                <h3>편리한 입출금 및 실시간 가격지원</h3>
                <p>
                    입출금 수수료 없이 입금 후 딜레이 없는 빠른 거래 가능!<br>
                    회원가입후 즉시 선물거래가 가능한 비트프로에서 여러분의 자산을 보다 쉽고 빠르게 늘려보세요.
                </p>
            </div>
        </div>

        <div class="advanBox">
            <ol>
                <li>
                    <img src="images/ico_main01.png" alt="advan area icon">
                    <h4>자유로운 거래</h4>
                    <p>1~100 배의 레버러지로 자유로운 수익실현 가능 100+ 개의 코인으로 원하는 코인에 배팅가능</p>
                </li>
                <li>
                    <img src="images/ico_main02.png" alt="advan area icon">
                    <h4>글로벌 거래소와 동일한 플랫폼</h4>
                    <p>바이낸스에 존재하는 모든 COIN-M 선물 코인 동일하게 거래가능</p>
                </li>
                <li>
                    <img src="images/ico_main03.png" alt="advan area icon">
                    <h4>우수한 고객서비스</h4>
                    <p>24시간 고객 응대 가능 및 VIP 고객을 위한 1:1 문의 지원</p>
                </li>
            </ol>
        </div>
    </section>
    <!-- main Container -->

    <div id="positionCheck"></div>

    <?php include "includes/footer.php"; ?>
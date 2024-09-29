<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="nosnippet" />
    <meta name="robots" content="noarchive" />
    <meta name="robots" content="noindex, nofollow" />
    <title>bit-pro</title>


    <script>
        function setTextBoxValue(ele) {
            var balance;
            var dw = $(ele).data('d-w');
            if (dw == "d")
                balance = $('#txtDeposit');
            else
                balance = $('#txtWithdraw');

            var money = $(ele).data('money');

            if (money == '0')
                money = 0;
            else
                money = Number(getOnlyNumber(balance.val())) + Number(money);

            balance.val(setComma(money));
        }

        function Comma(Num) { //function to add commas to textboxes
            Num += '';
            Num = Num.replace(',', '');
            Num = Num.replace(',', '');
            Num = Num.replace(',', '');
            Num = Num.replace(',', '');
            Num = Num.replace(',', '');
            Num = Num.replace(',', '');
            x = Num.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1))
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            return x1 + x2;
        }

        function CheckPrice(buy_sell) {
            var money;
            var exchange;
            var str;

            if (buy_sell == 1) {
                // 입금
                money = getOnlyNumber($('#txtDeposit').val());
                exchange = Number(money) / 1377.5;
                str = "\n\n입금금액 확인\n\n입금요청 : " + exchange.toFixed(8) + " USDT";

            }
            if (buy_sell == 2) {
                // 출금
                money = getOnlyNumber($('#txtWithdraw').val());
                exchange = Number(money) * 1330.1;
                str = "\n\n출금금액 확인\n\n출금요청 : " + Comma(exchange.toFixed(0)) + " 원 ";

                if (money > 5000) {
                    Swal.fire('출금은 회당 5,000 USDT를 초과할 수 없습니다.');
                    return false;
                }
            }

            if (confirm(str))
                return true;
            else
                return false;
        }

        function getOnlyNumber(value) {
            return Number(value.toString().replace(/,/g, ''));
        }

        function setComma(value) {
            return value.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
        }
    </script>


    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="js/jquery-latest.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/custom.js"></script>
    <link rel="stylesheet" href="css/import.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                                <!-- <a class="mb-tp"><?= number_format($_SESSION['loggedInUser']['user_credit']) ?> USDT</a> -->
                                <a class="mb-ts"><?= number_format($_SESSION['loggedInUser']['user_credit']) ?> USDT</a>

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
                            <a class="mb-ts"><?= number_format($_SESSION['loggedInUser']['user_credit']) ?> USDT</a>
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
                        <div class="invest_wrap">
                            <!-- 메인컨텐츠 시작 -->

                            <form method="post" action="./Balance.aspx" id="form1">
                                <div class="aspNetHidden">
                                    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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MzoyOTo1NjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZD7snoXquIjsi6Dssq08L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQ+MTQ1MTkuMDU2MjYxMzQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQ+7LKY66as7JmE66OMPC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPiAgDQogICAgICAgICAgICAgICAgDQoNCiAgICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgICAgIDx0ZD4yMDIzLTEwLTEzIDIyOjMxOjAwPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkPuyeheq4iOyLoOyyrTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZD4xNDUuNDkyNjM4MDc8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQ+7LKY66as7JmE66OMPC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPiAgDQogICAgICAgICAgICAgICAgDQoNCiAgICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgICAgIDx0ZD4yMDIzLTA4LTE4IDAyOjUxOjAwPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkPuyeheq4iOyLoOyyrTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZD43MzM3LjA4MDEzNTU5PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkPuyymOumrOyZhOujjDwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4gIA0KICAgICAgICAgICAgICAgIGQCBg8WAh8ABT08bGk+PGEgaHJlZj0nL0JhbGFuY2UuYXNweD8mcGFnZT0xJyBjbGFzcz0iYWN0aXZlIj4xPC9hPjwvbGk+ZGQCXOG5qry1tGUcyqvxsCiCzwcL6wkT3xUkttsGMUVpQg==" />
                                </div>

                                <div class="aspNetHidden">

                                    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="4A34F54E" />
                                    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAbYpAwmVrKOj6kKFc3SfrMkz9Qi2u9FTH4hr9qwk2HaO3tU28CZD7rz41PP+eYYOaQJ/VQ9ftj/394ehEyfRt37kljTdaIA8S7j6UGq9WYLrfAeM1Dl4sr95CelMNM4tCgEfiqlidSfkIIFi4XZM2DVnTs1u4/XwRRDgU3NrcXXRA==" />
                                </div>

                                <section class="balanceContainer">
                                    <div>
                                        <h3>입출금</h3>
                                        <ul class="tabMenu">
                                            <li data-tabnumb="balTab1" class="active">입금신청</li>
                                            <li data-tabnumb="balTab2">출금신청</li>
                                        </ul>

                                        <div id="balTab1" class="tabPage active">
                                            <h4>입금안내</h4>
                                            <ol>
                                                <li>입금 전용계좌는 수시로 변경될 수 있습니다.</li>
                                                <li>입금 전 "전용계좌 문의"를 통해 입금 전용계좌 확인 바랍니다.</li>
                                                <li>정상적으로 입금 후 전환 신청이 되셨다면 5분 이내 USDT 전환이 완료됩니다.</li>
                                                <li>전환 신청 후 20분 이내에 입금이 되지 않는 경우에는 신청 내용이 자동 삭제 처리되며 선 입금 후 전환 신청을 하시면 더욱 빠른 전환이 가능합니다.</li>
                                                <li>문제가 있을 시 고객센터 1:1문의를 통해 문의 바랍니다.</li>
                                            </ol>
                                            <h4>주의사항</h4>
                                            <ol>
                                                <li>입금 시 등록된 출금계좌와 동일한 명의의 계좌에서 입금하셔야만 USDT 전환이 가능합니다.</li>
                                                <li>USDT 전환은 KRW 기준 1만 원단위로만 신청하실 수 있습니다.</li>
                                                <li>수표 입금은 전환 처리되지 않습니다.</li>
                                            </ol>
                                            <h4><span class="date"></span>실시간 환율정보 ( 2024-09-10 )</h4>
                                            <ol>
                                                <li>달러 매수가 : <span class="buy">1377.5</span></li>
                                                <li>달러 매도가 : <span class="sell">1330.1</span></li>
                                            </ol>
                                            <center>
                                                <input type="submit" name="ctl00$cpContent$btnBankCheck" value="입금 전용계좌 확인" onclick="btnBankPopUp();" id="cpContent_btnBankCheck" class="deposit_bankcheck" />
                                            </center>

                                            <div>
                                                <input name="ctl00$cpContent$txtDeposit" type="text" value="0" id="txtDeposit" class="input_deposit_box" onkeyup="javascript:this.value=Comma(this.value.replace(/[^\d]/g,&#39;&#39;));" />
                                                <input type="button" data-d-w="d" data-money="100000" class="deposit_button" onclick="setTextBoxValue(this)" value="100,000원" />
                                                <input type="button" data-d-w="d" data-money="1000000" class="deposit_button" onclick="setTextBoxValue(this)" value="1,000,000원" />
                                                <input type="button" data-d-w="d" data-money="10000000" class="deposit_button" onclick="setTextBoxValue(this)" value="10,000,000원" />
                                                <input type="button" data-d-w="d" data-money="0" class="deposit_button" onclick="setTextBoxValue(this)" value="리셋" />
                                                <input type="submit" name="ctl00$cpContent$btnDeposit" value="입금신청" onclick="return CheckPrice(1);" id="cpContent_btnDeposit" class="deposit_buttonact" />
                                            </div>
                                        </div>
                                        <div id="balTab2" class="tabPage">
                                            <h4>출금안내</h4>
                                            <ol>
                                                <li>24시간 자유롭게 전환 및 출금이 가능합니다.</li>
                                                <li>은행 점검 시간 (매일 23:50 ~ 00:30)에는 전환 및 출금 서비스 이용이 원활하지 않을 수 있습니다.</li>
                                                <li>최근 달러의 심각한 등락과 더불어 불법 환율 차익 거래를 방지하고자 1회 전환 출금 금액을 제한합니다.</li>
                                                <li>1회 최대 전환 및 출금 금액 5,000USDT (4시간마다 전환 및 출금 신청 가능)</li>
                                            </ol>
                                            <h4><span class="date"></span>실시간 환율정보 ( 2024-09-10 )</h4>
                                            <ol>
                                                <li>달러 매수가 : <span class="buy">1377.5</span></li>
                                                <li>달러 매도가 : <span class="sell">1330.1</span></li>
                                            </ol>
                                            <div>
                                                <input name="ctl00$cpContent$txtWithdraw" type="text" value="0" id="txtWithdraw" class="input_withdraw_box" onkeyup="javascript:this.value=Comma(this.value.replace(/[^\d]/g,&#39;&#39;));" />
                                                <input type="button" data-d-w="w" data-money="10" class="deposit_button" onclick="setTextBoxValue(this)" value="10 USDT" />
                                                <input type="button" data-d-w="w" data-money="100" class="deposit_button" onclick="setTextBoxValue(this)" value="100 USDT" />
                                                <input type="button" data-d-w="w" data-money="1000" class="deposit_button" onclick="setTextBoxValue(this)" value="1,000 USDT" />
                                                <input type="button" data-d-w="w" data-money="0" class="deposit_button" onclick="setTextBoxValue(this)" value="리셋" />
                                                <input type="submit" name="ctl00$cpContent$btnWithdraw" value="출금신청" onclick="return CheckPrice(2);" id="cpContent_btnWithdraw" class="deposit_buttonact" />
                                            </div>
                                        </div>

                                        <table>
                                            <tr>
                                                <th>일자</th>
                                                <th>내용</th>
                                                <th>금액</th>
                                                <th>상태</th>
                                            </tr>


                                            <tr>
                                                <td>2024-09-04 13:29:56</td>
                                                <td>입금신청</td>
                                                <td>14519.05626134</td>
                                                <td>처리완료</td>
                                            </tr>


                                            <tr>
                                                <td>2023-10-13 22:31:00</td>
                                                <td>입금신청</td>
                                                <td>145.49263807</td>
                                                <td>처리완료</td>
                                            </tr>


                                            <tr>
                                                <td>2023-08-18 02:51:00</td>
                                                <td>입금신청</td>
                                                <td>7337.08013559</td>
                                                <td>처리완료</td>
                                            </tr>

                                        </table>

                                        <div class="pagenation">
                                            <ol>
                                                <li><a href='/Balance.aspx?&page=1' class="active">1</a></li>
                                            </ol>
                                        </div>
                                    </div>
                                </section>

                            </form>

                            <!-- 메인컨텐츠 끝 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

</body>

</html>
<?php } ?>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="nosnippet">
    <meta name="robots" content="noarchive">
    <meta name="robots" content="noindex, nofollow">
    <title>bit-pro</title>

    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">



    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="../js/common.js?d=20230807_911"></script>
    <script src="../js/custom.js?d=20230807_911"></script>

    <link rel="stylesheet" href="../css/import.css?d=20240905_001">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>

    <?php
    session_start();
    require '../config/function.php';

    if (!isset($_SESSION['loggedIn'])) {

        echo
        "<script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Opps! Please Login First',
                    text: 'Oops! Please login first'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '../Login';
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
                        <a href="../index"></a>
                    </h1>

                    <nav>
                        <ul>

                            <li><a href="../Trading">거래소</a></li>
                            <li><a href="../TradeList">거래내역</a></li>
                            <li><a href="../Balance">입출금</a></li>
                            <li><a href="../board/List">공지사항</a></li>
                            <li><a href="Qna">고객센터</a></li>

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
                                    <li><a href="../Logout">로그아웃 Logout</a></li>
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
                        <div class="invest_wrap">
                            <!-- 메인컨텐츠 시작 -->

                            <section id="cpContent_title2" class="qnaContainer">
                                <div>
                                    <ul>
                                        <li id="menuQna" data-tabnumb="qna" class="menu_item active">
                                            <a style="display: block;" href="javascript:void(0);">1:1 문의</a>
                                        </li>
                                        <li id="menuMessage" data-tabnumb="message" class="menu_item">
                                            <a style="display: block;" href="javascript:void(0);">메세지함</a>
                                        </li>
                                        <li id="menuModify" data-tabnumb="modify" class="menu_item">
                                            <a style="display: block;" href="javascript:void(0);">개인정보 수정</a>
                                        </li>
                                    </ul>

                                    <div id="qna" class="tabPage active">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>제목</th>
                                                    <th>작성자</th>
                                                    <th>작성일자</th>
                                                    <th>상태</th>
                                                </tr>
                                                <tr>
                                                    <td><a href="/Board/View.php?id=qna&amp;rno=323&amp;page=1">계좌 문의 <span><span></span></span></a></td>
                                                    <td>d</td>
                                                    <td>2024-09-12 오후 3:17:37</td>
                                                    <td>확인</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="Write">문의하기</a>
                                    </div>

                                    <div id="message" class="tabPage" style="display: none;">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>제목</th>
                                                    <th>작성자</th>
                                                    <th>작성일자</th>
                                                    <th>상태</th>
                                                </tr>
                                                <tr>
                                                    <td><a href="/Board/View.php?id=qna&amp;rno=323&amp;page=1">계좌 문의</a></td>
                                                    <td>d</td>
                                                    <td>2024-09-12 오후 3:17:37</td>
                                                    <td>확인</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div id="modify" class="tabPage" style="display: none;">
                                        <form method="post" action="./List.php?id=modify" id="form1">
                                            <div>
                                                <dl class="input_list">
                                                    <dd>
                                                        <input name="ctl00$cpContent$txtUserPass" type="password" id="cpContent_txtUserPass" placeholder="비밀번호 입력">
                                                    </dd>
                                                </dl>
                                                <dl class="input_list">
                                                    <dd>
                                                        <input name="ctl00$cpContent$txtUserPass2" type="password" id="cpContent_txtUserPass2" placeholder="비밀번호 확인">
                                                    </dd>
                                                </dl>
                                                <dl class="input_list">
                                                    <dd>
                                                        <input name="ctl00$cpContent$txtUserBankName" type="text" value="0" readonly="readonly" id="cpContent_txtUserBankName" placeholder="은행명">
                                                    </dd>
                                                </dl>
                                                <dl class="input_list">
                                                    <dd>
                                                        <input name="ctl00$cpContent$txtUserBankAccountName" type="text" value="테스트 커미션1" readonly="readonly" id="cpContent_txtUserBankAccountName" placeholder="은행이름">
                                                    </dd>
                                                </dl>
                                                <dl class="input_list">
                                                    <dd>
                                                        <input name="ctl00$cpContent$txtUserBankAccount" type="text" value="00000" readonly="readonly" id="cpContent_txtUserBankAccount" placeholder="계좌번호">
                                                    </dd>
                                                </dl>
                                                <p style="color: red">* 계좌변경은 1:1 문의에서 가능합니다.</p>
                                                <label for="editPerAccountField">전용 영구계좌 번호</label>
                                                <dl class="input_list">
                                                    <dd>
                                                        <input name="ctl00$cpContent$txtUserLifetimeAccount" type="text" readonly="readonly" id="cpContent_txtUserLifetimeAccount" placeholder="입금신청에서 발급 가능">
                                                    </dd>
                                                </dl>
                                                <span class="skipOrder"><input id="cpContent_radioUserSkipOrderTrue" type="radio" name="ctl00$cpContent$SkipOrder" value="radioUserSkipOrderTrue"><label for="cpContent_radioUserSkipOrderTrue">자동진입</label></span>
                                                <span class="skipOrder skip_r"><input id="cpContent_radioUserSkipOrderFalse" type="radio" name="ctl00$cpContent$SkipOrder" value="radioUserSkipOrderFalse" checked="checked"><label for="cpContent_radioUserSkipOrderFalse">확인진입</label></span>

                                                <input type="submit" name="ctl00$cpContent$ctl00" value="정보수정" class="btn_register">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>

                            <script>
                                // Select all menu items
                                const menuItems = document.querySelectorAll('.menu_item');

                                // Select all tab content sections
                                const tabPages = document.querySelectorAll('.tabPage');

                                // Add click event listener to each menu item
                                menuItems.forEach(item => {
                                    item.addEventListener('click', function() {
                                        // Remove 'active' class from all menu items
                                        menuItems.forEach(i => i.classList.remove('active'));

                                        // Add 'active' class to the clicked menu item
                                        this.classList.add('active');

                                        // Hide all tab content sections
                                        tabPages.forEach(page => page.style.display = 'none');

                                        // Show the clicked tab content
                                        const targetTab = this.getAttribute('data-tabnumb');
                                        document.getElementById(targetTab).style.display = 'block';
                                    });
                                });
                            </script>



                            <!-- 메인컨텐츠 끝 -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                tabMenu(".qnaContainer div ul li", ".qnaContainer div .tabPage");
            });

            function tabMenu(target, tabPage) {
                $(target).click(function() {
                    var activeTab = $(this).attr("data-tabNumb");

                    $(target).removeClass("active");
                    $(this).addClass("active");

                    $(tabPage).removeClass("active");
                    $("#" + activeTab).addClass("active");
                });
            }
            /* tabMenu active */

            var searchParams = new URLSearchParams(window.location.search);
            var id = searchParams.get("id");
            if (id == "qna" || id == "message") {
                if (id == "qna") {
                    $("#menuQna").addClass('active');
                    $("#qna").addClass('active');
                } else if (id == "message") {
                    $("#menuMessage").addClass('active');
                    $("#message").addClass('active');
                }
            }
            if (id == "modify") {
                $("#menuModify").addClass('active');
                $("#modify").addClass('active');
            }

            if (id == "notice")
                $("#menuNotice").addClass('active');
            if (id == "event")
                $("#menuEvent").addClass('active');
            if (id == "news")
                $("#menuNews").addClass('active');
            if (id == "faq")
                $("#menuFaq").addClass('active');
        </script>


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
                            <li><a href="/Board/List.php?id=notice">공지사항</a></li>
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
                    window.location = '/Board/List.php?id=qna';
                })
            }
            var rCnt2 = 0;
            if (rCnt2 > 0 && window.location.href.indexOf("message") < 0) {
                Swal.fire('확인하지 않은 알림이 있습니다.').then(function() {
                    window.location = '/Board/List.php?id=message';
                })
            }
        </script>



        <div id="extension-mmplj"></div>
</body>

</html>

<?php } ?>
<php lang="ko">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="nosnippet">
        <meta name="robots" content="noarchive">
        <meta name="robots" content="noindex, nofollow">
        <title>bit-pro</title>

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">



        <script src="../js/jquery-latest.min.js"></script>
        <script src="../js/slick.min.js"></script>

        <script src="../js/common.js"></script>
        <script src="../js/custom.js"></script>

        <link rel="stylesheet" href="../css/import.css">

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
                                <li><a href="../Board/List?id=notice">공지사항</a></li>
                                <li><a href="../Board/List?id=qna">고객센터</a></li>

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

                                <section id="cpContent_title1" class="noticeContainer">
                                    <div>
                                        <ul>
                                            <li id="menuNotice" class="active">
                                                <a style="display: block;" href="../Board/List.php?id=notice">공지사항</a>
                                            </li>
                                            <li id="menuFaq">
                                                <a style="display: block;" href="../Board/faq.php">이용안내</a>
                                            </li>
                                        </ul>
                                        <div>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>제목</th>
                                                        <th>작성자</th>
                                                        <th>작성일자</th>
                                                    </tr>

                                                </tbody>
                                            </table>

                                            <div class="pagenation">
                                                <ol>

                                                </ol>
                                            </div>
                                            <!-- pagenation -->
                                        </div>
                                    </div>
                                </section>
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



    </body>

</php>

<?php } ?>
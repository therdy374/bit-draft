<html lang="ko">


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


    <form method="post" action="./Write.html?id=qna" id="form1">
        <div class="aspNetHidden">
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                value="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">
        </div>

        <div class="aspNetHidden">

            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="8EBF9385">
            <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                value="/wEdAAcphlYn0rOayeeNkXkSGPuGqgXj3mWt5imG4K9pcqTi3eOucD5YPmIgWuwpxx6QjDX4WdtABkyDPCNc7KpzTzrtWgIukHTjZfWxyEXepx63KLea8M2Xvyawdju34ao7wOIo3kW2IC2g+fww2rGngl/wcaEKzFr0JEYS09AXImQM4nv/b/cNlfN/AUWRerf3VQ8=">
        </div>

        <div class="subRouteContent">
            <div class="wrapper">
                <div class="sub-contents-layout">
                    <div class="frameWrapper">
                        <div class="_layer_background"></div>
                        <div class="invest_wrap">
                            <!-- 메인컨텐츠 시작 -->


                            <section class="boardWriteContainer">
                                <div>

                                    <div>
                                        <ul>
                                            <li id="menuQna" data-tabnumb="qnaTab1" class="active"><a
                                                    href="List.html?id=qna">1:1 문의</a></li>
                                            <li id="menuMessage" data-tabnumb="qnaTab2"><a
                                                    href="/Board/List.html?id=message">메세지함</a></li>
                                            <li id="menuModify" data-tabnumb="qnaTab3"><a
                                                    href="/Board/List.html?id=modify">개인정보 수정</a></li>
                                        </ul>
                                    </div>

                                    <div class="board_wrap_renewal">
                                        <div class="board_write_area">

                                        </div>
                                        <div class="board_write_box">
                                            <div class="input_artc_tit">

                                                <select name="ctl00$cpContent$txtSubject" id="cpContent_txtSubject"
                                                    class="required">
                                                    <option selected="selected" value="계좌 문의">계좌 문의</option>
                                                    <option value="거래관련 문의">거래관련 문의</option>
                                                    <option value="기타 문의">기타 문의</option>

                                                </select>

                                            </div>

                                            <iframe id="editor" src="editor.html"
                                                style="margin-top: 15px; width: 100%; height: 551px; border: 0;"
                                                scrolling="no"></iframe>
                                            <input name="ctl00$cpContent$txtContent" type="text" id="txtContent"
                                                style="display: none;">
                                        </div>
                                        <div class="board_bottom">
                                            <div class="btn_board_menu">
                                                <input type="submit" name="ctl00$cpContent$btnCancel" value="취소"
                                                    onclick="javascript:history.back(-1);return false;"
                                                    id="cpContent_btnCancel" class="btn_basic btn_wht">
                                                <input type="submit" name="ctl00$cpContent$btnWrite" value="문의등록"
                                                    onclick="return Checkform();clickCheck(this);"
                                                    id="cpContent_btnWrite" class="btn_basic btn_red btn_write">
                                            </div>
                                        </div>
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
            var searchParams = new URLSearchParams(window.location.search);
            var id = searchParams.get("id");
            if (id == "qna") {
                $("#menuQna").addClass('active');
                $("#qna").addClass('active');
            }
            if (id == "message") {
                $("#menuMessage").addClass('active');
                $("#message").addClass('active');
            }
            if (id == "modify") {
                $("#menuModify").addClass('active');
                $("#modify").addClass('active');
            }
        </script>

    </form>


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
                        <li><a href="/Board/List.html?id=notice">공지사항</a></li>
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
            Swal.fire('확인하지 않은 관리자 댓글이 있습니다.').then(function () {
                window.location = './Board/List.html?id=qna';
            })
        }
        var rCnt2 = 0;
        if (rCnt2 > 0 && window.location.href.indexOf("message") < 0) {
            Swal.fire('확인하지 않은 알림이 있습니다.').then(function () {
                window.location = '/Board/List.html?id=message';
            })
        }
    </script>



</body>

</html>

<?php } ?>
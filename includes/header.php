<?php include "includes/link.php" ?>

<?php if (isset($_SESSION['loggedIn'])) :  ?>

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
                        <li><a href="Board/QNA">고객센터</a></li>

                    </ul>
                </nav>

                <div>
                    <ul>
                        <li><a class="mb-tp"><?= number_format($_SESSION['loggedInUser']['user_credit']) ?> USDT</a></li>
                        <li class="userTarget"><a><i class="fa fa-user"></i> <?= $_SESSION['loggedInUser']['username'] ?></a>
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
                    <li><a class="mb-tp"><?= number_format($_SESSION['loggedInUser']['user_credit']) ?> USDT</a></li>
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

<?php else : ?>

    <article class="headerArticle">
        <header>
            <div>
                <h1>
                    <a href="index"></a>
                </h1>

                <nav>
                    <ul>
                        <li><a href="trading">거래소</a></li>
                        <li><a href="balance">입출금</a></li>
                        <li><a href="board/List">공지사항</a></li>
                    </ul>
                </nav>

                <div>
                    <ul>
                        <li><a href="login">로그인</a></li>
                        <li><a href="signUp">회원가입</a>
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
                    <li><a href="login">로그인</a></li>
                    <li><a href="signUp">회원가입</a>
                    </li>
                </ul>

                <ul>

                </ul>

                <ul>

                    <li><a href="trading">거래소</a></li>
                    <li><a href="balance">입출금</a></li>
                    <li><a href="board/notice">공지사항</a></li>


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


<?php endif; ?>
<?php include "inc/link.php"; ?>

<body class="nav-md" id="toremoveonlogin">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0; margin-top: 20px;">
                        <a href="Dashboard.php" class="site_title"><i class="">
                            <img src="./images/logo.png"></i>
                            <span><img src="./images/logo_text.png" class="img-responsive center-block dashboard-header-img"></span>
                        </a>
                    </div>

                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                        </div>
                        <div class="profile_info">
                            <span>안녕하세요. <?=$_SESSION['name']?></span>
                            <h2>본사님</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br>

                    <!-- sidebar menu -->
                    <?php include "inc/sidebar.php" ?>
                    <!-- /sidebar menu -->

                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class="navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">본사님 <?=$_SESSION['name']?>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="PartnerInfoModify.html">정보수정</a>
                                    <a class="dropdown-item" href="Logout.php"><i
                                            class="fa fa-sign-out pull-right"></i>로그아웃</a>
                                </div>
                            </li>
                            <li id="liMember" style="display: none"><a href="MemberList.html"><i
                                        class="fa fa-user"></i></a></li>
                            <li id="liQna" style="display: inline;"><a href="InquiryList.html"><i
                                        class="fa fa-list"></i></a></li>

                            <li id="liDeposit" style="display: none"><a href="BalanceMember.html?dw=deposit"><i
                                        class="fa fa-arrow-down"></i></a></li>
                            <li id="liWithdraw" style="display: none"><a href="BalanceMember.html?dw=withdraw"><i
                                        class="fa fa-arrow-up"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <iframe id="iSound" style="display: none;"></iframe>


            <div class="right_col" role="main" style="min-height: 834px;">
                <div class="page-title">
                    <div class="title_left">
                        <h3> 대시보드</h3>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12"></div>
                <ul class="dashContainer">
                    <li>
                        <div>
                            <b>날짜별 요약</b>
                            <div>
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>날짜</th>
                                            <th>신규회원</th>
                                            <th>입금</th>
                                            <th>출금</th>
                                            <th>회원수익금</th>
                                            <th>수수료합계</th>
                                        </tr>

                                        <tr>
                                            <td>2024-05-30 <span>목</span></td>
                                            <td>0 명</td>
                                            <td>0 원</td>
                                            <td>0 원</td>
                                            <td>0.00 $</td>
                                            <td>0.00 $</td>
                                        </tr>

                                        <tr>
                                            <td>2024-05-29 <span>수</span></td>
                                            <td>0 명</td>
                                            <td>0 원</td>
                                            <td>0 원</td>
                                            <td>0.00 $</td>
                                            <td>0.00 $</td>
                                        </tr>

                                        <tr>
                                            <td>2024-05-28 <span>화</span></td>
                                            <td>0 명</td>
                                            <td>0 원</td>
                                            <td>0 원</td>
                                            <td>0.00 $</td>
                                            <td>0.00 $</td>
                                        </tr>

                                        <tr>
                                            <td>2024-05-27 <span>월</span></td>
                                            <td>0 명</td>
                                            <td>0 원</td>
                                            <td>0 원</td>
                                            <td>0.00 $</td>
                                            <td>0.00 $</td>
                                        </tr>

                                        <tr>
                                            <td>2024-05-26 <span style="color: red">일</span></td>
                                            <td>0 명</td>
                                            <td>0 원</td>
                                            <td>0 원</td>
                                            <td>0.00 $</td>
                                            <td>0.00 $</td>
                                        </tr>

                                        <tr>
                                            <td>2024-05-25 <span style="color: red">토</span></td>
                                            <td>0 명</td>
                                            <td>0 원</td>
                                            <td>0 원</td>
                                            <td>0.00 $</td>
                                            <td>0.00 $</td>
                                        </tr>

                                        <tr>
                                            <td>2024-05-24 <span>금</span></td>
                                            <td>0 명</td>
                                            <td>0 원</td>
                                            <td>0 원</td>
                                            <td>-989.38 $</td>
                                            <td>99.97 $</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <b>신규회원 현황</b>
                                <ol>
                                    <li>금일 신규회원 :
                                        <div>
                                            <span>
                                                0</span>명
                                        </div>
                                    </li>
                                    <li>월 신규회원 :
                                        <div>
                                            <span>
                                                0</span>명
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <b>금일 입출금 현황</b>
                                <ol>
                                    <li><a href="/BalanceMember.html?dw=deposit">입금 : </a>
                                        <div>
                                            <span>
                                                0</span> 원
                                        </div>
                                    </li>
                                    <li><a href="/BalanceMember.html?dw=withdraw">출금 : </a>
                                        <div>
                                            <span>
                                                0</span> 원
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <b>회원 총 수익금</b>
                                <ol>
                                    <li>금일 :
                                        <div>
                                            <span>
                                                0.00</span> $
                                        </div>
                                    </li>
                                    <li>월간 :
                                        <div>
                                            <span>
                                                -989.38</span> $
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <b>월간 입출금 현황</b>
                                <ol>
                                    <li><a href="BalanceMember.html?dw=deposit">입금 : </a>
                                        <div>
                                            <span>
                                                0</span> 원
                                        </div>
                                    </li>
                                    <li><a href="/BalanceMember.html?dw=withdraw">출금 : </a>
                                        <div>
                                            <span>
                                                0</span> 원
                                        </div>
                                    </li>
                                </ol>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div id="tbMember"><span>현재 접속자 현황<span style="color:red"> 0 </span>명</span>
                            <div>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>이름</td>
                                            <td>아이디</td>
                                            <td>진입상태</td><!-- tr-->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>

            <script>
                function memberList() {
                    var xhr = new XMLHttpRequest();
                    xhr.open('GET', '/GetRealtimeMember.html', false);
                    xhr.send();
                    document.getElementById('tbMember').innerHTML = xhr.responseText;
                }
                memberList();
                setInterval(function () {
                    memberList();
                }, 20000);
            </script>

            <iframe src="/source.mp3" allow="autoplay" style="display: none" id="iframeAudio"></iframe>

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Bitbns
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="./Scripts/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="./Scripts/dist/bootstrap.bundle.min.js"></script>
    <script src="./Scripts/fastclick/fastclick.js"></script>
    <!-- NProgress -->
    <script src="./Scripts/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="./Scripts/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="./Scripts/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="./Scripts/bootstrap-progressbar.min.js"></script>

    <!-- Flot -->
    <!-- <script src="./Scripts/Flot/jquery.flot.js"></script>
    <script src="./Scripts/Flot/jquery.flot.pie.js"></script>
    <script src="./Scripts/Flot/jquery.flot.time.js"></script>
    <script src="./Scripts/Flot/jquery.flot.stack.js"></script>
    <script src="./Scripts/Flot/jquery.flot.resize.js"></script> -->
    <!-- Flot plugins -->
    <script src="./Scripts/Flot/jquery.flot.orderBars.js"></script>
    <script src="./Scripts/Flot/jquery.flot.spline.min.js"></script>
    <script src="./Scripts/Flot/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="./Scripts/build/date.js"></script>
    <!-- JQVMap -->
    <script src="./Scripts/dist/jquery.vmap.js"></script>
    <script src="./Scripts/dist/jquery.vmap.world.js"></script>
    <script src="./Scripts/dist/jquery.vmap.sampledata.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="./Scripts/custom.min.js"></script>

    <script>
        // 부트스트랩 css 반응형 때문에 추가함
        $(document).ready(function () {
            $('meta[name="viewport"]').prop('content', 'width=1440');
        });
        function CheckAlarm() {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/AlarmCheck.html');
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var msg = xhr.responseText;

                    var deposit = document.getElementById('liDeposit');
                    var withdraw = document.getElementById('liWithdraw');
                    var qna = document.getElementById('liQna');
                    var member = document.getElementById('liMember');

                    // 회원가입
                    if (msg.indexOf('member') > -1) {
                        member.style.display = 'inline';
                        var audio1 = new Audio("/Sound/member.mp3");
                        audio1.loop = false; // 반복재생하지 않음
                        audio1.volume = 1; // 음량 설정
                        audio1.play(); // sound2.mp3 재생
                    }
                    else {
                        member.style.display = 'none';
                    }

                    // 문의글
                    if (msg.indexOf('qna') > -1) {
                        qna.style.display = 'inline';
                        var audio2 = new Audio("/Sound/inquiry.mp3");
                        audio2.loop = false; // 반복재생하지 않음
                        audio2.volume = 1; // 음량 설정
                        audio2.play(); // sound2.mp3 재생
                    }
                    else {
                        qna.style.display = 'none';
                    }

                    // 출금
                    if (msg.indexOf('withdraw') > -1) {
                        withdraw.style.display = 'inline';
                        var audio3 = new Audio("/Sound/withdraw.mp3");
                        audio3.loop = false; // 반복재생하지 않음
                        audio3.volume = 1; // 음량 설정
                        audio3.play(); // sound2.mp3 재생
                    }
                    else {
                        withdraw.style.display = 'none';
                    }

                    // 입금
                    if (msg.indexOf('deposit') > -1) {
                        deposit.style.display = 'inline';
                        var audio4 = new Audio("/Sound/deposit.mp3");
                        audio4.loop = false; // 반복재생하지 않음
                        audio4.volume = 1; // 음량 설정
                        audio4.play(); // sound2.mp3 재생
                    }
                    else {
                        deposit.style.display = 'none';
                    }

                }
            }
            xhr.send();
        }
        CheckAlarm();
        playAlert = setInterval(function () {
            CheckAlarm();
        }, 30000);
        //clearInterval(playAlert);

    </script>


</body>

</html>
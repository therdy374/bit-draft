
<?php
    session_start();
    require_once("inc/connect.php");

    if (isset($_POST["btn_signin"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];


        $sql = "SELECT * FROM admins WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($user) {
            if (password_verify($password, $user["password"])) {

                $_SESSION['admin_id'] = $user['admin_id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['admin_level'] = $user['admin_level'];
                $_SESSION['referal_code'] = $user['referal_code'];
                $_SESSION['parent_name'] = $user['parent_name'];

                // if ($user['email']) {
                //     echo "<script>window.location.href='index.php';</script>";
                // }
                // die();

                if ($user['admin_level']) {
                    switch ($user['admin_level']) {
                        case 1:
                            echo "<script>alert('Welcome Admin! Level: 1'); window.location.href = './admin_level1/index_L1.php';</script>";
                            break;
                        case 2:
                            echo "<script>alert('Welcome Admin! Level: 2'); window.location.href = './admin_level2/index_L2.php';</script>";
                            break;
                        case 3:
                            echo "<script>alert('Welcome Admin! Level: 3'); window.location.href = './admin_level3/index_L3.php';</script>";
                            break;
                        case 4:
                            echo "<script>alert('Welcome Admin! Level: 4'); window.location.href = './admin_level4/index_L4.php';</script>";
                            break;
                        case 5:
                            echo "<script>alert('Welcome Admin! Level: 5'); window.location.href = 'index.php';</script>";
                            break;
                        default:
                            echo "<script>alert('Invalid admin level!'); window.location.href = 'index.php';</script>";
                            break;
                    }
                }

                die();
            } else {
                echo "<script>alert('Password does not match!')</script>";
            }
        } else {
            echo "<script>alert('Username does not exist in database!')</script>";
        }
    }

    if (isset($_SESSION['admin_id'])) {
        header("Location: index.php");
    }

    ?>

<html lang="en" class=" ">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1440">
    <meta name="robots" content="nosnippet">
    <meta name="robots" content="noarchive">
    <meta name="robots" content="noindex, nofollow">
    <title>
        비트프로 파트너페이지
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1440">
    <link rel="icon" href="/Img/logo_small.png" type="image/gif" sizes="16x16">
    <!-- Bootstrap -->
    <link href="./css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./css/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./css/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="./css/iCheck/green.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="./css/custom.min.css?d=20230518_911" rel="stylesheet">
    <link href="./css/bitrevadmin.css?d=20230518_911" rel="stylesheet">
    <style>
        .buttons {
            min-height: 200px;
        }

        #toast {
            position: fixed;
            min-width: 150px;
            top: 50px;
            right: 10px;
            text-align: right;
            z-index: 999999999999999;
        }

        #toast .toastWrap {
            margin: 6px 0 0;
            padding: 18px 0 15px;
            display: none;
        }

        .toast {
            border: 1px solid #F1D031;
            color: #444;
            background: #FFFFA3;
            box-shadow: 0 2px 3px #999;
            padding: 18px 20px 15px 8px;
            text-align: left;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            font-family: arial;
            font-size: 13px;
            white-space: pre;
            position: relative;
        }

        #toast b {
            display: block;
            position: absolute;
            top: 3px;
            right: 4px;
            width: 12px;
            height: 12px;
            font: normal 12px/1 Arial, sans-serif;
            text-align: right;
            cursor: pointer;
            text-shadow: #FFF 0 1px 0;
        }

        #toast b:before {
            content: "\2716";
        }

        .timerWrap {
            position: absolute;
            bottom: 4px;
            left: 4px;
            overflow: hidden;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
        }

        .timer {
            display: block;
            height: 4px;
            width: 0;
            background-color: #F1D031;
        }
    </style>

    <link href="css/modifiedlogin.css" rel="stylesheet">
</head>

<body class="nav-md" id="toremoveonlogin">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="/Dashboard.aspx" class="site_title"><i class="">
                                <img src="images/logo.png"></i><span><img src="images/logo_text.png"
                                    class="img-responsive center-block dashboard-header-img"></span>
                        </a>
                    </div>

                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                        </div>
                        <div class="profile_info">
                            <span>안녕하세요.</span>
                            <h2>님</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li id="liHome">
                                    <a><i class="fa fa-home"></i>홈 <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/Dashboard.aspx">대시보드</a></li>
                                    </ul>
                                </li>

                                <li id="liPartnerManagement">
                                    <a><i class="fa fa-user"></i>파트너 관리 <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/PartnerList.aspx">파트너 리스트</a></li>
                                        <li><a href="/JoinCode.aspx">가입코드 관리</a></li>

                                    </ul>
                                </li>
                                <li id="liCommManagement">
                                    <a><i class="fa fa-won"></i>커미션 관리 <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li id="liCommBubon"><a href="/CommissionListb.aspx">커미션 리스트 (부본사)</a></li>
                                        <li id="liCommChong"><a href="/CommissionListc.aspx">커미션 리스트 (총판)</a></li>
                                        <li><a href="/CommissionListd.aspx">커미션 리스트 (대리�&nbsp;�)</a></li>
                                        <li id="liCommBubon2"><a href="/CommissionList2b.aspx">커미션2 리스트 (부본사)</a></li>
                                        <li id="liCommChong2"><a href="/CommissionList2c.aspx">커미션2 리스트 (총판)</a></li>
                                        <li><a href="/CommissionList2d.aspx">커미션2 리스트 (대리�&nbsp;�)</a></li>
                                        <li><a href="/Withdraw.aspx">출금�&nbsp;청</a></li>
                                    </ul>
                                </li>
                                <li id="liUserManagement">
                                    <a><i class="fa fa-users"></i>회원 관리 <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/MemberList.aspx">회원 리스트</a></li>
                                        <li><a href="/TradeList.aspx">회원 거래내역 리스트</a></li>
                                        <li><a href="/MemberLogList.aspx">회원 로그</a></li>
                                    </ul>
                                </li>




                            </ul>
                        </div>

                    </div>
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
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">님
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/PartnerInfoModify.aspx">�&nbsp;�보수�&nbsp;�</a>
                                    <a class="dropdown-item" href="/Logout.aspx"><i
                                            class="fa fa-sign-out pull-right"></i>로그아웃</a>
                                </div>
                            </li>
                            <li id="liMember" style="display: none"><a href="/MemberList.aspx"><i
                                        class="fa fa-user"></i></a></li>
                            <li id="liQna" style="display: none"><a href="/InquiryList.aspx"><i
                                        class="fa fa-list"></i></a></li>

                            <li id="liDeposit" style="display: none"><a href="/BalanceMember.aspx?dw=deposit"><i
                                        class="fa fa-arrow-down"></i></a></li>
                            <li id="liWithdraw" style="display: none"><a href="/BalanceMember.aspx?dw=withdraw"><i
                                        class="fa fa-arrow-up"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <iframe id="iSound" style="display: none;"></iframe>

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



    <div class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form method="post" action="" id="form1" class="admin-login-form">
                            <div class="aspNetHidden">
                                <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                                    value="/wEPDwUJLTgxMDc1MDY0ZGTMS2bp1z3qmfYHu0A++D1Ci/uKHwux3lcVV2zwBxYySQ==">
                            </div>

                            <div class="aspNetHidden">

                                <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR"
                                    value="C2EE9ABB">
                                <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                                    value="/wEdAARfS2So5ZwAkKv/sgwgCz/8Cjh/QuvgFXkw9odO6wu6nhjlmLkyaGJbQXCoeVtMV6szm7eCRMwRk9tJPXCmq+H/2VmwgHxh5hwrkV8ClAY8gePZfdtTsVx3ww1XyTwZjqs=">
                            </div>

                            <h1>비트프로 파트너 로그인</h1>
                            <div>
                                <input name="username" type="text" id="Logincontent_txtPartnerId"
                                    class="form-control" placeholder="아이디" required="true">
                            </div>
                            <div>
                                <input name="password" type="password"
                                    id="Logincontent_txtPartnerPw" class="form-control" placeholder="비밀번호"
                                    required="true">
                            </div>
                            <div>
                                <input type="submit" name="btn_signin" value="로그인"
                                    id="Logincontent_btnLogin" class="btn btn-default bitrevlogin">
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">

                                <div class="clearfix"></div>
                                <br>

                                <div>
                                    <img src="images/logo.png" class="img-responsive center-block login-footer-img">
                                    <p>©2019 All Rights Reserved. bit-pro Admin Panel. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var tSomeStyleClasses = myTbl.getElementsByClassName("nav-md");
            while (tSomeStyleClasses.length) {
                tSomeStyleClasses[0].classList.remove("nav-md");
            }
        });
    </script>


    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="js/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="js/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="js/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="js/bootstrap-progressbar.min.js"></script>

    <!-- Flot -->
    <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.pie.js"></script>
    <script src="js/jquery.flot.time.js"></script>
    <script src="js/jquery.flot.stack.js"></script>
    <script src="js/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="js/jquery.flot.orderBars.js"></script>
    <script src="js/jquery.flot.spline.min.js"></script>
    <script src="js/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="js/date.js"></script>
    <!-- JQVMap -->
    <script src="js/jquery.vmap.js"></script>
    <script src="js/jquery.vmap.world.js"></script>
    <script src="js/jquery.vmap.sampledata.js"></script>


    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>

    <script>
        // 부트스트랩 css 반응형 때문에 추가함
        $(document).ready(function() {
            $('meta[name="viewport"]').prop('content', 'width=1440');
        });

        function CheckAlarm() {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/AlarmCheck.aspx');
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.onreadystatechange = function() {
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
                    } else {
                        member.style.display = 'none';
                    }

                    // 문의글
                    if (msg.indexOf('qna') > -1) {
                        qna.style.display = 'inline';
                        var audio2 = new Audio("/Sound/inquiry.mp3");
                        audio2.loop = false; // 반복재생하지 않음
                        audio2.volume = 1; // 음량 설정
                        audio2.play(); // sound2.mp3 재생
                    } else {
                        qna.style.display = 'none';
                    }

                    // 출금
                    if (msg.indexOf('withdraw') > -1) {
                        withdraw.style.display = 'inline';
                        var audio3 = new Audio("/Sound/withdraw.mp3");
                        audio3.loop = false; // 반복재생하지 않음
                        audio3.volume = 1; // 음량 설정
                        audio3.play(); // sound2.mp3 재생
                    } else {
                        withdraw.style.display = 'none';
                    }

                    // 입금
                    if (msg.indexOf('deposit') > -1) {
                        deposit.style.display = 'inline';
                        var audio4 = new Audio("/Sound/deposit.mp3");
                        audio4.loop = false; // 반복재생하지 않음
                        audio4.volume = 1; // 음량 설정
                        audio4.play(); // sound2.mp3 재생
                    } else {
                        deposit.style.display = 'none';
                    }

                }
            }
            xhr.send();
        }
        CheckAlarm();
        playAlert = setInterval(function() {
            CheckAlarm();
        }, 30000);
        //clearInterval(playAlert);
    </script>


</body>

</html>
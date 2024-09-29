<html lang="ko" class=" ">

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

</head>

<body class="nav-md" id="toremoveonlogin">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0; margin-top: 20px;">
                        <a href="Dashboard.html" class="site_title"><i class="">
                            <img src="./images/logo.png"></i>
                            <!-- <span><img src="./images/logo_text.png" class="img-responsive center-block dashboard-header-img"></span> -->
                        </a>
                    </div>

                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                        </div>
                        <div class="profile_info">
                            <span>안녕하세요.</span>
                            <h2>본사님</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section active">
                            <ul class="nav side-menu">
                                <li id="liHome" class="">
                                    <a><i class="fa fa-home"></i>홈 <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none;">
                                        <li class="current-page"><a href="Dashboard.html">대시보드</a></li>
                                    </ul>
                                </li>

                                <li id="liPartnerManagement">
                                    <a><i class="fa fa-user"></i>파트너 관리 <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="PartnerList.html">파트너 리스트</a></li>
                                        <li><a href="JoinCode.html">가입코드 관리</a></li>

                                    </ul>
                                </li>
                                <li id="liCommManagement">
                                    <a><i class="fa fa-won"></i>커미션 관리 <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li id="liCommBubon"><a href="CommissionListb.html">커미션 리스트 (부본사)</a></li>
                                        <li id="liCommChong"><a href="CommissionListc.html">커미션 리스트 (총판)</a></li>
                                        <li><a href="CommissionListd.html">커미션 리스트 (대리점)</a></li>
                                        <li id="liCommBubon2"><a href="CommissionList2b.html">커미션2 리스트 (부본사)</a></li>
                                        <li id="liCommChong2"><a href="CommissionList2c.html">커미션2 리스트 (총판)</a></li>
                                        <li><a href="CommissionList2d.html">커미션2 리스트 (대리점)</a></li>
                                        <li><a href="Withdraw.html">출금신청</a></li>
                                    </ul>
                                </li>
                                <li id="liUserManagement">
                                    <a><i class="fa fa-users"></i>회원 관리 <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="MemberList.html">회원 리스트</a></li>
                                        <li><a href="TradeList.html">회원 거래내역 리스트</a></li>
                                        <li><a href="MemberLogList.html">회원 로그</a></li>
                                    </ul>
                                </li>
                                <li id="liAdminOnly1">
                                    <a><i class="fa fa-bank"></i>입출금 관리 <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="BalancePartner.html">파트너 출금</a></li>
                                        <li><a href="BalanceMember.html?dw=deposit">회원 입금</a></li>
                                        <li><a href="BalanceMember.html?dw=withdraw">회원 출금</a></li>
                                    </ul>
                                </li>
                                <li id="liAdminOnly2">
                                    <a><i class="fa fa-list"></i>예수금 로그 관리 <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="BalancePartnerLog.html">파트너 입출금 로그</a></li>
                                        <li><a href="BalanceMemberLog.html">회원 입출금 로그</a></li>
                                    </ul>
                                </li>
                                <li id="liCoinList" class="">
                                    <a><i class="fa fa-bitcoin"></i>코인 관리 <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none;">
                                        <li><a href="CoinInfoModify.html">코인 리스트</a></li>
                                    </ul>
                                </li>
                                <li id="liCustomerService" class="">
                                    <a><i class="fa fa-commenting-o"></i>고객 센터 <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none;">
                                        <li><a href="Board/Notice.html?id=notice">공지 관리</a></li>
                                        <li><a href="MessageList.html">알림 관리</a></li>
                                        <li><a href="InquiryList.html">1:1 문의</a></li>
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
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">본사님
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="PartnerInfoModify.html">정보수정</a>
                                    <a class="dropdown-item" href="Logout.html"><i
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

            <form method="post" action="./MemberModify.aspx?userid=bird1234" id="form1" data-parsley-validate=""
                class="form-horizontal form-label-left" novalidate="">
                <div class="aspNetHidden">
                    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                        value="/wEPDwUKLTQyMDA4ODI2Mw9kFgJmD2QWCgIFDxYCHgdWaXNpYmxlZ2QCBg8WAh8AZ2QCBw8WAh8AZ2QCCA8WAh8AZ2QCCQ9kFgICAQ9kFgICAQ8WAh4EVGV4dAUVYmlyZDEyMzQ8YnI+7J2064+Z7JqwZGQStsx+VBS/K18DYC1mlL+9nYyTsof2MS7Sl9qjkH3pHQ==">
                </div>

                <div class="aspNetHidden">

                    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="8D79A43C">
                    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                        value="/wEdABAVx5GNfbLktc2+w4miepI8YZh6nNk85QUU2bR7Z3/ATxUeBwbo1Gd1iB6ZiCVpWMjJuA4OIXq/JzIzYv2eGqct8Xrky8cdZN6WIcRHendf3/hgkzb7vDONt+4aNeeKXcledHvYSEv0Er+IblM2rtTXP/+RoJ7nCWWaUDu+jwm5ng6Ni+RD4PHs02mvsaz6QlC0/y+x4Lhnx82uq3W2TAjm0537Kyb1F8R40BVYqxS6m9U2kPTos6ZXfJCNz/LD8eJKmi6ELfXLaPTwxGFHp89uaqmnK3PD2b8hs4lcyfaZTyEhYPnAVIclkFqrSOmYIuepzOqycFmYZkDx0O4i/xdUbUIT5BCnQz40U2AAewQdfyNN5kKfYBh6/YS0EIy/UQY=">
                </div>
                <div class="right_col" role="main" style="min-height: 766px;">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>회원정보</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <div class="x_content">
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6"
                                    style="width: 100%; height: 500px;">
                                    <div class="tile-stats">
                                        <div class="count">
                                            bird1234<br>이동우
                                        </div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="bank-name" class="col-form-label col-md-3 col-sm-3 label-align">
                                        비밀번호
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="ctl00$MainContent$txtPasswd1" type="text" value="456456s"
                                            id="MainContent_txtPasswd1" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="bank-name" class="col-form-label col-md-3 col-sm-3 label-align">
                                        비밀번호확인
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="ctl00$MainContent$txtPasswd2" type="text" value="456456s"
                                            id="MainContent_txtPasswd2" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="bank-name" class="col-form-label col-md-3 col-sm-3 label-align">
                                        전화번호
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="ctl00$MainContent$txtPhone" type="text" value="01012341234"
                                            id="MainContent_txtPhone" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="bank-name" class="col-form-label col-md-3 col-sm-3 label-align">
                                        은행명
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="ctl00$MainContent$txtBankName" type="text" value="김기"
                                            id="MainContent_txtBankName" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="bank-account" class="col-form-label col-md-3 col-sm-3 label-align">
                                        계좌번호
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="ctl00$MainContent$txtAccountNumber" type="text" value="11012341234"
                                            id="MainContent_txtAccountNumber" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="account-name" class="col-form-label col-md-3 col-sm-3 label-align">
                                        예금주
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="ctl00$MainContent$txtAccountName" type="text" value="이타"
                                            id="MainContent_txtAccountName" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="account-name" class="col-form-label col-md-3 col-sm-3 label-align">
                                        영구계좌
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="ctl00$MainContent$txtAccountDeposit" type="text"
                                            id="MainContent_txtAccountDeposit" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="bank-name" class="col-form-label col-md-3 col-sm-3 label-align">
                                        가입코드
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="ctl00$MainContent$txtJoinCode" type="text" value="대리점"
                                            id="MainContent_txtJoinCode" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="bank-name" class="col-form-label col-md-3 col-sm-3 label-align">
                                        메모
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="ctl00$MainContent$txtMemo" type="text" id="MainContent_txtMemo"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="bank-name" class="col-form-label col-md-3 col-sm-3 label-align">
                                        포지션 진입
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select name="ctl00$MainContent$skipOrder" id="MainContent_skipOrder"
                                            class="form-control">
                                            <option value="0">확인진입</option>
                                            <option selected="selected" value="1">자동진입</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="bank-name" class="col-form-label col-md-3 col-sm-3 label-align">
                                        회원상태
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select name="ctl00$MainContent$ddlStatus" id="MainContent_ddlStatus"
                                            class="form-control">
                                            <option selected="selected" value="0">정상</option>
                                            <option value="1">정지</option>
                                            <option value="2">탈퇴</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <input type="submit" name="ctl00$MainContent$btnModify" value="정보수정"
                                            id="MainContent_btnModify" class="btn btn-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


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
            xhr.open('POST', '/AlarmCheck.aspx');
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
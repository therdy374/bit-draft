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

            <form method="post" action="./CoinInfoModify.html" id="form2">
                <div class="aspNetHidden">
                    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                        value="/wEPDwUJODk2MzA0OTY4D2QWAmYPZBYKAgUPFgIeB1Zpc2libGVnZAIGDxYCHwBnZAIHDxYCHwBnZAIIDxYCHwBnZAIJD2QWAgIBD2QWBAIHDxYCHgRUZXh0BeE5DQoNCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9ImV2ZW4gcG9pbnRlciI+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+QlRDPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj7ruYTtirjsvZTsnbg8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjEyNTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iIGxhc3QiPjxhIGhyZWY9IyBvbkNsaWNrPSJzZXRJdGVtKCdCVEMnLCAxMjUpIiBkYXRhLXRvZ2dsZT0ibW9kYWwiIGRhdGEtdGFyZ2V0PSIjZXhhbXBsZU1vZGFsIj5ZRVM8L2E+PC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPg0KDQogICAgICAgICAgICAgICAgDQoNCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9Im9kZCBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5CVFM8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPuu5hO2KuOyJkOyWtDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+MTAwPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgbGFzdCI+PGEgaHJlZj0jIG9uQ2xpY2s9InNldEl0ZW0oJ0JUUycsIDEwMCkiIGRhdGEtdG9nZ2xlPSJtb2RhbCIgZGF0YS10YXJnZXQ9IiNleGFtcGxlTW9kYWwiPllFUzwvYT48L3RkPg0KICAgICAgICAgICAgICAgIDwvdHI+DQoNCiAgICAgICAgICAgICAgICANCg0KICAgICAgICAgICAgICAgIDx0ciBjbGFzcz0iZXZlbiBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5DRUxPPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj7shYDroZw8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjEwMDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iIGxhc3QiPjxhIGhyZWY9IyBvbkNsaWNrPSJzZXRJdGVtKCdDRUxPJywgMTAwKSIgZGF0YS10b2dnbGU9Im1vZGFsIiBkYXRhLXRhcmdldD0iI2V4YW1wbGVNb2RhbCI+WUVTPC9hPjwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCg0KICAgICAgICAgICAgICAgIA0KDQogICAgICAgICAgICAgICAgPHRyIGNsYXNzPSJvZGQgcG9pbnRlciI+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+Q0hSPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj7tgazroZzrr7jslYQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjEwMDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iIGxhc3QiPjxhIGhyZWY9IyBvbkNsaWNrPSJzZXRJdGVtKCdDSFInLCAxMDApIiBkYXRhLXRvZ2dsZT0ibW9kYWwiIGRhdGEtdGFyZ2V0PSIjZXhhbXBsZU1vZGFsIj5ZRVM8L2E+PC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPg0KDQogICAgICAgICAgICAgICAgDQoNCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9ImV2ZW4gcG9pbnRlciI+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+Q0haPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj7suaDrpqzspog8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjEwMDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iIGxhc3QiPjxhIGhyZWY9IyBvbkNsaWNrPSJzZXRJdGVtKCdDSFonLCAxMDApIiBkYXRhLXRvZ2dsZT0ibW9kYWwiIGRhdGEtdGFyZ2V0PSIjZXhhbXBsZU1vZGFsIj5ZRVM8L2E+PC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPg0KDQogICAgICAgICAgICAgICAgDQoNCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9Im9kZCBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5DT01QPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj7su7TtjIzsmrTrk5w8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjEwMDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iIGxhc3QiPjxhIGhyZWY9IyBvbkNsaWNrPSJzZXRJdGVtKCdDT01QJywgMTAwKSIgZGF0YS10b2dnbGU9Im1vZGFsIiBkYXRhLXRhcmdldD0iI2V4YW1wbGVNb2RhbCI+WUVTPC9hPjwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCg0KICAgICAgICAgICAgICAgIA0KDQogICAgICAgICAgICAgICAgPHRyIGNsYXNzPSJldmVuIHBvaW50ZXIiPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPkNSVjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+7Luk67iMPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4xMDA8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiBsYXN0Ij48YSBocmVmPSMgb25DbGljaz0ic2V0SXRlbSgnQ1JWJywgMTAwKSIgZGF0YS10b2dnbGU9Im1vZGFsIiBkYXRhLXRhcmdldD0iI2V4YW1wbGVNb2RhbCI+WUVTPC9hPjwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCg0KICAgICAgICAgICAgICAgIA0KDQogICAgICAgICAgICAgICAgPHRyIGNsYXNzPSJvZGQgcG9pbnRlciI+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+Q1RTSTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+7Lm066W07YWM7IucPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4xMDA8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiBsYXN0Ij48YSBocmVmPSMgb25DbGljaz0ic2V0SXRlbSgnQ1RTSScsIDEwMCkiIGRhdGEtdG9nZ2xlPSJtb2RhbCIgZGF0YS10YXJnZXQ9IiNleGFtcGxlTW9kYWwiPllFUzwvYT48L3RkPg0KICAgICAgICAgICAgICAgIDwvdHI+DQoNCiAgICAgICAgICAgICAgICANCg0KICAgICAgICAgICAgICAgIDx0ciBjbGFzcz0iZXZlbiBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5EQVI8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPuuLrOudvOuLiOyVhDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+MTAwPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgbGFzdCI+PGEgaHJlZj0jIG9uQ2xpY2s9InNldEl0ZW0oJ0RBUicsIDEwMCkiIGRhdGEtdG9nZ2xlPSJtb2RhbCIgZGF0YS10YXJnZXQ9IiNleGFtcGxlTW9kYWwiPllFUzwvYT48L3RkPg0KICAgICAgICAgICAgICAgIDwvdHI+DQoNCiAgICAgICAgICAgICAgICANCg0KICAgICAgICAgICAgICAgIDx0ciBjbGFzcz0ib2RkIHBvaW50ZXIiPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPkRBU0g8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPuuMgOyLnDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+MTAwPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgbGFzdCI+PGEgaHJlZj0jIG9uQ2xpY2s9InNldEl0ZW0oJ0RBU0gnLCAxMDApIiBkYXRhLXRvZ2dsZT0ibW9kYWwiIGRhdGEtdGFyZ2V0PSIjZXhhbXBsZU1vZGFsIj5ZRVM8L2E+PC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPg0KDQogICAgICAgICAgICAgICAgDQoNCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9ImV2ZW4gcG9pbnRlciI+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+REVOVDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+64207Yq4PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4xMDA8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiBsYXN0Ij48YSBocmVmPSMgb25DbGljaz0ic2V0SXRlbSgnREVOVCcsIDEwMCkiIGRhdGEtdG9nZ2xlPSJtb2RhbCIgZGF0YS10YXJnZXQ9IiNleGFtcGxlTW9kYWwiPllFUzwvYT48L3RkPg0KICAgICAgICAgICAgICAgIDwvdHI+DQoNCiAgICAgICAgICAgICAgICANCg0KICAgICAgICAgICAgICAgIDx0ciBjbGFzcz0ib2RkIHBvaW50ZXIiPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPkRHQjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+65SU7KeA67CU7J207Yq4PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4xMDA8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiBsYXN0Ij48YSBocmVmPSMgb25DbGljaz0ic2V0SXRlbSgnREdCJywgMTAwKSIgZGF0YS10b2dnbGU9Im1vZGFsIiBkYXRhLXRhcmdldD0iI2V4YW1wbGVNb2RhbCI+WUVTPC9hPjwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCg0KICAgICAgICAgICAgICAgIA0KDQogICAgICAgICAgICAgICAgPHRyIGNsYXNzPSJldmVuIHBvaW50ZXIiPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPkFSUEE8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPuyVjO2MjOyytOyduDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+MTAwPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgbGFzdCI+PGEgaHJlZj0jIG9uQ2xpY2s9InNldEl0ZW0oJ0FSUEEnLCAxMDApIiBkYXRhLXRvZ2dsZT0ibW9kYWwiIGRhdGEtdGFyZ2V0PSIjZXhhbXBsZU1vZGFsIj5ZRVM8L2E+PC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPg0KDQogICAgICAgICAgICAgICAgDQoNCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9Im9kZCBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5BVE9NPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj7svZTsiqTrqqjsiqTslYTthrA8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjEwMDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iIGxhc3QiPjxhIGhyZWY9IyBvbkNsaWNrPSJzZXRJdGVtKCdBVE9NJywgMTAwKSIgZGF0YS10b2dnbGU9Im1vZGFsIiBkYXRhLXRhcmdldD0iI2V4YW1wbGVNb2RhbCI+WUVTPC9hPjwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCg0KICAgICAgICAgICAgICAgIA0KDQogICAgICAgICAgICAgICAgPHRyIGNsYXNzPSJldmVuIHBvaW50ZXIiPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPkFVRElPPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj7smKTrlJTsmrDsiqQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjEwMDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iIGxhc3QiPjxhIGhyZWY9IyBvbkNsaWNrPSJzZXRJdGVtKCdBVURJTycsIDEwMCkiIGRhdGEtdG9nZ2xlPSJtb2RhbCIgZGF0YS10YXJnZXQ9IiNleGFtcGxlTW9kYWwiPllFUzwvYT48L3RkPg0KICAgICAgICAgICAgICAgIDwvdHI+DQoNCiAgICAgICAgICAgICAgICANCg0KICAgICAgICAgICAgICAgIDx0ciBjbGFzcz0ib2RkIHBvaW50ZXIiPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPkFWQVg8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPuyVhOuwnOuegOyytDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+MTAwPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgbGFzdCI+PGEgaHJlZj0jIG9uQ2xpY2s9InNldEl0ZW0oJ0FWQVgnLCAxMDApIiBkYXRhLXRvZ2dsZT0ibW9kYWwiIGRhdGEtdGFyZ2V0PSIjZXhhbXBsZU1vZGFsIj5ZRVM8L2E+PC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPg0KDQogICAgICAgICAgICAgICAgDQoNCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9ImV2ZW4gcG9pbnRlciI+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+QVhTPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj7sl5Hsi5zsnbjtlLzri4jti7A8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjEwMDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iIGxhc3QiPjxhIGhyZWY9IyBvbkNsaWNrPSJzZXRJdGVtKCdBWFMnLCAxMDApIiBkYXRhLXRvZ2dsZT0ibW9kYWwiIGRhdGEtdGFyZ2V0PSIjZXhhbXBsZU1vZGFsIj5ZRVM8L2E+PC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPg0KDQogICAgICAgICAgICAgICAgDQoNCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9Im9kZCBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5CQVQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPuuyoOydtOyngeyWtO2FkOyFmO2GoO2BsDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+MTAwPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgbGFzdCI+PGEgaHJlZj0jIG9uQ2xpY2s9InNldEl0ZW0oJ0JBVCcsIDEwMCkiIGRhdGEtdG9nZ2xlPSJtb2RhbCIgZGF0YS10YXJnZXQ9IiNleGFtcGxlTW9kYWwiPllFUzwvYT48L3RkPg0KICAgICAgICAgICAgICAgIDwvdHI+DQoNCiAgICAgICAgICAgICAgICANCg0KICAgICAgICAgICAgICAgIDx0ciBjbGFzcz0iZXZlbiBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5CQ0g8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPuu5hO2KuOy9lOyduOy6kOyLnDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+MTAwPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgbGFzdCI+PGEgaHJlZj0jIG9uQ2xpY2s9InNldEl0ZW0oJ0JDSCcsIDEwMCkiIGRhdGEtdG9nZ2xlPSJtb2RhbCIgZGF0YS10YXJnZXQ9IiNleGFtcGxlTW9kYWwiPllFUzwvYT48L3RkPg0KICAgICAgICAgICAgICAgIDwvdHI+DQoNCiAgICAgICAgICAgICAgICANCg0KICAgICAgICAgICAgICAgIDx0ciBjbGFzcz0ib2RkIHBvaW50ZXIiPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPkJMWjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+67iU66Oo7KCkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4xMDA8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiBsYXN0Ij48YSBocmVmPSMgb25DbGljaz0ic2V0SXRlbSgnQkxaJywgMTAwKSIgZGF0YS10b2dnbGU9Im1vZGFsIiBkYXRhLXRhcmdldD0iI2V4YW1wbGVNb2RhbCI+WUVTPC9hPjwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCg0KICAgICAgICAgICAgICAgIGQCCQ8WAh8BBe4BPHN0cm9uZz4xPC9zdHJvbmc+PGEgaHJlZj0nL0NvaW5JbmZvTW9kaWZ5LmFzcHg/JnBhZ2U9Mic+MjwvYT48YSBocmVmPScvQ29pbkluZm9Nb2RpZnkuYXNweD8mcGFnZT0zJz4zPC9hPjxhIGhyZWY9Jy9Db2luSW5mb01vZGlmeS5hc3B4PyZwYWdlPTQnPjQ8L2E+PGEgaHJlZj0nL0NvaW5JbmZvTW9kaWZ5LmFzcHg/JnBhZ2U9NSc+NTwvYT48YSBocmVmPScvQ29pbkluZm9Nb2RpZnkuYXNweD8mcGFnZT02Jz42PC9hPmRkVfUqdSqfifb1lWQBxPhu3cpsWvopeYCnyAPkQZv39qs=">
                </div>

                <div class="aspNetHidden">

                    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="1C64C3BE">
                    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                        value="/wEdAAsjmUqyLD6vJa2+59804udQE17LOc1QVYmglo3uMSa9mqxoqtIxbyWFl5x5VsYYLdhuxrQdsiPwBpy8qSmR5oqWn4j8c9nzo0RlxtfBH2PEDmkUh0dxt6FCJRTJ+EKlXn6apuPNL1sGpNK/19e/8bK4aqmnK3PD2b8hs4lcyfaZT0qaLoQt9cto9PDEYUenz26irV1GnsGXni+HWmtaW6c5yCFMijvTXeqMQmR859fIn6RWFRnG94sdPPljg6X/TjcH6mpzSLXqKb2gwqHLOrXD">
                </div>
                <!-- page content -->
                <div class="right_col" role="main" style="min-height: 1333px;">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>코인 관리</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">

                            <div class="x_title2">
                                <div class="col-lg-4 col-md-1 col-sm-12 adjusted-tablelage">
                                    <h2>코인 목록</h2>
                                </div>
                                <div class="col-lg-8 col-md-11 col-sm-12 pull-right">
                                    <div class="form-wrapper">
                                        <div class="form-inline">
                                            <div class="form-group search-form-group">
                                                <label class="col-form-label forty"></label>
                                            </div>
                                            <div class="form-group search-form-group">
                                                <label class="col-form-label forty">항목</label>
                                                <select name="ctl00$MainContent$ddlSearchCateg"
                                                    id="MainContent_ddlSearchCateg" class="form-control mobile-wide2">
                                                    <option value="cname">코인명(영문)</option>
                                                    <option value="cnameKr">코인명(한글)</option>

                                                </select>
                                            </div>
                                            <div class="form-group search-form-group">
                                                <label class="col-form-label forty">검색어</label>
                                                <input name="ctl00$MainContent$txtSkeyword" type="text"
                                                    id="MainContent_txtSkeyword" class="form-control mobile-wide2"
                                                    placeholder="">
                                            </div>
                                            <div class="button-handler-wrap">
                                                <input type="submit" name="ctl00$MainContent$btnSearch" value="검색"
                                                    id="MainContent_btnSearch"
                                                    class="btn btn-secondary left-button-adjusted-search">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>


                                <div class="x_content">

                                    <div class="table-responsive">
                                        <table class="table table-striped jambo_table bulk_action">
                                            <thead>
                                                <tr class="headings">
                                                    <th class="column-title">코인명</th>
                                                    <th class="column-title">코인명(한글)</th>
                                                    <th class="column-title">최대레버리지</th>
                                                    <th class="column-title">사용여부</th>
                                                </tr>
                                            </thead>

                                            <tbody>


                                                <tr class="even pointer">
                                                    <td class=" ">BTC</td>
                                                    <td class=" ">비트코인</td>
                                                    <td class=" ">125</td>
                                                    <td class=" last"><a href="#" onclick="setItem('BTC', 125)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="odd pointer">
                                                    <td class=" ">BTS</td>
                                                    <td class=" ">비트쉐어</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('BTS', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="even pointer">
                                                    <td class=" ">CELO</td>
                                                    <td class=" ">셀로</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('CELO', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="odd pointer">
                                                    <td class=" ">CHR</td>
                                                    <td class=" ">크로미아</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('CHR', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="even pointer">
                                                    <td class=" ">CHZ</td>
                                                    <td class=" ">칠리즈</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('CHZ', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="odd pointer">
                                                    <td class=" ">COMP</td>
                                                    <td class=" ">컴파운드</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('COMP', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="even pointer">
                                                    <td class=" ">CRV</td>
                                                    <td class=" ">커브</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('CRV', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="odd pointer">
                                                    <td class=" ">CTSI</td>
                                                    <td class=" ">카르테시</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('CTSI', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="even pointer">
                                                    <td class=" ">DAR</td>
                                                    <td class=" ">달라니아</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('DAR', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="odd pointer">
                                                    <td class=" ">DASH</td>
                                                    <td class=" ">대시</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('DASH', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="even pointer">
                                                    <td class=" ">DENT</td>
                                                    <td class=" ">덴트</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('DENT', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="odd pointer">
                                                    <td class=" ">DGB</td>
                                                    <td class=" ">디지바이트</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('DGB', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="even pointer">
                                                    <td class=" ">ARPA</td>
                                                    <td class=" ">알파체인</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('ARPA', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="odd pointer">
                                                    <td class=" ">ATOM</td>
                                                    <td class=" ">코스모스아톰</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('ATOM', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="even pointer">
                                                    <td class=" ">AUDIO</td>
                                                    <td class=" ">오디우스</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('AUDIO', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="odd pointer">
                                                    <td class=" ">AVAX</td>
                                                    <td class=" ">아발란체</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('AVAX', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="even pointer">
                                                    <td class=" ">AXS</td>
                                                    <td class=" ">엑시인피니티</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('AXS', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="odd pointer">
                                                    <td class=" ">BAT</td>
                                                    <td class=" ">베이직어텐션토큰</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('BAT', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="even pointer">
                                                    <td class=" ">BCH</td>
                                                    <td class=" ">비트코인캐시</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('BCH', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>



                                                <tr class="odd pointer">
                                                    <td class=" ">BLZ</td>
                                                    <td class=" ">블루젤</td>
                                                    <td class=" ">100</td>
                                                    <td class=" last"><a href="#" onclick="setItem('BLZ', 100)"
                                                            data-toggle="modal" data-target="#exampleModal">YES</a></td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="paging">
                                        <strong>1</strong><a href="/CoinInfoModify.html?&amp;page=2">2</a><a
                                            href="/CoinInfoModify.html?&amp;page=3">3</a><a
                                            href="/CoinInfoModify.html?&amp;page=4">4</a><a
                                            href="/CoinInfoModify.html?&amp;page=5">5</a><a
                                            href="/CoinInfoModify.html?&amp;page=6">6</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">코인명</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="ctl00$MainContent$hdnCName" id="hdnCName">
                                    <select name="ctl00$MainContent$ddlStatus" id="MainContent_ddlStatus"
                                        class="form-control">
                                        <option value="">사용여부 선택</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>

                                    </select>
                                    <br>
                                    <input name="ctl00$MainContent$txtMaxLeverage" type="text" id="txtMaxLeverage"
                                        class="form-control" placeholder="레버리지 입력 (최대 100)">
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" name="ctl00$MainContent$btnStatusSave" value="저장"
                                        id="MainContent_btnStatusSave" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /page content -->
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
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


            <!-- page content -->
            <section class="inquiryContainer">
                <form method="post" action="./InquiryList.html" id="form1">
                    <div class="aspNetHidden">
                        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                            value="/wEPDwULLTExOTI5ODE0NDkPZBYCZg9kFgoCBQ8WAh4HVmlzaWJsZWdkAgYPFgIfAGdkAgcPFgIfAGdkAggPFgIfAGdkAgkPZBYCAgEPZBYEAgMPFgIeBFRleHQF2kQNCiAgICAgICAgICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0iZGVsQm94IiB2YWx1ZT0iMjgyIj48L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjxhIGhyZWY9Ii9JbnF1aXJ5TGlzdERldGFpbC5hc3B4P3Jubz0yODIiPuqzhOyijCDrrLjsnZg8L2E+IDxpIGNsYXNzPSdmYSBmYS1leGNsYW1hdGlvbi1jaXJjbGUnPjwvaT48L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPuyeheq4iOyghOyaqeqzhOyijCDrrLjsnZjtlanri4jri6Q8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPmQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjIwMjQtMDUtMjkg7Jik7ZuEIDY6MDM6NDU8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PGlucHV0IHR5cGU9ImNoZWNrYm94IiBuYW1lPSJkZWxCb3giIHZhbHVlPSIyODEiPjwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PGEgaHJlZj0iL0lucXVpcnlMaXN0RGV0YWlsLmFzcHg/cm5vPTI4MSI+6rOE7KKMIOusuOydmDwvYT4gPGkgY2xhc3M9J2ZhIGZhLWV4Y2xhbWF0aW9uLWNpcmNsZSc+PC9pPjwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+7J6F6riI7KCE7Jqp6rOE7KKMIOusuOydmO2VqeuLiOuLpDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+ZDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+MjAyNC0wNS0yOSDsmKTtm4QgNTozOToyNTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9ImRlbEJveCIgdmFsdWU9IjI4MCI+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48YSBocmVmPSIvSW5xdWlyeUxpc3REZXRhaWwuYXNweD9ybm89MjgwIj7qs4Tsoowg66y47J2YPC9hPiA8aSBjbGFzcz0nZmEgZmEtZXhjbGFtYXRpb24tY2lyY2xlJz48L2k+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD7snoXquIjsoITsmqnqs4Tsoowg66y47J2Y7ZWp64uI64ukPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD5kPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4yMDI0LTA1LTI5IOyYpO2bhCA1OjMwOjA2PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0iZGVsQm94IiB2YWx1ZT0iMjc5Ij48L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjxhIGhyZWY9Ii9JbnF1aXJ5TGlzdERldGFpbC5hc3B4P3Jubz0yNzkiPuqzhOyijCDrrLjsnZg8L2E+IDxpIGNsYXNzPSdmYSBmYS1leGNsYW1hdGlvbi1jaXJjbGUnPjwvaT48L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPuyeheq4iOyghOyaqeqzhOyijCDrrLjsnZjtlanri4jri6Q8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPmQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjIwMjQtMDUtMjkg7Jik7ZuEIDU6MjI6MDM8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PGlucHV0IHR5cGU9ImNoZWNrYm94IiBuYW1lPSJkZWxCb3giIHZhbHVlPSIyNzgiPjwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PGEgaHJlZj0iL0lucXVpcnlMaXN0RGV0YWlsLmFzcHg/cm5vPTI3OCI+6rOE7KKMIOusuOydmDwvYT4gPGkgY2xhc3M9J2ZhIGZhLWV4Y2xhbWF0aW9uLWNpcmNsZSc+PC9pPjwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+7J6F6riI7KCE7Jqp6rOE7KKMIOusuOydmO2VqeuLiOuLpDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+ZDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+MjAyNC0wNS0yOSDsmKTtm4QgNDoyNTozNjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9ImRlbEJveCIgdmFsdWU9IjI3NyI+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48YSBocmVmPSIvSW5xdWlyeUxpc3REZXRhaWwuYXNweD9ybm89Mjc3Ij7qs4Tsoowg66y47J2YPC9hPiA8aSBjbGFzcz0nZmEgZmEtZXhjbGFtYXRpb24tY2lyY2xlJz48L2k+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD7snoXquIjsoITsmqnqs4Tsoowg66y47J2Y7ZWp64uI64ukPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD7svZTsnbjshpTro6jshZjthYzsiqTtirgxMTwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+MjAyNC0wNS0yNyDsmKTtm4QgMTozOTozNzwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9ImRlbEJveCIgdmFsdWU9IjI3NiI+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48YSBocmVmPSIvSW5xdWlyeUxpc3REZXRhaWwuYXNweD9ybm89Mjc2Ij7qs4Tsoowg66y47J2YPC9hPiA8aSBjbGFzcz0nZmEgZmEtZXhjbGFtYXRpb24tY2lyY2xlJz48L2k+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD7snoXquIjsoITsmqnqs4Tsoowg66y47J2Y7ZWp64uI64ukPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD7svZTsnbjshpTro6jshZjthYzsiqTtirgxMTwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+MjAyNC0wNS0yNyDsmKTtm4QgMTozOTozNTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9ImRlbEJveCIgdmFsdWU9IjI3NSI+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48YSBocmVmPSIvSW5xdWlyeUxpc3REZXRhaWwuYXNweD9ybm89Mjc1Ij7qs4Tsoowg66y47J2YPC9hPiA8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPuyeheq4iOyghOyaqeqzhOyijCDrrLjsnZjtlanri4jri6Q8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPuy9lOyduOyGlOujqOyFmO2FjOyKpO2KuDExPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4yMDI0LTA1LTI3IOyYpOyghCA4OjU5OjExPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0iZGVsQm94IiB2YWx1ZT0iMjc0Ij48L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjxhIGhyZWY9Ii9JbnF1aXJ5TGlzdERldGFpbC5hc3B4P3Jubz0yNzQiPuqzhOyijCDrrLjsnZg8L2E+IDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+7J6F6riI7KCE7Jqp6rOE7KKMIOusuOydmO2VqeuLiOuLpDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+ZDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+MjAyNC0wNS0yMCDsmKTtm4QgNzo1MDo0ODwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9ImRlbEJveCIgdmFsdWU9IjI3MyI+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48YSBocmVmPSIvSW5xdWlyeUxpc3REZXRhaWwuYXNweD9ybm89MjczIj7qs4Tsoowg66y47J2YPC9hPiA8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPuyeheq4iOyghOyaqeqzhOyijCDrrLjsnZjtlanri4jri6Q8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPuy9lOyduOyGlOujqOyFmO2FjOyKpO2KuDE8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjIwMjQtMDUtMTAg7Jik7ZuEIDQ6MzE6NDc8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PGlucHV0IHR5cGU9ImNoZWNrYm94IiBuYW1lPSJkZWxCb3giIHZhbHVlPSIyNzIiPjwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PGEgaHJlZj0iL0lucXVpcnlMaXN0RGV0YWlsLmFzcHg/cm5vPTI3MiI+6rOE7KKMIOusuOydmDwvYT4gPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD7snoXquIjsoITsmqnqs4Tsoowg66y47J2Y7ZWp64uI64ukPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD7svZTsnbjshpTro6jshZg8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjIwMjQtMDUtMDcg7Jik7ZuEIDEyOjIzOjQ4PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0iZGVsQm94IiB2YWx1ZT0iMjYiPjwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PGEgaHJlZj0iL0lucXVpcnlMaXN0RGV0YWlsLmFzcHg/cm5vPTI2Ij7qs4Tsoowg66y47J2YPC9hPiA8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPuyeheq4iOyghOyaqeqzhOyijCDrrLjsnZjtlanri4jri6Q8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPuq5gO2DnOyImDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+MjAyNC0wMS0wOSDsmKTtm4QgNToxMzo0NTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9ImRlbEJveCIgdmFsdWU9IjI1Ij48L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjxhIGhyZWY9Ii9JbnF1aXJ5TGlzdERldGFpbC5hc3B4P3Jubz0yNSI+6rOE7KKMIOusuOydmDwvYT4gPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD7snoXquIjsoITsmqnqs4Tsoowg66y47J2Y7ZWp64uI64ukPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD7quYDtg5zsiJg8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjIwMjQtMDEtMDkg7Jik7ZuEIDQ6NDA6NDQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PGlucHV0IHR5cGU9ImNoZWNrYm94IiBuYW1lPSJkZWxCb3giIHZhbHVlPSIyNCI+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48YSBocmVmPSIvSW5xdWlyeUxpc3REZXRhaWwuYXNweD9ybm89MjQiPuqzhOyijCDrrLjsnZg8L2E+IDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+7J6F6riI7KCE7Jqp6rOE7KKMIOusuOydmO2VqeuLiOuLpDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+MTExMTExPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4yMDI0LTAxLTA5IOyYpOyghCA4OjI1OjQ0PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0iZGVsQm94IiB2YWx1ZT0iMjMiPjwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PGEgaHJlZj0iL0lucXVpcnlMaXN0RGV0YWlsLmFzcHg/cm5vPTIzIj7qs4Tsoowg66y47J2YPC9hPiA8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPuyeheq4iOyghOyaqeqzhOyijCDrrLjsnZjtlanri4jri6Q8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjExMTExMTwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+MjAyMy0xMi0xNyDsmKTtm4QgOToyNDoxODwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9ImRlbEJveCIgdmFsdWU9IjIyIj48L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjxhIGhyZWY9Ii9JbnF1aXJ5TGlzdERldGFpbC5hc3B4P3Jubz0yMiI+6rOE7KKMIOusuOydmDwvYT4gPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD7snoXquIjsoITsmqnqs4Tsoowg66y47J2Y7ZWp64uI64ukPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4xMTExMTE8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjIwMjMtMTItMTcg7Jik7ZuEIDk6MTg6Mjg8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PGlucHV0IHR5cGU9ImNoZWNrYm94IiBuYW1lPSJkZWxCb3giIHZhbHVlPSIyMSI+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48YSBocmVmPSIvSW5xdWlyeUxpc3REZXRhaWwuYXNweD9ybm89MjEiPuqzhOyijCDrrLjsnZg8L2E+IDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+7J6F6riI7KCE7Jqp6rOE7KKMIOusuOydmO2VqeuLiOuLpDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+MTExMTExPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4yMDIzLTEyLTE3IOyYpO2bhCA4OjMzOjE0PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0iZGVsQm94IiB2YWx1ZT0iMjAiPjwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PGEgaHJlZj0iL0lucXVpcnlMaXN0RGV0YWlsLmFzcHg/cm5vPTIwIj7qs4Tsoowg66y47J2YPC9hPiA8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPuyeheq4iOyghOyaqeqzhOyijCDrrLjsnZjtlanri4jri6Q8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjExMTExMTwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+MjAyMy0xMi0xNSDsmKTtm4QgMjoxNTozOTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9ImRlbEJveCIgdmFsdWU9IjE5Ij48L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjxhIGhyZWY9Ii9JbnF1aXJ5TGlzdERldGFpbC5hc3B4P3Jubz0xOSI+6rOE7KKMIOusuOydmDwvYT4gPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD7snoXquIjsoITsmqnqs4Tsoowg66y47J2Y7ZWp64uI64ukPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD5URVNUMzwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+MjAyMy0xMi0wOSDsmKTtm4QgOTo1Mzo0MjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD48aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9ImRlbEJveCIgdmFsdWU9IjE4Ij48L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPjxhIGhyZWY9Ii9JbnF1aXJ5TGlzdERldGFpbC5hc3B4P3Jubz0xOCI+6rGw656Y6rSA66CoIOusuOydmDwvYT4gPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD7thZTroIggYm5zMTA0MiDsnbTrtoQg67O47IKs67aEIOunnuuCmOyalCZuYnNwOyDsl6zquLDripQg642w66qo7Y6Y7J207KeAIOunnuq1rOyalD8g7IOY7ZSM7Y6Y7J207KeAPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4xPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4yMDIzLTEyLTA2IOyYpO2bhCAxMDo1NjozNjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgZAIHDxYCHwEFPDxzdHJvbmc+MTwvc3Ryb25nPjxhIGhyZWY9Jy9JbnF1aXJ5TGlzdC5hc3B4PzEmcGFnZT0yJz4yPC9hPmQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgEFG2N0bDAwJE1haW5Db250ZW50JENoZWNrQm94Mn5FZ5ioWy9KIRs+HCvbTpeYTL0SqZk1e2NvcSLBST/E">
                    </div>

                    <div class="aspNetHidden">

                        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="B4E2DFBD">
                        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                            value="/wEdAANW7iESQovWvNV8Hv3ddvKW9ivB2GC3piDWitc6Kjp93cf/w9PQVEOnbRSKp6lv3pUeJxt1nuexOauOretet7Qp9GOo5IhHH4Wb+JG88MehUA==">
                    </div>

                    <div class="right_col" role="main" style="min-height: 1442px;">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>1:1 문의</h3>

                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title2">

                                    <div class="x_content">
                                        <div class="form-inline">
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped jambo_table bulk_action">
                                                <thead>
                                                    <tr class="headings">
                                                        <th><input id="MainContent_CheckBox2" type="checkbox"
                                                                name="ctl00$MainContent$CheckBox2"
                                                                onclick="CheckAll(this);"> </th>
                                                        <th class="column-title">제목</th>
                                                        <th class="column-title">내용</th>
                                                        <th class="column-title">고객명</th>
                                                        <th class="column-title">작성일자</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="282"></td>
                                                        <td><a href="InquiryListDetail.html?rno=282">계좌 문의</a> <i
                                                                class="fa fa-exclamation-circle"></i></td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>d</td>
                                                        <td>2024-05-29 오후 6:03:45</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="281"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=281">계좌 문의</a> <i
                                                                class="fa fa-exclamation-circle"></i></td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>d</td>
                                                        <td>2024-05-29 오후 5:39:25</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="280"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=280">계좌 문의</a> <i
                                                                class="fa fa-exclamation-circle"></i></td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>d</td>
                                                        <td>2024-05-29 오후 5:30:06</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="279"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=279">계좌 문의</a> <i
                                                                class="fa fa-exclamation-circle"></i></td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>d</td>
                                                        <td>2024-05-29 오후 5:22:03</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="278"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=278">계좌 문의</a> <i
                                                                class="fa fa-exclamation-circle"></i></td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>d</td>
                                                        <td>2024-05-29 오후 4:25:36</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="277"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=277">계좌 문의</a> <i
                                                                class="fa fa-exclamation-circle"></i></td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>코인솔루션테스트11</td>
                                                        <td>2024-05-27 오후 1:39:37</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="276"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=276">계좌 문의</a> <i
                                                                class="fa fa-exclamation-circle"></i></td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>코인솔루션테스트11</td>
                                                        <td>2024-05-27 오후 1:39:35</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="275"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=275">계좌 문의</a> </td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>코인솔루션테스트11</td>
                                                        <td>2024-05-27 오전 8:59:11</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="274"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=274">계좌 문의</a> </td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>d</td>
                                                        <td>2024-05-20 오후 7:50:48</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="273"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=273">계좌 문의</a> </td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>코인솔루션테스트1</td>
                                                        <td>2024-05-10 오후 4:31:47</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="272"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=272">계좌 문의</a> </td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>코인솔루션</td>
                                                        <td>2024-05-07 오후 12:23:48</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="26"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=26">계좌 문의</a> </td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>김태수</td>
                                                        <td>2024-01-09 오후 5:13:45</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="25"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=25">계좌 문의</a> </td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>김태수</td>
                                                        <td>2024-01-09 오후 4:40:44</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="24"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=24">계좌 문의</a> </td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>111111</td>
                                                        <td>2024-01-09 오전 8:25:44</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="23"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=23">계좌 문의</a> </td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>111111</td>
                                                        <td>2023-12-17 오후 9:24:18</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="22"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=22">계좌 문의</a> </td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>111111</td>
                                                        <td>2023-12-17 오후 9:18:28</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="21"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=21">계좌 문의</a> </td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>111111</td>
                                                        <td>2023-12-17 오후 8:33:14</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="20"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=20">계좌 문의</a> </td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>111111</td>
                                                        <td>2023-12-15 오후 2:15:39</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="19"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=19">계좌 문의</a> </td>
                                                        <td>입금전용계좌 문의합니다</td>
                                                        <td>TEST3</td>
                                                        <td>2023-12-09 오후 9:53:42</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="checkbox" name="delBox" value="18"></td>
                                                        <td><a href="/InquiryListDetail.html?rno=18">거래관련 문의</a> </td>
                                                        <td>텔레 bns1042 이분 본사분 맞나요&nbsp; 여기는 데모페이지 맞구요? 샘플페이지</td>
                                                        <td>1</td>
                                                        <td>2023-12-06 오후 10:56:36</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="search-div">
                                        </div>

                                        <input type="submit" name="ctl00$MainContent$btnDeleteBtn" value="삭제"
                                            id="MainContent_btnDeleteBtn">

                                        <div class="paging">
                                            <strong>1</strong><a href="/InquiryList.html?1&amp;page=2">2</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /page content -->
                    </div>
                </form>
            </section>


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
    <!-- <script src="./Scripts/Flot/jquery.flot.orderBars.js"></script>
    <script src="./Scripts/Flot/jquery.flot.spline.min.js"></script>
    <script src="./Scripts/Flot/curvedLines.js"></script> -->
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
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

            <form method="post" action="./MemberLogList.html" id="form2">
                <div class="aspNetHidden">
                    <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
                    <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
                    <input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
                    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                        value="/wEPDwUJNjUxMjY5ODA5D2QWAmYPZBYKAgUPFgIeB1Zpc2libGVnZAIGDxYCHwBnZAIHDxYCHwBnZAIIDxYCHwBnZAIJD2QWAgIBD2QWEAIBDxBkZBYBAgFkAgMPEGRkFgFmZAIFDxBkZBYBZmQCBw8WAh4EVGV4dAVEPHNwYW4gc3R5bGU9J2ZvbnQtc2l6ZToyMHB4OyBwYWRkaW5nLWxlZnQ6MzBweDsnPuyghOyytCAxNeuqhTwvc3Bhbj5kAgkPFgIfAQXmSQ0KICAgICAgICAgICAgICAgIDx0ciBjbGFzcz0iZXZlbiBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPmJpcmQxMjM0PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj48YSBocmVmPSIvTWVtYmVyTW9kaWZ5LmFzcHg/dXNlcmlkPWJpcmQxMjM0Ij7snbTrj5nsmrA8L2E+PC90ZD4gICAgICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+MjAyNC0wNS0xNSDsmKTtm4QgMzoyNTozMjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+Yml0LXRlc3R0ZXN0LmNvbTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICIgc3R5bGU9InRleHQtYWxpZ246cmlnaHQiPjEwLDAwMCwwMDAg7JuQPGJyPjcsMzM1LjQ2NiAkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodCI+MCDsm5A8YnI+MC4wMDAgJDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICIgc3R5bGU9InRleHQtYWxpZ246cmlnaHQiPjIwMjQtMDMtMTkg7Jik7ZuEIDM6MDA6MTc8L3RkPg0KICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgPHRyIGNsYXNzPSJvZGQgcG9pbnRlciI+DQogICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj54b3RuMTIzPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj48YSBocmVmPSIvTWVtYmVyTW9kaWZ5LmFzcHg/dXNlcmlkPXhvdG4xMjMiPuq5gO2DnOyImDwvYT48L3RkPiAgICAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4yMDI0LTAxLTA5IOyYpO2bhCA3OjUwOjAwPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5iaXQtdGVzdHRlc3QuY29tPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodCI+MTAsMDAwLDAwMCDsm5A8YnI+Nyw0NzAuOTM4ICQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij4wIOybkDxicj4wLjAwMCAkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodCI+MjAyNC0wMS0wOSDsmKTtm4QgNDozMjowMDwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9ImV2ZW4gcG9pbnRlciI+DQogICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj45ODc2NTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+PGEgaHJlZj0iL01lbWJlck1vZGlmeS5hc3B4P3VzZXJpZD05ODc2NSI+MDwvYT48L3RkPiAgICAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4yMDIzLTEwLTI2IOyYpOyghCA3OjMxOjAwPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5iaXQtdGVzdHRlc3QuY29tPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodCI+ODAsMDAwLDAwMCDsm5A8YnI+NTgsMTMyLjc3NSAkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodCI+MCDsm5A8YnI+MC4wMDAgJDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICIgc3R5bGU9InRleHQtYWxpZ246cmlnaHQiPjIwMjMtMTAtMjAg7Jik7ZuEIDg6NDQ6MDA8L3RkPg0KICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgPHRyIGNsYXNzPSJvZGQgcG9pbnRlciI+DQogICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5zdGFyMTE8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjxhIGhyZWY9Ii9NZW1iZXJNb2RpZnkuYXNweD91c2VyaWQ9c3RhcjExIj4wPC9hPjwvdGQ+ICAgICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjIwMjMtMTAtMTQg7Jik7ZuEIDEwOjIxOjAwPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj48L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij4wIOybkDxicj4wLjAwMCAkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodCI+MCDsm5A8YnI+MC4wMDAgJDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICIgc3R5bGU9InRleHQtYWxpZ246cmlnaHQiPjIwMjMtMTAtMTQg7Jik7ZuEIDEwOjIxOjAwPC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgIDx0ciBjbGFzcz0iZXZlbiBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPmRhZXJpMTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+PGEgaHJlZj0iL01lbWJlck1vZGlmeS5hc3B4P3VzZXJpZD1kYWVyaTEiPuuMgOumrOygkDE8L2E+PC90ZD4gICAgICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+MjAyMy0xMC0xNSDsmKTtm4QgMTA6NTY6MDA8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPmJpdC10ZXN0dGVzdC5jb208L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij4yMCwwMDAsMDAwIOybkDxicj4xNCw1MjcuODEwICQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij4wIOybkDxicj4wLjAwMCAkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodCI+MjAyMy0xMC0xMyDsmKTtm4QgOToxOTowMDwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9Im9kZCBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPnF3ZXIxPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj48YSBocmVmPSIvTWVtYmVyTW9kaWZ5LmFzcHg/dXNlcmlkPXF3ZXIxIj4xPC9hPjwvdGQ+ICAgICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjIwMjMtMTAtMTMg7Jik7ZuEIDk6MTU6MDA8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPmJpdC10ZXN0dGVzdC5jb208L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij4yMCwwMDAsMDAwIOybkDxicj4xNCw1NDkuMjY0ICQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij4wIOybkDxicj4wLjAwMCAkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodCI+MjAyMy0xMC0xMyDsmKTtm4QgNjoxMjowMDwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9ImV2ZW4gcG9pbnRlciI+DQogICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj56enp6eDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+PGEgaHJlZj0iL01lbWJlck1vZGlmeS5hc3B4P3VzZXJpZD16enp6eCI+MTwvYT48L3RkPiAgICAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4yMDIzLTEyLTA2IOyYpO2bhCAxMDo1OTowMDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+Yml0LXRlc3R0ZXN0LmNvbTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICIgc3R5bGU9InRleHQtYWxpZ246cmlnaHQiPjEwLDAwMCwwMDAg7JuQPGJyPjcsMjc3LjMzMiAkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodCI+MCDsm5A8YnI+MC4wMDAgJDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICIgc3R5bGU9InRleHQtYWxpZ246cmlnaHQiPjIwMjMtMTAtMTMg7Jik7ZuEIDM6NTM6MDA8L3RkPg0KICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgPHRyIGNsYXNzPSJvZGQgcG9pbnRlciI+DQogICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4yMjMzPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj48YSBocmVmPSIvTWVtYmVyTW9kaWZ5LmFzcHg/dXNlcmlkPTIyMzMiPmE8L2E+PC90ZD4gICAgICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+MjAyMy0xMC0xMyDsmKTsoIQgMTI6MTM6MDA8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPmJpdC10ZXN0dGVzdC5jb208L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij40MCwwMDAsMDAwIOybkDxicj4yOSwyMjguNDQyICQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij4wIOybkDxicj4wLjAwMCAkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodCI+MjAyMy0xMC0xMyDsmKTsoIQgMTI6MTA6MDA8L3RkPg0KICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgPHRyIGNsYXNzPSJldmVuIHBvaW50ZXIiPg0KICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+MTEyMjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+PGEgaHJlZj0iL01lbWJlck1vZGlmeS5hc3B4P3VzZXJpZD0xMTIyIj4xPC9hPjwvdGQ+ICAgICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjIwMjMtMTAtMTgg7Jik7ZuEIDc6NDc6MDA8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPmJpdC10ZXN0dGVzdC5jb208L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij40MCwwMDAsMDAwIOybkDxicj4yOSwyODIuNzkxICQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij4wIOybkDxicj4wLjAwMCAkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodCI+MjAyMy0xMC0xMiDsmKTtm4QgMTE6MDY6MDA8L3RkPg0KICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgPHRyIGNsYXNzPSJvZGQgcG9pbnRlciI+DQogICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4xMjMxMjM8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjxhIGhyZWY9Ii9NZW1iZXJNb2RpZnkuYXNweD91c2VyaWQ9MTIzMTIzIj4xPC9hPjwvdGQ+ICAgICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjIwMjMtMDktMjEg7Jik7ZuEIDU6Mjc6MDA8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPmJpdC10ZXN0dGVzdC5jb208L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij45MCwwMDAsMDAwIOybkDxicj42Niw3MzYuMzY5ICQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij4wIOybkDxicj4wLjAwMCAkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodCI+MjAyMy0wOS0xMiDsmKTtm4QgMToyMDowMDwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9ImV2ZW4gcG9pbnRlciI+DQogICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4xMTExMTE8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjxhIGhyZWY9Ii9NZW1iZXJNb2RpZnkuYXNweD91c2VyaWQ9MTExMTExIj4xMTExMTE8L2E+PC90ZD4gICAgICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+MjAyNC0wNS0wOSDsmKTsoIQgMTA6MDc6MTg8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPmJpdC10ZXN0dGVzdC5jb208L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij42MSwyMDAsMDAwIOybkDxicj40NiwwNDEuNjQ5ICQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij44LDAxOSw5NDkg7JuQPGJyPjYsMjEwLjAwMCAkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodCI+MjAyMy0wOS0wNCDsmKTtm4QgOTozODowMDwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9Im9kZCBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPnRlc3QxMTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+PGEgaHJlZj0iL01lbWJlck1vZGlmeS5hc3B4P3VzZXJpZD10ZXN0MTEiPuq5gOyImOqyvTwvYT48L3RkPiAgICAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4yMDIzLTA5LTAzIOyYpOyghCA5OjEyOjAwPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj48L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij4xMCwwMDAsMDAwIOybkDxicj43LDQzNy4wNDUgJDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICIgc3R5bGU9InRleHQtYWxpZ246cmlnaHQiPjAg7JuQPGJyPjAuMDAwICQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij4yMDIzLTA5LTAyIOyYpO2bhCAyOjE3OjAwPC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgIDx0ciBjbGFzcz0iZXZlbiBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPmRkZGRkZDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+PGEgaHJlZj0iL01lbWJlck1vZGlmeS5hc3B4P3VzZXJpZD1kZGRkZGQiPmQ8L2E+PC90ZD4gICAgICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+MjAyMy0xMS0yNCDsmKTtm4QgNTo0NjowMDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+Yml0LXRlc3R0ZXN0LmNvbTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICIgc3R5bGU9InRleHQtYWxpZ246cmlnaHQiPjIxLDAwMCwwMDAg7JuQPGJyPjE1LDQ5OC44NDMgJDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICIgc3R5bGU9InRleHQtYWxpZ246cmlnaHQiPjAg7JuQPGJyPjAuMDAwICQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij4yMDIzLTA4LTE4IOyYpOyghCA3OjAzOjAwPC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgIDx0ciBjbGFzcz0ib2RkIHBvaW50ZXIiPg0KICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+c3Nzc3NzPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj48YSBocmVmPSIvTWVtYmVyTW9kaWZ5LmFzcHg/dXNlcmlkPXNzc3NzcyI+ZDwvYT48L3RkPiAgICAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4yMDI0LTA1LTMwIOyYpO2bhCAzOjI4OjMzPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5iaXQtdGVzdHRlc3QuY29tPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodCI+MTAsMjAwLDAwMCDsm5A8YnI+Nyw0ODIuNTczICQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij4wIOybkDxicj4wLjAwMCAkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodCI+MjAyMy0wOC0xOCDsmKTsoIQgMjo1MDowMDwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9ImV2ZW4gcG9pbnRlciI+DQogICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj50dGExPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj48YSBocmVmPSIvTWVtYmVyTW9kaWZ5LmFzcHg/dXNlcmlkPXR0YTEiPu2FjOyKpO2KuDE8L2E+PC90ZD4gICAgICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+MjAyNC0wNC0wNCDsmKTsoIQgMTE6MTg6MTQ8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPmJpdC10ZXN0dGVzdC5jb208L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiIHN0eWxlPSJ0ZXh0LWFsaWduOnJpZ2h0Ij41LDAwMCwwMDAg7JuQPGJyPjMsODIyLjY1OSAkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodCI+MCDsm5A8YnI+MC4wMDAgJDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICIgc3R5bGU9InRleHQtYWxpZ246cmlnaHQiPjIwMjMtMDgtMDEg7Jik7ZuEIDM6NTM6MDA8L3RkPg0KICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgZAILDxYCHwEFIDQyNyw0MDAsMDAwIOybkDxicj4zMTQsODIzLjk1NiAkZAINDxYCHwEFHDgsMDE5LDk0OSDsm5A8YnI+NiwyMTAuMDAwICRkAhUPFgIfAQUSPHN0cm9uZz4xPC9zdHJvbmc+ZGQUOmNzKWGZ4QXTeBH3u2Abk+orw9oKL+7URZ4BT7xqyg==">
                </div>

                <script type="text/javascript">
                    //<![CDATA[
                    var theForm = document.forms['form2'];
                    if (!theForm) {
                        theForm = document.form2;
                    }
                    function __doPostBack(eventTarget, eventArgument) {
                        if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                            theForm.__EVENTTARGET.value = eventTarget;
                            theForm.__EVENTARGUMENT.value = eventArgument;
                            theForm.submit();
                        }
                    }
                    //]]>
                </script>


                <div class="aspNetHidden">

                    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="0904FBF0">
                    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                        value="/wEdABsZKjrOSNy9gazykyO/eFcdacbJZo2P3/ZyxpvnRExbPbsbbTKDIEAYYy929/erw/KVY6ESjTmqe20xkBAfX3EoE7q20pucIjGPndT6d7Lx4QhAtH080rtXHMxyl8WqX+AfCOp06JXGbBbQEyOhT60bYEAVYaoR6oTr7nNMnDIwmBTyOdOncQC6UN1Q9KYaxLF0AVLKOClfkEsvg35bMPBrCH+UHaoj7JNipVf3HtyCz+7rNioIv9MYJUWbad7AoGMdyhudqpKc3xwq6z4UCRDqEjaYqMd5AWcI9i0NnIYdxzKLKmHwlyHaVoFacoyes/kGCOvs4PdudEszb1T2TIlAoEfPzhPqBa4pRIDTbci+qUgeVrjX1D9REwSsOx0+g2f7GN/3VDeFSjcUJkBzDR5CNUqCbh3M04IizoWdnJF4DIt03KmY2d31mrTYcwjv5yT8Wn1aJbDKimxj9IVrl1qRrttSxL9TVRSiQbrKf7pAHZzZoF/704v+8Mg0Zv1wkQtKt4HDq9tI25Hn/i4MVRFsbsa0HbIj8AacvKkpkeaKlp+I/HPZ86NEZcbXwR9jxA4+3md9rBEG+pej7ty/4qhfLpCfQrYzDQArkklQS8armg==">
                </div>
                <div class="right_col" role="main" style="min-height: 1556px;">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>회원 관리</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <div class="x_title2">
                                <div class="col-lg-4 col-md-1 col-sm-12 adjusted-tablelage">
                                    <h2>회원 리스트</h2>
                                </div>
                                <div class="x_content">
                                    <div class="form-inline">
                                        <select name="ctl00$MainContent$ddlMember"
                                            onchange="javascript:setTimeout('__doPostBack(\'ctl00$MainContent$ddlMember\',\'\')', 0)"
                                            id="MainContent_ddlMember" class="form-control">
                                            <option value="all">전체</option>
                                            <option selected="selected" value="normal">일반</option>
                                            <option value="stop">정지</option>
                                            <option value="quit">탈퇴</option>
                                            <option value="test">테스트</option>

                                        </select>
                                        <select name="ctl00$MainContent$ddlOrderCateg"
                                            onchange="javascript:setTimeout('__doPostBack(\'ctl00$MainContent$ddlOrderCateg\',\'\')', 0)"
                                            id="MainContent_ddlOrderCateg" class="form-control">
                                            <option selected="selected" value="reg_date">가입일</option>
                                            <option value="user_id">아이디</option>
                                            <option value="user_name">회원명</option>
                                            <option value="balance">예수금</option>
                                            <option value="partner_id">가입코드</option>
                                            <option value="deposit">총입금</option>
                                            <option value="withdraw">총출금</option>
                                            <option value="sumbalancePoint">진입금</option>
                                            <option value="profit">수익금</option>
                                            <option value="update_date">최종활동</option>

                                        </select>
                                        <select name="ctl00$MainContent$ddlOrder"
                                            onchange="javascript:setTimeout('__doPostBack(\'ctl00$MainContent$ddlOrder\',\'\')', 0)"
                                            id="MainContent_ddlOrder" class="form-control">
                                            <option selected="selected" value="desc">내림차순</option>
                                            <option value="asc">오름차순</option>

                                        </select>
                                        <span style="font-size:20px; padding-left:30px;">전체 15명</span>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped jambo_table bulk_action">
                                            <thead>
                                                <tr class="headings">
                                                    <th class="column-title">아이디</th>
                                                    <th class="column-title">회원명</th>
                                                    <th class="column-title">로그인일시</th>
                                                    <th class="column-title">접속도메인</th>
                                                    <th class="column-title" style="text-align: right">총입금</th>
                                                    <th class="column-title" style="text-align: right">총출금</th>
                                                    <th class="column-title" style="text-align: right">회원가입일</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <tr class="even pointer">
                                                    <td class=" ">bird1234</td>
                                                    <td class=" "><a href="MemberModify.html?userid=bird1234">이동우</a>
                                                    </td>
                                                    <td class=" ">2024-05-15 오후 3:25:32</td>
                                                    <td class=" ">bit-testtest.com</td>
                                                    <td class=" " style="text-align:right">10,000,000 원<br>7,335.466 $
                                                    </td>
                                                    <td class=" " style="text-align:right">0 원<br>0.000 $</td>
                                                    <td class=" " style="text-align:right">2024-03-19 오후 3:00:17</td>
                                                </tr>

                                                <tr class="odd pointer">
                                                    <td class=" ">xotn123</td>
                                                    <td class=" "><a href="MemberModify.html?userid=xotn123">김태수</a>
                                                    </td>
                                                    <td class=" ">2024-01-09 오후 7:50:00</td>
                                                    <td class=" ">bit-testtest.com</td>
                                                    <td class=" " style="text-align:right">10,000,000 원<br>7,470.938 $
                                                    </td>
                                                    <td class=" " style="text-align:right">0 원<br>0.000 $</td>
                                                    <td class=" " style="text-align:right">2024-01-09 오후 4:32:00</td>
                                                </tr>

                                                <tr class="even pointer">
                                                    <td class=" ">98765</td>
                                                    <td class=" "><a href="/MemberModify.html?userid=98765">0</a></td>
                                                    <td class=" ">2023-10-26 오전 7:31:00</td>
                                                    <td class=" ">bit-testtest.com</td>
                                                    <td class=" " style="text-align:right">80,000,000 원<br>58,132.775 $
                                                    </td>
                                                    <td class=" " style="text-align:right">0 원<br>0.000 $</td>
                                                    <td class=" " style="text-align:right">2023-10-20 오후 8:44:00</td>
                                                </tr>

                                                <tr class="odd pointer">
                                                    <td class=" ">star11</td>
                                                    <td class=" "><a href="/MemberModify.html?userid=star11">0</a></td>
                                                    <td class=" ">2023-10-14 오후 10:21:00</td>
                                                    <td class=" "></td>
                                                    <td class=" " style="text-align:right">0 원<br>0.000 $</td>
                                                    <td class=" " style="text-align:right">0 원<br>0.000 $</td>
                                                    <td class=" " style="text-align:right">2023-10-14 오후 10:21:00</td>
                                                </tr>

                                                <tr class="even pointer">
                                                    <td class=" ">daeri1</td>
                                                    <td class=" "><a href="/MemberModify.html?userid=daeri1">대리점1</a>
                                                    </td>
                                                    <td class=" ">2023-10-15 오후 10:56:00</td>
                                                    <td class=" ">bit-testtest.com</td>
                                                    <td class=" " style="text-align:right">20,000,000 원<br>14,527.810 $
                                                    </td>
                                                    <td class=" " style="text-align:right">0 원<br>0.000 $</td>
                                                    <td class=" " style="text-align:right">2023-10-13 오후 9:19:00</td>
                                                </tr>

                                                <tr class="odd pointer">
                                                    <td class=" ">qwer1</td>
                                                    <td class=" "><a href="/MemberModify.html?userid=qwer1">1</a></td>
                                                    <td class=" ">2023-10-13 오후 9:15:00</td>
                                                    <td class=" ">bit-testtest.com</td>
                                                    <td class=" " style="text-align:right">20,000,000 원<br>14,549.264 $
                                                    </td>
                                                    <td class=" " style="text-align:right">0 원<br>0.000 $</td>
                                                    <td class=" " style="text-align:right">2023-10-13 오후 6:12:00</td>
                                                </tr>

                                                <tr class="even pointer">
                                                    <td class=" ">zzzzx</td>
                                                    <td class=" "><a href="/MemberModify.html?userid=zzzzx">1</a></td>
                                                    <td class=" ">2023-12-06 오후 10:59:00</td>
                                                    <td class=" ">bit-testtest.com</td>
                                                    <td class=" " style="text-align:right">10,000,000 원<br>7,277.332 $
                                                    </td>
                                                    <td class=" " style="text-align:right">0 원<br>0.000 $</td>
                                                    <td class=" " style="text-align:right">2023-10-13 오후 3:53:00</td>
                                                </tr>

                                                <tr class="odd pointer">
                                                    <td class=" ">2233</td>
                                                    <td class=" "><a href="/MemberModify.html?userid=2233">a</a></td>
                                                    <td class=" ">2023-10-13 오전 12:13:00</td>
                                                    <td class=" ">bit-testtest.com</td>
                                                    <td class=" " style="text-align:right">40,000,000 원<br>29,228.442 $
                                                    </td>
                                                    <td class=" " style="text-align:right">0 원<br>0.000 $</td>
                                                    <td class=" " style="text-align:right">2023-10-13 오전 12:10:00</td>
                                                </tr>

                                                <tr class="even pointer">
                                                    <td class=" ">1122</td>
                                                    <td class=" "><a href="/MemberModify.html?userid=1122">1</a></td>
                                                    <td class=" ">2023-10-18 오후 7:47:00</td>
                                                    <td class=" ">bit-testtest.com</td>
                                                    <td class=" " style="text-align:right">40,000,000 원<br>29,282.791 $
                                                    </td>
                                                    <td class=" " style="text-align:right">0 원<br>0.000 $</td>
                                                    <td class=" " style="text-align:right">2023-10-12 오후 11:06:00</td>
                                                </tr>

                                                <tr class="odd pointer">
                                                    <td class=" ">123123</td>
                                                    <td class=" "><a href="/MemberModify.html?userid=123123">1</a></td>
                                                    <td class=" ">2023-09-21 오후 5:27:00</td>
                                                    <td class=" ">bit-testtest.com</td>
                                                    <td class=" " style="text-align:right">90,000,000 원<br>66,736.369 $
                                                    </td>
                                                    <td class=" " style="text-align:right">0 원<br>0.000 $</td>
                                                    <td class=" " style="text-align:right">2023-09-12 오후 1:20:00</td>
                                                </tr>

                                                <tr class="even pointer">
                                                    <td class=" ">111111</td>
                                                    <td class=" "><a href="/MemberModify.html?userid=111111">111111</a>
                                                    </td>
                                                    <td class=" ">2024-05-09 오전 10:07:18</td>
                                                    <td class=" ">bit-testtest.com</td>
                                                    <td class=" " style="text-align:right">61,200,000 원<br>46,041.649 $
                                                    </td>
                                                    <td class=" " style="text-align:right">8,019,949 원<br>6,210.000 $
                                                    </td>
                                                    <td class=" " style="text-align:right">2023-09-04 오후 9:38:00</td>
                                                </tr>

                                                <tr class="odd pointer">
                                                    <td class=" ">test11</td>
                                                    <td class=" "><a href="/MemberModify.html?userid=test11">김수경</a>
                                                    </td>
                                                    <td class=" ">2023-09-03 오전 9:12:00</td>
                                                    <td class=" "></td>
                                                    <td class=" " style="text-align:right">10,000,000 원<br>7,437.045 $
                                                    </td>
                                                    <td class=" " style="text-align:right">0 원<br>0.000 $</td>
                                                    <td class=" " style="text-align:right">2023-09-02 오후 2:17:00</td>
                                                </tr>

                                                <tr class="even pointer">
                                                    <td class=" ">dddddd</td>
                                                    <td class=" "><a href="/MemberModify.html?userid=dddddd">d</a></td>
                                                    <td class=" ">2023-11-24 오후 5:46:00</td>
                                                    <td class=" ">bit-testtest.com</td>
                                                    <td class=" " style="text-align:right">21,000,000 원<br>15,498.843 $
                                                    </td>
                                                    <td class=" " style="text-align:right">0 원<br>0.000 $</td>
                                                    <td class=" " style="text-align:right">2023-08-18 오전 7:03:00</td>
                                                </tr>

                                                <tr class="odd pointer">
                                                    <td class=" ">ssssss</td>
                                                    <td class=" "><a href="/MemberModify.html?userid=ssssss">d</a></td>
                                                    <td class=" ">2024-05-30 오후 3:28:33</td>
                                                    <td class=" ">bit-testtest.com</td>
                                                    <td class=" " style="text-align:right">10,200,000 원<br>7,482.573 $
                                                    </td>
                                                    <td class=" " style="text-align:right">0 원<br>0.000 $</td>
                                                    <td class=" " style="text-align:right">2023-08-18 오전 2:50:00</td>
                                                </tr>

                                                <tr class="even pointer">
                                                    <td class=" ">tta1</td>
                                                    <td class=" "><a href="/MemberModify.html?userid=tta1">테스트1</a></td>
                                                    <td class=" ">2024-04-04 오전 11:18:14</td>
                                                    <td class=" ">bit-testtest.com</td>
                                                    <td class=" " style="text-align:right">5,000,000 원<br>3,822.659 $
                                                    </td>
                                                    <td class=" " style="text-align:right">0 원<br>0.000 $</td>
                                                    <td class=" " style="text-align:right">2023-08-01 오후 3:53:00</td>
                                                </tr>

                                                <tr class="totalrow">
                                                    <td colspan="2" class="totaltd">총 입출금 합계</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="totaltd" style="text-align: right">
                                                        427,400,000 원<br>314,823.956 $
                                                    </td>
                                                    <td class="totaltd" style="text-align: right">
                                                        8,019,949 원<br>6,210.000 $
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="search-div">
                                        <select name="ctl00$MainContent$ddlSearchCateg" id="MainContent_ddlSearchCateg"
                                            class="form-control" style="display: inline-block; width: 150px;">
                                            <option value="user_id">회원아이디</option>
                                            <option value="user_name">회원명</option>
                                            <option value="join_code">가입코드</option>
                                            <option value="partner_id">파트너아이디</option>

                                        </select>
                                        <input name="ctl00$MainContent$txtSkeyword" type="text"
                                            id="MainContent_txtSkeyword" class="form-control" placeholder=""
                                            style="display: inline-block; width: 150px;">
                                        <input type="submit" name="ctl00$MainContent$btnSearch" value="검색"
                                            id="MainContent_btnSearch"
                                            class="btn btn-secondary left-button-adjusted-search"
                                            style="display: inline-block; width: 150px;">
                                    </div>
                                    <div class="paging">
                                        <strong>1</strong>
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
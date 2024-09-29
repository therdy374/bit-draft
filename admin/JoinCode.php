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


            <div class="right_col" role="main" style="min-height: 521px;">
                <div class="page-title">
                    <div class="title_left">
                        <h3>가입코드 관리</h3>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>가입코드 목록</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                        <tr class="headings">
                                            <th class="column-title">부본사</th>
                                            <th class="column-title">총판</th>
                                            <th class="column-title">대리점</th>
                                            <th class="column-title">이름</th>
                                            <th class="column-title">가입코드</th>
                                            <th class="column-title last">설명</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr class="even pointer">
                                            <td class=" ">01234</td>
                                            <td class=" ">012345</td>
                                            <td class=" ">0123456</td>
                                            <td class=" ">as</td>
                                            <td class=" ">대리점</td>
                                            <td class=" last">대리점</td>
                                        </tr>

                                        <tr class="odd pointer">
                                            <td class=" ">01234</td>
                                            <td class=" ">012345</td>
                                            <td class=" ">0123456</td>
                                            <td class=" ">as</td>
                                            <td class=" ">TEST2</td>
                                            <td class=" last">TEST2</td>
                                        </tr>

                                        <tr class="even pointer">
                                            <td class=" ">abcd</td>
                                            <td class=" ">abcde</td>
                                            <td class=" ">abcdef</td>
                                            <td class=" ">abcdef</td>
                                            <td class=" ">ABCDEF</td>
                                            <td class=" last">ABCDEF</td>
                                        </tr>

                                        <tr class="odd pointer">
                                            <td class=" ">abcd</td>
                                            <td class=" ">abcde</td>
                                            <td class=" ">abcdef</td>
                                            <td class=" ">abcdef</td>
                                            <td class=" ">TEST1</td>
                                            <td class=" last">TEST1</td>
                                        </tr>

                                        <tr class="even pointer">
                                            <td class=" ">01234</td>
                                            <td class=" ">012345</td>
                                            <td class=" "></td>
                                            <td class=" ">as</td>
                                            <td class=" ">총판</td>
                                            <td class=" last">총판</td>
                                        </tr>

                                        <tr class="odd pointer">
                                            <td class=" ">abcd</td>
                                            <td class=" ">abcde</td>
                                            <td class=" "></td>
                                            <td class=" ">abcde</td>
                                            <td class=" ">ABCDE</td>
                                            <td class=" last">ABCDE</td>
                                        </tr>

                                        <tr class="even pointer">
                                            <td class=" ">bbbtest</td>
                                            <td class=" ">ccctest</td>
                                            <td class=" "></td>
                                            <td class=" ">테스트_총판</td>
                                            <td class=" ">TEST</td>
                                            <td class=" last">TEST</td>
                                        </tr>

                                        <tr class="odd pointer">
                                            <td class=" ">bbbtest</td>
                                            <td class=" ">ccctest</td>
                                            <td class=" "></td>
                                            <td class=" ">테스트_총판</td>
                                            <td class=" ">7777</td>
                                            <td class=" last">7777</td>
                                        </tr>

                                        <tr class="even pointer">
                                            <td class=" ">starbucks</td>
                                            <td class=" ">star1</td>
                                            <td class=" "></td>
                                            <td class=" ">star</td>
                                            <td class=" ">DLSTAR</td>
                                            <td class=" last">DLSTAR</td>
                                        </tr>

                                        <tr class="odd pointer">
                                            <td class=" ">starbucks</td>
                                            <td class=" ">star1</td>
                                            <td class=" "></td>
                                            <td class=" ">star</td>
                                            <td class=" ">CPSTAR</td>
                                            <td class=" last">CPSTAR</td>
                                        </tr>

                                        <tr class="even pointer">
                                            <td class=" ">stardabang</td>
                                            <td class=" ">star2</td>
                                            <td class=" "></td>
                                            <td class=" ">star2</td>
                                            <td class=" ">CPSTAR2</td>
                                            <td class=" last">CPSTAR2</td>
                                        </tr>

                                        <tr class="odd pointer">
                                            <td class=" ">hh11</td>
                                            <td class=" ">aa22</td>
                                            <td class=" ">aa221234</td>
                                            <td class=" ">aa221234</td>
                                            <td class=" ">TESTTEST</td>
                                            <td class=" last">TESTTEST</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <form method="post" action="./JoinCode.html" id="form1">
                        <div class="aspNetHidden">
                            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                                value="/wEPDwUKMTU1MzQ0MDI5Mw9kFgJmD2QWCgIFDxYCHgdWaXNpYmxlZ2QCBg8WAh8AZ2QCBw8WAh8AZ2QCCA8WAh8AZ2QCCQ9kFgICAQ8WAh4EVGV4dAWpIg0KICAgICAgICAgICAgICAgIDx0ciBjbGFzcz0iZXZlbiBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4wMTIzNDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+MDEyMzQ1PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4wMTIzNDU2PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5hczwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+64yA66as7KCQPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgbGFzdCI+64yA66as7KCQPC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgIDx0ciBjbGFzcz0ib2RkIHBvaW50ZXIiPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjAxMjM0PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4wMTIzNDU8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjAxMjM0NTY8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPmFzPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5URVNUMjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iIGxhc3QiPlRFU1QyPC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgIDx0ciBjbGFzcz0iZXZlbiBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5hYmNkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5hYmNkZTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+YWJjZGVmPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5hYmNkZWY8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPkFCQ0RFRjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iIGxhc3QiPkFCQ0RFRjwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9Im9kZCBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5hYmNkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5hYmNkZTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+YWJjZGVmPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5hYmNkZWY8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPlRFU1QxPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgbGFzdCI+VEVTVDE8L3RkPg0KICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgPHRyIGNsYXNzPSJldmVuIHBvaW50ZXIiPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjAxMjM0PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj4wMTIzNDU8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+YXM8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPuy0ne2MkDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iIGxhc3QiPuy0ne2MkDwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9Im9kZCBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5hYmNkPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5hYmNkZTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5hYmNkZTwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+QUJDREU8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiBsYXN0Ij5BQkNERTwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9ImV2ZW4gcG9pbnRlciI+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+YmJidGVzdDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+Y2NjdGVzdDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj7thYzsiqTtirhf7LSd7YyQPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5URVNUPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgbGFzdCI+VEVTVDwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9Im9kZCBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5iYmJ0ZXN0PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5jY2N0ZXN0PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj48L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPu2FjOyKpO2KuF/stJ3tjJA8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjc3Nzc8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiBsYXN0Ij43Nzc3PC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgIDx0ciBjbGFzcz0iZXZlbiBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5zdGFyYnVja3M8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPnN0YXIxPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj48L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPnN0YXI8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPkRMU1RBUjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iIGxhc3QiPkRMU1RBUjwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9Im9kZCBwb2ludGVyIj4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5zdGFyYnVja3M8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPnN0YXIxPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj48L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPnN0YXI8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPkNQU1RBUjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iIGxhc3QiPkNQU1RBUjwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICA8dHIgY2xhc3M9ImV2ZW4gcG9pbnRlciI+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+c3RhcmRhYmFuZzwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+c3RhcjI8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+c3RhcjI8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPkNQU1RBUjI8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiBsYXN0Ij5DUFNUQVIyPC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgIDx0ciBjbGFzcz0ib2RkIHBvaW50ZXIiPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPmhoMTE8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPmFhMjI8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiAiPmFhMjIxMjM0PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkIGNsYXNzPSIgIj5hYTIyMTIzNDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjbGFzcz0iICI+VEVTVFRFU1Q8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQgY2xhc3M9IiBsYXN0Ij5URVNUVEVTVDwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICBkZM6zj9iq8unD84g/gF224gemam+Hq9n0fu4crtWIMnsu">
                        </div>

                        <div class="aspNetHidden">

                            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="59F8C790">
                            <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                                value="/wEdAAQTn7sRr0YX8CarUt33PmN6Do2L5EPg8ezTaa+xrPpCUHsf3hBgW0YoUkzbOC+9DOtWG/vfqRlprXNuhWQP6b4Kf3BxKk1shw1fkJyJtel3kfuoM2as0RPj4icGhaACbIw=">
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>가입코드 등록</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <br>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="first-name">
                                                가입코드 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input name="ctl00$MainContent$txtJoinCode" type="text"
                                                    id="MainContent_txtJoinCode" class="form-control"
                                                    placeholder="사용하실 신규 코드를 입력하세요">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                                설명 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input name="ctl00$MainContent$txtBigo" type="text"
                                                    id="MainContent_txtBigo" class="form-control" placeholder="설명">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <input type="submit" name="ctl00$MainContent$btnRegister" value="코드등록"
                                                    id="MainContent_btnRegister" class="btn btn-success">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


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
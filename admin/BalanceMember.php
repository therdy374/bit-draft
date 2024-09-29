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

            <form method="post" action="./BalanceMember.aspx?dw=deposit" id="form2">
                <div class="aspNetHidden">
                    <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
                    <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
                    <input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
                    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                        value="/wEPDwUJLTE1MjU0MzQ5D2QWAmYPZBYKAgUPFgIeB1Zpc2libGVnZAIGDxYCHwBnZAIHDxYCHwBnZAIIDxYCHwBnZAIJD2QWAgIBD2QWDgIBDxBkZBYBZmQCAw8QDxYCHgdFbmFibGVkaGRkFgFmZAIPDxYCHgRUZXh0ZWQCEQ8WAh8CBSjsobDtmozsnbzsnpAg7LSdIOyeheq4iOqxtOyImCA6IDDqsbQ8YnI+ZAITDxYCHwIFKOyhsO2ajOydvOyekCDstJ0g7J6F6riI6riI7JWhIDogMOybkDxicj5kAhcPFgIfAgUo7KGw7ZqM7J287J6QIOy0nSDst6jshozquIjslaEgOiAw7JuQPGJyPmQCGQ8WAh8CZWRk2TCnEGRxHUjww5dCcPKeHdW7KLtvfNtah+myoe9PQGc=">
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

                    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="5B55553D">
                    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                        value="/wEdABly4zB68tpj76UWYGSZP2QEacbJZo2P3/ZyxpvnRExbPZVjoRKNOap7bTGQEB9fcSgfCOp06JXGbBbQEyOhT60bg6fw8IhcLZMBi8SOoWYN7B2EYnVzmhCloKPEGD7iNDah1JUwzT1msUDzJedTj5+AfWYMVElfuUNHjS59ypg8pegSm0mEtHB7LEQqukvBT+T8Wn1aJbDKimxj9IVrl1qRrttSxL9TVRSiQbrKf7pAHZzZoF/704v+8Mg0Zv1wkQtKt4HDq9tI25Hn/i4MVRFsbsa0HbIj8AacvKkpkeaKlp+I/HPZ86NEZcbXwR9jxA5wCC/JTgj5jrBN10teDHw3ozedjL6nlnoP0f5WKCPTpV7MZT5sSgWf8ggaAamMrs5CfpIyhhvwnsq3miP9JUZ0iFyIbb1zRvmHDrkilBXv45qm480vWwak0r/X17/xsriEGoknmO7Uinv5MTm5xfLUAKmCC0DUNO+bYkg7x5qa6hoHM402DkMOgGDF0KZ+T2vIIUyKO9Nd6oxCZHzn18ifh5EXuqm2n50K27SjLykS8Q+rvfx7V5T7nunvmoPwxB0=">
                </div>
                <!-- page content -->
                <div class="right_col" role="main" style="min-height: 542px;">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>입출금 관리</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">

                            <div class="x_title2">
                                <div class="col-lg-4 col-md-1 col-sm-12 adjusted-tablelage">
                                    <h2>회원 입출금 리스트</h2>
                                </div>
                                <div class="col-lg-8 col-md-11 col-sm-12 pull-right">
                                    <div class="form-wrapper">
                                        <div class="form-inline searcgmemberform">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>


                                <div class="x_content">
                                    <div class="form-inline">
                                        <select name="ctl00$MainContent$ddlMember"
                                            onchange="javascript:setTimeout('__doPostBack(\'ctl00$MainContent$ddlMember\',\'\')', 0)"
                                            id="MainContent_ddlMember" class="form-control">
                                            <option selected="selected" value="normal">일반</option>
                                            <option value="test">테스트</option>

                                        </select>
                                        <select name="ctl00$MainContent$ddlDW"
                                            onchange="javascript:setTimeout('__doPostBack(\'ctl00$MainContent$ddlDW\',\'\')', 0)"
                                            id="MainContent_ddlDW" disabled="disabled"
                                            class="aspNetDisabled form-control">
                                            <option selected="selected" value="deposit">입금</option>
                                            <option value="withdraw">출금</option>

                                        </select>
                                        <div class="form-group search-form-group">
                                            <label class="col-form-label forty">시작</label>
                                            <input name="ctl00$MainContent$txtMBSDate" type="date" value="2024-05-30"
                                                id="MainContent_txtMBSDate" class="form-control mobile-wide"
                                                placeholder="">
                                        </div>
                                        <div class="form-group search-form-group">
                                            <label class="col-form-label forty">종료</label>
                                            <input name="ctl00$MainContent$txtMBEDate" type="date" value="2024-05-30"
                                                id="MainContent_txtMBEDate" class="form-control mobile-wide "
                                                placeholder="">
                                        </div>
                                        <select name="ctl00$MainContent$ddlSearchCateg" id="MainContent_ddlSearchCateg"
                                            class="form-control" style="display: inline-block; width: 150px;">
                                            <option value="user_id">회원아이디</option>
                                            <option value="user_name">회원명</option>
                                            <option value="join_code">가입코드</option>
                                            <option value="partner_id">총판아이디</option>

                                        </select>
                                        <input name="ctl00$MainContent$txtSkeyword" type="text"
                                            id="MainContent_txtSkeyword" class="form-control" placeholder=""
                                            style="display: inline-block; width: 150px;">
                                        <div class="button-handler-wrap">
                                            <input type="submit" name="ctl00$MainContent$btnSearch" value="검색"
                                                id="MainContent_btnSearch"
                                                class="btn btn-secondary left-button-adjusted-search">
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped jambo_table bulk_action">
                                            <thead>
                                                <tr class="headings">
                                                    <th class="column-title">신청일시</th>
                                                    <th class="column-title">아이디</th>
                                                    <th class="column-title">이름</th>
                                                    <th class="column-title">총판</th>
                                                    <th class="column-title">내용</th>
                                                    <th class="column-title" style="text-align:right">금액</th>
                                                    <th class="column-title">계좌정보</th>
                                                    <th class="column-title">상태</th>
                                                    <th class="column-title">처리시간</th>
                                                    <th class="column-title">메모</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div>
                                        조회일자 총 입금건수 : 0건<br>
                                        조회일자 총 입금금액 : 0원<br>

                                        조회일자 총 취소금액 : 0원<br>
                                    </div>
                                    <div class="paging">

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
                                    <h5 class="modal-title" id="exampleModalLabel">회원님 신청 0원</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <font class="font17"><strong id="bankInfo"></strong></font>
                                    <br>
                                    <br>
                                    <input type="hidden" name="ctl00$MainContent$hdnBigo" id="hdnBigo">
                                    <input type="hidden" name="ctl00$MainContent$hdnUserId" id="hdnUserId">
                                    <input type="hidden" name="ctl00$MainContent$hdnAmount" id="hdnAmount">
                                    <input type="hidden" name="ctl00$MainContent$hdnAmountWon" id="hdnAmountWon">
                                    <input type="hidden" name="ctl00$MainContent$hdnSeq" id="hdnSeq">
                                    <select name="ctl00$MainContent$ddlStatus" id="MainContent_ddlStatus"
                                        class="form-control">
                                        <option value="">선택하세요</option>
                                        <option value="처리완료">처리완료</option>
                                        <option value="취소">취소</option>

                                    </select>
                                    <br>
                                    <input name="ctl00$MainContent$txtCancelDesc" type="text"
                                        id="MainContent_txtCancelDesc" class="form-control"
                                        placeholder="취소선택시 사유를 입력하세요.">
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" name="ctl00$MainContent$btnStatusSave" value="저장"
                                        onclick="return CheckDouble();" id="MainContent_btnStatusSave"
                                        class="btn btn-primary">
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
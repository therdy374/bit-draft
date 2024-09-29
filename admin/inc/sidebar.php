<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section active">
        <ul class="nav side-menu">
            <li id="liHome" class="">
                <a><i class="fa fa-home"></i>홈 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none;">
                    <li class="current-page"><a href="Dashboard.php">대시보드</a></li>
                </ul>
            </li>

            <li id="liPartnerManagement">
                <a><i class="fa fa-user"></i>파트너 관리 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="PartnerList.php">파트너 리스트</a></li>
                    <li><a href="JoinCode.php">가입코드 관리</a></li>

                </ul>
            </li>
            <li id="liCommManagement">
                <a><i class="fa fa-won"></i>커미션 관리 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li id="liCommBubon"><a href="CommissionListb.php">커미션 리스트 (부본사)</a></li>
                    <li id="liCommChong"><a href="CommissionListc.php">커미션 리스트 (총판)</a></li>
                    <li><a href="CommissionListd.php">커미션 리스트 (대리점)</a></li>
                    <li id="liCommBubon2"><a href="CommissionList2b.php">커미션2 리스트 (부본사)</a></li>
                    <li id="liCommChong2"><a href="CommissionList2c.php">커미션2 리스트 (총판)</a></li>
                    <li><a href="CommissionList2d.php">커미션2 리스트 (대리점)</a></li>
                    <li><a href="Withdraw.php">출금신청</a></li>
                </ul>
            </li>
            <li id="liUserManagement">
                <a><i class="fa fa-users"></i>회원 관리 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="MemberList.php">회원 리스트</a></li>
                    <li><a href="TradeList.php">회원 거래내역 리스트</a></li>
                    <li><a href="MemberLogList.php">회원 로그</a></li>
                </ul>
            </li>
            <li id="liAdminOnly1">
                <a><i class="fa fa-bank"></i>입출금 관리 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="BalancePartner.php">파트너 출금</a></li>
                    <li><a href="BalanceMember.php?dw=deposit">회원 입금</a></li>
                    <li><a href="BalanceMember.php?dw=withdraw">회원 출금</a></li>
                </ul>
            </li>
            <li id="liAdminOnly2">
                <a><i class="fa fa-list"></i>예수금 로그 관리 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="BalancePartnerLog.php">파트너 입출금 로그</a></li>
                    <li><a href="BalanceMemberLog.php">회원 입출금 로그</a></li>
                </ul>
            </li>
            <li id="liCoinList" class="">
                <a><i class="fa fa-bitcoin"></i>코인 관리 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none;">
                    <li><a href="CoinInfoModify.php">코인 리스트</a></li>
                </ul>
            </li>
            <li id="liCustomerService" class="">
                <a><i class="fa fa-commenting-o"></i>고객 센터 <span
                        class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none;">
                    <li><a href="Board/Notice.php?id=notice">공지 관리</a></li>
                    <li><a href="MessageList.php">알림 관리</a></li>
                    <li><a href="InquiryList.php">1:1 문의</a></li>
                </ul>
            </li>
        </ul>
    </div>

</div>
<!-- /sidebar menu -->
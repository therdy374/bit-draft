<?php include "script.php" ?>

<footer>
        <div>
            <div>
                <h4></h4>
                <ul>
                    <li>모든 컨텐츠 저작권은 비트프로에 있으며,
                        무단도용시 법적 불이익을 받습니다.</li>
                    <li>Copyright © 비트프로. All rights reserved</li>
                    <li>
                        <ol>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ol>
                    </li>
                </ul>
            </div>
            <ul>
                <li><b>파트너</b>
                    <ol>
                        <li><a href="https://www.binance.com">바이낸스</a></li>
                        <li><a href="https://www.upbit.com">업비트</a></li>
                    </ol>
                </li>
                <li><b>회사 소개</b>
                    <ol>
                        <li><a href="#">회사소개</a></li>
                        <li><a href="/Board/List.php?id=notice">공지사항</a></li>
                        <li><a href="#">이용약관</a></li>
                        <li><a href="#">Open API 이용약관</a></li>
                    </ol>
                </li>
            </ul>
        </div>
    </footer>

    <script>
        var rCnt = 0;

        if (rCnt > 0 && window.location.href.indexOf("qna") < 0) {
            Swal.fire('확인하지 않은 관리자 댓글이 있습니다.').then(function() {
                window.location = '/Board/List.php?id=qna';
            })
        }

        var rCnt2 = 0;

        if (rCnt2 > 0 && window.location.href.indexOf("message") < 0) {
            Swal.fire('확인하지 않은 알림이 있습니다.').then(function() {
                window.location = '/Board/List.php?id=message';
            })
        }
    </script>
    <style>
        .tradingview-widget-copyright {
            font-size: 13px !important;
            line-height: 32px !important;
            text-align: center !important;
            vertical-align: middle !important;
            font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
            color: #B2B5BE !important;
        }

        .tradingview-widget-copyright .blue-text {
            color: #2962FF !important;
        }

        .tradingview-widget-copyright a {
            text-decoration: none !important;
            color: #B2B5BE !important;
        }

        .tradingview-widget-copyright a:visited {
            color: #B2B5BE !important;
        }

        .tradingview-widget-copyright a:hover .blue-text {
            color: #1E53E5 !important;
        }

        .tradingview-widget-copyright a:active .blue-text {
            color: #1848CC !important;
        }

        .tradingview-widget-copyright a:visited .blue-text {
            color: #2962FF !important;
        }
    </style>

    <div id="extension-mmplj"></div>
    </body>

</html>
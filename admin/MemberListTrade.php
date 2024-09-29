<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>
        거래내역
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        body {
            background: #fff !important;
            font-family: 'Malgun Gothic', Gulim, Helvetica, sans-serif;
            font-size: 12px;
            color: #333;
        }

        footer {
            display: none !important;
        }

        .nav_menu {
            display: none !important;
        }

        caption {
            display: none !important;
        }

        .price {
            font-family: 'Malgun Gothic', Gulim, Helvetica, sans-serif;
            font-size: 12px !important;
            color: #333 !important;
        }

        .sub-contents-layout {
            position: relative;
            display: inline-block;
            width: 900px;
        }

        .frameWrapper {
            position: relative;
            display: block;
            width: 900px;
            overflow: hidden;
        }

        .invest_wrap {
            position: relative;
            width: 898px;
            min-height: 1100px;
            border: 1px solid #dee3eb;
            background-color: #fff;
        }


        td span {
            line-height: 15px !important;
        }

        .history_area .list_area {
            padding: 10px 30px 30px;
        }

        .history_area .list {
            width: 100%;
            border: none;
            min-height: 320px;
        }

        .history_area .list .cell_price span {
            display: block;
        }

        .history_area .list tr:first-child {
            border-top: none;
        }

        .history_area .list tr {
            border-top: 1px solid #f2f2f2;
        }

        .history_area .list .cell_price {
            text-align: center;
            line-height: 150%;
        }

        .history_area .list th {
            height: 51px;
            line-height: 170%;
            border: none;
            border-bottom: 1px solid #dee3eb;
        }

        .history_area .list .cell_btn {
            position: relative;
        }

        .history_area .list .cell_btn .btn_tip {
            top: 7px;
        }

        .history_area .list .cell_btn .btn_tip .detail {
            text-align: left;
            margin-left: -190px;
        }

        .history_area .list td {
            height: 51px;
            border: none;
            border-bottom: 1px solid #ebeef3;
            text-align: center;
        }

        .invest_area .leverage .input_area .input {
            padding: 0 20px;
            width: 100%;
            height: 43px;
            line-height: 43px;
            text-align: center;
            border: none;
            background-color: #f2f2f7;
            font-size: 14px;
            font-weight: 700;
            box-sizing: border-box;
        }

        .invest_area .leverage .input_area .btn_cancel {
            position: absolute;
            top: 0;
            right: 0;
            width: 43px;
            height: 43px;
            line-height: 43px;
            text-align: center;
            background-color: #6c6c6c;
            color: #fff;
        }

        .invest_area .leverage .btn_detail.selected {
            color: #e14549;
        }

        .history_area .plus,
        .history_area .long {
            color: #e14549 !important;
        }

        .history_area .minus,
        .history_area .short {
            color: #3498db !important;
        }

        .history_area .list .cell_price .date {
            color: #999;
            font-size: 11px;
        }

        .paging strong {
            color: #fff;
            border: 1px solid #5e5e5e;
            background: #5e5e5e;
        }

        .paging a,
        .paging strong {
            display: inline-block;
            margin-right: 1px;
            padding: 7px 7px 7px 7px;
            font-size: 14px;
            border: 1px solid #d4d4d4;
            min-width: 40px;
        }

        .paging {
            padding-top: 10px;
            margin-top: 100px;
            margin-bottom: 40px;
            text-align: center;
        }
    </style>

</head>

<body>

    <div class="subRouteContent">
        <div class="wrapper">
            <div class="sub-contents-layout">
                <div class="frameWrapper">
                    <div class="invest_wrap">
                        <div id="history-div" class="history_area">
                            <div class="liq_list" style="">
                                <div class="list_area">
                                    <table class="list" border="1">
                                        <caption>결과리스트</caption>
                                        <colgroup>
                                            <col width="65px">
                                            <col width="120px">
                                            <col width="120px">
                                            <col width="65px">
                                            <col width="90px">
                                            <col width="100px">
                                            <col width="75px">
                                            <col width="85px">
                                            <col width="75px">
                                            <col width="65px">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th class="cell_price">투자코인</th>
                                                <th class="cell_price">진입가</th>
                                                <th class="cell_price">청산가</th>
                                                <th>포지션<br>
                                                    교차/격리</th>
                                                <th>투자금</th>
                                                <th>레버리지</th>
                                                <th>수익금</th>
                                                <th>수익률</th>
                                                <th>수수료<br>
                                                    (진입/청산)</th>
                                                <th>청산</th>
                                            </tr>
                                        </thead>
                                        <tbody id="complete-list">

                                            <tr>
                                                <td class="cell_price">BTC</td>
                                                <td class="cell_price">
                                                    <span class="price">67908.62000000</span>
                                                    <span class="date">2024-05-30 15:27:38</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price"></span>
                                                    <span class="date"></span>
                                                </td>
                                                <td class="cell_type long">매수<br>교차</td>
                                                <td class="cell_size">29.12</td>
                                                <td class="cell_leverage">292.1547864 (x10)</td>
                                                <td class="cell_pnl minus"></td>
                                                <td class="cell_roe minus"></td>
                                                <td class="cell_price">
                                                    <span class="price">0.105</span>
                                                    <span class="price"></span>
                                                </td>
                                                <td class="cell_stats "></td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">BTC</td>
                                                <td class="cell_price">
                                                    <span class="price">68114.50000000</span>
                                                    <span class="date">2024-05-30 14:58:10</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">68120.03000000</span>
                                                    <span class="date">2024-05-30 14:58:37</span>
                                                </td>
                                                <td class="cell_type long">매수<br>교차</td>
                                                <td class="cell_size">29.13</td>
                                                <td class="cell_leverage">292.344718 (x10)</td>
                                                <td class="cell_pnl plus">0.02</td>
                                                <td class="cell_roe plus">0.08%</td>
                                                <td class="cell_price">
                                                    <span class="price">0.105</span>
                                                    <span class="price">0.105</span>
                                                </td>
                                                <td class="cell_stats ">청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">LINK</td>
                                                <td class="cell_price">
                                                    <span class="price">17.30400000</span>
                                                    <span class="date">2024-05-24 15:16:21</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">17.42800000</span>
                                                    <span class="date">2024-05-24 18:24:35</span>
                                                </td>
                                                <td class="cell_type short">매도<br>교차</td>
                                                <td class="cell_size">1330.23</td>
                                                <td class="cell_leverage">137941.32324 (x100)</td>
                                                <td class="cell_pnl minus">-988.48</td>
                                                <td class="cell_roe minus">-74.31%</td>
                                                <td class="cell_price">
                                                    <span class="price">49.677</span>
                                                    <span class="price">49.303</span>
                                                </td>
                                                <td class="cell_stats ">강제청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">ADA</td>
                                                <td class="cell_price">
                                                    <span class="price">0.46270000</span>
                                                    <span class="date">2024-05-24 15:14:04</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">0.46240000</span>
                                                    <span class="date">2024-05-24 15:15:51</span>
                                                </td>
                                                <td class="cell_type long">매수<br>교차</td>
                                                <td class="cell_size">1381.3</td>
                                                <td class="cell_leverage">1381.302552 (x1)</td>
                                                <td class="cell_pnl minus">-0.89</td>
                                                <td class="cell_roe minus">-0.06%</td>
                                                <td class="cell_price">
                                                    <span class="price">0.497</span>
                                                    <span class="price">0.497</span>
                                                </td>
                                                <td class="cell_stats ">청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">BTC</td>
                                                <td class="cell_price">
                                                    <span class="price">66152.02000000</span>
                                                    <span class="date">2024-03-22 00:34:41</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">66249.99000000</span>
                                                    <span class="date">2024-03-22 00:38:43</span>
                                                </td>
                                                <td class="cell_type long">매수<br>교차</td>
                                                <td class="cell_size">322.25</td>
                                                <td class="cell_leverage">42164.5028125 (x125)</td>
                                                <td class="cell_pnl plus">62.44</td>
                                                <td class="cell_roe plus">19.38%</td>
                                                <td class="cell_price">
                                                    <span class="price">15.185</span>
                                                    <span class="price">15.202</span>
                                                </td>
                                                <td class="cell_stats ">청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">BTC</td>
                                                <td class="cell_price">
                                                    <span class="price">66233.64000000</span>
                                                    <span class="date">2024-03-22 00:32:17</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">66136.00000000</span>
                                                    <span class="date">2024-03-22 00:34:23</span>
                                                </td>
                                                <td class="cell_type short">매도<br>교차</td>
                                                <td class="cell_size">129.14</td>
                                                <td class="cell_leverage">13391.67726 (x100)</td>
                                                <td class="cell_pnl plus">19.74</td>
                                                <td class="cell_roe plus">15.29%</td>
                                                <td class="cell_price">
                                                    <span class="price">4.823</span>
                                                    <span class="price">4.828</span>
                                                </td>
                                                <td class="cell_stats ">청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">BTC</td>
                                                <td class="cell_price">
                                                    <span class="price">66255.51000000</span>
                                                    <span class="date">2024-03-22 00:28:36</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">66279.09000000</span>
                                                    <span class="date">2024-03-22 00:30:20</span>
                                                </td>
                                                <td class="cell_type long">매수<br>교차</td>
                                                <td class="cell_size">131.79</td>
                                                <td class="cell_leverage">6708.08422 (x50)</td>
                                                <td class="cell_pnl plus">2.38</td>
                                                <td class="cell_roe plus">1.81%</td>
                                                <td class="cell_price">
                                                    <span class="price">2.416</span>
                                                    <span class="price">2.416</span>
                                                </td>
                                                <td class="cell_stats ">청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">AAVE</td>
                                                <td class="cell_price">
                                                    <span class="price">112.67000000</span>
                                                    <span class="date">2024-03-20 16:50:46</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">112.92000000</span>
                                                    <span class="date">2024-03-20 16:52:01</span>
                                                </td>
                                                <td class="cell_type short">매도<br>교차</td>
                                                <td class="cell_size">133.29</td>
                                                <td class="cell_leverage">13822.122244 (x100)</td>
                                                <td class="cell_pnl minus">-30.66</td>
                                                <td class="cell_roe minus">-23.01%</td>
                                                <td class="cell_price">
                                                    <span class="price">4.978</span>
                                                    <span class="price">4.965</span>
                                                </td>
                                                <td class="cell_stats ">청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">AAVE</td>
                                                <td class="cell_price">
                                                    <span class="price">112.73000000</span>
                                                    <span class="date">2024-03-20 16:50:04</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">112.70000000</span>
                                                    <span class="date">2024-03-20 16:50:23</span>
                                                </td>
                                                <td class="cell_type long">매수<br>교차</td>
                                                <td class="cell_size">136.45</td>
                                                <td class="cell_leverage">6945.298792 (x50)</td>
                                                <td class="cell_pnl minus">-1.84</td>
                                                <td class="cell_roe minus">-1.35%</td>
                                                <td class="cell_price">
                                                    <span class="price">2.501</span>
                                                    <span class="price">2.500</span>
                                                </td>
                                                <td class="cell_stats ">청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">BTC</td>
                                                <td class="cell_price">
                                                    <span class="price">69312.01000000</span>
                                                    <span class="date">2024-03-16 17:06:43</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">69256.52000000</span>
                                                    <span class="date">2024-03-16 17:07:37</span>
                                                </td>
                                                <td class="cell_type long">매수<br>교차</td>
                                                <td class="cell_size">724.85</td>
                                                <td class="cell_leverage">75164.93088 (x100)</td>
                                                <td class="cell_pnl minus">-60.17</td>
                                                <td class="cell_roe minus">-8.3%</td>
                                                <td class="cell_price">
                                                    <span class="price">27.069</span>
                                                    <span class="price">27.038</span>
                                                </td>
                                                <td class="cell_stats ">청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">BTC</td>
                                                <td class="cell_price">
                                                    <span class="price">69330.52000000</span>
                                                    <span class="date">2024-03-16 16:38:24</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">69407.68000000</span>
                                                    <span class="date">2024-03-16 16:57:45</span>
                                                </td>
                                                <td class="cell_type short">매도<br>교차</td>
                                                <td class="cell_size">773.82</td>
                                                <td class="cell_leverage">39386.31582 (x50)</td>
                                                <td class="cell_pnl minus">-43.83</td>
                                                <td class="cell_roe minus">-5.66%</td>
                                                <td class="cell_price">
                                                    <span class="price">14.184</span>
                                                    <span class="price">14.163</span>
                                                </td>
                                                <td class="cell_stats ">청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">BTC</td>
                                                <td class="cell_price">
                                                    <span class="price">67903.96000000</span>
                                                    <span class="date">2024-03-15 21:59:16</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">69050.01000000</span>
                                                    <span class="date">2024-03-16 03:42:45</span>
                                                </td>
                                                <td class="cell_type short">매도<br>교차</td>
                                                <td class="cell_size">6291.66</td>
                                                <td class="cell_leverage">652427.5415 (x100)</td>
                                                <td class="cell_pnl minus">-11011.35</td>
                                                <td class="cell_roe minus">-175.01%</td>
                                                <td class="cell_price">
                                                    <span class="price">234.959</span>
                                                    <span class="price">230.910</span>
                                                </td>
                                                <td class="cell_stats ">강제청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">BTC</td>
                                                <td class="cell_price">
                                                    <span class="price">67290.94000000</span>
                                                    <span class="date">2024-03-15 20:16:13</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">67626.01000000</span>
                                                    <span class="date">2024-03-15 20:47:03</span>
                                                </td>
                                                <td class="cell_type short">매도<br>교차</td>
                                                <td class="cell_size">43278.72</td>
                                                <td class="cell_leverage">5662715.6882 (x125)</td>
                                                <td class="cell_pnl minus">-28197.05</td>
                                                <td class="cell_roe minus">-65.15%</td>
                                                <td class="cell_price">
                                                    <span class="price">2,039.312</span>
                                                    <span class="price">2,028.427</span>
                                                </td>
                                                <td class="cell_stats ">강제청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">BTC</td>
                                                <td class="cell_price">
                                                    <span class="price">67065.52000000</span>
                                                    <span class="date">2024-03-15 20:14:32</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">67310.80000000</span>
                                                    <span class="date">2024-03-15 20:16:00</span>
                                                </td>
                                                <td class="cell_type short">매도<br>교차</td>
                                                <td class="cell_size">95500</td>
                                                <td class="cell_leverage">12495500 (x125)</td>
                                                <td class="cell_pnl minus">-45700.02</td>
                                                <td class="cell_roe minus">-47.85%</td>
                                                <td class="cell_price">
                                                    <span class="price">4,500.000</span>
                                                    <span class="price">4,481.928</span>
                                                </td>
                                                <td class="cell_stats ">청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">BTC</td>
                                                <td class="cell_price">
                                                    <span class="price">66740.75000000</span>
                                                    <span class="date">2024-03-15 20:11:48</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">67078.19000000</span>
                                                    <span class="date">2024-03-15 20:12:56</span>
                                                </td>
                                                <td class="cell_type short">매도<br>교차</td>
                                                <td class="cell_size">2704.08</td>
                                                <td class="cell_leverage">353810.0825 (x125)</td>
                                                <td class="cell_pnl minus">-1788.85</td>
                                                <td class="cell_roe minus">-66.15%</td>
                                                <td class="cell_price">
                                                    <span class="price">127.418</span>
                                                    <span class="price">126.728</span>
                                                </td>
                                                <td class="cell_stats ">강제청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">BTC</td>
                                                <td class="cell_price">
                                                    <span class="price">66947.80000000</span>
                                                    <span class="date">2024-03-15 20:10:15</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">66815.17000000</span>
                                                    <span class="date">2024-03-15 20:11:37</span>
                                                </td>
                                                <td class="cell_type long">매수<br>교차</td>
                                                <td class="cell_size">4081.27</td>
                                                <td class="cell_leverage">534006.43845 (x125)</td>
                                                <td class="cell_pnl minus">-1057.91</td>
                                                <td class="cell_roe minus">-25.92%</td>
                                                <td class="cell_price">
                                                    <span class="price">192.312</span>
                                                    <span class="price">191.861</span>
                                                </td>
                                                <td class="cell_stats ">청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">BTC</td>
                                                <td class="cell_price">
                                                    <span class="price">67152.52000000</span>
                                                    <span class="date">2024-03-15 18:36:00</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">66887.27000000</span>
                                                    <span class="date">2024-03-15 20:10:00</span>
                                                </td>
                                                <td class="cell_type short">매도<br>교차</td>
                                                <td class="cell_size">1773.66</td>
                                                <td class="cell_leverage">183923.7636 (x100)</td>
                                                <td class="cell_pnl plus">726.49</td>
                                                <td class="cell_roe plus">40.96%</td>
                                                <td class="cell_price">
                                                    <span class="price">66.236</span>
                                                    <span class="price">66.474</span>
                                                </td>
                                                <td class="cell_stats ">청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">AXS</td>
                                                <td class="cell_price">
                                                    <span class="price">11.21800000</span>
                                                    <span class="date">2024-03-15 14:34:37</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">10.67100000</span>
                                                    <span class="date">2024-03-15 18:20:56</span>
                                                </td>
                                                <td class="cell_type short">매도<br>교차</td>
                                                <td class="cell_size">1433.52</td>
                                                <td class="cell_leverage">72963.7236 (x50)</td>
                                                <td class="cell_pnl plus">3557.77</td>
                                                <td class="cell_roe plus">248.18%</td>
                                                <td class="cell_price">
                                                    <span class="price">26.276</span>
                                                    <span class="price">27.548</span>
                                                </td>
                                                <td class="cell_stats ">강제청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">ARB</td>
                                                <td class="cell_price">
                                                    <span class="price">1.91300000</span>
                                                    <span class="date">2024-03-15 14:32:31</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">1.84570000</span>
                                                    <span class="date">2024-03-15 18:20:45</span>
                                                </td>
                                                <td class="cell_type long">매수<br>교차</td>
                                                <td class="cell_size">2867.04</td>
                                                <td class="cell_leverage">145927.4472 (x50)</td>
                                                <td class="cell_pnl minus">-5133.77</td>
                                                <td class="cell_roe minus">-179.06%</td>
                                                <td class="cell_price">
                                                    <span class="price">52.553</span>
                                                    <span class="price">50.686</span>
                                                </td>
                                                <td class="cell_stats ">강제청산</td>
                                            </tr>

                                            <tr>
                                                <td class="cell_price">BTC</td>
                                                <td class="cell_price">
                                                    <span class="price">68001.39000000</span>
                                                    <span class="date">2024-03-15 14:32:14</span>
                                                </td>
                                                <td class="cell_price">
                                                    <span class="price">66590.00000000</span>
                                                    <span class="date">2024-03-15 18:09:32</span>
                                                </td>
                                                <td class="cell_type long">매수<br>교차</td>
                                                <td class="cell_size">5734.09</td>
                                                <td class="cell_leverage">291854.8944 (x50)</td>
                                                <td class="cell_pnl minus">-6057.53</td>
                                                <td class="cell_roe minus">-105.64%</td>
                                                <td class="cell_price">
                                                    <span class="price">105.106</span>
                                                    <span class="price">102.887</span>
                                                </td>
                                                <td class="cell_stats ">강제청산</td>
                                            </tr>

                                            <tr></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="paging">
                                <strong>1</strong><a href="MemberListTrade.html?userid=ssssss&amp;page=2">2</a><a
                                    href="MemberListTrade.html?userid=ssssss&amp;page=3">3</a><a
                                    href="MemberListTrade.html?userid=ssssss&amp;page=4">4</a><a
                                    href="MemberListTrade.html?userid=ssssss&amp;page=5">5</a><a
                                    href="MemberListTrade.html?userid=ssssss&amp;page=6">6</a><a
                                    href="MemberListTrade.html?userid=ssssss&amp;page=7">7</a><a
                                    href="MemberListTrade.html?userid=ssssss&amp;page=8">8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
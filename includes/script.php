        <!-- Js Plugins -->
        <script>
            localStorage.clear();
        </script>

        <script src="js/tv.js"></script>

        <script>
            var coinNameInfo = [];
            coinNameInfo = [{
                symbol: "1inchusdt@ticker",
                name: "1INCH",
                nameKr: "1인치",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "aaveusdt@ticker",
                name: "AAVE",
                nameKr: "에이브",
                fixed: 1,
                fixed2: 3
            }, {
                symbol: "adausdt@ticker",
                name: "ADA",
                nameKr: "에이다",
                fixed: 4,
                fixed2: 1
            }, {
                symbol: "algousdt@ticker",
                name: "ALGO",
                nameKr: "알고랜드",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "alphausdt@ticker",
                name: "ALPHA",
                nameKr: "알파파이낸스랩",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "ankrusdt@ticker",
                name: "ANKR",
                nameKr: "앵커",
                fixed: 5,
                fixed2: 1
            }, {
                symbol: "antusdt@ticker",
                name: "ANT",
                nameKr: "아라곤",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "apeusdt@ticker",
                name: "APE",
                nameKr: "에이프",
                fixed: 3,
                fixed2: 2
            }, {
                symbol: "api3usdt@ticker",
                name: "API3",
                nameKr: "에이피아이3",
                fixed: 3,
                fixed2: 2
            }, {
                symbol: "arbusdt@ticker",
                name: "ARB",
                nameKr: "아비트럼",
                fixed: 4,
                fixed2: 1
            }, {
                symbol: "arpausdt@ticker",
                name: "ARPA",
                nameKr: "알파체인",
                fixed: 5,
                fixed2: 1
            }, {
                symbol: "atomusdt@ticker",
                name: "ATOM",
                nameKr: "코스모스아톰",
                fixed: 3,
                fixed2: 2
            }, {
                symbol: "audiousdt@ticker",
                name: "AUDIO",
                nameKr: "오디우스",
                fixed: 4,
                fixed2: 1
            }, {
                symbol: "avaxusdt@ticker",
                name: "AVAX",
                nameKr: "아발란체",
                fixed: 2,
                fixed2: 2
            }, {
                symbol: "axsusdt@ticker",
                name: "AXS",
                nameKr: "엑시인피니티",
                fixed: 2,
                fixed2: 2
            }, {
                symbol: "batusdt@ticker",
                name: "BAT",
                nameKr: "베이직어텐션토큰",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "bchusdt@ticker",
                name: "BCH",
                nameKr: "비트코인캐시",
                fixed: 1,
                fixed2: 3
            }, {
                symbol: "blzusdt@ticker",
                name: "BLZ",
                nameKr: "블루젤",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "bnbusdt@ticker",
                name: "BNB",
                nameKr: "바이낸스",
                fixed: 1,
                fixed2: 3
            }, {
                symbol: "bnxusdt@ticker",
                name: "BNX",
                nameKr: "바이너리엑스",
                fixed: 1,
                fixed2: 3
            }, {
                symbol: "btcusdt@ticker",
                name: "BTC",
                nameKr: "비트코인",
                fixed: 2,
                fixed2: 5
            }, {
                symbol: "btsusdt@ticker",
                name: "BTS",
                nameKr: "비트쉐어",
                fixed: 5,
                fixed2: 1
            }, {
                symbol: "celousdt@ticker",
                name: "CELO",
                nameKr: "셀로",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "chrusdt@ticker",
                name: "CHR",
                nameKr: "크로미아",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "chzusdt@ticker",
                name: "CHZ",
                nameKr: "칠리즈",
                fixed: 4,
                fixed2: 3
            }, {
                symbol: "compusdt@ticker",
                name: "COMP",
                nameKr: "컴파운드",
                fixed: 2,
                fixed2: 3
            }, {
                symbol: "crvusdt@ticker",
                name: "CRV",
                nameKr: "커브",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "ctsiusdt@ticker",
                name: "CTSI",
                nameKr: "카르테시",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "darusdt@ticker",
                name: "DAR",
                nameKr: "달라니아",
                fixed: 5,
                fixed2: 0
            }, {
                symbol: "dashusdt@ticker",
                name: "DASH",
                nameKr: "대시",
                fixed: 2,
                fixed2: 3
            }, {
                symbol: "dentusdt@ticker",
                name: "DENT",
                nameKr: "덴트",
                fixed: 6,
                fixed2: 0
            }, {
                symbol: "dgbusdt@ticker",
                name: "DGB",
                nameKr: "디지바이트",
                fixed: 5,
                fixed2: 1
            }, {
                symbol: "dogeusdt@ticker",
                name: "DOGE",
                nameKr: "도지",
                fixed: 5,
                fixed2: 3
            }, {
                symbol: "dotusdt@ticker",
                name: "DOT",
                nameKr: "폴카닷",
                fixed: 3,
                fixed2: 2
            }, {
                symbol: "enjusdt@ticker",
                name: "ENJ",
                nameKr: "엔진",
                fixed: 4,
                fixed2: 1
            }, {
                symbol: "ensusdt@ticker",
                name: "ENS",
                nameKr: "이더리움네임",
                fixed: 2,
                fixed2: 2
            }, {
                symbol: "eosusdt@ticker",
                name: "EOS",
                nameKr: "이오스",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "etcusdt@ticker",
                name: "ETC",
                nameKr: "이더리움클래식",
                fixed: 2,
                fixed2: 2
            }, {
                symbol: "ethusdt@ticker",
                name: "ETH",
                nameKr: "이더리움",
                fixed: 2,
                fixed2: 4
            }, {
                symbol: "filusdt@ticker",
                name: "FIL",
                nameKr: "파일코인",
                fixed: 3,
                fixed2: 2
            }, {
                symbol: "flowusdt@ticker",
                name: "FLOW",
                nameKr: "플로우",
                fixed: 3,
                fixed2: 2
            }, {
                symbol: "gmtusdt@ticker",
                name: "GMT",
                nameKr: "스테픈",
                fixed: 4,
                fixed2: 1
            }, {
                symbol: "grtusdt@ticker",
                name: "GRT",
                nameKr: "더그래프",
                fixed: 4,
                fixed2: 3
            }, {
                symbol: "gtcusdt@ticker",
                name: "GTC",
                nameKr: "깃코인",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "hbarusdt@ticker",
                name: "HBAR",
                nameKr: "헤데라",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "hookusdt@ticker",
                name: "HOOK",
                nameKr: "훅트",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "icxusdt@ticker",
                name: "ICX",
                nameKr: "아이콘",
                fixed: 4,
                fixed2: 1
            }, {
                symbol: "idexusdt@ticker",
                name: "IDEX",
                nameKr: "아이덱스",
                fixed: 5,
                fixed2: 1
            }, {
                symbol: "imxusdt@ticker",
                name: "IMX",
                nameKr: "이뮤터블엑스",
                fixed: 3,
                fixed2: 2
            }, {
                symbol: "injusdt@ticker",
                name: "INJ",
                nameKr: "인젝티브",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "iostusdt@ticker",
                name: "IOST",
                nameKr: "이오스트",
                fixed: 5,
                fixed2: 0
            }, {
                symbol: "iotausdt@ticker",
                name: "IOTA",
                nameKr: "아이오타",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "iotxusdt@ticker",
                name: "IOTX",
                nameKr: "아이오텍스",
                fixed: 5,
                fixed2: 0
            }, {
                symbol: "kavausdt@ticker",
                name: "KAVA",
                nameKr: "카바",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "klayusdt@ticker",
                name: "KLAY",
                nameKr: "클레이튼",
                fixed: 4,
                fixed2: 1
            }, {
                symbol: "kncusdt@ticker",
                name: "KNC",
                nameKr: "카이버",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "linausdt@ticker",
                name: "LINA",
                nameKr: "리니어파이낸스",
                fixed: 6,
                fixed2: 2
            }, {
                symbol: "linkusdt@ticker",
                name: "LINK",
                nameKr: "링크",
                fixed: 3,
                fixed2: 2
            }, {
                symbol: "lptusdt@ticker",
                name: "LPT",
                nameKr: "라이브피어",
                fixed: 2,
                fixed2: 2
            }, {
                symbol: "lrcusdt@ticker",
                name: "LRC",
                nameKr: "루프링",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "ltcusdt@ticker",
                name: "LTC",
                nameKr: "라이트코인",
                fixed: 2,
                fixed2: 3
            }, {
                symbol: "manausdt@ticker",
                name: "MANA",
                nameKr: "디센트럴랜드",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "maskusdt@ticker",
                name: "MASK",
                nameKr: "마스크",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "maticusdt@ticker",
                name: "MATIC",
                nameKr: "폴리곤",
                fixed: 4,
                fixed2: 1
            }, {
                symbol: "mkrusdt@ticker",
                name: "MKR",
                nameKr: "메이커",
                fixed: 0,
                fixed2: 4
            }, {
                symbol: "mtlusdt@ticker",
                name: "MTL",
                nameKr: "메탈",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "nearusdt@ticker",
                name: "NEAR",
                nameKr: "니어프로토콜",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "neousdt@ticker",
                name: "NEO",
                nameKr: "네오",
                fixed: 2,
                fixed2: 2
            }, {
                symbol: "nknusdt@ticker",
                name: "NKN",
                nameKr: "엔케이엔",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "oceanusdt@ticker",
                name: "OCEAN",
                nameKr: "오션프로토콜",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "ognusdt@ticker",
                name: "OGN",
                nameKr: "오리진",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "omgusdt@ticker",
                name: "OMG",
                nameKr: "오미세고",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "ontusdt@ticker",
                name: "ONT",
                nameKr: "온톨로지",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "opusdt@ticker",
                name: "OP",
                nameKr: "옵티미즘",
                fixed: 3,
                fixed2: 2
            }, {
                symbol: "qtumusdt@ticker",
                name: "QTUM",
                nameKr: "퀀텀",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "rlcusdt@ticker",
                name: "RLC",
                nameKr: "아이젝",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "rndrusdt@ticker",
                name: "RNDR",
                nameKr: "렌더토큰",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "rsrusdt@ticker",
                name: "RSR",
                nameKr: "리저브라이트",
                fixed: 6,
                fixed2: 1
            }, {
                symbol: "rvnusdt@ticker",
                name: "RVN",
                nameKr: "레이븐코인",
                fixed: 5,
                fixed2: 1
            }, {
                symbol: "sandusdt@ticker",
                name: "SAND",
                nameKr: "샌드박스",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "scusdt@ticker",
                name: "SC",
                nameKr: "시아",
                fixed: 5,
                fixed2: 3
            }, {
                symbol: "snxusdt@ticker",
                name: "SNX",
                nameKr: "신세틱스",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "solusdt@ticker",
                name: "SOL",
                nameKr: "솔라나",
                fixed: 2,
                fixed2: 2
            }, {
                symbol: "stmxusdt@ticker",
                name: "STMX",
                nameKr: "스톰엑스",
                fixed: 6,
                fixed2: 1
            }, {
                symbol: "storjusdt@ticker",
                name: "STORJ",
                nameKr: "스토리지",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "stxusdt@ticker",
                name: "STX",
                nameKr: "스택스",
                fixed: 4,
                fixed2: 1
            }, {
                symbol: "sxpusdt@ticker",
                name: "SXP",
                nameKr: "스와이프",
                fixed: 4,
                fixed2: 1
            }, {
                symbol: "thetausdt@ticker",
                name: "THETA",
                nameKr: "쎄타토큰",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "tomousdt@ticker",
                name: "TOMO",
                nameKr: "토모",
                fixed: 4,
                fixed2: 1
            }, {
                symbol: "trxusdt@ticker",
                name: "TRX",
                nameKr: "트론",
                fixed: 5,
                fixed2: 1
            }, {
                symbol: "uniusdt@ticker",
                name: "UNI",
                nameKr: "유니스왑",
                fixed: 3,
                fixed2: 2
            }, {
                symbol: "vetusdt@ticker",
                name: "VET",
                nameKr: "비체인",
                fixed: 5,
                fixed2: 1
            }, {
                symbol: "wavesusdt@ticker",
                name: "WAVES",
                nameKr: "웨이브즈",
                fixed: 3,
                fixed2: 2
            }, {
                symbol: "xemusdt@ticker",
                name: "XEM",
                nameKr: "넴",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "xlmusdt@ticker",
                name: "XLM",
                nameKr: "스텔라루멘",
                fixed: 4,
                fixed2: 3
            }, {
                symbol: "xmrusdt@ticker",
                name: "XMR",
                nameKr: "모네로",
                fixed: 1,
                fixed2: 3
            }, {
                symbol: "xrpusdt@ticker",
                name: "XRP",
                nameKr: "리플",
                fixed: 4,
                fixed2: 0
            }, {
                symbol: "xtzusdt@ticker",
                name: "XTZ",
                nameKr: "테조스",
                fixed: 3,
                fixed2: 1
            }, {
                symbol: "yfiusdt@ticker",
                name: "YFI",
                nameKr: "와이언파이낸스",
                fixed: 0,
                fixed2: 4
            }, {
                symbol: "zecusdt@ticker",
                name: "ZEC",
                nameKr: "지캐시",
                fixed: 1,
                fixed2: 3
            }, {
                symbol: "zenusdt@ticker",
                name: "ZEN",
                nameKr: "호라이젠",
                fixed: 2,
                fixed2: 2
            }, {
                symbol: "zilusdt@ticker",
                name: "ZIL",
                nameKr: "질리카",
                fixed: 5,
                fixed2: 1
            }, {
                symbol: "zrxusdt@ticker",
                name: "ZRX",
                nameKr: "제로엑스",
                fixed: 4,
                fixed2: 0
            }, ];
        </script>

   
        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/jquery.event.drag-2.0.min.js"></script>
   
        <script src="js/slick.core.js"></script>
        <script src="js/slick.grid.js"></script>
        <script src="js/sidecoinmenu.js"></script>
        <script src="js/slick.dataview.js"></script>
        <script src="js/jquery.toast.js"></script>
        <script src="js/trading_new.js"></script>
        
        <div id="positionCheck"></div>



        <!-- <script>
            var initData = {

                "ask": null,
                "bid": null,
                "order": {
                    "ci": null,
                    "position": null,
                    "betPoint": 0,
                    "leverage": 1
                }

                ,
                "orderResult": {}

                ,
                "mbTp": 12614.47888874,
                "mbEstimatedTp": 12614.47888874,
                "cross": true,
                "crossTradeId": 2409101520250719985,
                "crossIm": 688.803,
                "dataList": [{
                        "ci": "C",
                        "position": "SHORT",
                        "leverage": 10,
                        "betPoint": 1000.0,
                        "balancePoint": 996.0,
                        "breakPercent": "0.00",
                        "breakPrice": "0",
                        "buyPrice": "57172",
                        "leveragePoint": 9000.0,
                        "date": "2024-09-10 17:38:11",
                        "realTradePoint": 9996.0,
                        "tradeId": "2409101738117694023",
                        "socketUrl": "btcusdt",
                        "socketCheck": false,
                        "symbol": "BTCUSDT",
                        "name": "BTC",
                        "ask": "56965.44",
                        "bid": "56965.43",
                        "stopPercent": "0",
                        "stopPrice": "0",
                        "profitPercent": "0",
                        "profitPrice": "0",
                        "coinMaxLeverage": "125"
                    }

                    ,
                    {
                        "ci": "C",
                        "position": "SHORT",
                        "leverage": 50,
                        "betPoint": 3444.015,
                        "balancePoint": 3375.1347,
                        "breakPercent": "0.00",
                        "breakPrice": "0",
                        "buyPrice": "0.5374",
                        "leveragePoint": 168756.735,
                        "date": "2024-09-10 15:20:25",
                        "realTradePoint": 172131.8697,
                        "tradeId": "2409101520250719985",
                        "socketUrl": "xrpusdt",
                        "socketCheck": false,
                        "symbol": "XRPUSDT",
                        "name": "XRP",
                        "ask": "0.5381",
                        "bid": "0.538",
                        "stopPercent": "0",
                        "stopPrice": "0",
                        "profitPercent": "0",
                        "profitPrice": "0",
                        "coinMaxLeverage": "75"
                    }

                ],
                "memberBalancePoint": 12614.47888874,
                "realBalancePoint": 10702.53,
                "totlaBalancePoint": 0
            }

            ;
            localStorage.setItem("localTradeData", JSON.stringify(initData));
        </script>

        <script>
            var initData = {

                "ask": null,
                "bid": null,
                "order": {
                    "ci": null,
                    "position": null,
                    "betPoint": 0,
                    "leverage": 1
                }

                ,
                "orderResult": {}

                ,
                "mbTp": 12614.47888874,
                "mbEstimatedTp": 12614.47888874,
                "cross": true,
                "crossTradeId": 2409101520250719985,
                "crossIm": 688.803,
                "dataList": [],
                "totlaBalancePoint": 0
            }

            ;
            localStorage.setItem("localTradeLoData", JSON.stringify(initData));
        </script>
        <script src="js/tv.js"></script>

        <script>
            var coinNameInfo = [];

            coinNameInfo = [{
                    symbol: "1inchusdt@ticker",
                    name: "1INCH",
                    nameKr: "1인치",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "aaveusdt@ticker",
                    name: "AAVE",
                    nameKr: "에이브",
                    fixed: 1,
                    fixed2: 3
                }

                ,
                {
                    symbol: "adausdt@ticker",
                    name: "ADA",
                    nameKr: "에이다",
                    fixed: 4,
                    fixed2: 1
                }

                ,
                {
                    symbol: "algousdt@ticker",
                    name: "ALGO",
                    nameKr: "알고랜드",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "alphausdt@ticker",
                    name: "ALPHA",
                    nameKr: "알파파이낸스랩",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "ankrusdt@ticker",
                    name: "ANKR",
                    nameKr: "앵커",
                    fixed: 5,
                    fixed2: 1
                }

                ,
                {
                    symbol: "antusdt@ticker",
                    name: "ANT",
                    nameKr: "아라곤",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "apeusdt@ticker",
                    name: "APE",
                    nameKr: "에이프",
                    fixed: 3,
                    fixed2: 2
                }

                ,
                {
                    symbol: "api3usdt@ticker",
                    name: "API3",
                    nameKr: "에이피아이3",
                    fixed: 3,
                    fixed2: 2
                }

                ,
                {
                    symbol: "arbusdt@ticker",
                    name: "ARB",
                    nameKr: "아비트럼",
                    fixed: 4,
                    fixed2: 1
                }

                ,
                {
                    symbol: "arpausdt@ticker",
                    name: "ARPA",
                    nameKr: "알파체인",
                    fixed: 5,
                    fixed2: 1
                }

                ,
                {
                    symbol: "atomusdt@ticker",
                    name: "ATOM",
                    nameKr: "코스모스아톰",
                    fixed: 3,
                    fixed2: 2
                }

                ,
                {
                    symbol: "audiousdt@ticker",
                    name: "AUDIO",
                    nameKr: "오디우스",
                    fixed: 4,
                    fixed2: 1
                }

                ,
                {
                    symbol: "avaxusdt@ticker",
                    name: "AVAX",
                    nameKr: "아발란체",
                    fixed: 2,
                    fixed2: 2
                }

                ,
                {
                    symbol: "axsusdt@ticker",
                    name: "AXS",
                    nameKr: "엑시인피니티",
                    fixed: 2,
                    fixed2: 2
                }

                ,
                {
                    symbol: "batusdt@ticker",
                    name: "BAT",
                    nameKr: "베이직어텐션토큰",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "bchusdt@ticker",
                    name: "BCH",
                    nameKr: "비트코인캐시",
                    fixed: 1,
                    fixed2: 3
                }

                ,
                {
                    symbol: "blzusdt@ticker",
                    name: "BLZ",
                    nameKr: "블루젤",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "bnbusdt@ticker",
                    name: "BNB",
                    nameKr: "바이낸스",
                    fixed: 1,
                    fixed2: 3
                }

                ,
                {
                    symbol: "bnxusdt@ticker",
                    name: "BNX",
                    nameKr: "바이너리엑스",
                    fixed: 1,
                    fixed2: 3
                }

                ,
                {
                    symbol: "btcusdt@ticker",
                    name: "BTC",
                    nameKr: "비트코인",
                    fixed: 2,
                    fixed2: 5
                }

                ,
                {
                    symbol: "btsusdt@ticker",
                    name: "BTS",
                    nameKr: "비트쉐어",
                    fixed: 5,
                    fixed2: 1
                }

                ,
                {
                    symbol: "celousdt@ticker",
                    name: "CELO",
                    nameKr: "셀로",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "chrusdt@ticker",
                    name: "CHR",
                    nameKr: "크로미아",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "chzusdt@ticker",
                    name: "CHZ",
                    nameKr: "칠리즈",
                    fixed: 4,
                    fixed2: 3
                }

                ,
                {
                    symbol: "compusdt@ticker",
                    name: "COMP",
                    nameKr: "컴파운드",
                    fixed: 2,
                    fixed2: 3
                }

                ,
                {
                    symbol: "crvusdt@ticker",
                    name: "CRV",
                    nameKr: "커브",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "ctsiusdt@ticker",
                    name: "CTSI",
                    nameKr: "카르테시",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "darusdt@ticker",
                    name: "DAR",
                    nameKr: "달라니아",
                    fixed: 5,
                    fixed2: 0
                }

                ,
                {
                    symbol: "dashusdt@ticker",
                    name: "DASH",
                    nameKr: "대시",
                    fixed: 2,
                    fixed2: 3
                }

                ,
                {
                    symbol: "dentusdt@ticker",
                    name: "DENT",
                    nameKr: "덴트",
                    fixed: 6,
                    fixed2: 0
                }

                ,
                {
                    symbol: "dgbusdt@ticker",
                    name: "DGB",
                    nameKr: "디지바이트",
                    fixed: 5,
                    fixed2: 1
                }

                ,
                {
                    symbol: "dogeusdt@ticker",
                    name: "DOGE",
                    nameKr: "도지",
                    fixed: 5,
                    fixed2: 3
                }

                ,
                {
                    symbol: "dotusdt@ticker",
                    name: "DOT",
                    nameKr: "폴카닷",
                    fixed: 3,
                    fixed2: 2
                }

                ,
                {
                    symbol: "enjusdt@ticker",
                    name: "ENJ",
                    nameKr: "엔진",
                    fixed: 4,
                    fixed2: 1
                }

                ,
                {
                    symbol: "ensusdt@ticker",
                    name: "ENS",
                    nameKr: "이더리움네임",
                    fixed: 2,
                    fixed2: 2
                }

                ,
                {
                    symbol: "eosusdt@ticker",
                    name: "EOS",
                    nameKr: "이오스",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "etcusdt@ticker",
                    name: "ETC",
                    nameKr: "이더리움클래식",
                    fixed: 2,
                    fixed2: 2
                }

                ,
                {
                    symbol: "ethusdt@ticker",
                    name: "ETH",
                    nameKr: "이더리움",
                    fixed: 2,
                    fixed2: 4
                }

                ,
                {
                    symbol: "filusdt@ticker",
                    name: "FIL",
                    nameKr: "파일코인",
                    fixed: 3,
                    fixed2: 2
                }

                ,
                {
                    symbol: "flowusdt@ticker",
                    name: "FLOW",
                    nameKr: "플로우",
                    fixed: 3,
                    fixed2: 2
                }

                ,
                {
                    symbol: "gmtusdt@ticker",
                    name: "GMT",
                    nameKr: "스테픈",
                    fixed: 4,
                    fixed2: 1
                }

                ,
                {
                    symbol: "grtusdt@ticker",
                    name: "GRT",
                    nameKr: "더그래프",
                    fixed: 4,
                    fixed2: 3
                }

                ,
                {
                    symbol: "gtcusdt@ticker",
                    name: "GTC",
                    nameKr: "깃코인",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "hbarusdt@ticker",
                    name: "HBAR",
                    nameKr: "헤데라",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "hookusdt@ticker",
                    name: "HOOK",
                    nameKr: "훅트",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "icxusdt@ticker",
                    name: "ICX",
                    nameKr: "아이콘",
                    fixed: 4,
                    fixed2: 1
                }

                ,
                {
                    symbol: "idexusdt@ticker",
                    name: "IDEX",
                    nameKr: "아이덱스",
                    fixed: 5,
                    fixed2: 1
                }

                ,
                {
                    symbol: "imxusdt@ticker",
                    name: "IMX",
                    nameKr: "이뮤터블엑스",
                    fixed: 3,
                    fixed2: 2
                }

                ,
                {
                    symbol: "injusdt@ticker",
                    name: "INJ",
                    nameKr: "인젝티브",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "iostusdt@ticker",
                    name: "IOST",
                    nameKr: "이오스트",
                    fixed: 5,
                    fixed2: 0
                }

                ,
                {
                    symbol: "iotausdt@ticker",
                    name: "IOTA",
                    nameKr: "아이오타",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "iotxusdt@ticker",
                    name: "IOTX",
                    nameKr: "아이오텍스",
                    fixed: 5,
                    fixed2: 0
                }

                ,
                {
                    symbol: "kavausdt@ticker",
                    name: "KAVA",
                    nameKr: "카바",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "klayusdt@ticker",
                    name: "KLAY",
                    nameKr: "클레이튼",
                    fixed: 4,
                    fixed2: 1
                }

                ,
                {
                    symbol: "kncusdt@ticker",
                    name: "KNC",
                    nameKr: "카이버",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "linausdt@ticker",
                    name: "LINA",
                    nameKr: "리니어파이낸스",
                    fixed: 6,
                    fixed2: 2
                }

                ,
                {
                    symbol: "linkusdt@ticker",
                    name: "LINK",
                    nameKr: "링크",
                    fixed: 3,
                    fixed2: 2
                }

                ,
                {
                    symbol: "lptusdt@ticker",
                    name: "LPT",
                    nameKr: "라이브피어",
                    fixed: 2,
                    fixed2: 2
                }

                ,
                {
                    symbol: "lrcusdt@ticker",
                    name: "LRC",
                    nameKr: "루프링",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "ltcusdt@ticker",
                    name: "LTC",
                    nameKr: "라이트코인",
                    fixed: 2,
                    fixed2: 3
                }

                ,
                {
                    symbol: "manausdt@ticker",
                    name: "MANA",
                    nameKr: "디센트럴랜드",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "maskusdt@ticker",
                    name: "MASK",
                    nameKr: "마스크",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "maticusdt@ticker",
                    name: "MATIC",
                    nameKr: "폴리곤",
                    fixed: 4,
                    fixed2: 1
                }

                ,
                {
                    symbol: "mkrusdt@ticker",
                    name: "MKR",
                    nameKr: "메이커",
                    fixed: 0,
                    fixed2: 4
                }

                ,
                {
                    symbol: "mtlusdt@ticker",
                    name: "MTL",
                    nameKr: "메탈",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "nearusdt@ticker",
                    name: "NEAR",
                    nameKr: "니어프로토콜",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "neousdt@ticker",
                    name: "NEO",
                    nameKr: "네오",
                    fixed: 2,
                    fixed2: 2
                }

                ,
                {
                    symbol: "nknusdt@ticker",
                    name: "NKN",
                    nameKr: "엔케이엔",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "oceanusdt@ticker",
                    name: "OCEAN",
                    nameKr: "오션프로토콜",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "ognusdt@ticker",
                    name: "OGN",
                    nameKr: "오리진",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "omgusdt@ticker",
                    name: "OMG",
                    nameKr: "오미세고",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "ontusdt@ticker",
                    name: "ONT",
                    nameKr: "온톨로지",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "opusdt@ticker",
                    name: "OP",
                    nameKr: "옵티미즘",
                    fixed: 3,
                    fixed2: 2
                }

                ,
                {
                    symbol: "qtumusdt@ticker",
                    name: "QTUM",
                    nameKr: "퀀텀",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "rlcusdt@ticker",
                    name: "RLC",
                    nameKr: "아이젝",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "rndrusdt@ticker",
                    name: "RNDR",
                    nameKr: "렌더토큰",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "rsrusdt@ticker",
                    name: "RSR",
                    nameKr: "리저브라이트",
                    fixed: 6,
                    fixed2: 1
                }

                ,
                {
                    symbol: "rvnusdt@ticker",
                    name: "RVN",
                    nameKr: "레이븐코인",
                    fixed: 5,
                    fixed2: 1
                }

                ,
                {
                    symbol: "sandusdt@ticker",
                    name: "SAND",
                    nameKr: "샌드박스",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "scusdt@ticker",
                    name: "SC",
                    nameKr: "시아",
                    fixed: 5,
                    fixed2: 3
                }

                ,
                {
                    symbol: "snxusdt@ticker",
                    name: "SNX",
                    nameKr: "신세틱스",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "solusdt@ticker",
                    name: "SOL",
                    nameKr: "솔라나",
                    fixed: 2,
                    fixed2: 2
                }

                ,
                {
                    symbol: "stmxusdt@ticker",
                    name: "STMX",
                    nameKr: "스톰엑스",
                    fixed: 6,
                    fixed2: 1
                }

                ,
                {
                    symbol: "storjusdt@ticker",
                    name: "STORJ",
                    nameKr: "스토리지",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "stxusdt@ticker",
                    name: "STX",
                    nameKr: "스택스",
                    fixed: 4,
                    fixed2: 1
                }

                ,
                {
                    symbol: "sxpusdt@ticker",
                    name: "SXP",
                    nameKr: "스와이프",
                    fixed: 4,
                    fixed2: 1
                }

                ,
                {
                    symbol: "thetausdt@ticker",
                    name: "THETA",
                    nameKr: "쎄타토큰",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "tomousdt@ticker",
                    name: "TOMO",
                    nameKr: "토모",
                    fixed: 4,
                    fixed2: 1
                }

                ,
                {
                    symbol: "trxusdt@ticker",
                    name: "TRX",
                    nameKr: "트론",
                    fixed: 5,
                    fixed2: 1
                }

                ,
                {
                    symbol: "uniusdt@ticker",
                    name: "UNI",
                    nameKr: "유니스왑",
                    fixed: 3,
                    fixed2: 2
                }

                ,
                {
                    symbol: "vetusdt@ticker",
                    name: "VET",
                    nameKr: "비체인",
                    fixed: 5,
                    fixed2: 1
                }

                ,
                {
                    symbol: "wavesusdt@ticker",
                    name: "WAVES",
                    nameKr: "웨이브즈",
                    fixed: 3,
                    fixed2: 2
                }

                ,
                {
                    symbol: "xemusdt@ticker",
                    name: "XEM",
                    nameKr: "넴",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "xlmusdt@ticker",
                    name: "XLM",
                    nameKr: "스텔라루멘",
                    fixed: 4,
                    fixed2: 3
                }

                ,
                {
                    symbol: "xmrusdt@ticker",
                    name: "XMR",
                    nameKr: "모네로",
                    fixed: 1,
                    fixed2: 3
                }

                ,
                {
                    symbol: "xrpusdt@ticker",
                    name: "XRP",
                    nameKr: "리플",
                    fixed: 4,
                    fixed2: 0
                }

                ,
                {
                    symbol: "xtzusdt@ticker",
                    name: "XTZ",
                    nameKr: "테조스",
                    fixed: 3,
                    fixed2: 1
                }

                ,
                {
                    symbol: "yfiusdt@ticker",
                    name: "YFI",
                    nameKr: "와이언파이낸스",
                    fixed: 0,
                    fixed2: 4
                }

                ,
                {
                    symbol: "zecusdt@ticker",
                    name: "ZEC",
                    nameKr: "지캐시",
                    fixed: 1,
                    fixed2: 3
                }

                ,
                {
                    symbol: "zenusdt@ticker",
                    name: "ZEN",
                    nameKr: "호라이젠",
                    fixed: 2,
                    fixed2: 2
                }

                ,
                {
                    symbol: "zilusdt@ticker",
                    name: "ZIL",
                    nameKr: "질리카",
                    fixed: 5,
                    fixed2: 1
                }

                ,
                {
                    symbol: "zrxusdt@ticker",
                    name: "ZRX",
                    nameKr: "제로엑스",
                    fixed: 4,
                    fixed2: 0
                }

                ,
            ];
        </script>

        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/jquery.event.drag-2.0.min.js"></script>

        <script src="js/slick.core.js"></script>
        <script src="js/slick.grid.js"></script>
        <script src="js/sidecoinmenu.js"></script>
        <script src="js/slick.dataview.js"></script>
        <script src="js/jquery.toast.js"></script>
        <script src="js/trading_new.js"></script>

        <div id="positionCheck"></div> -->
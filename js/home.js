function getUrl(start = 0) {
    return 'https://api.coinlore.com/api/tickers/?start=' + start + '&limit=30';
}

function getData(url) {
    fetch(url)
        .then(response => response.json())
        .then(data => loadDataIntoTable(data))
        .catch(err => console.log(err));
}

function loadDataIntoTable(data) {
    let coinName = [];
    let coinSymbol = [];
    let coinVolume = [];
    let coinPrice = [];
    let coin24Change = [];

    data['data'].forEach((coin) => {
        coinName.push(coin.name);
        coinSymbol.push(coin.symbol);
        coinVolume.push(coin.volume24);
        coinPrice.push(coin.price_usd);
        coin24Change.push(coin.percent_change_24h);
    });

    let liBody = document.getElementById('crypto-table-body');

    let html = "";

    for (let i = 0; i < coinName.length; i++) {
        let html = "";

        if (coinSymbol[i] === 'BTC') {

            html += "<div>";
            html += "<img src='/images/coin/btc.png'>";
            html += "<b>" + coinSymbol[i] + "</b>";
            html += "</div>";
            html += "<span class='whitey'>" + coinPrice[i] + "</span>";
            if (coin24Change[i] > 0) {
                html += "<span class='greeney'>+" + coin24Change[i] + "</span>";
            } else {
                html += "<span class='dangeralarm'>" + coin24Change[i] + "</span>";
            }
            html += "<span>" + coinVolume[i] + "</span>";
            html += "<a href='/Trading.aspx?coinName=btcusdt'>Trade</a>";

            let liBody = document.getElementById('crypto-table-body1');
            liBody.innerHTML = html;
        }
        else if (coinSymbol[i] === 'XRP') {

            html += "<div>";
            html += "<img src='/images/coin/xrp.png'>";
            html += "<b>" + coinSymbol[i] + "</b>";
            html += "</div>";
            html += "<span class='whitey'>" + coinPrice[i] + "</span>";
            if (coin24Change[i] > 0) {
                html += "<span class='greeney'>+" + coin24Change[i] + "</span>";
            } else {
                html += "<span class='dangeralarm'>" + coin24Change[i] + "</span>";
            }
            html += "<span>" + coinVolume[i] + "</span>";
            html += "<a href='/Trading.aspx?coinName=xrpusdt'>Trade</a>";

            let liBody = document.getElementById('crypto-table-body2');
            liBody.innerHTML = html;
        }
        else if (coinSymbol[i] === 'ETH') {
            html += "<div>";
            html += "<img src='/images/coin/eth.png'>";
            html += "<b>" + coinSymbol[i] + "</b>";
            html += "</div>";
            html += "<span class='whitey'>" + coinPrice[i] + "</span>";
            if (coin24Change[i] > 0) {
                html += "<span class='greeney'>+" + coin24Change[i] + "</span>";
            } else {
                html += "<span class='dangeralarm'>" + coin24Change[i] + "</span>";
            }
            html += "<span>" + coinVolume[i] + "</span>";
            html += "<a href='/Trading.aspx?coinName=ethusdt'>Trade</a>";

            let liBody = document.getElementById('crypto-table-body3');
            liBody.innerHTML = html;
        }
        else if (coinSymbol[i] === 'BNB') {
            html += "<div>";
            html += "<img src='/images/coin/bnb.png'>";
            html += "<b>" + coinSymbol[i] + "</b>";
            html += "</div>";
            html += "<span class='whitey'>" + coinPrice[i] + "</span>";
            if (coin24Change[i] > 0) {
                html += "<span class='greeney'>+" + coin24Change[i] + "</span>";
            } else {
                html += "<span class='dangeralarm'>" + coin24Change[i] + "</span>";
            }
            html += "<span>" + coinVolume[i] + "</span>";
            html += "<a href='/Trading.aspx?coinName=bnbusdt'>Trade</a>";

            let liBody = document.getElementById('crypto-table-body4');
            liBody.innerHTML = html;
        }
        else if (coinSymbol[i] === 'ADA') {
            html += "<div>";
            html += "<img src='/images/coin/ada.png'>";
            html += "<b>" + coinSymbol[i] + "</b>";
            html += "</div>";
            html += "<span class='whitey'>" + coinPrice[i] + "</span>";
            if (coin24Change[i] > 0) {
                html += "<span class='greeney'>+" + coin24Change[i] + "</span>";
            } else {
                html += "<span class='dangeralarm'>" + coin24Change[i] + "</span>";
            }
            html += "<span>" + coinVolume[i] + "</span>";
            html += "<a href='/Trading.aspx?coinName=adausdt'>Trade</a>";

            let liBody = document.getElementById('crypto-table-body5');
            liBody.innerHTML = html;
        }
    }
}



function handleLeftArrowClick(activePageNumber, leftArrow, rightArrow) {
    let previousPage = document.querySelectorAll('li')[activePageNumber - 1];
    previousPage.classList = "active";
    url = getUrl(((activePageNumber - 1) * 10) - 10);
    getData(url);

    if (activePageNumber === 10) {
        enableRightArrow(rightArrow);
    }

    if (activePageNumber - 1 === 1) {
        disableLeftArrow(leftArrow);
    }
}



function init() {
    const url = getUrl();
    getData(url);
}

init();



var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = x.length };
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
}

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) { myIndex = 1 }
    setTimeout(carousel, 5000);
}

$(document).ready(function () {

    var animation_elements = $.find('.animation-element');
    var web_window = $(window);

    function check_if_in_view() {
        var window_height = web_window.height();
        var window_top_position = web_window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each(animation_elements, function () {

            var element = $(this);
            var element_height = $(element).outerHeight();
            var element_top_position = $(element).offset().top;
            var element_bottom_position = (element_top_position + element_height);

            if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
                element.addClass('in-view');
            } else {
                element.removeClass('in-view');
            }
        });

    }

    $(window).on('scroll resize', function () {
        check_if_in_view()
    })
    $(window).trigger('scroll');


    customSlider2(".tradSlider");
});



function customSlider(target) {
    $(target).slick({
        slide: 'li',
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('#prevArrow'),
        nextArrow: $('#nextArrow'),
        speed: 500,
        autoplay: true,
        autoplaySpeed: 2500,
        pauseOnHover: true,
        vertical: false,
        draggable: true,
        responsive: [
            {
                breakpoint: 1279,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
}


function customSlider2(target) {
    $(target).slick({
        slide: 'li',
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '20px',
        mobileFirst: true,
        arrows: false,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 1800,
        pauseOnHover: true,
        vertical: false,
        draggable: true,
        responsive: [
            {
                breakpoint: 767,
                settings: 'unslick'
            }
        ]
    });

    $(window).on('resize', function () {
        $(target).slick('resize');
    });
}

$(document).ready(function () {
    $(".b-search__expand")
        .focus(function (e) {
            $("#search-button").addClass("b-search__button--focus");
            $(this).attr("placeholder", "Введите запрос");
        })
        .blur(function (e) {
            setTimeout(function () {
                $("#search-button").removeClass("b-search__button--focus");
            }, 300);
            $(this).attr("placeholder", "Поиск");
        });


    $(".header__menu-item").each(function () {
        if ($(this).children('ul').length != 0) {
            $(this).addClass("menu-item__has-child");
        }
    });

    $(".header__menu-burger").click(function () {
        $(".header__menu").slideToggle("slow");
        if ($('.icon-bar').is(':visible')) {
            $(".icon-bar").hide();
        } else {
            $(".icon-bar").delay(500).fadeIn(100);
        }
        if ($('.icon-close').is(':visible')) {
            $(".icon-close").delay(300).fadeOut(100);
        } else {
            $(".icon-close").show();
        }
    });


    $(".button-show-filter").click(function () {
        $(".filter-sidebar").slideToggle("slow");
    });


    $('#main-slider').owlCarousel({
        items: 1,
        loop: true, //Зацикливаем слайдер
        nav: false //Отключена навигация
        // autoplay:true, //Автозапуск слайдера
        // smartSpeed:1000, //Время движения слайда
        // autoplayTimeout:2000, //Время смены слайда
    });

    $('#news-slider').owlCarousel({
        loop: true,
        nav: true,
        navText: false,
        responsive: {
            0: {
                items: 1
            },
            481: {
                items: 2
            },
            861: {
                items: 3
            },
            1140: {
                items: 4
            }
        }
    });

    $('#other-product-slider').owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        navText: false,
        responsive: {
            0: {
                items: 1
            },
            481: {
                items: 2
            },
            861: {
                items: 3
            },
            1140: {
                items: 4
            }
        }
    });




    // Tab
    $('#productsTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        tabidentify: 'hor_1', // The tab groups identifier

        activate: function (event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#nested-tabInfo');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
        }
    });

    $('input, textarea').placeholder();

    $('textarea').autoResize();

    $(".pagination").rPage();
    $(".page-away-0.active").nextAll('li').addClass('next-li');


    $('.selectpicker').selectpicker();
    $('.selectpicker').parent().children().removeAttr('title');
    $('.selectpicker').on('hidden.bs.select', function (e) {
        $(this).parent().children().removeAttr('title');
    });

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        $('.selectpicker').selectpicker('mobile');
    }


    $('#feeadback').parsley().on('field:validated', function () {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        })
        .on('form:submit', function () {
            return false; // Don't submit form for this demo
        });

    $('#questions').parsley().on('field:validated', function () {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        })
        .on('form:submit', function () {
            return false; // Don't submit form for this demo
        });


    $(":checkbox.sorting-checkbox-input").change(function () {
        if (this.checked) {
            $(this).closest("tr").addClass("model-active");
        } else {
            $(this).closest("tr").removeClass("model-active");
        }
    });

    function initSticky() {
        $('#sorting-table').stickyTableHeaders({container: $(".table-responsive")});
    }
    $('.table-responsive').scroll( function() {
        initSticky()
    });
    $(".tablesorter").tablesorter();
    initSticky();

    $('.card-slider').bxSlider({
        mode: 'vertical',
        slideWidth: 74,
        minSlides: 5,
        nextText: '',
        prevText: '',
        pager: false,
        slideMargin: 10
    });

    lightbox.option({
        'wrapAround': true,
        'disableScrolling': true,
        'fitImagesInViewport': true
    });

    $( "a.thumb" ).click(function() {
        $("#main-image").attr("src", $(this).attr("href"));
        $("#main-image-link").attr("href", $(this).attr("href"));
        $('.active-thumb').removeClass('active-thumb');
        $(this).addClass('active-thumb');
        return false
    });

});


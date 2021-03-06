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

    $('#reviews-slider').owlCarousel({
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

    $('#clients-slider').owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        navText: false,
        responsive: {
            0: {
                items: 1
            },
            300: {
                items: 2
            },
            550: {
                items: 3
            },
            700: {
                items: 4
            },
            800: {
                items: 5
            },
            1140: {
                items: 6
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


    $('#feedback').parsley().on('field:validated', function () {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        })
        .on('form:submit', function () {
            window.location.href = "/spasibo/";
        });

    //$('#commentform').parsley().on('field:validated', function () {
    //        var ok = $('.parsley-error').length === 0;
    //        $('.bs-callout-info').toggleClass('hidden', !ok);
    //        $('.bs-callout-warning').toggleClass('hidden', ok);
    //    })
    //    .on('form:submit', function () {
    //        //window.location.href = "/spasibo/";
    //    });

    $('#questions').parsley().on('field:validated', function () {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        })
        .on('form:submit', function () {
            window.location.href = "/spasibo/";
        });


    $('#request').parsley().on('field:validated', function () {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('.bs-callout-warning').toggleClass('hidden', ok);
    })
        .on('form:submit', function () {
            window.location.href = "/spasibo/";
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
    $(".tablesorter").tablesorter({ widgets: ['staticRow'] }).bind("sortEnd",function(e, t){
        var currentSort = e.target.config.sortList;
        var columnNum = currentSort[0][0];
        var orderType = currentSort[0][1];
        $('.options-active').removeClass('options-active');
        var cell = $(this).eq(0).find('th').eq(columnNum);
        cell.addClass('options-active');
        if (orderType == 0) {
            $('.buttons-sorting__bottom').removeClass('active');
            $('.buttons-sorting__top').removeClass('active');
            cell.find('.buttons-sorting').find('.buttons-sorting__top').addClass('active')
        } else if (orderType == 1) {
            $('.buttons-sorting__bottom').removeClass('active');
            $('.buttons-sorting__top').removeClass('active');
            cell.find('.buttons-sorting').find('.buttons-sorting__bottom').addClass('active')
        }
    });
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

    $('#reset-sort-link').click(function(){
        $('.buttons-sorting__bottom').removeClass('active');
        $('.buttons-sorting__top').removeClass('active');
        $('#sorting-table').trigger('sortReset');
        return false;
    });

    $('.button-sorting-choose').click(function(){
        $( ".sorting-checkbox-input:not(:checked)" ).each(function() {
            $(this).parent().parent().parent().hide()
        });
        return false;
    });

    $('.button-sorting-reset').click(function(){
        $("#sorting-table").find("tr").each(function() {
            $(this).show()
        });
        return false;
    });

    $('#request-form').on('show.bs.modal', function (e) {
        $('#product').val(window.location.href);
    })
});


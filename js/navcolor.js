jQuery(function ($) {
    //パスを取得
    var path = location.pathname;
    console.log(path);

    //ヘッダー側
    let navColor = $("#nav-color");

    navColor.each(function () {
        if (path == '/2021/1f') {
            $(this).css("background", "#FF0000");
        } else if (path == '/2021/2f') {
            $(this).css("background", "#00FF00");
        } else if (path == '/2021/3f') {
            $(this).css("background", "#0000FF");
        }
    });

    //フッター側
    let navColorf = $("#nav-color-f");

    navColorf.each(function () {
        if (path == '/2021/1f') {
            $(this).css("background", "#FF0000");
        } else if (path == '/2021/2f') {
            $(this).css("background", "#00FF00");
        } else if (path == '/2021/3f') {
            $(this).css("background", "#0000FF");
        }
    });

    $(window).on('load', function () {
        var hash = $(location).attr('hash');
        console.log(hash);
        if (hash == '#f') {
            var sidebarWidth = $('.side-bar').innerWidth();
            var contentWidth = $('.gallery-container').innerWidth();
            var scroll = sidebarWidth * 2 + contentWidth
            $('#scroll').scrollLeft(scroll);
        }
    });
});

//同URLは遷移させない
jQuery(function ($) {
    var $links = $('a[href]');
    var noLinkFunc = function (e) {
        if (e.currentTarget.href === window.location.href) {
            e.preventDefault();
            e.stopPropagation();
        }
    };
    $links.each(function (index, element) {
        console.log(element);
        $(element).on('click', function (e) {
            noLinkFunc(e);
        });
    });
});
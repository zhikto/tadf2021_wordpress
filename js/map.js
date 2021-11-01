var mapAnime = anime.timeline({
    autoplay: false
});

mapAnime
    .add({
        targets: '.floor-box li',
        easing: 'easeInOutQuad',
        opacity: [0, 1],
        translateX: [-20, 0],
        translateY: [20, 0],
        delay: anime.stagger(100),
        duration: 1000,
        easing: "easeInOutExpo"
    })

    .add({
        targets: ".floor p",
        translateX: [-40, 0],
        opacity: [0, 1],
        duration: 1000,
        delay: anime.stagger(100),
        easing: "easeInOutExpo"
    })

    .add({
        targets: ".map-scroll-bar",
        scaleX: [0, 1],
        opacity: [0, 1],
        duration: 1000,
        delay: anime.stagger(200),
        easing: "easeInOutExpo"
    }, 1500)

    .add({
        targets: ".tadf-square",
        scale: [0.5, 1],
        opacity: [0, 1],
        duration: 1000,
        easing: "easeInOutExpo"
    })

jQuery(function ($) {
    var path = location.pathname;

    if (path == '/2021/1f') {
        $('.scroll li').css("background", "#FF0000");
        $('.map-scroll').css("background", "#FF0000");
        $('.f-1 p').css("color", "#FF0000");
    } else if (path == '/2021/2f') {
        $('.scroll li').css("background", "#00FF00");
        $('.map-scroll').css("background", "#00FF00");
        $('.f-2 p').css("color", "#00FF00");
    } else if (path == '/2021/3f') {
        $('.scroll li').css("background", "#0000FF");
        $('.map-scroll').css("background", "#0000FF");
        $('.f-3 p').css("color", "#0000FF");
    }

    $('.x-scroll-container').scroll(function () {
        var sidebarWidth = $('.side-bar').innerWidth();
        var contentWidth = $('.gallery-container').innerWidth();
        var scroll = $('.x-scroll-container').scrollLeft() + $('.gallery').width() + $('.side-bar').innerWidth();
        var scrollMap = $('.x-scroll-container').scrollLeft() + $('.gallery').width();
        var fullWidth = sidebarWidth * 2 + contentWidth;
        var ratio = scroll / fullWidth * 100 + "%";
        var ratioMap = scrollMap / fullWidth * 100 + "%";
        $('.scroll li').css('width', ratio);
        if (path == '/2021/1f') {
            $('.map-scroll.f1').css('width', ratioMap);
        } else if (path == '/2021/2f') {
            $('.map-scroll.f2').css('width', ratioMap);
        } else if (path == '/2021/3f') {
            $('.map-scroll.f3').css('width', ratioMap);
        }
    })
})

jQuery(function ($) {
    $('.scroll-bar').click(function () {
        $('.scroll').toggleClass('is_active');
        $(this).toggleClass('is_active');
        $('.map').toggleClass('is_active');
        $('.tadf-square').toggleClass('is_active');
        mapAnime.play();
    })
})
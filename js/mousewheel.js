jQuery(function ($) {
    var speed = 1;
    $('#scroll').mousewheel(function (event, mov) {
        var moving = $(this).scrollLeft() - mov * speed;
        $(this).scrollLeft(moving);
        return false;
    });
})
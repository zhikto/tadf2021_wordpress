jQuery(function ($) {
    $('.section1').each(function () {
        $(this).width(this.scrollWidth);
    })
});
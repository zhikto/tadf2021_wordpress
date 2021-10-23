jQuery(function ($) {
    var sidebarWidth = $('.side-bar').innerWidth();
    console.log(sidebarWidth);
    $('#scroll').scrollLeft(sidebarWidth);
});
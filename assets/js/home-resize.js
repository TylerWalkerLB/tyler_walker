//This script holds the functions that will resize different areas of the site

jQuery(document).ready(function() {
    //call the functions
    siteResizeVariables();
    $(window).on('resize',siteResizeVariables);

    homeResize();
    $(window).on('resize',homeResize);

    var windowHeight;
    var windowWidth;

    function siteResizeVariables() {
        windowHeight = $(window).height();
        windowWidth = $(window).width();
    }

    function homeResize() {
        var heightMinus = windowHeight - 80;
        var widthMinus = windowWidth - 80;
        if (windowWidth > 640) {
            $('#home-background').css('height',heightMinus).css('width',widthMinus);
            $('#map-background').css('width',widthMinus);
            $('#about-background').css('width',widthMinus);
            $('#home-mobile').css('height',heightMinus);
        } else {
            $('#home-mobile').css('height',heightMinus);
            $('#map-background').css('width',windowWidth);
            $('#about-background').css('width',windowWidth);
        }
    }
});
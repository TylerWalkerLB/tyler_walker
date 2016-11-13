$(document).ready(function() {

    var winHeight;
    var winWidth;
    var hHeight;
    var hWidth;
    var whunFactor;
    var wtenFactor;
    var wthirtyFactor;
    var hhunFactor;
    var htenFactor;
    var hthirtyFactor;
    var mhX;
    var mhY;
    var moveXhun;
    var moveXthir;
    var moveXten;
    var moveYhun;
    var moveYthir;
    var moveYten;

    function getDimensions() {
        winHeight = $(window).height();
        winWidth = $(window).width();
        hHeight = winHeight / 2;
        hWidth = winWidth / 2;
        whunFactor = hWidth / 50;
        wthirtyFactor = hWidth / 80;
        wtenFactor = hWidth / 105;
        hhunFactor = hHeight / 45;
        hthirtyFactor = hHeight / 75;
        htenFactor = hHeight / 100;
    }

    getDimensions();
    $(window).on('resize',getDimensions);

    $(document).mousemove(function(event) {
        var mX = event.pageX;
        var mY = event.pageY;

        mhX = mX - hWidth;
        mhY = mY - hHeight;
        moveXhun = (mhX / whunFactor) + 80;
        moveXthir = (mhX / wthirtyFactor) + 45;
        moveXten = (mhX / wtenFactor) + 5;
        moveYhun = (mhY / hhunFactor) + 80;
        moveYthir = (mhY / hthirtyFactor) + 45;
        moveYten = (mhY / htenFactor) + 5;
        $('#logo-100').css('left',moveXhun).css('top',moveYhun);
        $('#logo-30').css('left',moveXthir).css('top',moveYthir);
        $('#logo-10').css('left',moveXten).css('top',moveYten);
    });
});
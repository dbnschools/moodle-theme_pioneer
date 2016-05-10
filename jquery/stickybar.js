$(function () {
    var nav = $('nav');
    var header = $('header');
    var navHomeY = nav.offset().top;
    var isFixed = false;
    var $w = $(window);
    $w.resize(function () {
        nav.css({
            width: $w.width()
        });
    });
    $w.scroll(function () {
        var scrollTop = $w.scrollTop();
        var shouldBeFixed = scrollTop > navHomeY;
        if (shouldBeFixed && !isFixed) {
            nav.css({
                position: 'fixed',
                top: 0,
                width: $w.width()
            });
            header.css('marginTop', nav.height());
            isFixed = true;
        } else if (!shouldBeFixed && isFixed) {
            nav.css({
                position: 'relative',
                width: '100%'
            });
            header.css('marginTop', 0);
            isFixed = false;
        }
    });
}

);


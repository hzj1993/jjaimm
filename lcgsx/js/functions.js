jQuery(function($) {

    // 1. 当页面高度不够的时候，调整 #main 的高度以确保占满页面
    (adjust_page_height = function() {
        var body = $('body');
        var main = $('#main').height('auto');
        var hw = $(window).height();
        var hb = body.height() + body.position().top;
        if(hb < hw) main.height(main.height() + hw - hb);
    })();
    $(window).resize(adjust_page_height);

});
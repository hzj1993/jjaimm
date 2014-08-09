jQuery(function($){

    $(".fixedBox ul.fixedBoxList li.fixeBoxLi").hover(
        function (){
            $(this).find('span.fixeBoxSpan').addClass("hover");
            $(this).addClass("hover");
        },
        function () {
            $(this).find('span.fixeBoxSpan').removeClass("hover");
            $(this).removeClass("hover");
        }
    );

    $('.BackToTop').click(function(){$('html,body').animate({scrollTop: '0px'}, 800);});
    var oDate=new Date();
    var iHour=oDate.getHours();
    // if(iHour<9 || iHour>18) $(".Service").detach();

    $('.listLeftMenu dl dt').click(function(){
        var but_list=$(this).attr('rel');
        if(but_list=='off'){
            $(this).attr('rel','on');
            $('.listLeftMenu dl').removeClass('off');
            $(this).parent().addClass('on');
        }else{
            $(this).attr('rel','off');
            $(this).parent().removeClass('on');
            $(this).parent().addClass('off');
        }
    });
});
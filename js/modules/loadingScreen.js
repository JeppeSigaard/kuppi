$(function(){
    
    $(window).load(function(){
        clearTimeout(kuppiLoadPage);
        $('body').addClass('loading-screen-end');
        setTimeout(function(){
            $('body').removeClass('loading-screen loading-screen-end');
        },600);
    });
});
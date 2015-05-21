$(function(){

    function adjustMenu(){

        var winTop = $(window).scrollTop(),
            navTop = $('header').height() - $('header nav').height();

        if(winTop >= navTop){
            $('header nav').addClass('fixed');
        }
        else{
            $('header nav').removeClass('fixed');
        }

    }


    $('.menu-toggle').on('click',function(e){
        e.preventDefault();

        if($(this).hasClass('open')){

            $(this).removeClass('open');
            $('body').removeClass('menu-open');


        }
        else{

            $(this).addClass('open');
            $('body').addClass('menu-open');

        }

    });

    adjustMenu();
    $(window).scroll(function(){
        adjustMenu();
    });
    $(window).resize(function(){
        adjustMenu();
    });

})


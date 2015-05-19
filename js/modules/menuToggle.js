$(function(){


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

    $(window).scroll(function(){
        var winTop = $(window).scrollTop(),
            navTop = $('header').height() - $('header nav').height();

        if(winTop >= navTop){
            $('header nav').addClass('fixed');
        }
        else{
            $('header nav').removeClass('fixed');
        }

    });

})


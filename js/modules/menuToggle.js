$(function(){


    $('.menu-toggle').on('click',function(e){


        e.preventDefault();
        console.log('click');

        if($(this).hasClass('open')){

            $(this).removeClass('open');


        }
        else{

            $(this).addClass('open');

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

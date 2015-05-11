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

})

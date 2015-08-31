$(function(){

    var i = 0;
    
    $('.content img, .sidebar-container img').each(function(){
        
        if(!$(this).is('.blogroll img') && !$(this).is('.products-list img')){
        
            if($(this).parent('a').length){
                var a = $(this).parent('a');

                a.attr('data-lightbox','img-'+i);
            }

            else{

                var imgSrc = $(this).attr('src'),
                    a = $('<a data-lightbox="img-'+i+'" href="'+imgSrc+'"></a>');
                $(this).wrap(a);
            }

            i++;
        }
    });
    
    $('a.lightboxed').$lightbox
    
    

});
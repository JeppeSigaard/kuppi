/* Makes the design spinner go swoosh! Flickity dependent */
$(function(){

    if($('.design-spinner').length){

    var $spinner = $('.design-spinner .designs'),
        $spinSmall = $spinner.clone().appendTo('.front-bins .bin-small'),
        $spinLarge = $spinner.clone().appendTo('.front-bins .bin-large'),
        spinnerSettings = {

            primary: {
                prevNextButtons: false,
                pageDots: false,
                wrapAround: true,
                setGallerySize: false,
                autoPlay: 9000,
            },
            secondary: {
                prevNextButtons: false,
                pageDots: false,
                wrapAround: true,
                setGallerySize: false,
                draggable: false,

            }
        }

        $spinSmall.flickity(spinnerSettings.secondary);
        $spinLarge.flickity(spinnerSettings.secondary);
        $spinner.flickity(spinnerSettings.primary);

        var flkty = $spinner.data('flickity');

        $('.spin-left a.click-here').attr('href',$('.design.is-selected').attr('data-url'));
        $spinner.on( 'cellSelect', function() {
            $spinLarge.flickity('select', flkty.selectedIndex);
            $spinSmall.flickity('select', flkty.selectedIndex);
            
            $('.spin-left a.click-here').attr('href',$('.design.is-selected').attr('data-url')).html($('.design.is-selected').attr('data-title'));
            
        }).on( 'settle', function() {

        });


        $('.design-spinner').on('click',function(e){

            var target = $(e.target);

            if(target.is('.spin-left nav a.left')){
                e.preventDefault();
                $spinner.flickity('previous');

            }

            else if(target.is('.spin-left nav a.right')){
                e.preventDefault();
                $spinner.flickity('next');

            }

        });
    }
    
    $(window).load(function(){
        
        $('.design.lazy').each(function(i){
            var elem = $(this),
                img = $('<img/>'),
                attr = elem.attr('data-bg-image'),
                parent = elem.parents('.bin');
            
            if(parent.hasClass('bin-small')){
                attr = attr.replace('-1600x900','-70x120');
            }
            
            if(parent.hasClass('bin-large')){
                attr = attr.replace('-1600x900','-140x120');
            }
            
            img.attr('src',attr);
            img.load(function(){
                elem.css('background-image','url('+attr+')').removeClass('lazy');
            });
            
        });
        
    });
});

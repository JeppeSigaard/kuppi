/* Makes the design spinner go swoosh! Flickity dependent */
$(function(){

    if($('.design-spinner').length){

    var $spinner = $('.design-spinner .designs').flickity({
        prevNextButtons: false,
        pageDots: false,
        wrapAround: true,
        setGallerySize: false,
        autoPlay: 9000
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
});

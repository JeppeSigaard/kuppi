/* Makes the artist spinner go swoosh! Flickity dependent */
$(function(){

    if($('.artist-spinner').length){

    var $artistSpinner = $('.artist-spinner .artists').flickity({
        prevNextButtons: false,
        pageDots: false,
        wrapAround: true,
        setGallerySize: false,
        cellSelector: '.artist',
        cellAlign: 'left',
    });

    $('.artist-spinner').on('click',function(e){
        var target = $(e.target);

        if(target.is('nav a.left')){
            e.preventDefault();
            $artistSpinner.flickity('previous');

        }

        else if(target.is('nav a.right')){
            e.preventDefault();
            $artistSpinner.flickity('next');

        }

    });
    }
});

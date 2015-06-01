$(function(){

    $('#blog main').on('click',function(e){
        
        var target = $(e.target);
        
        if(target.is('.blog-next-prev-link a span')){
        
            e.preventDefault();
            
            target.parents('div').addClass('loading');

            var prevCont = $('#blog main').html();
            
            $('#blog main').load(target.parent('a').attr('href') + ' #blog main>*',function(){
            
                $('#blog main').prepend(prevCont);
                $('.blog-next-prev-link.loading').remove();
            });
        }
    });

});
$('.order-form a.toggle').on('click',function(e){
    e.preventDefault();

    if($(this).hasClass('active')){}
    
    else{
    
        $('.order-form a.toggle').removeClass('active');
        $(this).addClass('active');
        
        var index = $(this).index() + 1;
        
        $('.form-tabs .tab').removeClass('active');
        $('.form-tabs .tab-'+index).addClass('active');
    
    }
    
});
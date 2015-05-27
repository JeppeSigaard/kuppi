function submitForm(url,data){

    $('.form-container').addClass('loading');
    
    $.ajax({
        url : url,
        type : 'POST',
        data : data,
        dataType : 'json',
        success : function(response){returnForm(response);},
    });


}

function returnForm(response){

    if(response.error){
        var error = $('<div class="woocommerce-error">'+response.error+'</div>');
        
        $('.form-container').removeClass('loading').prepend(error);
    }
    
    else if(response.success){
        var success = $('<div class="woocommerce-message">'+response.success+'</div>');
        
        $('.form-container').removeClass('loading');//.addClass('complete').prepend(success);
        
    }
}

$(function(){
    
    autosize($('textarea[name="description"]'));

    $('form').on('click',function(e){
        var target = $(e.target);

        // Form submit
        if(target.is('a.form-submit')){
            
            $('form .woocommerce-error').slideUp(200);
            setTimeout(function(){
                $('form .woocommerce-error').remove();
            },200);

            e.preventDefault();

            var form = target.parents('form'),
                url = form.attr('action'),
                data = form.serialize();
                submitForm(url,data);
        }
    });
});

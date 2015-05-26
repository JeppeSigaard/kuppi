function submitForm(url,data){

    $.ajax({
        url : url,
        type : 'POST',
        data : data,
        dataType : 'json',
        success : function(response){returnForm(response);},
    });


}

function returnForm(response){

    console.log(response);

}

$(function(){
    
    autosize($('textarea[name="description"]'));

    $('form').on('click',function(e){
        var target = $(e.target);

        // Form submit
        if(target.is('a.form-submit')){

            e.preventDefault();

            var form = target.parent('form'),
                url = form.attr('action'),
                data = form.serialize;
                submitForm(url,data);
        }
    });
});

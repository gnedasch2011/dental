$(document).on('click', '.submitForm', function (e) {
    $(".phone_mask").mask("+7(999)999-99-99");
    e.preventDefault()

    var data = $("#login-form").serialize();
    console.log(data);
    console.log(data);
    $.ajax({
        url: '/site/ajax-form',
        type: 'POST',
        data: data,
        success: function(res){
            if(res=="success"){
                $('.content_success').html('')
                $('.content_success_block').show()
            }
        },
        error: function(){
            alert('Error!');
        }
    });
    return false;
})

$(document).on('click', '.phone_mask',  function() {

    $(".phone_mask").mask("+7 (999) 99-99-999");
});
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).on('change','#link',function (){
    let link = $(this).val();
});
//Авторизация через AJAX, вытаскиваем значения из форм
$(document).ready(function (){
    $("#button").click(function (){
        var username = $("#login").val();
        var password = $("#password").val();
        var checkbox = $("#check").val();
        if(login == "" || password == ""){
            alert("Введите логин и пароль от учетной записили или обратитесь хозяину сайта за информацией")
        }
        //выше отработано, забираются переменные из полей, все работает хорошо
        else {
            $.ajax({
                url:'/admin',
                method:"get",
                data:{username:username, password:password, checkbox:checkbox},
                success:function(response) {
                    console.log(response);
                    if(response) {
                        $('.success').text(response.success);
                        $("#login")[0].reset();
                    }
                },
            })
        };

});})

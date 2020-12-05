$(function() {
    $(".header .sp-btn").click(function() {
        $(this).toggleClass("active");
        $(".header .menu").toggleClass("active");
    });
});

$(document).ready(function(){
    $('.submit').attr('disabled', 'disabled');
    $('#privacy').click(function() {
        if ($('.submit').is(':disabled')) {
            $('.submit').removeAttr('disabled');
        } else {
            $('.submit').attr('disabled', 'disabled');
        }
    });
});

$(document).ready(function(){
    $("#formSendMail").validate({
        rules: {
          name: "required",
          email: {
              required: true,
              email: true
          }
        },
        messages: {
          name: "必須項目に入力してください。",
          email: {
              required: "必須項目に入力してください。",
              email: "メールが無効になります！"
          }
        },
        submitHandler: function(){
            event.preventDefault();
            $.ajax({
                url: 'send-form.php',
                data: $('#formSendMail').serialize(),
                type: 'POST',
                success: function(data) {
                    if (data == 'ok') {
                        $('#company').val('');
                        $('#name').val('');
                        $('#address').val('');
                        $('#phone').val('');
                        $('#email').val('');
                        $('#message').val('');
                        $("#privacy").prop( "checked", false );
                        $('.submit').attr('disabled', 'disabled');
                        document.getElementById("success").innerHTML = "<span>ありがとうございます。メッセージは送信されました。</span>";
                        document.getElementById("error-send").innerHTML = "";
                    } else {
                        document.getElementById("error-send").innerHTML = "<span>入力内容に問題があります。確認して再度お試しください。</span>";
                        document.getElementById("success").innerHTML = "";
                    }
                }
            });
        }
    });
});
// $(document).on('click','#submit', function( event ){
//     event.preventDefault();
//     $.ajax({
//         url: 'send-form.php',
//         data: $('#formSendMail').serialize(),
//         type: 'POST',
//         success: function(data) {
//             if (data = 'ok') {
//                 $('#company').val('');
//                 $('#name').val('');
//                 $('#address').val('');
//                 $('#phone').val('');
//                 $('#email').val('');
//                 $('#message').val('');
//                 document.getElementById("success").innerHTML = "ありがとうございます。メッセ―ジは送信されました。";
//             } else {
//                 document.getElementById("success").innerHTML = "b";
//             }
//         }
//     });
// });

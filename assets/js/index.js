$("document").ready(function(){
    /* DOCU: Validating form
    TRIGGERED BY: submitForm
    AUTHOR: Kei Kishimoto*/
    $("body")
    .on("submit", "#form", submitForm);
    });
    function submitForm(){
        $(".contact_inputs").each(function(){
            let input = $(this); 
            (input.val() == "") 
                ? input.addClass("error").siblings(".invalid_note").addClass("error_note")
                : input.removeClass("error").siblings(".invalid_note").removeClass("error_note");
            });
            if(!$(".error").length){
                alert("You successfully submitted the form");
            }
            return false;
        }
    /* DOCU: Clock Countdown
    AUTHOR: Kei Kishimoto*/
    $(".list_time").countdown("2021/10/18", function(event){
        $(this).text(
            event.strftime('%D %H:%M:%S')
        );
    });
    $(".num0").countdown("2021/10/18", function(event){
        $(this).text(
            event.strftime('%D')
        );
        $('.num1').text(
            event.strftime('%H')
        );
        $('.num2').text(
            event.strftime('%M')
        );
        $('.num3').text(
            event.strftime('%S')
        );
    });
    $(".int0").countdown("2021/10/18", function(event){
        $(this).text(
            event.strftime('%D')
        );
        $('.int1').text(
            event.strftime('%H')
        );
        $('.int2').text(
            event.strftime('%M')
        );
        $('.int3').text(
            event.strftime('%S')
        );
    });
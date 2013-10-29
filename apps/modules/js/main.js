$(document).ready(function(){

    $(".input").click(function(){
        sendRequest();
    });
    $("#make_load").click(function(){
        $('#is_load').prop('checked', true);
        sendRequest();
    });
    $("#make_aim").click(function(){
        $('#is_aim').prop('checked' , true);
        sendRequest();
    });
    $("#fire").click(function(){
        alert("PIU-PIU");
        sendRequest(1);
    });

});

sendRequest = function(fire)
{
    $.ajax({
        type: "POST",
        url: location.href,
        data: {
            name:  $("#name").val(),
            loadtime: $("#loadtime").val(),
            position: $("#position").val(),
            load: $('#is_load').prop('checked') ? 1 : 0,
            aim: $('#is_aim').prop('checked') ? 1 : 0,
            fire: fire
        },
        success: function(result) {
            $("body").html(result);
        }
    })
}
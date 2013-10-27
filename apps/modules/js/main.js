$(document).ready(function(){

    $("#submit").click(function(){
        $.ajax({
            type: "POST",
            url: "http://localhost/dz_2/index.php",
            data: {
                class: $("#class_select").val()
            },
            success: function(result) {
                $("body").html(result);
            }
        })
    });

});


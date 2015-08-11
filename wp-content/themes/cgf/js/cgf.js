$(document).ready(function(){


    if($('#enviado').length){
         $('#myModal').modal('toggle');
    }

    $('#submit').addClass('btn');
    $('#submit').addClass('btn-vermelho');

    $('#author').val("");
    $('#email').val("");
    $('#url').val("");
    $("#comment").val("");
    
});
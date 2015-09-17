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

    $('#services a').click(function (e) {
      e.preventDefault();
      	 $(this).tab('show');
      }
    );
    
});
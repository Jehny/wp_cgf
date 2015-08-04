$(document).ready(function(){
	/*$('#enviar_contato').bind("click", function(){
        if($('#nome').val() == "" || $('#email').val() == "" || $('#mensagem').val() == ""){
            $('.alert').show();
            console.log('show');
        }
    });
    
    $('.alert .close').bind("click", function(e) {
        $(this).parent().hide();
        console.log('hide');
    });

     $('.close').bind("click", function(e) {
        $(".sucesso").hide();
        console.log('hide');
    });*/


    if($('#enviado').length){
         $('#myModal').modal('toggle');
    }

    $('#submit').addClass('btn');
    $('#submit').addClass('btn-vermelho');
   
});
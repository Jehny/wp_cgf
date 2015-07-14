$(document).ready(function(){
	$('#enviar').bind("click", function(){
        if($('#nome').val() == "" || $('#email').val() == "" || $('#mensagem').val() == ""){
            $('.alert').show();
            console.log('show');
        }
    });
    
    $('.alert .close').bind("click", function(e) {
        $(this).parent().hide();
        console.log('hide');
    });

});
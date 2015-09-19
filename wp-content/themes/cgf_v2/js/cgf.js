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
    });

    var largura = $(window).width();
    var slideW = largura - 300;
    $("#equipe ul").zAccordion({
      slideWidth: slideW,
      width: largura,
      height: 500,
      timeout: 3000,
      trigger: "mouseover",
      slideClass: "frame"
  });

 $(window).scroll(function () {
  var scrol = $(this).scrollTop();
  // Efeito do Menu
    if (scrol >= 50) {
        $('#menu').css({zIndex: 2, "background":"#D26E6E"});
        $(".logo_h").css({"width":"125px"});
        $('.nav_cel_button').css({marginTop: '3px', marginBottom: '3px'});
        $('#menu').stop().animate({
            opacity: 0.9,
            top: '-10px',
            paddingTop: '0%'
        }, 1000, 'easeOutQuint');
    }

    if(scrol <= 50){
         $('#menu').css({zIndex: 2, "background":"transparent"});
         $(".logo_h").css({"width":"60%"});
          $('#menu').stop().animate({
            opacity: 1,
            top: '0px',
            paddingTop: '3%'
        }, 1000, 'easeOutQuint');
    }
  });

    /*================================
     SCROLL SUAVE DA PÁGINA
     ================================
     */

     $(function(){
         $(".scroll").click(function(event){
             event.preventDefault();

             var full_url = this.href;
             var parts = full_url.split("#");
             var trgt = parts[1];
             var target_offset = $("#"+trgt).offset();
             var speed = 1000;
             var target_top = target_offset.top - $(this).data('offset');
             console.log(target_top);
             console.log($('#container').height());
             $('html, body').animate({scrollTop:target_top}, speed);
         });
     });

     //END


/* link para o acordion slider 
http://www.armagost.com/zaccordion/*/
    
});
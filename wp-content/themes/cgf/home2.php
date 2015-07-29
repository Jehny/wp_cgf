
<?php
if(isset($_POST['newsletter'])){

	// Inserir dados na tabela Paciente
	$table = 'newsletter';

	$data_news = array('email'=> $_POST['email_mark']);

	if($wpdb->insert( $table, $data_news, $format )){
		$teste = "<input type='hidden' id='enviado' />";
		$message = "Obrigado por se cadastrar para receber novidades da CGF!";
	}
}

if(isset($_POST['enviar_contato'])){
		$to = 'cgfjuridico@cgfjuridico.com.br';
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$subject = "Contato CGF Jurídico";
		$headers = "MIME-Version: 1.1 \r\n";
		$headers .= "Content-type: text/html; charset=utf-8 \r\n";
		$message = "<html><body>";
		$message .= "<table style='border:1px solid #BD3F4B;width:97%;'>";
		$message .= "<tr><td style='text-align:left;padding-left:10px;padding-top:20px;'><img src='http://www.cgfjuridico.com.br/wp-content/themes/cgf/img/logo.png' alt='CGF Jurídico' width=200></td></tr>";
		$message .= "<tr><td style='padding-left:10px;padding-top:20px;padding-bottom:20px;'>Segue os dados de contato: </td></tr>";
		$message .= "<tr><td style='padding-left:10px;'><strong>Nome: </strong>" . $_POST['nome'] . "</td></tr>";
		$message .= "<tr><td style='padding-left:10px;'><strong>E-mail: </strong>" . $_POST['email']. "</td></tr>";
		$message .= "<tr><td style='padding-left:10px;padding-bottom:30px;'><strong>Mensagem: </strong>" . $_POST['mensagem']. "</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";

		if($email != "" && $message != "" && $nome != ""){
			
			// if(wp_mail( $to, $subject,  $message, $headers)){
				// $sucesso = "<div class='sucesso alert-info'>
				// 	<button type='button' class='close' data-dismiss='alert'>×</button>
				// 	<h4>Sucesso!</h4>
				// 	<p>Seu e-mail foi enviado com sucesso. </p>
				// 	</div>";
				$teste = "<input type='hidden' id='enviado' />";
				$message = "Seu e-mail foi enviado com sucesso!";
			// }
		}
	}

	
		// else{
		// 	echo $nome . ", " . ", ". $email . ", ". $message;
		// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/manutencao.css" type="text/css" />

	<script src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.4.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/cgf.js"></script>
	<title>CGF Jurídico</title>
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/ico_logo.png" />
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/ico_logo.png" type="image/x-icon" />
	<link rel="icon" type="image/ico" href="<?php bloginfo('template_url'); ?>/img/ico_logo.png" />
</head>
<body>

	<div class="content">
		
		<section class="container-fluid texto_header">
			<img src="<?php bloginfo('template_url'); ?>/img/balanca.png" class="balanca img-responsive">
			<div class="logo row-fluid">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="img-responsive"></a>
			</div>
			<div class="row-fluid texto">
				<h1 class="col-xs-12 col-sm-12 col-md-12">Site em construção</h1>
			</div>
			<div class="row-fluid texto">
				<p class="col-xs-12 col-sm-12 col-md-10">
					NÓS ESTAMOS TRABALHANDO EM UM MARAVILHOSO SITE. FIQUE ATENTO! 
					POR FAVOR, NÃO ESQUEÇA DE NOS 
					<span>ACOMPANHAR ATRAVÉS DO FACEBOOK</span> 
					E SE INSCREVA PARA RECEBER NOVIDADES!
				</p>
			</div>
		</section>
		<?php if(isset($teste)){
			echo $teste;
			} ?>
		<div class="rodape row-fluid" id="fale_conosco">
			
			<div class="row-fluid email_marketing">
				<form action="" method="post">
					<input type="email" name="email_mark" placeholder="Escreva seu email para ser notificado quando houver novidades" required>
					<button type="submit" name="newsletter" class="btn btn-cgf" data-target="#myModal">Enviar</button>
				</form>
			</div>
			<div class="row-fluid sobre_rede">
				<div class="col-xs-12 col-sm-12 col-md-4">
					<h1>Sobre a CGF Jurídico</h1>
					<p>Com mais de dez anos de atuação, o escritório CGF Jurídico vem crescendo ao longo desses anos, ganhando prestígio e credibilidade, destacando-se pelo comprometimento com a defesa dos interesses dos nossos clientes. </p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3 rede">
					<h1>Redes Sociais CGF</h1>
					<ul class="list-inline">
						<li><a href="https://www.facebook.com/pages/CGF-Advocacia/819206698125044?fref=ts"><img src="<?php bloginfo('template_url'); ?>/img/face.png"></a></li>
						<li><a href="https://www.linkedin.com/pub/rita-helena/5b/66/19"><img src="<?php bloginfo('template_url'); ?>/img/in.png"></a></li>
						<li><a href="https://plus.google.com/105365906703965528203/about"><img src="<?php bloginfo('template_url'); ?>/img/gplus.png"></a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-5">
					<h1>Entre em contato</h1>
					<form action="#fale_conosco" method="POST" id="contato">
						<div><input type="text" name="nome" placeholder="Nome" required></div>
						<div><input type="email" name="email" placeholder="E-mail" required></div>
						<div><textarea name="mensagem" cols="20" rows="3" placeholder="Mensagem" required></textarea></div>
						<button class="btn btn-cgf" type="submit" name="enviar_contato" id="enviar_contato">Enviar</button>
					</form>
				</div>
			</div>
			
			<div class="row-fluid texto_rodape">
				<p>Av. Desembargador Moreira, 1701 - Aldeota Fortaleza - CE - Brasil Tel: <a href="tel:08534746888">(85) 3047- 8500</a> </p>			
			</div>
		</div>

	</div>
	
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Sucesso!</h4>
	      </div>
	      <div class="modal-body">
	        <?php if(isset($message)){ echo $message; } ?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-cgf" data-dismiss="modal">Fechar</button>
	      </div>
	    </div>
	  </div>
	</div>

</body>
</html>
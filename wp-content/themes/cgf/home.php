
<?php
if(isset($_POST['newsletter'])){

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
			if(wp_mail( $to, $subject,  $message, $headers)){
				$sucesso = "<div class='sucesso alert alert-info'>
					<button type='button' class='close' data-dismiss='alert'>×</button>
					<h4>Sucesso!</h4>
					<p>Seu e-mail foi enviado com sucesso. </p>
					</div>";
				
			}
		}
		// else{
		// 	echo $nome . ", " . ", ". $email . ", ". $message;
		// }
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/cgf.css" type="text/css" />

	<script src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.4.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/cgf.js"></script>
	<title>CGF Jurídico</title>
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/ico_logo.png" />
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/ico_logo.png" type="image/x-icon" />
	<link rel="icon" type="image/ico" href="<?php bloginfo('template_url'); ?>/img/ico_logo.pngs" />
</head>
<body>

	<div class="content">
		<img src="<?php bloginfo('template_url'); ?>/img/balanca.png" class="balanca">
		<section class="container-fluid">
			<div class="logo row-fluid">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>
			</div>
			<div class="row-fluid texto">
				<h1>Site em construção</h1>
			</div>
			<div class="row-fluid texto">
				<p class="col">
					NÓS ESTAMOS TRABALHANDO EM UM MARAVILHOSO SITE. FIQUE ATENTO! 
					POR FAVOR, NÃO ESQUEÇA DE NOS 
					<span>ACOMPANHAR ATRAVÉS DO FACEBOOK</span> 
					E SE INSCREVA PARA RECEBER NOVIDADES!
				</p>
			</div>
		</section>

		<div class="rodape">
			
			<div class="row-fluid email_marketing">
				<form action="" method="post">
					<input type="text" name="email_mark" placeholder="Escreva seu email para ser notificado quando houver novidades">
					<button type="submit" name="newsletter" class="btn btn-cgf">Enviar</button>
				</form>
			</div>
			<div class="row-fluid sobre_rede">
				<div class="col-md-4">
					<h1>Sobre a CGF Jurídico</h1>
					<p>Com mais de dez anos de atuação, o escritório CGF Jurídico vem crescendo ao longo desses anos, ganhando prestígio e credibilidade, destacando-se pelo comprometimento com a defesa dos interesses dos nossos clientes. </p>
				</div>
				<div class="col-md-3">
					<h1>Redes Sociais CGF</h1>
					<ul class="list-inline">
						<li><a href="https://www.facebook.com/pages/CGF-Advocacia/819206698125044?fref=ts"><img src="<?php bloginfo('template_url'); ?>/img/face.png"></a></li>
						<li><a href="https://www.linkedin.com/pub/rita-helena/5b/66/19"><img src="<?php bloginfo('template_url'); ?>/img/in.png"></a></li>
						<li><a href="https://plus.google.com/105365906703965528203/about"><img src="<?php bloginfo('template_url'); ?>/img/gplus.png"></a></li>
					</ul>
				</div>
				<div class="col-md-5">
					<h1>Entre em contato</h1>
					<form action="" method="post" id="contato">
						<?php
						if(isset($sucesso)){
							echo $sucesso; 
						} ?>

						<div class="alert alert-block alert-error fade in">
							<button type="button" class="close">×</button>
							<h4 class="alert-heading">Campo vazio!</h4>
							<p>Todos os campos devem ser preenchidos.</p>
						</div>
						<div><input type="text" name="nome" placeholder="Nome"></div>
						<div><input type="text" name="email" placeholder="E-mail"></div>
						<div><textarea name="mensagem" cols="40" rows="5" placeholder="Mensagem"></textarea></div>
						<button class="btn btn-cgf" type="submit" name="enviar_contato">Enviar</button>
					</form>
				</div>
			</div>
			
			<div class="row-fluid texto_rodape">
				<p>Av. Desembargador Moreira, 1701 - Aldeota Fortaleza - CE - Brasil Tel: (85) 3474- 6888 </p>			
			</div>
		</div>

	</div>

</body>
</html>
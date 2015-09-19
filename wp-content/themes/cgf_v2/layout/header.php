<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/cgf.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/icon_fonts.css" type="text/css" />
		
		<script src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.4.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.zaccordion.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/cgf.js"></script>

		<title>CGF Jurídico</title>
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/ico_logo.png" />
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/ico_logo.png" type="image/x-icon" />
		<link rel="icon" type="image/ico" href="<?php bloginfo('template_url'); ?>/img/ico_logo.png" />
	</head>

	<body>
	<div class="cabecalho">
      	<div class="row-fluid div_redes">
			<div class="container-fluid">
				<ul class="list-inline redes_sociais">
					<?php
						$redes = get_posts('post_type=redes_sociais');
						$facebook = "";
						$gplus = "";
						$in = "";
						$twitter = "";
						foreach ($redes as $rede) {
							$facebook = get_field('facebook', $rede->ID);
							$gplus = get_field('google_plus', $rede->ID);
							$in = get_field('linkedin', $rede->ID);
							$twitter = get_field('twitter', $rede->ID);
						 } 
					?>
					<li><a href="<?php echo $facebook; ?>" target="blank"><i class="icon-facebook6"></i></a></li>
					<li><a href="<?php echo $in; ?>" target="blank"><i class="icon-linkedin3"></i></a></li>
					<li><a href="<?php echo $gplus; ?>" target="blank"><i class="icon-googleplus7"></i></a></li>
					<li><a href="<?php echo $gplus; ?>" target="blank"><i class="icon-twitter5"></i></a></li>

				</ul>
			</div>
		</div>
		<div class="menu_home">
			<div id="menu" class="navbar navbar-default navbar-header row-fluid">
				<div class="logo col-md-4">
					<h1><a href=""><img src="<?php bloginfo('template_url'); ?>/img/logo_header.png" class="logo_h"></a></h1>
				</div>
				<div class="navbar-header nav_cel_header">
			        <button type="button" class="navbar-toggle nav_cel_button" data-toggle="collapse" data-target="#navbar-collapse">
			          <span class="sr-only">Toggle navigation</span>
			          <span class="glyphicon glyphicon-align-justify"></span>
			         <!--  <span class="icon-bar"></span>
			          <span class="icon-bar"></span> -->
			        </button>
			    </div>
				<nav id="navbar-collapse" class="collapse navbar-collapse nav_cel">
					<ul class="text-uppercase nav navbar-nav col-xs-12 col-sm-7 col-md-7 col-md-offset-1">
						<li><a href="#menu" class="scroll" data-offset="85" id="home_link">Home</a></li>
						<li><a href="#sobre_empresa" id="empresa_link" class="scroll" data-offset="60">Empresa</a></li>
						<li><a href="#expertises" id="expertises_link" class="scroll" data-offset="60">Expertises</a></li>
						<li><a href="#time" id="time_link" class="scroll" data-offset="60">Time</a></li>
						<li><a href="#contato" id="contato_link" class="scroll" data-offset="60">Contato</a></li>
					</ul>
				</nav>
			</div>
		 	<!-- <nav class="navbar navbar-default col-xs-6 col-sm-6 col-md-8">
		 		<div class="">
		 		    <?php
		 			 
		 		    $defaults = array(
		 		    	'theme_location'  => '',
		 		    	'menu'            => '',
		 		    	'container'       => 'div',
		 		    	'container_class' => 'collapse navbar-collapse link_menu',
		 		    	'container_id'    => 'bs-example-navbar-collapse-1',
		 		    	'menu_class'      => 'menu',
		 		    	'menu_id'         => '',
		 		    	'echo'            => true,
		 		    	'fallback_cb'     => 'wp_page_menu',
		 		    	'before'          => '',
		 		    	'after'           => '',
		 		    	'link_before'     => '',
		 		    	'link_after'      => '',
		 		    	'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>',
		 		    	'depth'           => 0,
		 		    	'walker'          => ''
		 		    );
		 			 
		 		    wp_nav_menu( $defaults );
		 			 
		 		    ?>
		 		                  	
 			     	<button type="button" class="navbar-toggle collapsed buttom_toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
 				        <span class="sr-only">Toggle navigation</span>
 				        <span class="icon-bar"></span>
 				        <span class="icon-bar"></span>
 				        <span class="icon-bar"></span>
 			      	</button>
		 			 
		 		</div>
		 		
		 	</nav> -->
		 	
		 </div>				
	</div>

			
		

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/cgf.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/quem_somos.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/servicos.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/blog.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fale_conosco.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/medias.css" type="text/css" />
		
		<script src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.4.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/cgf.js"></script>

		<title>CGF Jurídico</title>
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/ico_logo.png" />
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/ico_logo.png" type="image/x-icon" />
		<link rel="icon" type="image/ico" href="<?php bloginfo('template_url'); ?>/img/ico_logo.png" />
	</head>

	<body>

		
			<!-- <div class="logo col-md-8">
				<h1><a href=""><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a></h1>
			</div> -->
			<div class="cabecalho">
				<section class="container-fluid">
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<div class="navbar-header col-md-4">
						     	<button type="button" class="navbar-toggle collapsed buttom_toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
						      	</button>
						      	<a class="navbar-brand logo_img" href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo_home.png" class="img-responsive"></a>
						    </div>
						    <?php

						    $defaults = array(
						    	'theme_location'  => '',
						    	'menu'            => '',
						    	'container'       => 'div',
						    	'container_class' => 'collapse navbar-collapse col-md-6 link_menu',
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
						   <!--  <div class="collapse navbar-collapse col-md-6 link_menu" id="bs-example-navbar-collapse-1">
					        	<ul class="nav navbar-nav">
						            <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
						            <li><a href="#">Sobre</a></li>
					            	<li><a href="#">Serviço</a></li>
					            	<li><a href="#">Blog</a></li>
					            	<li><a href="#">Fale Conosco</a></li>
					            	
					          	</ul>
					        </div> -->


		                  	<div class="col-md-2">
		        				<ul class="list-inline redes_sociais">
									<?php
										$redes = get_posts('post_type=redes_sociais');
										$facebook = "";
										$gplus = "";
										$in = "";
										foreach ($redes as $rede) {
											$facebook = get_field('facebook', $rede->ID);
											$gplus = get_field('google_plus', $rede->ID);
											$in = get_field('linkedin', $rede->ID);
										 } 
									?>
		        					<li><a href="<?php echo $facebook; ?>" target="blank"><img src="<?php bloginfo('template_url'); ?>/img/face_ico.png" class="img-responsive"></a></li>
		        					<li><a href="<?php echo $gplus; ?>" target="blank"><img src="<?php bloginfo('template_url'); ?>/img/twitter_ico.png" class="img-responsive"></a></li>
		        				</ul>
		        			</div>
						</div>
						
					</nav>
					
				</section>
				
			</div>

			
		
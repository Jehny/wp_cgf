<?php
	include "layout/header.php";
?>

	<div id="slider">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		 <!--  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol> -->

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			<?php 
				$banners = get_posts('post_type=banners');
				if($banners){
					foreach ($banners as $banner){
						if($i++ == 1){
							$active = "active";
						}else{$active = "";}
			?>
						<div class="<?php echo $active; ?> item">
							<img alt="" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($banner->ID)); ?>" class="img-responsive">
			<?php
							if(get_field('titulo', $banner->ID) != ""){
				?>				
							    <div class="carousel-caption">
							       	<h3><?php echo get_field('titulo', $banner->ID) ?></h3>
							        <p><?php echo get_field('sub_titulo', $banner->ID) ?></p>
							    </div>
						<?php } ?>
						</div>	
						
			<?php  		
					}
				}
			?>
		  </div>

		  <!-- Controls -->
		 <div class="controle_left">
		 	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		 	  <span aria-hidden="true"><img src="<?php bloginfo('template_url'); ?>/img/prev.png" class="img-responsive"></span>
		 	  <span class="sr-only">Previous</span>
		 	</a>
		 </div>
		 <div class="controle_right">
		 	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		 	  <span class="glyphicon" aria-hidden="true"><img src="<?php bloginfo('template_url'); ?>/img/next.png 
		 	  " class="img-responsive"></span>
		 	  <span class="sr-only">Next</span>
		 	</a>
		 </div>
		</div>	
	</div>
	
	<!-- Seção de sobre a CGF - o conteúdo está na página criada no WP -->
	<section class="container-fluid">
		<div id="sobre_home">
			<h1 class="titulo_sessao">CGF Jurídico</h1>
			<h2 class="subtitulo">Veja como podemos ajudar a trazer resultados</h2>

			<div class="separador row-fluid">
				<div class="col-xs-4 col-sm-4 col-md-4">
					<img src="<?php bloginfo('template_url'); ?>/img/separador_esq.png" class="img-responsive">
				</div> 
				<div class="col-xs-4 col-sm-4 col-md-4">
					X 
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4">
					<img src="<?php bloginfo('template_url'); ?>/img/separador_dir.png" class="img-responsive">
				</div>
			</div>
			<div class="corpo">
				<?php 
					$page = get_page_by_title( 'Quem Somos' );
					echo get_field('sobre_a_empresa', $page->ID);

				?>
			</div>
			<div class="div_btn row-fluid">
				<a href="<?php echo esc_url(get_permalink(get_page_by_title('Quem Somos' ))); ?>" class="btn btn-vermelho">Saiba mais</a>
			</div>
		</div>
	</section>

	<!-- Seção de Primeiro post de blogs-->
	<div class="primeiro_post">
		<section class="container-fluid">
			<div class="corpo">
				<?php 
					$blog = get_page_by_title('Blog listagem');
					echo get_field('slogan', $blog->ID);
				?>

				<div class="ass">
					<?php echo get_field('assinatura', $blog->ID); ?>
				</div>
				<div class="div_btn row-fluid">
					<a href="<?php echo esc_url(get_permalink(get_page_by_title('Blog listagem' ))); ?>" class="btn btn-preto">Fique por dentro  em nosso blog</a>
				</div>
			</div>
		</section>
	</div>

	<!-- Seção de Notícias e notas-->
	<section class="container-fluid noticias">
		<h1 class="titulo_sessao">Notícias e Notas</h1>
		<h2 class="subtitulo">Acompanhe todas as notícias e notas sobre o mundo do direito</h2>
		<div class="separador row-fluid">
			<div class="col-xs-4 col-sm-4 col-md-4">
				<img src="<?php bloginfo('template_url'); ?>/img/separador_esq.png" class="img-responsive">
			</div> 
			<div class="col-xs-4 col-sm-4 col-md-4">
				X 
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4">
				<img src="<?php bloginfo('template_url'); ?>/img/separador_dir.png" class="img-responsive">
			</div>
		</div>

		<div class="row-fluid noticia_item">
		<?php if (have_posts()) {
				query_posts('orderby=DESC&posts_per_page=4' );
				 while (have_posts()) {
				 	the_post();  
		?>
			<div class="col-xs-12 col-sm-6 col-md-3 item">
				<div class="col-xs-2 col-sm-2 col-md-2 data">
					<p class="dia"><?php the_time('d'); ?></p>
					<p class="mes"><?php the_time('M'); ?></p>
				</div>
				<div class="texto col-xs-10 col-sm-10 col-md-10">
					<h1 class="titulo_noticia_item"><?php the_title(); ?></h1>
					<?php if (has_excerpt() ) { ?>
							<p class="resumo_noticia_item" ><?php the_excerpt(); ?></p>
					<?php } ?>
				</div>
			</div>


		<?php }
				wp_reset_query();
			} 
		?>
			
		</div>
		
		<div class="div_btn row-fluid">
			<a href="<?php echo esc_url(get_permalink(get_page_by_title('Noticias'))); ?>" class="btn btn-preto">Veja  mais notícias e notas</a>
		</div>
	</section>

	<!-- Seção de Serviços-->
	<section class="container-fluid servicos_home">
		<h1 class="titulo_sessao">Conheça nossos serviços</h1>
		<h2 class="subtitulo">Parcerias sólidas para seus resultados serem sempre o melhor</h2>
		<div class="separador row-fluid">
			<div class="col-xs-4 col-sm-4 col-md-4">
				<img src="<?php bloginfo('template_url'); ?>/img/separador_esq.png" class="img-responsive">
			</div> 
			<div class="col-xs-4 col-sm-4 col-md-4">
				X 
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4">
				<img src="<?php bloginfo('template_url'); ?>/img/separador_dir.png" class="img-responsive">
			</div>
		</div>
		<div class="row-fluid lista_servicos">
		<?php 
			$args = array(
				'posts_per_page'   => 3,
				'offset'           => 0,
				'category'         => '',
				'category_name'    => '',
				'orderby'          => '',
				'order'            => 'ASC',
				'include'          => '',
				'exclude'          => '',
				'meta_key'         => '',
				'meta_value'       => '',
				'post_type'        => 'servico_home',
				'post_mime_type'   => '',
				'post_parent'      => '',
				'author'	   	=> '',
				'post_status'      => 'publish',
				'suppress_filters' => true 
			);
			$servicos_home = get_posts($args);
			if($servicos_home){
				// print_r($servicos_home);
				foreach ($servicos_home as $servico_item){
					
				?>
					<div class="col-xs-12 col-sm-12 col-md-4 servicos_home_item">
						<div class="icone">
							<img alt="" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($servico_item->ID)); ?>" class="img-responsive">
						</div>
						<div class="titulo">
							<?php echo $servico_item->post_title; ?>
						</div>
						<div class="texto">
							<?php echo $servico_item->post_content; ?>
						</div>
							
					</div>
		<?php  }
			}
		?>
		</div>
		<div class="div_btn row-fluid">
			<a href="<?php echo esc_url(get_permalink(get_page_by_title('Serviços'))); ?>" class="btn btn-preto">Veja nosso lista de serviços</a>
		</div>


	</section>
	<div class="imagem_footer">
		<img src="<?php bloginfo('template_url'); ?>/img/direito_balanca.png" class="img-responsive">
	</div>

<?php
	include "layout/footer.php";
?>
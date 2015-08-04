<?php
	include "layout/header.php";
?>

	<div id="slider">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

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
						    <!-- <div class="carousel-caption">
						       	<h3>...</h3>
						        <p>...</p>
						    </div> -->

						</div>
			<?php  }
				}
			?>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span aria-hidden="true"><img src="<?php bloginfo('template_url'); ?>/img/prev.png" class="img-responsive"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon" aria-hidden="true"><img src="<?php bloginfo('template_url'); ?>/img/next.png 
		    " class="img-responsive"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>	
	</div>
	
	<!-- Seção de sobre a CGF - o conteúdo está na página criada no WP -->
	<section class="container-fluid">
		<div id="sobre_home">
			<h1 class="titulo_sessao">CGF Jurídico</h1>
			<h2 class="subtitulo">Veja como podemos ajudar a trazer resultados</h2>

			<div class="separador row-fluid">
				<div class="col-md-4">
					<img src="<?php bloginfo('template_url'); ?>/img/separador_esq.png" class="img-responsive">
				</div> 
				<div class="col-md-4">
					X 
				</div>
				<div class="col-md-4">
					<img src="<?php bloginfo('template_url'); ?>/img/separador_dir.png" class="img-responsive">
				</div>
			</div>
			<div class="corpo">
				<?php 
					$page = get_page_by_title( 'Quem Somos' );
					echo  $page->post_content;

				?>
			</div>
			<div class="div_btn row-fluid">
				<a href="" class="btn btn-vermelho">Saiba mais</a>
			</div>
		</div>
	</section>

	<!-- Seção de Primeiro post de blogs-->
	<div class="primeiro_post">
		<section class="container-fluid">
			<div class="corpo">

				<?php 
					$args = array(
						'posts_per_page'   => 1,
						'offset'           => 0,
						'category'         => '',
						'category_name'    => '',
						'orderby'          => 'date',
						'order'            => 'DESC',
						'include'          => '',
						'exclude'          => '',
						'meta_key'         => '',
						'meta_value'       => '',
						'post_type'        => 'blog',
						'post_mime_type'   => '',
						'post_parent'      => '',
						'author'	   	=> '',
						'post_status'      => 'publish',
						'suppress_filters' => true 
					);
					$blog = get_posts($args);
					if($blog){
						// print_r($blog);
						foreach ($blog as $blog_item){
							echo $blog_item->post_content;
						?>
							<div class="ass">
								<?php $ass = get_post_meta($blog_item->ID, 'assinatura', true); ?>
								<?php echo $ass; ?>
							</div>
							<div class="div_btn row-fluid">
								<a href="<?php echo get_the_permalink($blog_item->ID); ?>" class="btn btn-preto">Fique por dentro  em nosso blog</a>
							</div>
				<?php  }
					}
				?>
				
			</div>
		</section>
	</div>

	<!-- Seção de Notícias e notas-->
	<section class="container-fluid noticias">
		<h1 class="titulo_sessao">Notícias e Notas</h1>
		<h2 class="subtitulo">Acompanhe todas as notícias e notas sobre o mundo do direito</h2>
		<div class="separador row-fluid">
			<div class="col-md-4">
				<img src="<?php bloginfo('template_url'); ?>/img/separador_esq.png" class="img-responsive">
			</div> 
			<div class="col-md-4">
				X 
			</div>
			<div class="col-md-4">
				<img src="<?php bloginfo('template_url'); ?>/img/separador_dir.png" class="img-responsive">
			</div>
		</div>

		<div class="row-fluid noticia_item">
		<?php if (have_posts()) {
				query_posts('orderby=DESC&posts_per_page=4' );
				 while (have_posts()) {
				 	the_post();  
		?>
			<div class="col-md-3">
				<div class="col-md-2 data">
					<p class="dia"><?php the_time('d'); ?></p>
					<p class="mes"><?php the_time('M'); ?></p>
				</div>
				<div class="texto col-md-10">
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
			<a href="" class="btn btn-preto">Veja  mais notícias e notas</a>
		</div>
	</section>

	<!-- Seção de Serviços-->
	<section class="container-fluid servicos_home">
		<h1 class="titulo_sessao">Conheça nossos serviços</h1>
		<h2 class="subtitulo">Parcerias sólidas para seus resultados serem sempre o melhor</h2>
		<div class="separador row-fluid">
			<div class="col-md-4">
				<img src="<?php bloginfo('template_url'); ?>/img/separador_esq.png" class="img-responsive">
			</div> 
			<div class="col-md-4">
				X 
			</div>
			<div class="col-md-4">
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
					<div class="col-md-4 servicos_home_item">
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
			<a href="<?php echo get_the_permalink($blog_item->ID); ?>" class="btn btn-preto">Veja nosso lista de serviços</a>
		</div>


	</section>
	<div class="imagem_footer">
		<img src="<?php bloginfo('template_url'); ?>/img/direito_balanca.png">
	</div>

<?php
	include "layout/footer.php";
?>
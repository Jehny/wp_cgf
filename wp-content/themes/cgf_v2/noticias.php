<!-- Seção de Notícias e notas-->
	<section class="container-fluid noticias">
		<div class="traco_centro"><hr></div>
		<h1 class="titulo_sessao">Notícias e Notas</h1>
			<i class="icon-bullhorn"></i>
		<h2 class="subtitulo">Acompanhe todas as notícias e notas sobre o mundo do direito</h2>

		<div class="row-fluid noticia_item">
		<?php if (have_posts()) {
				query_posts('post_type=post&orderby=DESC&posts_per_page=4' );
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
							<div class="resumo_noticia_item" ><?php the_excerpt(); ?></div>
					<?php } ?>
				</div>
			</div>


		<?php }
				wp_reset_query();
			} 
		?>
			
		</div>
		
		<div class="div_btn row-fluid">
			<a href="<?php echo esc_url(get_permalink(get_page_by_title('Noticias'))); ?>" class="btn btn-vermelho">Veja  mais notícias e notas</a>
		</div>
	</section>
<?php
	include "layout/header.php";
?>
<div class="bg_body">

	<div class="row-fluid">
		<section class="container-fluid">
			<div class="col-xs-12 col-sm-12 col-md-7 col-md-offset-1">

				<?php 

					$loop = new WP_Query( array( 'post_type' => 'blog', 'posts_per_page' => 10, 'orderby' => 'DESC' ) );
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
						<div class="post">
							<div class="titulo row-fluid">
								<div class="nome">
									<h1> <?php the_title(); ?> </h1>
									<p>Posted by: <?php the_author(); ?> - <?php the_time('d/m/Y'); ?></p>
								</div>
							</div>
							<div class="corpo">
								<?php 
									if ( has_post_thumbnail() ) {
										the_post_thumbnail('full'); 
									}
								?>
								<?php if (has_excerpt() ) { ?>
										<div class="resumo" ><?php the_excerpt(); ?></div>
								<?php } ?>
							</div>

							<div class="menu">
								<a href="<?php echo esc_url( get_permalink()); ?>">
									<img src="<?php bloginfo('template_url'); ?>/img/icon_leia.png"> Leia mais
								</a>
								<a href="<?php echo esc_url( get_permalink()); ?>">
									<img src="<?php bloginfo('template_url'); ?>/img/icon_comentario.png"> Seja o primeiro a comentar
								</a>
							</div>
						</div>

				<?php  endwhile;
					wp_reset_query();
				?>

			</div>
			<div id="listagem" class="col-xs-12 col-sm-12 col-md-4">
				<div class="busca">
					<form action="" method="POST">
						<input type="text" placeholder="Buscar...">
						<button type="submit" name="busca"><img src="<?php bloginfo('template_url'); ?>/img/lupa.png"></button>
					</form>
				</div>
				<div class="posts_anteriores">
					<h3><img src="<?php bloginfo('template_url'); ?>/img/ico_post_anteriores.png">Posts anteriores</h3>
					<div class="item">Post de Abril de 2015</div>
					<div class="item">Post de Março de 2015</div>
					<div class="item">Post de Fevereiro de 2015</div>
				</div>

				<div class="feed_facebook">
					<?php 
						
						if ( dynamic_sidebar('feed_facebook') ) : else : endif;
					?>
				</div>
			</div>
		</section>
		
	</div>
</div>

<?php
	include "layout/footer.php";
?>
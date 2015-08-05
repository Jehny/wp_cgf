<?php
	include "layout/header.php";
?>
<div class="bg_body">

	<div class="row-fluid">
		<section class="container-fluid">
			<div class="col-xs-12 col-sm-12 col-md-7 col-md-offset-1">

			<?php if (have_posts()) {
					 while (have_posts()) {
						print_r(the_post());  
			?>
					<div class="post">
						<div class="titulo row-fluid">
							<div class="nome">
								<h1> <?php echo the_title(); ?> </h1>
								<p>Posted by: <?php the_author(); ?> - <?php the_time('d/m/Y'); ?></p>
							</div>
						</div>
						<div class="corpo">
														
							<div class="resumo" ><?php the_content(); ?></div>
							
						</div>

					</div>
			<?php }
				} 
			?>
			<ol class="commentlist">
				<?php
					$id = get_the_ID();
					//Gather comments for a specific page/post 
					$comments = get_comments(array(
						'post_id' => $id,
						'status' => 'approve' //Change this to the type of comments to be displayed
					));

					//Display the list of comments
					wp_list_comments(array(
						'per_page' => 10, //Allow comment pagination
						'reverse_top_level' => false //Show the latest comments at the top of the list
					), $comments);
				?>
			</ol>
			<?php 
				$args = array(
				  'title_reply'       => 'Deixe um comentário' ,
				  'label_submit'      => 'Enviar comentário'
				);
				comment_form( $args, $id ); 
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
					<?php 

						$loop2 = new WP_Query( array( 'post_type' => 'blog', 'posts_per_page' => 3, 'orderby' => 'DESC' ) );
						while ( $loop2->have_posts() ) : $loop2->the_post();
					?>
					<div class="item">Post de <?php the_time('F'); ?> de <?php the_time('Y'); ?></div>

					<?php  endwhile;
						wp_reset_query();
					?>
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
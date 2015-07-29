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

	<section class="container-fluid">
		<div id="sobre">
			<h1 class="titulo_sessao">CGF Jurídico</h1>
			<h2 class="subtitulo">Veja como podemos ajudar a trazer resultados</h2>

			<div class="separador"></div>
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


<?php
	include "layout/footer.php";
?>
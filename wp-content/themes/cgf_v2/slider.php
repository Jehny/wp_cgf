<div id="slider">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

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
		 <!-- Indicators -->
		<ol class="carousel-indicators">
		   <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		   <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		 </ol> 	
	  </div>

	  <!-- Controls -->
	 <div class="controle_left">
	 	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	 	  <span aria-hidden="true"><i class="icon-arrow-left"></i></span>
	 	  <span class="sr-only">Previous</span>
	 	</a>
	 </div>
	 <div class="controle_right">
	 	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	 	  <span class="glyphicon" aria-hidden="true"><i class="icon-uniE60B2"></i></span>
	 	  <span class="sr-only">Next</span>
	 	</a>
	 </div>
	</div>	
</div>

<div class="container-fluid solicite_consulta hidden-sm hidden-xs">
	<form action="" method="post" class="row-fluid"> 
		<div class="col-md-3">
			<input type="text" name="nome_consulta" placeholder="O seu nome">
		</div>
		<div class="col-md-3">
			<input type="text" name="telefone_consulta" placeholder="O seu telefone">
		</div>
		<div class="col-md-3">
			<input type="text" name="email_consulta" placeholder="O seu e-mail">
		</div>
		<div class="col-md-3">
			<button type="submit" class="btn btn-vermelho">Solicitar Consulta </button>
		</div>
	</form>
	
</div>
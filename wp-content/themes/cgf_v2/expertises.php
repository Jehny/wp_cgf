<div class="row-fluid expertises_bg">
	<div class="container-fluid">
		<h1>Conheça nossas Expertises</h1>
		<div class="traco">
			<hr>
		</div>

		<h2>Entregar soluções jurídicas com qualidade e eficiência, adequadas às necessidades específicas de cada cliente. Com o intuito de garantir a sua satisfação e conquistar a sua  fidelidade.</h2>

		<p><a href="" class="btn btn-vermelho">Solicitar Consulta</a></p>
	</div>
	
</div>

<?php 
	$args = array(
		'posts_per_page'   => 6,
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
?>
	<div class="container-fluid servicos">
	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs" role="tablist" id="services">
<?php
		// print_r($servicos_home);
		$i = 1;
		foreach ($servicos_home as $servico_item){
			$icone = get_field('icone', $servico_item->ID);
			if($i == 1){
				$a = "active";
			} else {
				$a = "";
			}
		?>
			<li role="presentation" class="<?php echo $a; ?>">
				<a href="#<?php echo get_field('referencia', $servico_item->ID); ?>" aria-controls="<?php echo get_field('referencia', $servico_item->ID); ?>" role="tab" data-toggle="tab">
					<?php if($icone){
						echo "<i class='".$icone." icone_nav'></i>";
						}
						?>
						<br />
					<?php echo $servico_item->post_title; ?>
				</a>
			</li>
<?php  $i++; } ?>
	 </ul>	
	 <div class="tab-content">
<?php
		$j = 1;
		foreach ($servicos_home as $servico_item) {
			if($j == 1){
				$a = "active";
			} else {
				$a = "";
			}
			$icone = get_field('icone', $servico_item->ID);
	?>
		  	<div role="tabpanel" class="tab-pane <?php echo $a; ?>" id="<?php echo get_field('referencia', $servico_item->ID); ?>">
		  		<input type="hidden" id="<?php echo $j; ?>" value="<?php echo get_field('referencia', $servico_item->ID); ?>"/>
		  		
		  		<div class="traco_centro">
		  			<hr>
		  		</div>
		  		<h1><?php echo $servico_item->post_title; ?></h1>
		  		<div class="icon_sevicos"><?php echo "<i class='".$icone."'></i>"; ?></div>	
				<div class="conteudo_servicos">
					<?php echo $servico_item->post_content; ?>
				</div>
		  		<div class="traco_3">
		  			<hr class="hr1">
		  			<hr class="hr2">
		  			<hr class="hr3">
		  		</div>
		  	</div>
			
<?php	$j++;
		}
	?>
	</div>
<?php	
	}
?>
</div>
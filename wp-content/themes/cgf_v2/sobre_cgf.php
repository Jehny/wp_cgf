<?php

	$q = get_page_by_title( 'Quem Somos' );
	$sobre_col_1 = get_field('sobre_a_empresa_coluna_1', $q->ID);
	$sobre_col_2 = get_field('sobre_a_empresa_coluna_2', $q->ID);
	$titulo_missao = get_field('titulo_missao', $q->ID);
	$missao = get_field('missao', $q->ID);
	$titulo_visao = get_field('titulo_visao', $q->ID);
	$visao = get_field('visao', $q->ID);
	$titulo_valores = get_field('titulo_valores', $q->ID);
	$valores = get_field('valores', $q->ID);

?>

<section id="sobre_empresa" class="container-fluid sobre_empresa">
	<div class="traco">
		<hr>
	</div>
	<h1>Conheça um pouco sobre nós</h1>
	<div class="row-fluid empresa">
		
		<div class="col-xs-12 col-sm-12 col-md-12 sobre">
			<div class="col-md-6">
				<?php echo $sobre_col_1; ?>
			</div>
			<div class="col-md-5 col-md-offset-1">
				<?php echo $sobre_col_2; ?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 valores">
			<div class="col-md-4 divisao">
				<p><i class="icon-target2"></i></p>
				<p class="titulo_empresa"><?php echo $titulo_missao; ?></p>
				<p class="texto"><?php echo $missao; ?></p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 divisao">
				<p><i class="icon-eye2"></i></p>
				<p class="titulo_empresa"><?php echo $titulo_visao; ?></p>
				<p class="texto"><?php echo $visao; ?></p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4">
				<p><i class="icon-user5"></i></p>
				<p class="titulo_empresa"><?php echo $titulo_valores; ?></p>
				<p class="texto"><?php echo $valores; ?></p>
			</div>
		</div>
	</div>
</section>
<?php
	include "layout/header.php";
?>

<div id="servicos">
	<section class="container-fluid">
		<?php 
			$page = get_page_by_title( 'Serviços' );
			$titulo = get_field('titulo', $page->ID);
			$sub_titulo = get_field('sub_titulo', $page->ID);
		?>

		<h1><?php echo $titulo; ?></h1>
		<h2><?php echo $sub_titulo; ?></h2>
		
		<div class="separador row-fluid">
			<div class="col-md-5 linhas">
				<img src="<?php bloginfo('template_url'); ?>/img/servico_separador_linha.png" class="img-responsive">
			</div> 
			<div class="col-md-2 meio">
				<img src="<?php bloginfo('template_url'); ?>/img/servico_separador_centro.png" class="img-responsive">
			</div>
			<div class="col-md-5 linhas">
				<img src="<?php bloginfo('template_url'); ?>/img/servico_separador_linha.png" class="img-responsive">
			</div>
		</div>
		<?php 
			$i = 1;
			while(get_field('titulo_secao_'.$i, $page->ID) != ""){
					$secao_titulo = get_field('titulo_secao_'.$i, $page->ID);
					$desc_secao = 'desc_secao_'.$i;
					$descricao = get_field($desc_secao, $page->ID);
			
		?>
					<div class="secoes row-fluid">
					  	<p class="titulo"><?php echo $secao_titulo; ?></p>
					  	<div class="descricao"><?php echo $descricao; ?></div>
					  </div>
		<?php	
				$i++;
			 }
		?>
	</section>
</div>

<?php
	include "layout/footer.php";
?>
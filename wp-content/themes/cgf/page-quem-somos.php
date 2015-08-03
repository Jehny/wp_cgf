<?php
	include "layout/header.php";
?>

<?php

	$q = get_page_by_title( 'Quem Somos' );
	$sobre = get_field('sobre_a_empresa', $q->ID);
	$titulo_missao = get_field('titulo_missao', $q->ID);
	$missao = get_field('missao', $q->ID);
	$titulo_visao = get_field('titulo_visao', $q->ID);
	$visao = get_field('visao', $q->ID);
	$titulo_valores = get_field('titulo_valores', $q->ID);
	$valores = get_field('valores', $q->ID);

	$rita = get_field("nome_rita", $q->ID);
	$foto_rita = get_field('rita', $q->ID);		
	$desc_rita = get_field('descricao_rita', $q->ID);
	$atuacao_rita = get_field('areas_de_atuacao_rita', $q->ID);
	$atividade_rita = get_field('atividades_profissionais_rita', $q->ID);
	$complemento_rita = get_field('complemento_rita', $q->ID);
	$email_rita = get_field('email_rita', $q->ID);

	$karla = get_field("nome_karla", $q->ID);
	$foto_karla = get_field('karla', $q->ID);
	$desc_karla = get_field('descricao_karla', $q->ID);
	$atuacao_karla = get_field('areas_de_atuacao_karla', $q->ID);
	$atividade_karla = get_field('atividades_profissionais_karla', $q->ID);
	$complemento_karla = get_field('complemento_karla', $q->ID);
	$email_karla = get_field('email_karla', $q->ID);

	$jerusa = get_field("nome_jerusa", $q->ID);
	$foto_jerusa = get_field('jerusa', $q->ID);
	$desc_jerusa = get_field('descricao_jerusa', $q->ID);
	$atuacao_jerusa = get_field('areas_de_atuacao_jerusa', $q->ID);
	$atividade_jerusa = get_field('atividades_profissionais_jerusa', $q->ID);
	$complemento_jerusa = get_field('complemento_jerusa', $q->ID);
	$email_jerusa = get_field('email_jerusa', $q->ID);
?>
<div id="sobre">
	<section class="container-fluid">
	<h1>Conheça a CGF Jurídico</h1>
	<h2>Nesta página você poderá  conhecer um  pouco mias sobre nós</h2>
	<div class="row-fluid empresa">
		<div class="separador row-fluid">
			<div class="col-md-4">
				<img src="<?php bloginfo('template_url'); ?>/img/separador_esq.png" class="img-responsive">
			</div> 
			<div class="col-md-4">
				A empresa
			</div>
			<div class="col-md-4">
				<img src="<?php bloginfo('template_url'); ?>/img/separador_dir.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-6 sobre">
			<?php echo $sobre; ?>
		</div>
		<div class="col-md-6 sobre">
			<div class="col-md-12">
				<p class="titulo_empresa"><?php echo $titulo_missao; ?></p>
				
				<p><?php echo $missao; ?></p>
			</div>
			<div class="col-md-12">
				<p class="titulo_empresa"><?php echo $titulo_visao; ?></p>
				<p><?php echo $visao; ?></p>
			</div>
			<div class="col-md-12">
				<p class="titulo_empresa"><?php echo $titulo_valores; ?></p>
				<p><?php echo $valores; ?></p>
			</div>
		</div>
	</div>

	<div class="row-fluid funcionarios">
		<div class="separador row-fluid">
			<div class="col-md-4">
				<img src="<?php bloginfo('template_url'); ?>/img/separador_esq.png" class="img-responsive">
			</div> 
			<div class="col-md-4">
				Conheça nossos profissionais
			</div>
			<div class="col-md-4">
				<img src="<?php bloginfo('template_url'); ?>/img/separador_dir.png" class="img-responsive">
			</div>
		</div>

		<div class="col-md-4 coluna">
			<p class="foto"><img src="<?php echo $foto_jerusa['url']; ?>" alt="Jerusa Rocha"></p>
			<p class="nome"><?php echo $jerusa; ?></p>
			<p class="descricao"><?php echo $desc_jerusa; ?></p>
			<p class="atuacao"><?php echo $atuacao_jerusa; ?></p>
			<p class="atividade"><?php echo $atividade_jerusa; ?></p>
			<p class="complemento"><?php echo $complemento_jerusa; ?></p>
			<p class="email"><a href="mailto:<?php $email_jerusa; ?>"><?php echo $email_jerusa; ?></a></p>
		</div>
		<div class="col-md-4 coluna">
			<p class="foto"><img src="<?php echo $foto_rita['url']; ?>" alt="Rita Gadelha"></p>
			<p class="nome"><?php echo $rita; ?></p>
			<p class="descricao"><?php echo $desc_rita; ?></p>
			<p class="atuacao"><?php echo $atuacao_rita; ?></p>
			<p class="atividade"><?php echo $atividade_rita; ?></p>
			<p class="complemento"><?php echo $complemento_rita; ?></p>
			<p class="email"><a href="mailto:<?php $email_rita; ?>"><?php echo $email_rita; ?></a></p>
		</div>
		<div class="col-md-4 coluna">
			<p class="foto"><img src="<?php echo $foto_karla['url']; ?>" alt="Anna Karla"></p>
			<p class="nome"><?php echo $karla ?></p>
			<p class="descricao"><?php echo $desc_karla; ?></p>
			<p class="atuacao"><?php echo $atuacao_karla; ?></p>
			<p class="atividade"><?php echo $atividade_karla; ?></p>
			<p class="complemento"><?php echo $complemento_karla; ?></p>
			<p class="email"><a href="mailto:<?php $email_karla; ?>"><?php echo $email_karla; ?></a></p>
		</div>
		
	</div>
	</section>
</div>


<?php
	include "layout/footer.php";
?>

<?php
	$q = get_page_by_title( 'Quem Somos' );
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

<div id="time" class="row-fluid time">
	<div class="container-fluid">
		<div class="traco_centro"><hr></div>
		<h1>Conheça nossa Equipe</h1>
			<i class="icon-users2"></i>
	</div>

	<div id="equipe">
		<ul class="hidden-sm hidden-xs">
			<li class="frame-0">
				<div class="frame-content">
					<div class="conteudo_equipe">
						<div class="traco_left"><hr></div>
						<h3><?php echo $jerusa; ?></h3>
						<div class="descricao_profissional">
							<?php echo $desc_jerusa; ?>
						</div>
						<?php if($atuacao_jerusa){ ?>
							<div class="area">
								<?php echo $atuacao_jerusa; ?>
							</div>
						<?php } ?>

						<?php if($atividade_jerusa){ ?>
						<div class="atividade">
							<?php echo $atividade_jerusa; ?>
						</div>
						<?php } ?>

						<?php if($complemento_jerusa){ ?>
						<div class="complemento">
							<?php echo $complemento_jerusa; ?>
						</div>
						<?php } ?>
						<?php if($email_jerusa){ ?>
						<div class="email">
							<a href="mailto:<?php $email_jerusa; ?>"><?php echo $email_jerusa; ?></a>
						</div>
						<?php } ?>
					</div>
				</div>
			</li>
			<li class="frame-1">
				<div class="frame-content">
					<div class="conteudo_equipe">
						<div class="traco_left"><hr></div>
						<h3><?php echo $rita; ?></h3>
						<div class="descricao_profissional">
							<?php echo $desc_rita; ?>
						</div>
						<?php if($atuacao_rita){ ?>
							<div class="area">
								<?php echo $atuacao_rita; ?>
							</div>
						<?php } ?>
						<?php if($atividade_rita){ ?>
							<div class="atividade">
								<?php echo $atividade_rita; ?>
							</div>
						<?php } ?>
						<?php if($complemento_rita){ ?>
							<div class="complemento">
								<?php echo $complemento_rita; ?>
							</div>
						<?php } ?>
						<?php if($email_rita){ ?>
							<div class="email">
								<a href="mailto:<?php $email_rita; ?>"><?php echo $email_rita; ?></a>
							</div>
						<?php } ?>
					</div>
				</div>
			</li>
			<li class="frame-2">
				<div class="frame-content">
					<div class="conteudo_equipe">
						<div class="traco_left"><hr></div>
						<h3><?php echo $karla ?></h3>
						<div class="descricao_profissional">
							<?php echo $desc_karla; ?>
						</div>
						<?php if($atuacao_karla){ ?>
							<div class="area">
								<?php echo $atuacao_karla; ?>
							</div>
						<?php } ?>
						<?php if($atividade_karla){ ?>
							<div class="atividade">
								<?php echo $atividade_karla; ?>
							</div>
						<?php } ?>
						<?php if($complemento_karla){ ?>
							<div class="complemento">
								<?php echo $complemento_karla; ?>
							</div>
						<?php } ?>
						<?php if($email_karla){ ?>
							<div class="email">
								<a href="mailto:<?php $email_karla; ?>"><?php echo $email_karla; ?></a>
							</div>
						<?php } ?>
					</div>
				</div>
			</li>
		</ul>

		<div class="hidden-md hidden-lg row-fluid perfil">
			<div class="foto_time col-sm-5">
				<img src="<?php bloginfo('template_url'); ?>/img/jerusa.jpg" class="img-responsive">
			</div>
			<div class="texto col-sm-7">
				<div class="conteudo_equipe">
					<div class="traco_left"><hr></div>
					<h3><?php echo $jerusa; ?></h3>
					<div class="descricao_profissional">
						<?php echo $desc_jerusa; ?>
					</div>
					<?php if($atuacao_jerusa){ ?>
						<div class="area">
							<?php echo $atuacao_jerusa; ?>
						</div>
					<?php } ?>

					<?php if($atividade_jerusa){ ?>
					<div class="atividade">
						<?php echo $atividade_jerusa; ?>
					</div>
					<?php } ?>

					<?php if($complemento_jerusa){ ?>
					<div class="complemento">
						<?php echo $complemento_jerusa; ?>
					</div>
					<?php } ?>
					<?php if($email_jerusa){ ?>
					<div class="email">
						<a href="mailto:<?php $email_jerusa; ?>"><?php echo $email_jerusa; ?></a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<div class="hidden-md hidden-lg row-fluid perfil">
			<div class="foto_time col-sm-5">
				<img src="<?php bloginfo('template_url'); ?>/img/rita.jpg" class="img-responsive">
			</div>
			<div class="texto col-sm-7">
				<div class="conteudo_equipe">
					<div class="traco_left"><hr></div>
					<h3><?php echo $rita; ?></h3>
					<div class="descricao_profissional">
						<?php echo $desc_rita; ?>
					</div>
					<?php if($atuacao_rita){ ?>
						<div class="area">
							<?php echo $atuacao_rita; ?>
						</div>
					<?php } ?>
					<?php if($atividade_rita){ ?>
						<div class="atividade">
							<?php echo $atividade_rita; ?>
						</div>
					<?php } ?>
					<?php if($complemento_rita){ ?>
						<div class="complemento">
							<?php echo $complemento_rita; ?>
						</div>
					<?php } ?>
					<?php if($email_rita){ ?>
						<div class="email">
							<a href="mailto:<?php $email_rita; ?>"><?php echo $email_rita; ?></a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<div class="hidden-md hidden-lg row-fluid perfil">
			<div class="foto_time col-sm-5">
				<img src="<?php bloginfo('template_url'); ?>/img/karla.jpg" class="img-responsive">
			</div>
			<div class="texto col-sm-7">
				<div class="conteudo_equipe">
					<div class="traco_left"><hr></div>
					<h3><?php echo $karla ?></h3>
					<div class="descricao_profissional">
						<?php echo $desc_karla; ?>
					</div>
					<?php if($atuacao_karla){ ?>
						<div class="area">
							<?php echo $atuacao_karla; ?>
						</div>
					<?php } ?>
					<?php if($atividade_karla){ ?>
						<div class="atividade">
							<?php echo $atividade_karla; ?>
						</div>
					<?php } ?>
					<?php if($complemento_karla){ ?>
						<div class="complemento">
							<?php echo $complemento_karla; ?>
						</div>
					<?php } ?>
					<?php if($email_karla){ ?>
						<div class="email">
							<a href="mailto:<?php $email_karla; ?>"><?php echo $email_karla; ?></a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>

	</div>
	

</div>
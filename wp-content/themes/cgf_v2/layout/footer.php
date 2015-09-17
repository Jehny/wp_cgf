		<footer>
			<div class="row-fluid menu_footer">
				 <?php

				    $defaults = array(
				    	'theme_location'  => '',
				    	'menu'            => '',
				    	'container'       => 'div',
				    	'container_class' => 'collapse navbar-collapse col-md-6 link_menu',
				    	'container_id'    => 'menu-footer',
				    	'menu_class'      => 'menu',
				    	'menu_id'         => '',
				    	'echo'            => true,
				    	'fallback_cb'     => 'wp_page_menu',
				    	'before'          => '',
				    	'after'           => '',
				    	'link_before'     => '',
				    	'link_after'      => '',
				    	'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>',
				    	'depth'           => 0,
				    	'walker'          => ''
				    );

				    wp_nav_menu( $defaults );

				    ?>
			</div>
			<div class="endereco">
				<?php 
					
					if ( dynamic_sidebar('rodape_widgets') ) : else : endif;
				?>
			</div>
		</footer>

	</body>
</html>
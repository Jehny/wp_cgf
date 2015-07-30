<?php
register_nav_menu( 'main-menu', __( 'Main Menu' ) );

/**
 * Criando uma area de widgets
 *
 */
function widgets_novos_widgets_init() {

	register_sidebar( array(
		'name' => 'Rodape',
		'id' => 'rodape_widgets',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
}
add_action( 'widgets_init', 'widgets_novos_widgets_init' );



add_theme_support( 'post-thumbnails' );

add_action( 'init', 'banners_post_type' );

add_post_type_support('banners', 'thumbnail');

add_action( 'init', 'blog_post_type' );

$supports = array('title', 'editor','thumbnail', 'excerpt', 'custom-fields', 'comments', 'revisions', 'author', 'post-formats', 'page-attributes');

add_post_type_support('blog', $supports);

add_action( 'init', 'servico_home_post_type' );

add_post_type_support('servico_home', $supports);

function banners_post_type() {
	register_post_type( 'banners',
			array(
					'labels' => array(
							'name' => __( 'Banners' ),
							'singular_name' => __( 'Banner' )
					),
					'public' => true,
					'has_archive' => true,
			)
	);
}

function blog_post_type() {
	register_post_type( 'blog',
			array(
					'labels' => array(
							'name' => __( 'Blog' ),
							'singular_name' => __( 'Blog' )
					),
					'public' => true,
					'has_archive' => true,
			)
	);
}

function servico_home_post_type() {
	register_post_type( 'servico_home',
			array(
					'labels' => array(
							'name' => __( 'Servico Home' ),
							'singular_name' => __( 'Servico Home' )
					),
					'public' => true,
					'has_archive' => true,
			)
	);
}


// Custom WordPress Login Logo
function my_login_logo() { ?>
	<style>
	   body.login div#login h1 a {
	        background: url('wp-content/themes/cgf/img/logo_login.png')no-repeat;
	        height: 70px;
	        width: 323px;
	        
	   }
 	</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

//Link na tela de login para a página inicial
function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
	return 'CGF Jurídico';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

//Custom dashboard logo
add_action('admin_head', 'my_custom_logo');
function my_custom_logo() {
	echo '<style>
 			#wpadminbar>#wp-toolbar>#wp-admin-bar-root-default>#wp-admin-bar-wp-logo .ab-icon {
 				background: url('.get_bloginfo('template_directory').'/img/logo_tabless.png) no-repeat left 6px !important;
				height: 20px;
				width: 20px;
				font-family: normal !important;
				font-family: normal !important;
				font-weight: normal !important;
			}
			#wpadminbar #wp-admin-bar-wp-logo>.ab-item .ab-icon:before {
				content: none;
			}
		</style>';
}


?>
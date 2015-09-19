<?php
register_nav_menu( 'main-menu', __( 'Main Menu' ) );
add_action( 'widgets_init', 'widgets_novos_widgets_init' );
add_action( 'widgets_init', 'twitter_widgets_init' );
add_action( 'widgets_init', 'face_widgets_init' );
add_action( 'widgets_init', 'plus_widgets_init' );
add_action( 'widgets_init', 'in_widgets_init' );
add_action( 'widgets_init', 'feed_facebook_widgets_init' );
add_action( 'widgets_init', 'mapa_widgets_init' );

add_theme_support( 'post-thumbnails' );

add_action( 'init', 'banners_post_type');

add_post_type_support('banners', 'thumbnail');

add_action( 'init', 'blog_post_type', 0);

$supports = array('title', 'editor','thumbnail', 'excerpt', 'custom-fields', 'comments', 'revisions', 'author', 'post-formats', 'page-attributes');

add_post_type_support('blog', $supports);

add_action( 'init', 'servico_home_post_type' );
add_action( 'init', 'redes_sociais' );

add_post_type_support('servico_home', $supports);

function add_blog_automatically($post_ID) {
	global $wpdb;
	if(!has_term('','blog_categoria',$post_ID)){
		$cat = 'blog';
		wp_set_object_terms($post_ID, $cat, 'blog_categoria');
	}
}
add_action('publish_blog', 'add_blog_automatically');

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

/**
 * Widget redes sociais
 *
 */
function twitter_widgets_init() {

	register_sidebar( array(
		'name' => 'Twitter',
		'id' => 'twitter',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
}

function face_widgets_init() {

	register_sidebar( array(
		'name' => 'Facebook',
		'id' => 'facebook',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
}

function plus_widgets_init() {

	register_sidebar( array(
		'name' => 'Google+',
		'id' => 'plus',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
}

function in_widgets_init() {

	register_sidebar( array(
		'name' => 'Linkedin',
		'id' => 'linkedin',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
}

/**
 * Widget Feed de notícia no Facebook
 *
 */
function feed_facebook_widgets_init() {

	register_sidebar( array(
		'name' => 'Feed Facebook',
		'id' => 'feed_facebook',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
}

/**
 * Widget para adicionar um mapa
 *
 */
function mapa_widgets_init() {

	register_sidebar( array(
		'name' => 'Mapa',
		'id' => 'mapa',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
}

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
	// create a new taxonomy
		register_taxonomy(
			'blog_categoria',
			'blog',
			array(
				'label' => __( 'Categoria' ),
				'hierarchical' => true
			)
		);

	register_post_type( 'blog',
			array(
					'labels' => array(
							'name' => __( 'Blog' ),
							'singular_name' => __( 'Blog' )
					),
					'public' => true,
					'has_archive' => true,
					'taxonomies' => array('blog_categoria'),
			)
	);
	
}

function redes_sociais() {
	register_post_type( 'redes_sociais',
			array(
					'labels' => array(
							'name' => __( 'Redes Sociais' ),
							'singular_name' => __( 'Redes Sociais' )
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

function buscar_post($texto){
	global $wpdb;
	$tipo = $wpdb->get_results("SELECT * FROM wp_posts WHERE (post_type='blog' OR post_type='post') and post_content like '%".$texto."%'");
	return $tipo; 
}

function listagem_blog() {
	global $wpdb;
	$tipo = $wpdb->get_results("SELECT DISTINCT * FROM wp_posts as p, wp_term_relationships as wr, wp_terms as wt WHERE (p.post_type='post' AND wr.term_taxonomy_id = wt.term_id AND wt.slug='blog' AND p.post_status='publish') OR (p.post_type='blog' AND p.post_status='publish')");
	return $tipo;
}


?>
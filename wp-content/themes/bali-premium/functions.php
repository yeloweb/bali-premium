<?php
require TEMPLATEPATH.'/framework/theme.php';

$theme = new Theme(array(
	'help' => false,  /*Affiche le framework ou non */
	'name' => 'Bali Premium',
	'slug' => 'bali-premium',

	'menus' => array(
		'nav' => 'Emplacement1',
		),
	
	'sidebar' => array(
			'Recherche' => array(
			'name'          => 'Sidebar research',
			'id'            => 'search',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6>',
			'after_title'   => '</h6>' 
			), 
	
		'Sidebar Left' => array(
			'name'          => 'Sidebar left',
			'id'            => 'left',
			'before_widget' => '<div id="%1$s" class="widget %2$s another-toggle">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="active">',
			'after_title'   => '</h5>' 
			), 	
		'Sidebar Right' => array(
			'name'          => 'Sidebar right',
			'id'            => 'right',
			'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-item white-bg padding-20 mb-20">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>' 
			),
		'Sidebar Right-Blog' => array(
			'name'          => 'Sidebar right blog',
			'id'            => 'right-blog',
			'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-item white-bg padding-20 mb-20">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>' 
			),
		),
		'types' => array('works'),
		
		'images' => array(
		'post'=> array(
			array('thumb', 270, 195, true), //Format miniatures - true = cropper
			array('full', 848, 320, true), 
			),
		'prestataire'=> array(
			array('thumb', 270, 195, true),
			),
		'product'=> array(
			array('thumb', 870, 490, true),
			),
	),
));
	// Codex: https://codex.wordpress.org/Function_Reference/register_sidebar 

	
	/* Add an icon in the admin panel */
	
		function add_menu_icons_styles(){
		?>
			<style>
			#adminmenu .menu-icon-product div.wp-menu-image:before {
			  content: "\f102";
			}
			
			#adminmenu .menu-icon-region div.wp-menu-image:before {
			  content: "\f231";
			}
			
			#adminmenu .menu-icon-prestataire div.wp-menu-image:before {
			  content: "\f307";
			}
			</style>

		<?php
		}
		add_action( 'admin_head', 'add_menu_icons_styles' );
		
		
	/* Reduce the lenght of the excerpt */
	
		function custom_excerpt_length( $length ) {
			return 20;
		}
		add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
		


		
		
		function woo_custom_field_shortcode( $atts, $content = null ) {
  global $post;
	
	extract(shortcode_atts(array(
		"id" => ''
	), $atts));
	
	$fields = get_post_meta( $post->ID, $id);
	
	foreach( $fields as $field ) {
		return $field;
	}
}
add_shortcode("woo_custom_field", "woo_custom_field_shortcode");
<?php
/**
 * Description tab
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;

$id_post = get_the_ID(); 
$exclu = "0";

// The Query
$the_query = new WP_Query( array( 'post_type' => 'prestataire', 'post__not_in' => array( $id_post ) ) );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$exclu .= ',';
		$exclu .= get_the_ID();
	}
} else {
	// no posts found
	echo 'not found';
}

/* Restore original Post Data */
wp_reset_postdata();

?>

<h3>Géolocalisation </h3>

<?php 
 echo GeoMashup::nearby_list( 'object_id='.$id_post.'&radius=50&units=mi&limit=3&exclude_object_ids='.$exclu );
  echo GeoMashup::term_legend(); 
 echo GeoMashup::full_post(); 
 echo GeoMashup::visible_posts_list()
 ?>

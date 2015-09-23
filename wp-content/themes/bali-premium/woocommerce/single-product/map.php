<?php
/**
 * Description tab
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */


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

 //echo GeoMashup::nearby_list( 'object_id='.$id_post.'&radius=50&units=mi&limit=3&exclude_object_ids='.$exclu ); 
 
 echo GeoMashup::map('height=300&width=100%&zoom=10&add_overview_control=false&add_map_type_control=false&object_id='.$id_post.'&radius=20&units=mi&map_content=global&marker_select_center=true&exclude_object_ids='.$exclu.'&map_cat=villa' ); 
 
 //echo GeoMashup::map('height=500&width=100%&zoom=9&add_overview_control=false&add_map_type_control=false&center_lat=-8.351669&center_lng=115.215209&radius=20&units=mi&map_content=global&marker_select_center=true' ); 
 
 //echo GeoMashup::term_legend(); 
 //echo GeoMashup::full_post(); 
 //echo GeoMashup::visible_posts_list(); 
 
 //echo GeoMashup::show_on_map_link();
 //echo GeoMashup::list_located_posts_by_area('limit=2'); 
 //echo GeoMashup::category_name(); 
 
 /******************************************************************************/
 
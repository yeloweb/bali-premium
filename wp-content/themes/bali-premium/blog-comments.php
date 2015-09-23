<div id="comment-wrapper">

<?php if(have_comments()) : ?>
<ul class="comment-item">
												
<?php
function bali_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>

									<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>">
									
							<?php if ( 'div' != $args['style'] ) : ?>								
							<div id="div-comment-<?php comment_ID() ?>" class="comment-body ">
							<?php endif; ?>

										<div class="comment-author vcard comment-avatar">
										<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
										<?php printf( __( '<cite class="fn name">%s</cite>' ), get_comment_author_link() ); ?>

										</div>
									
							<?php if ( $comment->comment_approved == '0' ) : ?>
							<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
							<br />
							<?php endif; ?>
									
									
									<div class="comment-header">
									<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ))); ?>
										
										
										<a href="get_comment_author_link()" class="inverse text-bold"><?php printf( __( '<cite class="fn name">%s</cite>' ), get_comment_author_link() ); ?></a>
										<span class="comment-time">
												<?php
												/* translators: 1: date, 2: time */
												printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
												?>
										</span>
									</div>
									<div class="comment-content">
										<p><?php comment_text(); ?></p>
									</div>

					<?php if ( 'div' != $args['style'] ) : ?>
					</div>
					<?php endif; ?>
					
<?php
}
?>
								
								
								
<?php wp_list_comments( 'type=comment&callback=bali_comment' ); ?>

</ul>
<?php else : ?>
<div> Aucun commentaire actuellement posté </div>
<?php endif; ?>
<div class="clear"></div>
</div><!-- End Comment -->



<!------------------------------------------------>
<!-----				COMMENTS FORM 				-->
<!------------------------------------------------>

<?php 
$commenter = wp_get_current_commenter(); 
$fields =  array(

  'author' =>
    '<div class="col-xs-12 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="comment-name">' . __( 'Name', 'domainreference' ) .( $req ? '<span class="required text-danger">*</span>' : '' ) . '</label> ' .
			'<input type="text" class="requiredField form-control" id="comment-name" placeholder="Your Name *" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"' . $aria_req . ' />
		</div>
	</div>',


	
  'email' =>
    '<div class="col-xs-12 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="comment-email">' . __( 'Email', 'domainreference' ) .( $req ? '<span class="required text-danger">*</span>' : '' ) . '</label> ' .
			'<input type="text" class="requiredField form-control" id="comment-email" placeholder="Your Email *" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"' . $aria_req . ' />
		</div>
	</div>',

);

?>								

<h3 class="mt-30">Leave Your Comment</h3>
								<div class="white-bg padding-20">
								<form role="form" method="post" id="contactForm" action="" class="comment-form" />

<?php
comment_form(array(
	'fields' => $fields,
	'title_reply'       => __( '' ),
								
	'title_reply_to'    => __( 'Leave a Reply to %s' ),
	'cancel_reply_link' => __( 'Cancel Reply' ),
	'label_submit'      => __( 'Post Comment' ),
	'comment_notes_before' => __( '<p class="comment-notes">' . __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) . '</p>' ),
	'comment_notes_after' => __( '' ),
	'format'            => 'xhtml',

	'comment_field' =>  		'
								<div class="clear"></div>
								<div class="row">
									<div class="col-md-12 mb-30">
										<div class="form-group">
											<label for="comment-message">'. _x( 'Comment', 'noun' ) .'<span class="text-danger">*</span></label>
											<textarea name="message" id="comment-message" placeholder="Message *" class="requiredField form-control" rows="8"></textarea>
										</div>
									</div>
								</div>
								'	,
	));
?>
									


</form>
</div>

				


	

								
							

								
								

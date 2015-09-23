
<div class="bb2 mb-20"></div>
<h4 class="mb-20">Guests Review</h4>
<?php if(have_comments()) : ?>

	<ul class="user-review">
													
									
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
	<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	
		<div class="comment-author vcard left">
			<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
			<?php printf( __( '<cite class="fn name">%s</cite>' ), get_comment_author_link() ); ?>
			<span class="from">from London, UK</span>
			<span class="colored-text"><i class="fa-check"></i> Recommended for Everyone</span>
		</div>
	
	<?php if ( $comment->comment_approved == '0' ) : ?>
		<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
		<br />
	<?php endif; ?>
	
	
	<div class="right">
		<h5>Great experience</h5>											
		<div class="comment-meta commentmetadata date"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
			?>
		</div>
		<div class="gap5"></div>
										

		<?php comment_text(); ?>
												<ul class="circle-list">
													<li>4.5</li>
													<li>3.0</li>
													<li>4.0</li>
													<li>5.0</li>
													<li>3.0</li>
													<li>4.0</li>
												</ul>
		<br />
		<div class="reply">
		<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div>
		<?php if ( 'div' != $args['style'] ) : ?>
	</div>
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







<?php 
$commenter = wp_get_current_commenter(); 
$fields =  array(

  'author' =>
    '<div class="form-group"><label for="inputText" class="col-lg-2 control-label">' . __( 'Name', 'domainreference' ) .( $req ? '<span class="required">*</span>' : '' ) . '</label> ' .
	'<div class="col-lg-10">'.
    '<input type="text" name="name" class="form-control" id="inputText" placeholder="Name" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"' . $aria_req . ' /></p></div></div>',

  'email' =>
    '<div class="form-group"><label for="inputEmail" class="col-lg-2 control-label">' . __( 'Email', 'domainreference' ) .( $req ? '<span class="required">*</span>' : '' ) . '</label> ' .
	'<div class="col-lg-10">'.
    '<input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"' . $aria_req . ' /></p></div></div>',

  'url' =>
    '<div class="form-group"><label for="url" class="col-lg-2 control-label">' . __( 'Website', 'domainreference' ) . '</label>' .
	'<div class="col-lg-10">'.
    '<input id="url" name="url" type="text" placeholder="website" class="form-control" value="' . esc_attr( $commenter['comment_author_url'] ) .
    '" size="30" /></p></div></div>',
);


?>								
<div class="clear mt-30 mb-20"></div>

<?php
comment_form(array(
	'fields' => $fields,
	'title_reply'       => __( '<h4 class="mb-20">Please Leave a Review</h4>
								<form class="form-horizontal mt-10" role="form" />' ),
	'title_reply_to'    => __( 'Leave a Reply to %s' ),
	'cancel_reply_link' => __( 'Cancel Reply' ),
	'label_submit'      => __( 'Post Comment' ),
	'comment_notes_before' => __( '<p class="comment-notes">' . __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) . '</p>' ),
	'comment_notes_after' => __( '' ),
	'format'            => 'xhtml',

	'comment_field' =>  '<div class="form-group"><label class="col-lg-2 control-label for="comment">' . _x( 'Comment', 'noun' ) .
						'</label><div class="col-lg-10"><textarea id="comment" class="form-control margtop10" rows="4"></textarea></div></div>',
	));
?>
								

								<div class="row">
									<div class="col-xs-6 col-sm-4 col-md-4 mb-10">
										<div class="row">
											<div class="col-md-7">
												<label for="adults-hotel">Cleanliness <span class="star"></span></label>
											</div>
											<div class="col-md-5 no-padding">
												<select class="form-control mySelectBoxClass" id="adults-hotel">
													<option />0.0
													<option />0.5
													<option />1.0
													<option />1.5
													<option />2.0
													<option />2.5
													<option />3.0
													<option />3.5
													<option />4.0
													<option />4.5
													<option />5.0
												</select>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-4 mb-10">
										<div class="row">
											<div class="col-md-7">
												<label for="location-hotel">Location <span class="star"></span></label>
											</div>
											<div class="col-md-5 no-padding">
												<select class="form-control mySelectBoxClass" id="location-hotel">
													<option />0.0
													<option />0.5
													<option />1.0
													<option />1.5
													<option />2.0
													<option />2.5
													<option />3.0
													<option />3.5
													<option />4.0
													<option />4.5
													<option />5.0
												</select>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-4 mb-10">
										<div class="row">
											<div class="col-md-7">
												<label for="room-hotel">Room Comfort <span class="star"></span></label>
											</div>
											<div class="col-md-5 no-padding">
												<select class="form-control mySelectBoxClass" id="room-hotel">
													<option />0.0
													<option />0.5
													<option />1.0
													<option />1.5
													<option />2.0
													<option />2.5
													<option />3.0
													<option />3.5
													<option />4.0
													<option />4.5
													<option />5.0
												</select>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-4 mb-20">
										<div class="row">
											<div class="col-md-7">
												<label for="service-hotel">Service & Staff <span class="star"></span></label>
											</div>
											<div class="col-md-5 no-padding">
												<select class="form-control mySelectBoxClass" id="service-hotel">
													<option />0.0
													<option />0.5
													<option />1.0
													<option />1.5
													<option />2.0
													<option />2.5
													<option />3.0
													<option />3.5
													<option />4.0
													<option />4.5
													<option />5.0
												</select>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-4 mb-20">
										<div class="row">
											<div class="col-md-7">
												<label for="sleep-hotel">Sleep Quality <span class="star"></span></label>
											</div>
											<div class="col-md-5 no-padding">
												<select class="form-control mySelectBoxClass" id="sleep-hotel">
													<option />0.0
													<option />0.5
													<option />1.0
													<option />1.5
													<option />2.0
													<option />2.5
													<option />3.0
													<option />3.5
													<option />4.0
													<option />4.5
													<option />5.0
												</select>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-4 mb-20">
										<div class="row">
											<div class="col-md-7">
												<label for="value-hotel">Value for Price <span class="star"></span></label>
											</div>
											<div class="col-md-5 no-padding">
												<select class="form-control mySelectBoxClass" id="value-hotel">
													<option />0.0
													<option />0.5
													<option />1.0
													<option />1.5
													<option />2.0
													<option />2.5
													<option />3.0
													<option />3.5
													<option />4.0
													<option />4.5
													<option />5.0
												</select>
											</div>
										</div>
									</div>
								</div>
</form>

				



	

								
							

								
								

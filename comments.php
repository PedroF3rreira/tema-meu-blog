<?php 
if( post_password_required() ){
	return;
}

?>

<div class="comments">

<?php

if( have_comments() ){
	foreach ( $comments as $comment ) {
		?>
		
			<div class="comment">
				<div class="comment-thumbnail">
					<?php echo get_avatar( $comment, $size = 50 ); ?>
				</div>
				<div class="comment-text">
					<?php comment_text(); ?>
				</div>
			</div>

		<?php
	}
}
?>		

</div>

<?php
comment_form();

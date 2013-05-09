
<?php

if ( post_password_required() ) {
	?>
	<div class="page-meta nocomments">
		<?php _e( 'This post is password protected. Enter the password to view comments.', 'nlt' ); ?>
	</div>
	<?php
	return;
}

?>

<?php if ( have_comments() ) : ?>

	<h3 id="comments"><?php printf( _n( __( 'One Comment', 'nlt' ), __( '%s Comments', 'nlt' ), get_comments_number() ), number_format_i18n( get_comments_number() ) ); ?></h3>

	<ol class="commentlist<?php if( !get_option('show_avatars') ) echo ' commentlist-no-avatars'; ?>">
		<?php wp_list_comments(); ?>
	</ol>

	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('.comment-body').hover(
				function() { jQuery(this).find('.reply').stop(true, false).animate({'opacity': 1}, 'fast'); },
				function() { jQuery(this).find('.reply').stop(true, false).animate({'opacity': 0}, 'fast'); }
			);
		});
	</script>

	<?php if( ( get_comment_pages_count() > 1 ) && get_option( 'page_comments' ) ) : ?>
	<nav class="navigation navigation-comments">
		<?php paginate_comments_links(); ?>
	</nav>
	<?php endif; ?>

<?php else : ?>

	<?php if ( comments_open() ) : ?>

	<?php else : ?>

		<p class="nocomments"><?php // _e( 'Comments are closed.', 'nlt' ); ?></p>

	<?php endif; ?>

<?php endif; // have_comments() ?>

	<script type="text/javascript">
	/* <![CDATA[ */
		function grin(tag) {
			var myField;
			tag = ' ' + tag + ' ';
			if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
				myField = document.getElementById('comment');
			} else {
				return false;
			}
			if (document.selection) {
				myField.focus();
				sel = document.selection.createRange();
				sel.text = tag;
				myField.focus();
			}
			else if (myField.selectionStart || myField.selectionStart == '0') {
				var startPos = myField.selectionStart;
				var endPos = myField.selectionEnd;
				var cursorPos = endPos;
				myField.value = myField.value.substring(0, startPos)
							  + tag
							  + myField.value.substring(endPos, myField.value.length);
				cursorPos += tag.length;
				myField.focus();
				myField.selectionStart = cursorPos;
				myField.selectionEnd = cursorPos;
			}
			else {
				myField.value += tag;
				myField.focus();
			}
		}
	/* ]]> */
	</script>

<?php

	$site_url = site_url();
	$smilies = '<p class="smilies">
		<a href="javascript:grin(\':?:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_question.gif" alt="' . __( 'question', 'nlt' ) . '" title="' . __( 'question', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':razz:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_razz.gif" alt="' . __( 'razz', 'nlt' ) . '" title="' . __( 'razz', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':sad:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_sad.gif" alt="' . __( 'sad', 'nlt' ) . '" title="' . __( 'sad', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':evil:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_evil.gif" alt="' . __( 'evil', 'nlt' ) . '" title="' . __( 'evil', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':!:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_exclaim.gif" alt="' . __( 'exclaim', 'nlt' ) . '" title="' . __( 'exclaim', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':smile:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_smile.gif" alt="' . __( 'smile', 'nlt' ) . '" title="' . __( 'smile', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':oops:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_redface.gif" alt="' . __( 'redface', 'nlt' ) . '" title="' . __( 'redface', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':grin:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_biggrin.gif" alt="' . __( 'biggrin', 'nlt' ) . '" title="' . __( 'biggrin', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':eek:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_surprised.gif" alt="' . __( 'surprised', 'nlt' ) . '" title="' . __( 'surprised', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':shock:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_eek.gif" alt="' . __( 'eek', 'nlt' ) . '" title="' . __( 'eek', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':???:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_confused.gif" alt="' . __( 'confused', 'nlt' ) . '" title="' . __( 'confused', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':cool:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_cool.gif" alt="' . __( 'cool', 'nlt' ) . '" title="' . __( 'cool', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':lol:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_lol.gif" alt="' . __( 'lol', 'nlt' ) . '" title="' . __( 'lol', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':mad:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_mad.gif" alt="' . __( 'mad', 'nlt' ) . '" title="' . __( 'mad', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':twisted:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_twisted.gif" alt="' . __( 'twisted', 'nlt' ) . '" title="' . __( 'twisted', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':roll:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_rolleyes.gif" alt="' . __( 'rolleyes', 'nlt' ) . '" title="' . __( 'rolleyes', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':wink:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_wink.gif" alt="' . __( 'wink', 'nlt' ) . '" title="' . __( 'wink', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':idea:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_idea.gif" alt="' . __( 'idea', 'nlt' ) . '" title="' . __( 'idea', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':arrow:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_arrow.gif" alt="' . __( 'arrow', 'nlt' ) . '" title="' . __( 'arrow', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':neutral:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_neutral.gif" alt="' . __( 'neutral', 'nlt' ) . '" title="' . __( 'neutral', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':cry:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_cry.gif" alt="' . __( 'cry', 'nlt' ) . '" title="' . __( 'cry', 'nlt' ) . '" /></a>
		<a href="javascript:grin(\':mrgreen:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_mrgreen.gif" alt="' . __( 'mrgreen', 'nlt' ) . '" title="' . __( 'mrgreen', 'nlt' ) . '" /></a>
		</p>';

	$fields =  array(
		'author' => '<p class="comment-form-author">' . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . ( $req ? ' aria-required="true"' : '' ) . ' />' . '<label for="author">' . __( 'Name', 'nlt' ) . '</label>' . ( $req ? ' <span class="required">*</span>' : '' ) . '</p>',
		'email'  => '<p class="comment-form-email">' . '<input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . ( $req ? ' aria-required="true"' : '' ) . ' />'. '<label for="email">' . __( 'Email', 'nlt' ) . '</label>' . ( $req ? ' <span class="required">*</span>' : '' ) . '</p>',
		'url'    => '<p class="comment-form-url">' . '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" />' . '<label for="url">' . __( 'Website', 'nlt' ) . '</label>' . '</p>',
	);
	$args = array(
		'fields'        => apply_filters( 'comment_form_default_fields', $fields ),
		'comment_field' => '<p class="comment-form-comment"><label for="comment">' . __( 'Comment', 'nlt' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" onkeydown="if(event.ctrlKey) { if(event.keyCode==13) { document.getElementById(\'submit\').click(); return false; } };"></textarea></p>'.$smilies,
		'label_submit'  => __( 'Post Comment', 'nlt' ) . ' (Ctrl + Enter)'
	);

?>

<?php comment_form( $args ); ?>

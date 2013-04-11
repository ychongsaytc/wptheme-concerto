
<?php

if ( post_password_required() ) {
	?>
	<div class="page-meta nocomments">
		<?php _e( 'This post is password protected. Enter the password to view comments.', 'concerto' ); ?>
	</div>
	<?php
	return;
}

?>

<?php if ( have_comments() ) : ?>

	<h3 id="comments"><?php printf( _n( __( 'One Comment', 'concerto' ), __( '%s Comments', 'concerto' ), get_comments_number() ), number_format_i18n( get_comments_number() ) ); ?></h3>

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

		<p class="nocomments"><?php _e( 'Comments are closed.', 'concerto' ); ?></p>

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
		<a href="javascript:grin(\':?:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_question.gif" alt="' . __( 'question', 'concerto' ) . '" title="' . __( 'question', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':razz:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_razz.gif" alt="' . __( 'razz', 'concerto' ) . '" title="' . __( 'razz', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':sad:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_sad.gif" alt="' . __( 'sad', 'concerto' ) . '" title="' . __( 'sad', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':evil:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_evil.gif" alt="' . __( 'evil', 'concerto' ) . '" title="' . __( 'evil', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':!:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_exclaim.gif" alt="' . __( 'exclaim', 'concerto' ) . '" title="' . __( 'exclaim', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':smile:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_smile.gif" alt="' . __( 'smile', 'concerto' ) . '" title="' . __( 'smile', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':oops:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_redface.gif" alt="' . __( 'redface', 'concerto' ) . '" title="' . __( 'redface', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':grin:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_biggrin.gif" alt="' . __( 'biggrin', 'concerto' ) . '" title="' . __( 'biggrin', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':eek:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_surprised.gif" alt="' . __( 'surprised', 'concerto' ) . '" title="' . __( 'surprised', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':shock:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_eek.gif" alt="' . __( 'eek', 'concerto' ) . '" title="' . __( 'eek', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':???:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_confused.gif" alt="' . __( 'confused', 'concerto' ) . '" title="' . __( 'confused', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':cool:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_cool.gif" alt="' . __( 'cool', 'concerto' ) . '" title="' . __( 'cool', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':lol:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_lol.gif" alt="' . __( 'lol', 'concerto' ) . '" title="' . __( 'lol', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':mad:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_mad.gif" alt="' . __( 'mad', 'concerto' ) . '" title="' . __( 'mad', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':twisted:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_twisted.gif" alt="' . __( 'twisted', 'concerto' ) . '" title="' . __( 'twisted', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':roll:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_rolleyes.gif" alt="' . __( 'rolleyes', 'concerto' ) . '" title="' . __( 'rolleyes', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':wink:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_wink.gif" alt="' . __( 'wink', 'concerto' ) . '" title="' . __( 'wink', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':idea:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_idea.gif" alt="' . __( 'idea', 'concerto' ) . '" title="' . __( 'idea', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':arrow:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_arrow.gif" alt="' . __( 'arrow', 'concerto' ) . '" title="' . __( 'arrow', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':neutral:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_neutral.gif" alt="' . __( 'neutral', 'concerto' ) . '" title="' . __( 'neutral', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':cry:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_cry.gif" alt="' . __( 'cry', 'concerto' ) . '" title="' . __( 'cry', 'concerto' ) . '" /></a>
		<a href="javascript:grin(\':mrgreen:\')"><img src="' . $site_url . '/wp-includes/images/smilies/icon_mrgreen.gif" alt="' . __( 'mrgreen', 'concerto' ) . '" title="' . __( 'mrgreen', 'concerto' ) . '" /></a>
		</p>';

	$fields =  array(
		'author' => '<p class="comment-form-author">' . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . ( $req ? ' aria-required="true"' : '' ) . ' />' . '<label for="author">' . __( 'Name', 'concerto' ) . '</label>' . ( $req ? ' <span class="required"> *</span>' : '' ) . '</p>',
		'email'  => '<p class="comment-form-email">' . '<input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . ( $req ? ' aria-required="true"' : '' ) . ' />'. '<label for="email">' . __( 'Email', 'concerto' ) . '</label>' . ( $req ? ' <span class="required"> *</span>' : '' ) . '</p>',
		'url'    => '<p class="comment-form-url">' . '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" />' . '<label for="url">' . __( 'Website', 'concerto' ) . '</label>' . '</p>',
	);
	$args = array(
		'fields'        => apply_filters( 'comment_form_default_fields', $fields ),
		'comment_field' => '<p class="comment-form-comment"><label for="comment">' . __( 'Comment', 'concerto' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" onkeydown="if(event.ctrlKey) { if(event.keyCode==13) { document.getElementById(\'submit\').click(); return false; } };"></textarea></p>'.$smilies,
		'label_submit'  => __( 'Post Comment', 'concerto' ) . ' (Ctrl + Enter)'
	);

?>

<?php comment_form( $args ); ?>

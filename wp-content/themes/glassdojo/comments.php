			<div id="comments">
<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyten' ); ?></p>
			</div><!-- #comments -->
<?php
		return;
	endif;
?>
<?php if ( have_comments() ) : ?>
			<h3><?php
			printf( _n( '1 Comentario', '%1$s Comentarios', get_comments_number(), 'twentyten' ),
			number_format_i18n( get_comments_number() ), '' );
			?></h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<ul class="navigation">
				<li class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'twentyten' ) ); ?></li>
				<li class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></li>
			</ul> <!-- .navigation -->
<?php endif; ?>

			<ol class="commentlist">
				<?php wp_list_comments( array( 'callback' => 'twentyten_comment' ) ); ?>
			</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<ul class="navigation">
				<li class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'twentyten' ) ); ?></li>
				<li class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></li>
			</ul> <!-- .navigation -->
<?php endif; ?>

<?php else : 
	if ( ! comments_open() ) :
?>
	<p class="nocomments"><?php _e( 'Comments are closed.', 'twentyten' ); ?></p>
<?php endif; ?>

<?php endif; ?>

<?php

$fields =  array(
	'author' => '<fieldset><label for="author">' . __( 'Tu nombre:' ) . '</label> ' . 
		            '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="24"' . $aria_req . ' /></fieldset>',
	'email'  => '<fieldset><label for="email">' . __( 'Tu email:' ) . '</label> ' .
	            '<input id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="24"' . $aria_req . ' /> <small>Tu email no será publicado</small></fieldset>',
	'url'    => '<fieldset><label for="url">' . __( 'Tu sitio web:' ) . '</label> ' .
	            '<input id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="24" /> <small>Opcional</small></fieldset>',
);

$args = array(
	'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
	'comment_field'        => '<fieldset><label for="comment">' . _x( 'Tu comentario:', 'noun' ) . '</label> <textarea id="comment" name="comment" cols="48" rows="8" aria-required="true"></textarea></fieldset>',
	'must_log_in'          => '<fieldset class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</fieldset>',
	'logged_in_as'         => '<fieldset class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</fieldset>',
	'comment_notes_before' => '',
	'comment_notes_after'  => '',
	'id_form'              => 'commentform',
	'id_submit'            => 'submit',
	'title_reply'          => __( 'Deja Tu Comentario' ),
	'title_reply_to'       => __( 'Responder a %s' ),
	'cancel_reply_link'    => __( 'Cancel reply' ),
	'label_submit'         => __( 'Publicar Comentario' )
);
?>

<?php comment_form($args); ?>

</div><!-- #comments -->

<?php get_header(); ?>
<?php
	if ( have_posts() )
		the_post();
?>

				<h1 class="archives"><?php printf( __( 'Artículos de %s', 'twentyten' ), "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></span>" ); ?></h1>

<?php
if ( get_the_author_meta( 'description' ) ) : ?>
					<article id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php printf( __( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
						</div><!-- #author-description	-->
					</article><!-- #entry-author-info -->
<?php endif; ?>

<?php
	rewind_posts();
	 get_template_part( 'loop', 'author' );
?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

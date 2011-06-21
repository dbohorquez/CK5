<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
                    <?php if ( is_front_page() ) { ?>
						<h2><?php the_title(); ?></h2>
					<?php } else { ?>
						<h1><?php the_title(); ?></h1>
					<?php } ?>
					</header>
					<div class="content clearfix">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div>
					<footer>
						<span class="floatright"><a href="#top" class="back-top">Volver arriba</a></span>
					</footer>
				</article>
<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

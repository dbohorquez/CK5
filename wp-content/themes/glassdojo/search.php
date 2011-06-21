<?php
get_header(); ?>
<?php if ( have_posts() ) : ?>
				<h1 class="archives"><?php printf( __( 'Resultados para: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
				<article id="post-0" class="page no-results not-found">
					<header>
						<h1>No se encontraron resultados</h1>
					</header>
					<div class="content clearfix">
						<p><?php _e( 'Lo sentimos, pero la búsqueda no obtuvo ningún resultado. Verifica que hayas escrito bien las palabras o intenta usando palabras más generales.', 'twentyten' ); ?></p>
						<?php get_search_form(); ?>
					</div>
				</article>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

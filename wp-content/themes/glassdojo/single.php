<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
                        <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                        <div class="date"><?php echo ucfirst(get_the_date()); ?></div>
					</header>
					<div class="content clearfix">
						<?php
						$outlined = get_post_meta($post->ID, 'outline', true) ? ' outlined' : '';
						if (function_exists('has_post_thumbnail') && has_post_thumbnail() ) { ?>
							<a class="img-post<?php echo $outlined; ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail',array('alt' => get_the_title(), 'title' => 'Leer más...')); ?></a>
						<?php
						}else{
							$postimage = get_post_meta($post->ID, 'post-image', true);
							if ($postimage) { ?>
								<a class="img-post<?php echo $outlined; ?>" href="<?php the_permalink(); ?>"><img alt="<?php the_title(); ?>" src="<?php echo $postimage; ?>" /></a>
							<?php }
						}
						?>
						<?php if ( is_archive() || is_search() || is_home() || is_front_page() ) : ?>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="more">Leer más...</a>
						<?php else : ?>
						<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php endif; ?>
					</div>
					<footer>
						<span><?php comments_popup_link( __( 'Deja Tu Comentario', 'twentyten' ), __( 'Comentarios (1)', 'twentyten' ), __( 'Comentarios (%)', 'twentyten' ) ); ?></span>
						<?php if ( count( get_the_category() ) ) : ?>
						<span>
							<?php printf( __( 'Categorías: %2$s', 'twentyten' ), '', get_the_category_list( ', ' ) ); ?>
						</span>
						<?php endif; ?>
						<span class="floatright"><a href="#top" class="back-top">Volver arriba</a></span>
					</footer>
				</article>
				<?php comments_template( '', true ); ?>

<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

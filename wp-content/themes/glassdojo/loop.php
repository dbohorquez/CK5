<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
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
<?php endwhile; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>

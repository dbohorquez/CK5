<?php get_header(); ?>

				<h1 class="archives"><?php
					printf( __( 'Categoría: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				get_template_part( 'loop', 'category' );
				?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

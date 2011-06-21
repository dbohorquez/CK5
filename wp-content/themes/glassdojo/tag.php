<?php get_header(); ?>

				<h1 class="archives"><?php
					printf( __( 'Etiqueta: %s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h1>

<?php
 get_template_part( 'loop', 'tag' );
?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php get_header(); ?>
<?php get_template_part( 'loop', 'index' ); ?>
				<ul class="pagination">
					<li class="disabled">« Anterior</li>
					<li class="current">1</li>
					<li><a href="pag/2/">2</a></li>
					<li><a href="pag/3/">3</a></li>
					<li><a href="pag/4/">4</a></li>
					<li><a href="pag/5/">5</a></li>
					<li><a href="pag/6/">6</a></li>
					<li>...</li>
					<li><a href="pag/16/">16</a></li>
					<li><a href="pag/2/">Siguiente »</a></li>
				</ul>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
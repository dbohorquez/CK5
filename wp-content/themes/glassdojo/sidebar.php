			</section><!-- END #main -->
		</div><!-- END #content -->
		
		<aside id="sidebar">

<?php
	if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
				<?php dynamic_sidebar( 'primary-widget-area' ); ?>
<?php endif; ?>

<?php
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
   			<div class="widget">
				<div class="widget-content">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
                </div>
            </div>
<?php endif; ?>

<?php
	if ( is_active_sidebar( 'third-widget-area' ) ) : ?>
    		<ul id="sponsors">
				<?php dynamic_sidebar( 'third-widget-area' ); ?>
            </ul>
<?php endif; ?>

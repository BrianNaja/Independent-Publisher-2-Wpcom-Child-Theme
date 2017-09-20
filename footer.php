<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Independent_Publisher_2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) : ?>
				<div class="footer-widgets clear">
					<div class="widget-areas">
						<?php if ( is_active_sidebar( 'sidebar-2' ) ): ?>
							<div class="widget-area">
								<?php dynamic_sidebar( 'sidebar-2' ); ?>
							</div><!-- .widget-area -->
						<?php endif; //is_active_sidebar ?>

						<?php if ( is_active_sidebar( 'sidebar-3' ) ): ?>
							<div class="widget-area">
								<?php dynamic_sidebar( 'sidebar-3' ); ?>
							</div><!-- .widget-area -->
						<?php endif; //is_active_sidebar ?>

						<?php if ( is_active_sidebar( 'sidebar-4' ) ): ?>
							<div class="widget-area">
								<?php dynamic_sidebar( 'sidebar-4' ); ?>
							</div><!-- .widget-area -->
						<?php endif; //is_active_sidebar ?>
					</div><!-- .widget-areas -->
				</div><!-- .footer-widgets -->
			<?php endif; ?>
			
<!-- 			Footer Copyright -->
			<div class="site-info">
				
<!-- 			Start date with error protection -->
				<?php function auto_copyright($year = 'auto'){ ?>
				<?php if(intval($year) == 'auto'){ $year = date('Y'); } ?>
				<?php if(intval($year) == date('Y')){ echo intval($year); } ?>
				<?php if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); } ?>
				<?php if(intval($year) > date('Y')){ echo date('Y'); } ?>
				<?php } ?>
				
				<div>Pittsburgh Firefighters
				<span class="sep"> | </span>
				<?php auto_copyright("1903"); ?>
				</div>			
			</div><!-- Footer Copyright End  --><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #content-wrapper -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

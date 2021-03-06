<?php
/**
 * Displays the footer widget area
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

if ( is_active_sidebar( 'sidebar-2' ) ) : ?>

	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentynineteen' ); ?>">
		<?php
			if ( is_active_sidebar( 'sidebar-2' ) ) {
				?>
					<div class="widget-column sidebar-widget-1">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
				<?php
			}
		?>
	</aside><!-- .widget-area -->

<?php endif; ?>
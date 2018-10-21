<?php
/**
 * @package Make
 */

/**
 * Allow toggling of the footer credit.
 *
 * @since 1.2.3.
 *
 * @param bool    $show    Whether or not to show the footer credit.
 */
$footer_credit = apply_filters( 'make_show_footer_credit', true );
?>

<div class="site-info">
	<?php if ( make_get_thememod_value( 'footer-text' ) || is_customize_preview() ) : ?>
	<div class="footer-text">
		<?php echo make_get_thememod_value( 'footer-text' ); ?>
	</div>
	<?php endif; ?>

	<?php if ( true === $footer_credit ) : ?>
	<div class="footer-credit">
		<?php
		printf(
			wp_kses(
				__( 'Built by Mike , August 2017. I hope you enjoy!', 'make' ),
				array( 'a' => array( 'class' => true, 'href' => true, 'target' => true ) )
			),
			'https://thethemefoundry.com/make/'
		);
		?>
	</div>
	<?php endif; ?>
</div>


<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

function add_custom_div(){
?>
<script>
jQuery(".your-custom-css-class").click(function(){
        window.location = jQuery(this).find("a:first").attr("href");
        return false;
    });
</script>
<?php
}
add_action('wp_footer', 'add_custom_div');

add_theme_support('avia_template_builder_custom_css');

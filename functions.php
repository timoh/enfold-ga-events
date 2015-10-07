add_theme_support('avia_template_builder_custom_css');

function add_custom_script(){
?>
<script>
jQuery(window).load(function(){
jQuery(".conv_button-palvelut_asiakkaitamme a").attr("onclick","ga('send', 'event', 'conv_button', 'push', 'palvelut_asiakkaitamme')");
});
</script>
<?php
}
add_action('wp_footer', 'add_custom_script');

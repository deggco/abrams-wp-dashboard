<?php
/**
 * Enqueue scripts and stylesheets
 *
 */
function degg_wp_dashboard_admin_scripts() {
  wp_register_script('abrams_wp_dashboard_scripts', DEGG_WIDGET_URI . '/assets/js/scripts.min.js', false, '80209fa2d96f832e508898846f323894', true);
  wp_enqueue_script('abrams_wp_dashboard_scripts');
}
add_action('wp_enqueue_scripts', 'degg_wp_dashboard_admin_scripts', 100);


function degg_wp_dashboard_admin_styles() {
  wp_enqueue_style('abrams_wp_dashboard_main', DEGG_WIDGET_URI . '/assets/css/main.min.css', false, 'e285b49fae4a696726c5681691b514fd');
}
add_action('admin_print_styles', 'degg_wp_dashboard_admin_styles', 10);

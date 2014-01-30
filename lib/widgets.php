<?php
function degg_add_dashboard_widgets() {
  $args = array(
    'post_type'      => DEGG_WIDGET_POST_TYPE,
    'nopaging'       => true
  );
  $Q = new WP_Query($args);
  while ($Q->have_posts()) :
    $Q->the_post();
    global $post;
    wp_add_dashboard_widget(
      $post->post_name,
      get_the_title(),
      'degg_db_widget_content',
      null,
      array('post' => $post)
    );	
  endwhile;
  wp_reset_postdata();
}

add_action( 'wp_dashboard_setup', 'degg_add_dashboard_widgets' );

function degg_db_widget_content($var, $args) {
  echo $args['args']['post']->post_content;
}

function degg_remove_dashboard_widgets() {
  global $wp_meta_boxes;
  //echo '<pre>' . print_r($wp_meta_boxes, true) . '</pre>';
  remove_action('welcome_panel', 'wp_welcome_panel');
  remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
  remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
  remove_meta_box('dashboard_activity', 'dashboard', 'normal');
}

add_action('wp_dashboard_setup', 'degg_remove_dashboard_widgets');
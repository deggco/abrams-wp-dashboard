<?php
/**
 * Custom post types & taxonomies
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

/**
 * Rotator custom post type
 */
function degg_register_db_widget_post_type() {
  $labels = array(
    'name'               => 'Dashboard Widgets',
    'singular_name'      => 'Dashboard Widget',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Dashboard Widget',
    'edit_item'          => 'Edit Dashboard Widget',
    'new_item'           => 'New Dashboard Widget',
    'view_item'          => 'View Dashboard Widget',
    'search_items'       => 'Search Dashboard Widgets',
    'not_found'          => 'No widgets found',
    'not_found_in_trash' => 'No widgets found in trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Widgets'
  );

  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'exclude_from_search' => true,
    'publicly_queryable'  => false,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'query_var'           => true,
    'rewrite'             => array('slug' => 'widget'),
    'capability_type'     => DEGG_WIDGET_POST_TYPE,
    'has_archive'         => false,
    'hierarchical'        => false,
    'menu_position'       => 60,
    'supports'            => array('title', 'editor'),
  );

  register_post_type(DEGG_WIDGET_POST_TYPE, $args);
}

add_action('init', 'degg_register_db_widget_post_type');

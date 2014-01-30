<?php

function degg_add_db_widget_caps() {
  $role = get_role('administrator');
  $capability_type = DEGG_WIDGET_POST_TYPE;
  $role->add_cap("edit_{$capability_type}");
  $role->add_cap("read_{$capability_type}");
  $role->add_cap("delete_{$capability_type}");
  $role->add_cap("edit_{$capability_type}s");
  $role->add_cap("edit_others_{$capability_type}s");
  $role->add_cap("publish_{$capability_type}s");
  $role->add_cap("read_private_{$capability_type}s");
  $role->add_cap("delete_{$capability_type}s");
  $role->add_cap("delete_private_{$capability_type}s");
  $role->add_cap("delete_published_{$capability_type}s");
  $role->add_cap("delete_others_{$capability_type}s");
  $role->add_cap("edit_private_{$capability_type}s");
  $role->add_cap("edit_published_{$capability_type}s");
}

add_action( 'admin_init', 'degg_add_db_widget_caps');
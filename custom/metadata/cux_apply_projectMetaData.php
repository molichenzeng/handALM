<?php
// created: 2016-09-24 10:08:44
$dictionary["cux_apply_project"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cux_apply_project' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'cux_apply',
      'rhs_table' => 'cux_apply',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cux_apply_project_c',
      'join_key_lhs' => 'cux_apply_projectproject_ida',
      'join_key_rhs' => 'cux_apply_projectcux_apply_idb',
    ),
  ),
  'table' => 'cux_apply_project_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'cux_apply_projectproject_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cux_apply_projectcux_apply_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cux_apply_projectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cux_apply_project_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cux_apply_projectproject_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cux_apply_project_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cux_apply_projectcux_apply_idb',
      ),
    ),
  ),
);
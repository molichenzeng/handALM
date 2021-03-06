<?php
$module_name = 'HMM_MO_Request_Lines';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'item',
            'studio' => 'visible',
            'label' => 'LBL_ITEM',
          ),
          1 => 
          array (
            'name' => 'needby_date',
            'label' => 'LBL_NEEDBY_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'primary_qty',
            'label' => 'LBL_PRIMARY_QTY',
          ),
          1 => 
          array (
            'name' => 'primary_uom',
            'studio' => 'visible',
            'label' => 'LBL_PRIMARY_UOM',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'secondary_qty',
            'label' => 'LBL_SECONDARY_QTY',
          ),
          1 => 
          array (
            'name' => 'secondary_uom',
            'studio' => 'visible',
            'label' => 'LBL_SECONDARY_UOM',
          ),
        ),
        4 => 
        array (
          0 => 'description',
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'from_location',
            'studio' => 'visible',
            'label' => 'LBL_FROM_LOCATION',
          ),
          1 => 
          array (
            'name' => 'from_locator',
            'studio' => 'visible',
            'label' => 'LBL_FROM_LOCATOR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'to_location',
            'studio' => 'visible',
            'label' => 'LBL_TO_LOCATION',
          ),
          1 => 
          array (
            'name' => 'to_locator',
            'studio' => 'visible',
            'label' => 'LBL_TO_LOCATOR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'woop',
            'studio' => 'visible',
            'label' => 'LBL_WOOP',
          ),
          1 => 
          array (
            'name' => 'hmm_mo_request',
            'studio' => 'visible',
            'label' => 'LBL_HMM_MO_REQUESTS',
          ),
        ),
      ),
    ),
  ),
);
?>

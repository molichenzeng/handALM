<?php
$module_name = 'HAT_Asset_Trans_Batch';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="source_woop_id" id="source_woop_id" value="{$SOURCE_WOOP_ID}">',
          1 => '<input type="hidden" name="source_wo_id"  id="source_wo_id" value="{$SOURCE_WO_ID}">',
          2 => '<input type="hidden" name="source_wo_account"  id="source_wo_account" value="{$SOURCE_WO_ACCOUNT}">',
          3 => '<input type="hidden" name="source_wo_account_id"  id="source_wo_account_id" value="{$SOURCE_WO_ACCOUNT_ID}">',
          4 => '<input type="hidden" name="source_wo_contact"  id="source_wo_contact" value="{$SOURCE_WO_CONTACT}">',
          5 => '<input type="hidden" name="source_wo_contact_id"  id="source_wo_contact_id" value="{$SOURCE_WO_CONTACT}">',
          11 => '<input type="hidden" name="require_approval_workflow" id="require_approval_workflow">',
          12 => '<input type="hidden" name="eventOptions" id="eventOptions">',        ),
      ),
      'includes' =>
      array (
        0 =>
        array (
          'file' => 'modules/HAA_FF/ff_include.js',
        ),
        1 =>
        array (
        'file' => 'modules/HIT_IP_TRANS_BATCH/js/html_dom_required_setting.js',
        ),
        2 =>
        array (
          'file' => 'modules/HAT_Asset_Trans_Batch/js/HAT_Asset_Trans_Batch_editview.js',
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
    ),
    'panels' =>
    array (
      'default' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'framework',
            'customCode' => '{$FRAMEWORK}',
          ),
          1 =>
          array (
            'name' => 'event_type',
            'studio' => 'visible',
            'label' => 'LBL_EVENT_TYPE',
            'displayParams' =>
            array (
              'initial_filter' => '&basic_type_advanced=AT_MOVE',
              'field_to_name_array' =>
              array (
                'name' => 'event_type',
                'id' => 'hat_eventtype_id',
                'event_short_desc' => 'name',
                'haa_ff_id' => 'haa_ff_id',
              ),
              'call_back_function' => 'setEventTypePopupReturn',
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'asset_trans_status',
            'studio' => 'visible',
            'label' => 'LBL_ASSET_TRANS_STATUS',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'current_owning_org',
            'studio' => 'visible',
            'label' => 'LBL_CURRENT_OWNING_ORG',
          ),
          1 => 'owner_contacts',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'target_owning_org',
            'studio' => 'visible',
            'label' => 'LBL_TARGET_OWNING_ORG',
          ),
          1 => 
          array (
            'name' => 'target_using_org',
            'studio' => 'visible',
            'label' => 'LBL_TARGET_USING_ORG',
          ),
        ),
        4 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'tracking_number',
            'label' => 'LBL_TRACKING_NUMBER',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'planned_execution_date',
            'label' => 'LBL_PLANNED_EXECUTION_DATE',
          ),
          1 => 
          array (
            'name' => 'planned_complete_date',
            'label' => 'LBL_PLANNED_COMPLETE_DATE',
          ),
        ),
        6 =>
        array (
          0 => 'description',
          1 => '',
        ),
        7 => 
        array (
          0 => 'wo_lines',
        ),
      ),

      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'line_items',
            'label' => 'LBL_LINE_ITEMS',
          ),
        ),
      ),
    ),
  ),
);
?>

<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

$dictionary['HAT_Domains'] = array(
	'table'=>'hat_domains',
	'audited'=>true,
    'inline_edit'=>true,
    'duplicate_merge'=>true,
    'fields'=>array (
      'haa_numbering_rule_id_c' => 
      array (
        'required' => false,
        'name' => 'haa_numbering_rule_id_c',
        'vname' => 'LBL_AT_NUMBERING_RULE_HAA_NUMBERING_RULE_ID',
        'type' => 'id',
        'massupdate' => 0,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => 0,
        'audited' => false,
        'inline_edit' => true,
        'reportable' => false,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => 36,
        'size' => '20',
        ),
      'at_numbering_rule' => 
      array (
        'required' => false,
        'source' => 'non-db',
        'name' => 'at_numbering_rule',
        'vname' => 'LBL_AT_NUMBERING_RULE',
        'type' => 'relate',
        'massupdate' => 0,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'inline_edit' => '',
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => '255',
        'size' => '20',
        'id_name' => 'haa_numbering_rule_id_c',
        'ext2' => 'HAA_Numbering_Rule',
        'module' => 'HAA_Numbering_Rule',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),
      'owner_tracking_rule' => 
      array (
        'required' => true,
        'name' => 'owner_tracking_rule',
        'vname' => 'LBL_OWNER_TRACKING_RULE',
        'type' => 'enum',
        'massupdate' => 0,
        'default' => '2',
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'inline_edit' => '',
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => 100,
        'size' => '20',
        'options' => 'hat_owner_tracking_rule_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      ),
    'relationships'=>array (

/*    'hat_domains_securitygroups' =>
     array(
        'lhs_module' => 'SecurityGroups',
        'lhs_table' => 'securitygroups',
        'lhs_key' => 'id',
        'rhs_module' => 'HAT_Domains',
        'rhs_table' => 'hat_domains',
        'rhs_key' => 'id',
        'join_table' => 'securitygroups_records',
        'join_key_lhs' => 'securitygroup_id',
        'join_key_rhs' => 'record_id',
        'relationship_type' => 'many-to-many',
        'relationship_role_column' => 'module',
        'relationship_role_column_value' => 'HAT_Domains',
        ),
*/
     ),
    'optimistic_locking'=>true,
    'unified_search'=>true,
    );
if (!class_exists('VardefManager')){
    require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('HAT_Domains','HAT_Domains', array('basic','assignable','security_groups'));
//VardefManager::createVardef('HAT_Domains','HAT_Domains', array('basic','assignable'));
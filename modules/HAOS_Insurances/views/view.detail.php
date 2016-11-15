<?php
if(!defined('sugarEntry')||!sugarEntry)die('NotAValidEntryPoint');

require_once('include/MVC/View/views/view.detail.php');

class HAOS_InsurancesViewDetail extends ViewDetail
{

	function Display(){
		require_once('modules/HAA_Frameworks/orgSelector_class.php');
        $current_framework_id = empty($this->bean->hat_framework_id)?"":$this->bean->hat_framework_id;
        $current_module = $this->module;
        $current_action = $this->action;
        $beanFramework = BeanFactory::getBean('HAA_Frameworks', $_SESSION["current_framework"]);
        if (isset($beanFramework)) {
            $bean_framework_id = $_SESSION["current_framework"];
            $bean_framework_name = $beanFramework->name;
        }
        $this->ss->assign('FRAMEWORK_C',set_framework_selector($current_framework_id,$current_module,$current_action,'haa_frameworks_id_c'));
        parent::Display();
        if(isset($this->bean->haa_codes_id_c) && ($this->bean->haa_codes_id_c)!=""){
	     	$haa_codes_id_c = $this->bean->haa_codes_id_c;
	     	$bean_business_type = BeanFactory::getBean('HAA_Codes',$haa_codes_id_c);
	     	$ff_id = $bean_business_type->haa_ff_id;
	   	}
		if (isset ($ff_id) && $ff_id != "") {
			echo '<input id="haa_ff_id" name="haa_ff_id" type="hidden" value="' . $ff_id . '">';
		}
	}
}

<?php
error_reporting(E_ALL);

if (!defined('sugarEntry') || !sugarEntry)
	die('Not A Valid Entry Point');

$woop_id = $_GET['record'];
$wo_id = $_GET['ham_wo_id'];
//找到要驳回和当前最大的工序之间的工序
$reject_woop_bean = BeanFactory :: getBean('HAM_WOOP', $woop_id);
//要驳回到哪个工序 它的工序编号
$reject_woop_number = $reject_woop_bean->woop_number;
$reject_woop_bean->date_actual_finish = '';
$reject_woop_bean->date_actual_start = '';
$reject_woop_bean->woop_status = 'APPROVED';
$reject_woop_bean->work_center_people_id = '';
$reject_woop_bean->work_center_people = '';
$reject_woop_bean->save();

//驳回的工序对于的事物处理单
if ($reject_woop_bean->act_module == 'HIT_IP_TRANS_BATCH') {
	$reject_trans_headers = BeanFactory :: getBean('HIT_IP_TRANS_BATCH')->get_full_list('', "hit_ip_trans_batch.source_wo_id ='" . $wo_id . "' and hit_ip_trans_batch.source_woop_id='" . $reject_woop_bean->id . "'");
	foreach ($reject_trans_headers as $trans_header_bean) {
		$trans_header_bean->deleted = 1;
		$trans_header_bean->save();

		$reject_trans_lines = BeanFactory :: getBean("HIT_IP_TRANS")->get_full_list('', "hit_ip_trans.hit_ip_trans_batch_id ='" . $trans_header_bean->id . "'");
		foreach ($reject_trans_lines as $trans_line_bean) {
			$trans_line_bean->deleted = 1;
			$trans_line_bean->save();
		}
		//<2>分配行
		$reject_trans_alloc_lines = BeanFactory :: getBean("HIT_IP_Allocations")->get_full_list('', "hit_ip_allocations.hit_ip_trans_batch_id ='" . $trans_header_bean->id . "'");
		foreach ($reject_trans_alloc_lines as $trans_alloc_line_bean) {
			$trans_alloc_line_bean->deleted = 1;
			$trans_alloc_line_bean->save();
		}
	}
} else
	if ($reject_woop_bean->act_module == 'HAT_Asset_Trans_Batch') {
		$reject_asset_trans_headers = BeanFactory :: getBean('HAT_Asset_Trans_Batch')->get_full_list('', "hat_asset_trans_batch.source_wo_id ='" . $wo_id . "' and hat_asset_trans_batch.source_woop_id='" . $reject_woop_bean->id . "'");
		foreach ($reject_asset_trans_headers as $trans_header_bean) {
			$trans_header_bean->deleted = 1;
			$trans_header_bean->save();
			$reject_asset_trans_lines = BeanFactory :: getBean("HAT_Asset_Trans")->get_full_list('', "hat_asset_trans.hit_ip_trans_batch_id ='" . $trans_header_bean->id . "'");
			foreach ($reject_asset_trans_lines as $trans_line_bean) {
				$trans_line_bean->deleted = 1;
				$trans_line_bean->save();
			}
		}

	}

//
$between_woops = BeanFactory :: getBean("HAM_WOOP")->get_full_list('', "ham_woop.ham_wo_id ='" . $wo_id . "' and ham_woop.woop_number>" . $reject_woop_number);
//之间的工序 需要更新工序的状态为等待前序 工单完成时间 清空  
foreach ($between_woops as $between_woop) {

	$between_woop->woop_status = 'WPREV';
	$between_woop->date_actual_start = '';
	$between_woop->date_actual_finish = '';
	$between_woop->work_center_people_id = '';
	$between_woop->work_center_people = '';
	$between_woop->save();
	//可能有多个事物处理单头
	$trans_headers = BeanFactory :: getBean('HIT_IP_TRANS_BATCH')->get_full_list('', "hit_ip_trans_batch.source_wo_id ='" . $wo_id . "' and hit_ip_trans_batch.source_woop_id='" . $between_woop->id . "'");
	//通过头找事物处理单行和分配行
	//echo 'wo_id = '.$wo_id.",woop_id=".$between_woop->id."<br>";
	foreach ($trans_headers as $trans_header_bean) {
		//<1>事物处理单行
		//echo $trans_header_bean->id."<br>";
		$trans_header_bean->deleted = 1;
		$trans_header_bean->save();
		$trans_lines = BeanFactory :: getBean("HIT_IP_TRANS")->get_full_list('', "hit_ip_trans.hit_ip_trans_batch_id ='" . $trans_header_bean->id . "'");
		foreach ($trans_lines as $trans_line_bean) {
			//$trans_line_bean->
			//echo $trans_line_bean->id."<br>";
			$trans_line_bean->deleted = 1;
			$trans_line_bean->save();
		}

		//<2>分配行
		$trans_alloc_lines = BeanFactory :: getBean("HIT_IP_Allocations")->get_full_list('', "hit_ip_allocations.hit_ip_trans_batch_id ='" . $trans_header_bean->id . "'");
		foreach ($trans_alloc_lines as $trans_alloc_line_bean) {
			//$trans_line_bean->
			//echo $trans_alloc_line_bean->id."<br>";
			$trans_alloc_line_bean->deleted = 1;
			$trans_alloc_line_bean->save();
		}
	}

	//可能有多个事物处理单头
	$asset_trans_headers = BeanFactory :: getBean('HAT_Asset_Trans_Batch')->get_full_list('', "hat_asset_trans_batch.source_wo_id ='" . $wo_id . "' and hat_asset_trans_batch.source_woop_id='" . $between_woop->id . "'");
	foreach ($asset_trans_headers as $trans_header_bean) {
		//<1>事物处理单行
		//echo $trans_header_bean->id."<br>";
		$trans_header_bean->deleted = 1;
		$trans_header_bean->save();
		$asset_trans_lines = BeanFactory :: getBean("HAT_Asset_Trans")->get_full_list('', "hat_asset_trans.hit_ip_trans_batch_id ='" . $trans_header_bean->id . "'");
		foreach ($asset_trans_lines as $trans_line_bean) {
			//$trans_line_bean->
			//echo $trans_line_bean->id."<br>";
			$trans_line_bean->deleted = 1;
			$trans_line_bean->save();
		}
	}
}
echo "Y";
?>
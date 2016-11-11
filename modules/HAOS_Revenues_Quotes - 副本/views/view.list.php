<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.list.php');

class HAOS_Revenues_QuotesViewList extends ViewList
{
	function display(){
		parent::display();
		echo "<script>
			var btn='<input type=\"button\" value=\"创建发票\" onclick=\"createInvoices()\">';
			$('.paginationActionButtons').append(btn);
		</script>";
		echo "<script>
			function createInvoices(){
				var bool=false;//是否有选择，默认没有
				var num=0;
				var data_array=new Array();
				$('.footable tbody').find(':checkbox').each(function(){
					if($(this).is(':checked')){
						data_array[num]=$(this).val();
						bool=true;
						num++;
					}
				});
				if(bool==true){
					$.ajax({
						url:'?module=HAOS_Revenues_Quotes&action=checkinfo&to_pdf=1',
						data:'&data='+data_array,
						type:'POST',
						success:function(data){
							var val=JSON.parse(data);
							if(val['type']==0){
								alert('客户与人员信息必须一致！');
							}else{
								location.href='?module=AOS_Invoices&action=editview&data='+val['value']+'&cord='+val['cord'];
							}
						}
					});
				}else{
					alert('请勾选记录');
				}
			}
		</script>";
	}

	function processSearchForm(){
		parent::processSearchForm();
		/*$haa_frameworks_id=$_SESSION["current_framework"];
		if ($this->where) { 
			$this->where.=" AND haa_frameworks_id_c ='".$haa_frameworks_id."'";
		}else{
			$this->where.=" where haa_frameworks_id_c ='".$haa_frameworks_id."'";
		}*/
	}
} 
?>
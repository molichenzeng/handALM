<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class AOS_contractsViewList extends ViewList
{
    function processSearchForm()
    {
        parent::processSearchForm();
        $haa_frameworks_id=$_SESSION["current_framework"];
        if ($this->where) { 
          $this->where.=" AND aos_contracts_cstm.haa_frameworks_id_c ='".$haa_frameworks_id."'";
        }else{
         $this->where.=" where aos_contracts_cstm.haa_frameworks_id_c ='".$haa_frameworks_id."'";
       }
    }
}
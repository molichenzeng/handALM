<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2016-02-08 10:53:31
$dictionary["HAT_Asset_Trans"]["fields"]["hat_assets_hat_asset_trans"] = array (
  'name' => 'hat_assets_hat_asset_trans',
  'type' => 'link',
  'relationship' => 'hat_assets_hat_asset_trans',
  'source' => 'non-db',
  'module' => 'HAT_Assets',
  'bean_name' => 'HAT_Assets',
  'vname' => 'LBL_HAT_ASSETS_HAT_ASSET_TRANS_FROM_HAT_ASSETS_TITLE',
  'id_name' => 'hat_assets_hat_asset_transhat_assets_ida',
);
$dictionary["HAT_Asset_Trans"]["fields"]["hat_assets_hat_asset_trans_name"] = array (
  'name' => 'hat_assets_hat_asset_trans_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_HAT_ASSETS_HAT_ASSET_TRANS_FROM_HAT_ASSETS_TITLE',
  'save' => true,
  'id_name' => 'hat_assets_hat_asset_transhat_assets_ida',
  'link' => 'hat_assets_hat_asset_trans',
  'table' => 'hat_assets',
  'module' => 'HAT_Assets',
  'rname' => 'name',
);
$dictionary["HAT_Asset_Trans"]["fields"]["hat_assets_hat_asset_transhat_assets_ida"] = array (
  'name' => 'hat_assets_hat_asset_transhat_assets_ida',
  'type' => 'link',
  'relationship' => 'hat_assets_hat_asset_trans',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_HAT_ASSETS_HAT_ASSET_TRANS_FROM_HAT_ASSET_TRANS_TITLE',
);


// created: 2016-02-08 10:53:31
$dictionary["HAT_Asset_Trans"]["fields"]["hat_asset_trans_batch_hat_asset_trans"] = array (
  'name' => 'hat_asset_trans_batch_hat_asset_trans',
  'type' => 'link',
  'relationship' => 'hat_asset_trans_batch_hat_asset_trans',
  'source' => 'non-db',
  'module' => 'HAT_Asset_Trans_Batch',
  'bean_name' => 'HAT_Asset_Trans_Batch',
  'vname' => 'LBL_HAT_ASSET_TRANS_BATCH_HAT_ASSET_TRANS_FROM_HAT_ASSET_TRANS_BATCH_TITLE',
  'id_name' => 'hat_asset_trans_batch_hat_asset_transhat_asset_trans_batch_ida',
);
$dictionary["HAT_Asset_Trans"]["fields"]["hat_asset_trans_batch_hat_asset_trans_name"] = array (
  'name' => 'hat_asset_trans_batch_hat_asset_trans_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_HAT_ASSET_TRANS_BATCH_HAT_ASSET_TRANS_FROM_HAT_ASSET_TRANS_BATCH_TITLE',
  'save' => true,
  'id_name' => 'hat_asset_trans_batch_hat_asset_transhat_asset_trans_batch_ida',
  'link' => 'hat_asset_trans_batch_hat_asset_trans',
  'table' => 'hat_asset_trans_batch',
  'module' => 'HAT_Asset_Trans_Batch',
  'rname' => 'name',
);
$dictionary["HAT_Asset_Trans"]["fields"]["hat_asset_trans_batch_hat_asset_transhat_asset_trans_batch_ida"] = array (
  'name' => 'hat_asset_trans_batch_hat_asset_transhat_asset_trans_batch_ida',
  'type' => 'link',
  'relationship' => 'hat_asset_trans_batch_hat_asset_trans',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_HAT_ASSET_TRANS_BATCH_HAT_ASSET_TRANS_FROM_HAT_ASSET_TRANS_TITLE',
);

?>
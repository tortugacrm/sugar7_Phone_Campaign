<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/Calls/Ext/Vardefs/opportunities_calls_1_Calls.php

// created: 2014-07-01 16:30:11
$dictionary["Call"]["fields"]["opportunities_calls_1"] = array (
  'name' => 'opportunities_calls_1',
  'type' => 'link',
  'relationship' => 'opportunities_calls_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_CALLS_1_FROM_CALLS_TITLE',
  'id_name' => 'opportunities_calls_1opportunities_ida',
  'link-type' => 'one',
);
$dictionary["Call"]["fields"]["opportunities_calls_1_name"] = array (
  'name' => 'opportunities_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_CALLS_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_calls_1opportunities_ida',
  'link' => 'opportunities_calls_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["opportunities_calls_1opportunities_ida"] = array (
  'name' => 'opportunities_calls_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_CALLS_1_FROM_LBL_OPPORTUNITIES_CALLS_1_FROM_CALLS_TITLE_TITLE',
  'id_name' => 'opportunities_calls_1opportunities_ida',
  'link' => 'opportunities_calls_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

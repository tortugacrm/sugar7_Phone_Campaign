<?php
/*
 *  This file is part of 'Phone Campaign logs'.
 *
 *  'Phone Campaign logs' is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation.Phone Campaign logs
 *
 *  'Phone Campaign logs' is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with 'Phone Campaign logs'.  If not, see http://www.gnu.org/licenses/gpl.html.
 *
 * Copyright 2014 Olivier Nepomiachty - All rights reserved.
 */

$manifest = array (

		'acceptable_sugar_versions' => 
			array(
				'regex_matches' => array(
					//'7\\.[0-9]\\.[0-9]$'
					'7\\.2\\.[0-9]$'
				),
			),			
			
		  'acceptable_sugar_flavors' =>
		  array(
			  0 => 'PRO',
			  1 => 'CORP',
			  2 => 'ENT',
			  3 => 'ULT',
		  ),
		  'readme'=>'README.txt',
		  'key'=>'PhoneCampLogs',
		  'author' => 'Olivier Nepomiachty',
		  'description' => 'Create Campaign logs against the Contact when calling him',
		  'icon' => '',
		  'is_uninstallable' => true,
		  'name' => 'Phone Campaign logs',
		  'published_date' => '2014-07-09 08:00',
		  'type' => 'module',
		  'version' => '0.0.0.14',
		  'remove_tables' => false,
		  );  
		  
$installdefs = array (
  'id' => 'PhoneCampaignLogs201407',

  'copy' => 
  array (		
    0 =>
	array (
		'from' => '<basepath>/SugarModules/modules/Calls/metadata/detailviewdefs.php',
		'to' => 'custom/modules/Calls/metadata/detailviewdefs.php', 
	),
    1 =>
	array (
		'from' => '<basepath>/SugarModules/modules/Calls/metadata/editviewdefs.php',
		'to' => 'custom/modules/Calls/metadata/editviewdefs.php', 
	),
    2 =>
	array (
		  'from' => '<basepath>/SugarModules/modules/Calls/calls-logcampaign.php',
		  'to' => 'custom/modules/Calls/calls-logcampaign.php',
	),
  ),

  'layoutdefs' => 
  array (
  // custom/modules/Opportunities/Ext/Layoutdefs/layoutdefs.ext.php
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/opportunities_calls_1.php',
      'to_module' => 'Opportunities',
    ),
  ),

  'relationships' => 
  array (
  // custom/metadata/opportunities_calls_1MetaData.php
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/opportunities_calls_1MetaData.php',
    ),
  ),

  'vardefs' => 
  // custom/modules/Opportunities/Ext/Vardefs/vardefs.ext.php
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/opportunities_calls_1.php',
      'to_module' => 'Opportunities',
    ),
  // custom/modules/Calls/Ext/Vardefs/vardefs.ext.php
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/opportunities_calls_1_calls.php',
      'to_module' => 'Calls',
    ),
  ),

  // custom/modules/Opportunities/Ext/WirelessLayoutdefs/wireless.subpaneldefs.ext.php
  'wireless_subpanels' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/opportunities_calls_1.php',
      'to_module' => 'Opportunities',
    ),
  ),

  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Opportunities.en_us.lang.php',
      'to_module' => 'Opportunities',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Calls.en_us.lang.php',
      'to_module' => 'Calls',
      'language' => 'en_us',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/custom/modules/Opportunities/language/en_us.lang.php',
      'to_module' => 'Opportunities',
      'language' => 'en_us',
    ),  
    3 => 
    array (
      //'from' => '<basepath>/SugarModules/custom/include/language/en_us.lang.php',
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),  
   ),

  'logic_hooks' => array(
      array(
        'module'      => 'Calls',
        'hook'        => 'after_save',
        'order'      => 100,
        'description'  => 'Call log in a CampaignLog',
        'file'        => 'custom/modules/Calls/calls-logcampaign.php',
        'class'      => 'CallsLogCampaignHook',
        'function'    => 'AddCampaignLog',
      ),
  ),     
 
);

<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: mod-func-tikitests.php 44443 2013-01-05 20:30:09Z changi67 $

//this script may only be included - so its better to die if called directly.
if (strpos($_SERVER["SCRIPT_NAME"], basename(__FILE__)) !== false) {
  header("location: index.php");
  exit;
}

function module_tikitests_info()
{
	return array(
		'name' => tra('Tiki Tests'),
		'description' => tra('Tiki test suite helper.'),
		'prefs' => array('feature_tikitests'),
	);
}

function module_tikitests($mod_reference, $module_params)
{
	
}

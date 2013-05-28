<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: validator.php 44443 2013-01-05 20:30:09Z changi67 $

function prefs_validator_list()
{
	return array(
		'validator_emails' => array(
			'name' => tra('Validator emails (separated by comma) if different than the sender email'),
			'type' => 'text',
			'size' => 20,
			'default' => '',
		),
	);	
}

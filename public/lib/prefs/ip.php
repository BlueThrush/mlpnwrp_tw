<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: ip.php 44443 2013-01-05 20:30:09Z changi67 $

function prefs_ip_list()
{
	return array(
		'ip_can_be_checked' => array(
			'name' => tra('IP can be checked'),
			'hint' => tra("Check anonymous votes by user's IP"),
			'type' => 'flag',
			'default' => 'n',
		),
	);
}

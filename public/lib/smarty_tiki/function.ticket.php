<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: function.ticket.php 44443 2013-01-05 20:30:09Z changi67 $

//this script may only be included - so its better to die if called directly.
if (strpos($_SERVER["SCRIPT_NAME"], basename(__FILE__)) !== false) {
  header("location: index.php");
  exit;
}

function smarty_function_ticket($params, $smarty)
{
	if (is_null($smarty->getTemplateVars('CSRFTicket'))) {
		return '';
	} else {
		return '<input type="hidden" name="ticket" value="' . $smarty->getTemplateVars('CSRFTicket') .'" />';
	}
}

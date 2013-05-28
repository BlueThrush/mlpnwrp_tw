<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Plain.php 44443 2013-01-05 20:30:09Z changi67 $

class Search_Formatter_ValueFormatter_Plain extends Search_Formatter_ValueFormatter_Abstract
{
	private $separator = false;

	function __construct($arguments)
	{
		if (isset($arguments['separator'])) {
			$this->separator = $arguments['separator'];
		}
	}

	function render($name, $value, array $entry)
	{
		if (is_array($value) && $this->separator !== false) {
			return implode($this->separator, $value);
		} else {
			return $value;
		}
	}
}


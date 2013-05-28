<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Default.php 44443 2013-01-05 20:30:09Z changi67 $

/**
 * Simple resolver always providing the same answer. Primarly
 * used for testing purposes, but also used as the administrator
 * resolver.
 */
class Perms_Resolver_Default implements Perms_Resolver
{
	private $value;

	function __construct( $value )
	{
		$this->value = (bool) $value;
	}

	function check( $name, array $groups )
	{
		return $this->value;
	}

	function from()
	{
		return 'system';
	}

	function applicableGroups()
	{
		return array('Anonymous', 'Registered');
	}
}
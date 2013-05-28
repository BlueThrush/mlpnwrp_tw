<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: tikiimporter_testcase.php 44443 2013-01-05 20:30:09Z changi67 $
 
require_once('PHPUnit/Extensions/OutputTestCase.php'); 
 
/** 
 * @group importer
 */
abstract class TikiImporter_TestCase extends PHPUnit_Extensions_OutputTestCase
{
 	protected $backupGlobals = FALSE;	
}

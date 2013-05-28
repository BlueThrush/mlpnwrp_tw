<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Interface.php 44443 2013-01-05 20:30:09Z changi67 $

interface Search_ContentSource_Interface
{
	/**
	 * Provides a list of type-specific object IDs available in the database.
	 *
	 * @return Traversable
	 */
	function getDocuments();

	/**
	 * Provides teh basic data for the specified object ID.
	 *
	 * @return array
	 */
	function getDocument($objectId, Search_Type_Factory_Interface $typeFactory);

	/**
	 * Returns an array containing the list of field names that can be provided
	 * by the content source.
	 */
	function getProvidedFields();

	/**
	 * Returns an array containing the list of field names that must be included
	 * in the global content.
	 */
	function getGlobalFields();
}

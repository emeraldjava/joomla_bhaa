<?php

// no direct access
defined('_JEXEC') or die('Restricted access');

// Include library dependencies
jimport('joomla.database.table');

/**
* Event Table class
*/
class BhaaTableEvent extends JTable
{
	function __construct(&$db) {
		parent::__construct('#__bhaa_event', 'id', $db);
	}
}
?>
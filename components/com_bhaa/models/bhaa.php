<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.model');

/**
 * Joomla Tracks Component Front page Model
 *
 * @package		Tracks
 * @since 0.1
 */
class BhaaModel extends JModel
{
	function getDB()
	{
		return BhaaHelper::getBhaaDB();
	}
}
?>
<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the Tracks component
 *
 * @static
 * @package		Tracks
 * @since 0.1
 */
class BHAAViewEvents extends JView
{
	function display($tpl = null)
	{	
		$model = &$this->getModel();
		$events = $model->getListQuery();
		//print_r($events);
		$this->assignRef('events',$events);
		parent::display($tpl);
	}
}
?>
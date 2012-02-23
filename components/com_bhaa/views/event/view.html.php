<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

/**
 * HTML View class for the Tracks component
 *
 * @static
 * @package		Tracks
 * @since 0.1
 */
class BHAAViewEvent extends JView
{
	function display($tpl = null)
	{	
		$application = &JFactory::getApplication();
		$params	= &$application->getParams();
		$this->assignRef('params',$params);
		
		$tag = &JRequest::getVar("tag","0");
		$this->assignRef('tag',$tag);
		
		//$model =& $this->getModel();
		//$events = $model->getEvents();
		
		$appparams =& JComponentHelper::getParams('com_bhaa');
		//$this->assignRef('appparams',$appparams );
		
		parent::display($tpl);
	}
}
?>
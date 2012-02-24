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
class BHAAViewRunner extends JView
{
	function display($tpl = null)
	{	
		$id = &JRequest::getVar("id","0");
		$this->assignRef('id',$id);
		
		$model =& $this->getModel();
		
		$user =& JFactory::getUser();
		
		$this->assignRef('user',$user);
		$this->assignRef('runner',$model->getRunner());
		$this->assignRef('results',$model->getResults());

		parent::display($tpl);
	}
}
?>
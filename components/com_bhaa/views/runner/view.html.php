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
		$this->assign('runner','their name');
		parent::display($tpl);
	}
}
?>
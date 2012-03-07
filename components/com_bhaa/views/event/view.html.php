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
		
		$tag = &JRequest::getVar("t");
		$this->assignRef('tag',$tag);
		
		$model = &$this->getModel();
		//$results = $model->getResults();
		//$this->assignRef('results',$results );
		
 		//$doc      = JFactory::getDocument();
 		//$renderer = $doc->loadRenderer( $tag );
 		//$raw      = array( 'style' => 'html' );
 		//echo $renderer->render('header', $raw, null);
		
		parent::display($tpl);
	}
}
?>
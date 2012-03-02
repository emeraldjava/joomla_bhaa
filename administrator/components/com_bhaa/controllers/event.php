<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controllerform library
jimport('joomla.application.component.controllerform');
 
/**
 * HelloWorld Controller
 */
class BhaaControllerEvent extends JControllerForm
{
	
	function __construct()
	{
		parent::__construct();
		// Register Extra tasks
		$this->registerTask( 'add',  'edit' );
		$this->registerTask( 'apply', 'save' );
	}
	
	/**
	 * display the edit form
	 * @return void
	 */
	function edit()
	{
		JRequest::setVar( 'view', 'team' );
		JRequest::setVar( 'layout', 'form'  );
		JRequest::setVar( 'hidemainmenu', 1);
	
		parent::display();
	}
	
	function save()
	{
		$post	= JRequest::get('post');
		$cid	= JRequest::getVar( 'cid', array(0), 'post', 'array' );
		$post['id'] = (int) $cid[0];
		// data from editor must be retrieved as raw
		$post['description'] = JRequest::getVar('description', '', 'post', 'string', JREQUEST_ALLOWRAW);
	
		$model = $this->getModel('event');
	
		if ($returnid = $model->store($post)) {
			$msg = JText::_('COM_TRACKS_Team_Saved' );
		} else {
			$msg = JText::_('COM_TRACKS_Error_Saving_Team' ).$model->getError();
		}
	
		// Check the table in so it can be edited.... we are done with it anyway
		$model->checkin();
	
		//redirect
		if ( !$returnid || $this->getTask() == 'save' ) {
			$link = 'index.php?option=com_bhaa&view=events';
		}
		else {
			$link = 'index.php?option=com_bhaa&controller=event&task=edit&cid[]='.$returnid;
		}
		$this->setRedirect($link, $msg);
	}
	
	/**
	 * remove record(s)
	 * @return void
	 */
	function remove()
	{
		$model = $this->getModel('event');
		if(!$model->delete()) {
			$msg = JText::_('COM_TRACKS_Error_One_or_More_Teams_Could_not_be_Deleted' );
		} else {
			$msg = JText::_('COM_TRACKS_Teams_Deleted' );
		}
	
		$this->setRedirect( 'index.php?option=com_bhaa&view=events', $msg );
	}
	
	/**
	 * cancel editing a record
	 * @return void
	 */
	function cancel()
	{
		$msg = JText::_('COM_TRACKS_Operation_Cancelled' );
		$this->setRedirect( 'index.php?option=com_bhaa&view=events', $msg );
	}
}
?>
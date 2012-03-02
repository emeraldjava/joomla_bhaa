<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

/*
 * Make sure the user is authorized to view this page
 */
 /*
$user = & JFactory::getUser();
if (!$user->authorize( 'com_tracks', 'manage' )) {
	$mainframe->redirect( 'index.php', JText::_('ALERTNOTAUTH') );
}*/

// Require the base controller
//require_once (JPATH_COMPONENT.DS.'controllers'.DS.'base.php');
require_once (JPATH_COMPONENT.DS.'controller.php');
// the helper
//require_once( JPATH_COMPONENT.DS.'helper.php' );

// and the abstract view
// require_once (JPATH_COMPONENT.DS.'abstract'.DS.'bhaaview.php');

// Require specific controller if requested
if($controller = JRequest::getWord('controller')) {
	$path = JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php';
	if (file_exists($path)) {
		require_once $path;
	} else {
		$controller = '';
	}
}

// Set the table directory
JTable::addIncludePath( JPATH_COMPONENT.DS.'tables' );

// Create the controller
$classname	= 'BhaaController'.ucfirst($controller);
$controller	= new $classname( );

// Perform the Request task
$controller->execute( JRequest::getCmd('task'));
$controller->redirect();

?>

<?php
/**
* @version    $Id: controller.php 109 2008-05-24 11:05:07Z julienv $ 
* @package    Joomlabhaa
* @copyright	Copyright (C) 2008 Julien Vonthron. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla bhaa is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.controller');

$document = &JFactory::getDocument();
$document->addStyleSheet( JURI::base() . 'components/com_bhaa/css/bhaa.css', 'text/css', null, array( 'id' => 'bhaastyleSheet' ) );

/**
 * bhaa Component Controller
 *
 * @package		bhaa
 * @since 0.1
 */
class BhaaController extends JController
{
	function display()
	{
		// Set a default view if none exists
		if ( ! JRequest::getCmd( 'view' ) ) {
			JRequest::setVar('view', 'events' );
		}		
		$params = &JComponentHelper::getParams( 'com_bhaa' );
		//$this->assignRef( 'params', $params );
		
		parent::display();
	}
}
?>

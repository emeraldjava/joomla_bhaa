<?php
/**
* @version    $Id: controller.php 133 2008-06-08 10:24:29Z julienv $ 
* @package    JoomlaTracks
* @copyright	Copyright (C) 2008 Julien Vonthron. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla Tracks is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.controller');

/**
 * Tracks Component Controller
 *
 * @package		Tracks
 * @since 0.1
 */
class BhaaController extends JController //extends BaseController
{
	function display()
  	{
  		// set default view if not set
  		JRequest::setVar('view', JRequest::getCmd('view', 'Events'));
  	
		parent::display();
	}
}
?>

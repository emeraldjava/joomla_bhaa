<?php
/**
* @version    $Id: view.html.php 89 2008-05-02 06:46:38Z julienv $ 
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

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the Tracks component
 *
 * @static
 * @package		Tracks
 * @since 0.1
 */
class BHAAView extends JView
{
    function display($tpl = null)
    {
    	$document  = & JFactory::getDocument();
	    //add css and submenu to document
	    //$document->addStyleSheet('components/com_tracks/assets/css/bhaabackend.css');
    	parent::display($tpl);
    }
}
?>

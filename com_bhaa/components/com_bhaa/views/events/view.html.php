<?php
/**
* @version    $Id: view.html.php 109 2008-05-24 11:05:07Z julienv $ 
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
class BHAAViewEvents extends JView
{
	function display($tpl = null)
	{
		//$params=$this->getParams('com_yourcomponent');
		//print_r($params);
		
		$model =& $this->getModel();
		$events = $model->getEvents();
		print_r($events);
		$this->assignRef( 'events',$events );
		parent::display($tpl);
	}
	
    function display2($tpl = null)
    {
    	static $dbo1 = null;
    	
    	if (!$dbo1) {
    		$option = array();
    		$option['driver'] = 'mysqli';        // Database driver name
    		$option['host'] = 'localhost';      // Database host name
    		$option['user'] = 'bhaa1';       // User for database authentication
    		$option['password'] = 'Passw0rd';   // Password for database authentication
    		$option['database'] = 'bhaa1_members';   // Database name
    		$option['prefix'] = '';             // Database prefix
    		//
    		$dbo1 = & JDatabase::getInstance($option);
    	}
    	
    	$dbo1->setQuery("select * from event");
    	$rows = $dbo1->loadObjectList();
    	
    	// Get list items
    	if ($rows!=null)
    	{
    		$i=0;
    		foreach ($rows as $row)
    		{
    			echo($row->id);
    			$list["users"][$i]["id"]=$row->id;
    			$list["users"][$i]["name"]=$row->name;
    			//$list["users"][$i]["surname"]=$row->surname;
    			$list["users"][$i]["tag"]=$row->tag;
    			echo($list["users"][$i]["tag"]);
    			$i++;
    		}
    		//return $list;
    	}
    		
    	
    	
        //$model =& $this->getModel();
        //$projects = $model->getEvents();
        $this->assignRef( 'events',	$list );
        parent::display($tpl);
    }  		
}
?>
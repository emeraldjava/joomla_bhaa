<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_userdata
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

class modUserDataHelper
{
  function getData( &$params )
  {
	 
   // Database query		
   $list = array();			
   $query = " SELECT id, name, username "				
   ." FROM #__users "
   ." WHERE block=0 "				
   ." ORDER BY id DESC "
   ." LIMIT " . $params->get( 'limit' );				
   $db =& JFactory::getDBO();
   $db->setQuery( $query );		
   $rows = $db->loadObjectList();
					
   // Get list items
   if ($rows!=null)
   {
    $i=0;
    foreach ($rows as $row) 
    {				
     $list["users"][$i]["id"]=$row->id;
     $list["users"][$i]["name"]=$row->name;
     $list["users"][$i]["username"]=$row->username;
     $i++;		
    }
    return $list;
   }
					
  }
  
  function getBHAAData(&$params)
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
  	
  	$dbo1->setQuery("select * from runner where runner.id=7713");
  	$rows = $dbo1->loadObjectList();
  		
  	// Get list items
  	if ($rows!=null)
  	{
  		$i=0;
  		foreach ($rows as $row)
  		{
  			$list["users"][$i]["id"]=$row->id;
  			$list["users"][$i]["name"]=$row->firstname;
  			//$list["users"][$i]["surname"]=$row->surname;
  			$list["users"][$i]["username"]=$row->address1;
  			$i++;
  		}
  		return $list;
  	}
  		 
  }
}
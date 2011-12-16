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
}
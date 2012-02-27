<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

class BhaaHTML
{
	function footer()
	{		
        echo 'bhaa.ie';
	}
	
 /**
  * Select list of active users
  */
//   function usersSelect( $name, $active, $nouser = 0, $javascript = NULL, $order = 'name', $reg = 1 )
//   {
//     $db =& JFactory::getDBO();

//     $and = '';
//     if ( $reg ) {
//     // does not include registered users in the list
//       $and = ' AND gid > 18';
//     }

//     $query = 'SELECT id AS value, CONCAT(name, " (", username, ")") AS text'
//     . ' FROM #__users'
//     . ' WHERE block = 0'
//     . $and
//     . ' ORDER BY '. $order
//     ;
//     $db->setQuery( $query );
//     if ( $nouser ) {
//       $users[] = JHTML::_('select.option',  '0', '- '. JText::_( 'No User' ) .' -' );
//       $users = array_merge( $users, $db->loadObjectList() );
//     } else {
//       $users = $db->loadObjectList();
//     }

//     $users = JHTML::_('select.genericlist',   $users, $name, 'class="inputbox" size="1" '. $javascript, 'value', 'text', $active );

//     return $users;
//   }
}

?>
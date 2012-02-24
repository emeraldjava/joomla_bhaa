<?php
/**
* @package		JooDatabase - http://joodb.feenders.de
* @copyright	Copyright (C) Computer - Daten - Netze : Feenders. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* @author		Dirk Hoeschen (hoeschen@feenders.de)
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// Component Helper
jimport('joomla.application.component.helper');

/**
 * JooDB Component Helper
 */
class BHAAHelper
{
	function &getBhaaDB() {
		static $dbo1 = null;
		if (!$dbo1) {
			$option = array();
			$option['driver'] = 'mysqli';        // Database driver name
			$option['host'] = 'localhost';      // Database host name
			$option['user'] = '';       // User for database authentication
			$option['password'] = '';  // Password for database authentication
			$option['database'] = 'bhaaie_members';   // Database name
			$option['prefix'] = '';             // Database prefix
			//print_r($option); 
			$dbo1 = & JDatabase::getInstance($option);
		}
		return $dbo1;
	}
}
?>
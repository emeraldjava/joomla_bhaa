<?php
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
		//$params  = & JComponentHelper::getParams('com_bhaa');
		//echo '$params->get(extdb); '.sprintf($params->get('extdb'));
		if (!$dbo1) {
			$option = array();
			$option['driver'] = 'mysqli';        // Database driver name
			$option['host'] = 'localhost';      // Database host name
			$option['user'] = 'bhaaie';       // User for database authentication
			$option['password'] = 'bhaaie';  // Password for database authentication
			$option['database'] = 'bhaaie_members';   // Database name
			
			//$option['host'] = $params->get('extdb_server');//'localhost';      // Database host name
			//$option['user'] = $params->get('extdb_user');//'';       // User for database authentication
			//$option['password'] = $params->get('extdb_password');//'';  // Password for database authentication
			//$option['database'] = $params->get('extdb');   // Database name
			
			$option['prefix'] = '';             // Database prefix
			//print_r($option); 
			$dbo1 = & JDatabase::getInstance($option);
		}
		return $dbo1;
	}
}
?>
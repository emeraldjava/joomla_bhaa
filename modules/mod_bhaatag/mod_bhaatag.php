<?php

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
//require_once dirname(__FILE__).'/helper.php';
//$db =& JFactory::getDBO();
//$db->setQuery( $query );

$id = JRequest::getVar('id');

// Get the layout
require JModuleHelper::getLayoutPath('mod_bhaatag', $params->get('layout', 'default'));
?>
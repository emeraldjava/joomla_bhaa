<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_userdata
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license	GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

// Get the user data
$list	= modUserDataHelper::getData($params);

// Get the layout
require JModuleHelper::getLayoutPath('mod_bhaauser', $params->get('layout', 'default'));
?>
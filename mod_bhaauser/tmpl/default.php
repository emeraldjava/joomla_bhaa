<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_userdata
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die; ?>

<div class="moduletable<?php echo $params->get( 'moduleclass_sfx' ) ?>">

 <ul>
  <?php for ($i=0;$i< sizeof($list["users"]); $i++) { ?>	
	
	 <li>
	  <?php if ($params->get( 'user_id' )) { ?>
		 <span><?php echo $list["users"][$i]["id"];?></span>
		<?php } ?>
		<?php if ($params->get( 'user_name' )) { ?>
		 <span><?php echo $list["users"][$i]["name"];?></span>
		<?php } ?>
		<?php if ($params->get( 'user_username' )) { ?>
		 <span><?php echo $list["users"][$i]["username"];?></span>
		<?php } ?>
	 </li>
	
	<?php } ?>
 </ul>

</div>
<?php
/**
* @version    $Id: default.php 132 2008-06-08 08:44:01Z julienv $ 
* @package    JoomlaTracks
* @copyright	Copyright (C) 2008 Julien Vonthron. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla Tracks is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/ 
 // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<div id="event">
<h1><?php echo JText::_( 'BHAA Event' ) ?></h1>
<h3><?php echo JText::_( $this->id ) ?></h3>
<h3><?php echo JText::_( $this->params ) ?></h3>
<h3><?php echo JText::_( $this->appparams ) ?></h3>

<?php foreach ($this->params as $i => $param) : ?>
<li class="row<?php echo $i % 2; ?>">
<h2><?php echo $this->escape($item->title); ?></h2>
<?php endforeach; ?>

<p class="copyright">
  <?php echo BhaaHTML::footer( ); ?>
</p>
</div>
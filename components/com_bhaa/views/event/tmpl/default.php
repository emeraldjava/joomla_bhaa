<?php
// no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<div id="event">
<h1><?php echo JText::_( 'BHAA Event' ) ?></h1>
<h3><?php echo JText::_( $this->tag ) ?></h3>
<h3><?php echo JText::_( $this->params ) ?></h3>

<?php foreach ($this->params as $i => $param) : ?>
<li class="row<?php echo $i % 2; ?>">
<h2><?php echo $this->escape($item->title); ?></h2>
<?php endforeach; ?>

<p class="copyright">
  <?php echo BhaaHTML::footer( ); ?>
</p>
</div>
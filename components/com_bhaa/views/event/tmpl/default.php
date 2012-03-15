<?php
// no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<div id="event">
<h3><?php echo JText::_( 'Event : '.$this->tag ) ?> Youtube Flickr Links</h3>

<table class="table table-striped table-bordered table-condensed">
  <tr>
    <th><?php echo JText::_( 'Position' ) ?></th>
    <th><?php echo JText::_( 'Runner' ) ?></th>
  </tr>
  <?php
   if ( count($this->results) )
   {
     foreach ( $this->results as $result )
     {
      $link_event = JRoute::_( 'index.php?view=runner&id='.$result['runner'] );
     ?>
      <tr>
        <td>
    		<?php echo $result['position']; ?>
       	</td>
        <td><a href="<?php echo $link_event; ?>">
	        	<?php echo $result['firstname']; ?> <?php echo $result['surname']; ?>
        	</a>
        </td>
      </tr>
   	<?php
    }
  }
?>
</table>
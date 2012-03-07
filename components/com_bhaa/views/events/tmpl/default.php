<?php
 // no direct access
defined('_JEXEC') or die('Restricted access'); 

//echo print_r($this->events);
?>

<div id="tracks">
<h1><?php echo JText::_( 'BHAA Events' ) ?></h1>

<table>
  <tr>
    <th><?php echo JText::_( 'Name' ) ?></th>
    <th><?php echo JText::_( 'Location' ) ?></th>
    <th><?php echo JText::_( 'Date' ) ?></th>
  </tr>
  <?php
  if ( count($this->events) )
  {
    foreach ( $this->events as $event )
    {
     $link_event = JRoute::_( 'index.php?option=com_bhaa&view=event&id='.$event['id'] );
     ?>
      <tr>
        <td>
        	<a href="<?php echo $link_event; ?>" title="<?php echo JText::_( $event['tag'] ); ?>">
        	  <?php echo $event['name']; ?>
        	</a>
       	</td>
        <td><?php echo $event['tag']; ?></td>
        <td><?php echo $event['tag']; ?></td>
      </tr>
      <?php
    }
  }
  ?>
</table>
<p class="copyright">
  <?php echo BhaaHTML::footer( ); ?>
</p>
</div>
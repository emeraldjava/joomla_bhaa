<?php
 // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<div id="tracks">
<h1><?php echo JText::_( 'BHAA Events' ) ?></h1>

<table>
  <tr>
    <th><?php echo JText::_( 'Name' ) ?></th>
    <th><?php echo JText::_( 'Competition' ) ?></th>
    <th><?php echo JText::_( 'Season' ) ?></th>
  </tr>
  <?php
  if ( count($this->events) )
  {
    foreach ( $this->events as $event )
    {
//     $link_event = BhaaHelperRoute::BhaaBuildRoute(
// 	    array(	"option" => "com_bhaa",
//     			"view" => "event",
//     			"e" => $event['tag']));
     $link_event = JRoute::_( 'index.php?view=event&t='.$event['tag'] );
     ?>
      <tr>
        <td>
        	<a href="<?php echo $link_event; ?>" title ="<?php echo JText::_( 'Event' ); ?>">
        	  <?php echo $event['tag']; ?>
        	</a>
       	</td>
        <td><?php echo $event['name']; ?></td>
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
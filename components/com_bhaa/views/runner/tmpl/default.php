<?php
 // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<div id="runner">
<h1><?php echo JText::_( $this->runner['firstname'].' '.$this->runner['surname'] ) ?> results, edit address, league position, standard chart, flickr images</h1>

<h3><?php
if($this->user->id==$this->id)
{
	echo $this->runner['address1'].' '.$this->runner['address2'];
}
?>
</h3>

<table>
  <tr>
    <th><?php echo JText::_( 'Event' ) ?></th>
    <th><?php echo JText::_( 'Position' ) ?></th>
    <th><?php echo JText::_( 'Standard' ) ?></th>
  </tr>
  <?php
  if ( count($this->results) )
  {
    foreach ( $this->results as $result )
    {
     $link_event = JRoute::_( 'index.php?view=event&t='.$result['tag'] );
     ?>
      <tr>
        <td><a href="<?php echo $link_event; ?>"><?php echo $result['tag']; ?></a></td>
      	<td><?php echo $result['position']; ?></td>
        <td><?php echo $result['standard'].'/'.$result['postracestandard'] ?></td>
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
<?php
 // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<div class="row">
  <div class="span8">
    <h3><?php echo JText::_( $this->runner['firstname'].' '.$this->runner['surname'] ) ?></h3>
    <div class="row">
      <div class="span2">Address</div>
      <div class="span2">Standard</div>
      <div class="span2"><span class="label label-warning">Flickr</span></div>
    </div>
  </div>
  
  <div class="span8">
  <h4><?php
if($this->user->id==$this->id)
{
	echo $this->runner['address1'].' '.$this->runner['address2'];
}
?>
</h4>
  </div>
  
    <div class="span8">
    <span class="label">Results</span>
    <table class="table table-striped table-bordered table-condensed">
    <thead>
	<tr>
    <th><?php echo JText::_( 'Event' ) ?></th>
    <th><?php echo JText::_( 'Position' ) ?></th>
    <th><?php echo JText::_( 'Standard' ) ?></th>
  	</tr>
  	</thead>
	<tbody>
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
   </tbody>
</table>    
</div>

</div>
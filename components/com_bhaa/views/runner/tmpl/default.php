<?php
 // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<div id="runner">
<h1><?php echo JText::_( 'BHAA RUNNER' ) ?></h1>
<h1><?php echo JText::_( $this->id ) ?></h1>
<h1><?php echo print_r( $this->runner ) ?></h1>
<h3><?php echo $this->runner['firstname'].' '.$this->runner['surname']; ?></h3>

<table>
  <tr>
    <th><?php echo JText::_( 'Position' ) ?></th>
    <th><?php echo JText::_( 'Runner' ) ?></th>
  </tr>
  <?php
  if ( count($this->results) )
  {
    foreach ( $this->results as $result )
    {
     $link_event = JRoute::_( 'index.php?view=runner&r='.$result['runner'] );
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

<p class="copyright">
  <?php echo BhaaHTML::footer( ); ?>
</p>
</div>
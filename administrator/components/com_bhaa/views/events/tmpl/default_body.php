<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->items as $i => $item): 
	$link = JRoute::_( 'index.php?option=com_bhaa&task=event.edit&id='.$item->id);
?>
	<tr class="row<?php echo $i % 2; ?>">
		<td>
			<?php echo $item->id; ?>
		</td>	
		<td>
			<?php echo JHtml::_('grid.id', $i, $item->id); ?>
		</td>			
		<td>
			<a href="<?php echo $link; ?>" title="<?php echo JText::_('Edit '.$item->alias ); ?>">
			<?php echo $item->name; ?>
			</a>
		</td>
	</tr>
<?php endforeach; ?>

<?php
// No direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');
?>
<form action="<?php echo JRoute::_('index.php?option=com_bhaa&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="bhaa-form">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'COM_BHAA_EVENT_DETAILS' ); ?></legend>
		<ul class="adminformlist">
<?php foreach($this->form->getFieldset() as $field): ?>
			<li><?php echo $field->label;echo $field->input;?></li>
<?php endforeach; ?>
		</ul>
	</fieldset>
	<div>
		<input type="hidden" name="task" value="bhaa.edit" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>

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
defined('_JEXEC') or die('Restricted access'); 

JHTML::_('behavior.tooltip');

$params = $this->params;
$item = $this->item;
$fields =$this->fields;
// 	Load the JEditor object
$editor =& JFactory::getEditor();

$sliders = &JPane::getInstance('sliders', array('allowAllClose' => false));
$tabs = &JPane::getInstance('sliders', array('useCookie' => true,'allowAllClose' => true));

JToolBarHelper::preferences( 'com_bhaa','550' );
?>

<div id="bhaa">
<h1><?php echo JText::_( 'BHAA Admin' ) ?></h1>


<div class="col width-40" style="width:40%;">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'Parameters' ); ?></legend>
		<?php
//			echo $sliders->startPane("menu-pane");
			echo $sliders->startPanel(JText :: _('External Database'), "param-page");
			echo '<div style="padding:5px;">'.$params->render("params","database").'</div>';
			echo $sliders->endPanel();
	//		echo $sliders->endPane();
		?>
	</fieldset>
</div>
</form>
<script language="JavaScript">

//Send Form
if (window.Joomla !== undefined)
	Joomla.submitbutton = function(task) { submitbutton(task);  }

function submitbutton(task)
		{
			var form = document.adminForm;
			form.task.value = task;
			// tinymce is buggy!!!

			if (task == 'cancel') {
				if (window.Joomla) { Joomla.submitform(task, form); } else { form.submit(); }
				return true;
			}

			// do field validation
			if (form.name.value == ""){
				alert('<?php echo JText::_( "Name Your DB" ); ?>');
				form.title.focus();
				return false;
			} else  {
		        if ((form.table.value=="") && (!document.formvalidator.isValid(form))) return false;
				if (window.Joomla) { Joomla.submitform(task, form); } else { form.submit(); }
			}
			return false;
		}
</script>

<p class="copyright">
</p>
</div>
<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomexatribncm&id={$data->ncm}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXATRIBNCM_NCM_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->ncm; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXATRIBNCM_ATRIBUTONCM_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->atributoncm; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXATRIBNCM_MULTIPLO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->multiplo; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXATRIBNCM_NIVEL_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->nivel; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXATRIBNCM_ATRIBUTO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->atributo; ?></span>
	</div>

</div>

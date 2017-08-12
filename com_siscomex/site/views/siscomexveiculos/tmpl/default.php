<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomexveiculos&id={$data->id}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXVEICULOS_ID_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->id; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXVEICULOS_CODTRANSPORTADOR_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->codtransportador; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXVEICULOS_NUMEROVEICULO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->numeroveiculo; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXVEICULOS_NOMEVEICULO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->nomeveiculo; ?></span>
	</div>

</div>

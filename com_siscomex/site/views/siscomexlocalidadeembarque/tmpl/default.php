<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomexlocalidadeembarque&id={$data->ID}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXLOCALIDADEEMBARQUE_ID_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->ID; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXLOCALIDADEEMBARQUE_CODPAIS_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->codpais; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXLOCALIDADEEMBARQUE_LOCALIDADE_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->localidade; ?></span>
	</div>

</div>

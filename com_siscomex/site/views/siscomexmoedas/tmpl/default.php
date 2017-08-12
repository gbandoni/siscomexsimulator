<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomexmoedas&id={$data->idmoeda}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXMOEDAS_IDMOEDA_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->idmoeda; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXMOEDAS_CODIGO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->codigo; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXMOEDAS_NOME_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->nome; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXMOEDAS_SIMBOLO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->simbolo; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXMOEDAS_PAIS_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->pais; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXMOEDAS_TIPO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->tipo; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXMOEDAS_DATAEXCLUSAO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->dataexclusao; ?></span>
	</div>

</div>

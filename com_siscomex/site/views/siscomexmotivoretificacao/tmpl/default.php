<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomexmotivoretificacao&id={$data->codigo_motivo}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXMOTIVORETIFICACAO_CODIGO_MOTIVO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->codigo_motivo; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXMOTIVORETIFICACAO_DESCRICAO_MOTIVO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->descricao_motivo; ?></span>
	</div>

</div>

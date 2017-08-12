<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomexmoddespacho&id={$data->codigo_modalidade}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXMODDESPACHO_CODIGO_MODALIDADE_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->codigo_modalidade; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXMODDESPACHO_NOME_MODALIDADE_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->nome_modalidade; ?></span>
	</div>

</div>

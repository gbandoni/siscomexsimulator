<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomextipodeclaracao&id={$data->codigo_tipo}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTIPODECLARACAO_CODIGO_TIPO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->codigo_tipo; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTIPODECLARACAO_TIPO_DECLARACAO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->tipo_declaracao; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTIPODECLARACAO_DESCRICAO_TIPO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->descricao_tipo; ?></span>
	</div>

</div>

<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomexrespostacaso&id={$data->id}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXRESPOSTACASO_ID_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->id; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXRESPOSTACASO_IDCASO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->idcaso; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXRESPOSTACASO_TABELA_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->tabela; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXRESPOSTACASO_CAMPO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->campo; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXRESPOSTACASO_VALOR_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->valor; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXRESPOSTACASO_ORDEM_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->ordem; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXRESPOSTACASO_INVIABILIZA_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->inviabiliza; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXRESPOSTACASO_MENSAGEM_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->mensagem; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXRESPOSTACASO_DICA_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->dica; ?></span>
	</div>

</div>

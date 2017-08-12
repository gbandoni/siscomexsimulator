<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomexrecintoalfandegado&id={$data->codigo}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXRECINTOALFANDEGADO_CODIGO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->codigo; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXRECINTOALFANDEGADO_REGIAO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->regiao; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXRECINTOALFANDEGADO_NOMEPORTO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->nomeporto; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXRECINTOALFANDEGADO_ESTADO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->estado; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXRECINTOALFANDEGADO_TERMINAL_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->terminal; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXRECINTOALFANDEGADO_DESCRICAO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->descricao; ?></span>
	</div>

</div>

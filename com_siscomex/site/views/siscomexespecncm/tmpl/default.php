<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomexespecncm&id={$data->ncm}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXESPECNCM_NCM_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->ncm; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXESPECNCM_ATRIBUTO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->atributo; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXESPECNCM_ESPECIFICACAO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->especificacao; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXESPECNCM_NIVEL_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->nivel; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXESPECNCM_DESCRICAO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->descricao; ?></span>
	</div>

</div>

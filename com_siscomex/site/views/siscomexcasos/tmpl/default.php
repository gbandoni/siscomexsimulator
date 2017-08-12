<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomexcasos&id={$data->id}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXCASOS_ID_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->id; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXCASOS_IDCRIADOR_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->idcriador; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXCASOS_DATACRIACAO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->datacriacao; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXCASOS_TESTE_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->teste; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXCASOS_PUBLISHED_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->published; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXCASOS_GLOBAL_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->global; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXCASOS_DESCRICAO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->descricao; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXCASOS_EXCLUSIVO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->exclusivo; ?></span>
	</div>

</div>

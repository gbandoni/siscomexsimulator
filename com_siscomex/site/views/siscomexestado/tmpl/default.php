<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomexestado&id={$data->estado_id}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXESTADO_ESTADO_ID_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->estado_id; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXESTADO_SIGLA_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->sigla; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXESTADO_NOME_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->nome; ?></span>
	</div>

</div>

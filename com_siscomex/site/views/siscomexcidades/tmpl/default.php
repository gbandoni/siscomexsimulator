<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomexcidades&id={$data->codmun}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXCIDADES_ESTADO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->estado; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXCIDADES_CODMUN_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->codmun; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXCIDADES_NOME_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->nome; ?></span>
	</div>

</div>

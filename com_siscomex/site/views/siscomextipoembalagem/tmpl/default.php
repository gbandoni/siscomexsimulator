<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomextipoembalagem&id={$data->codigo}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTIPOEMBALAGEM_CODIGO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->codigo; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTIPOEMBALAGEM_DESCRICAO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->descricao; ?></span>
	</div>

</div>

<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomexpaises&id={$data->codigo_pais}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXPAISES_CODIGO_PAIS_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->codigo_pais; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXPAISES_NOME_PAIS_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->nome_pais; ?></span>
	</div>

</div>

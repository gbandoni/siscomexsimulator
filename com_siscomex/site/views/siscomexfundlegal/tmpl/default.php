<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomexfundlegal&id={$data->codigo}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXFUNDLEGAL_CODIGO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->codigo; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXFUNDLEGAL_DESCRICAO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->descricao; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXFUNDLEGAL_REG_TRIBUT_1_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->reg_tribut_1; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXFUNDLEGAL_REG_TRIBUT_2_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->reg_tribut_2; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXFUNDLEGAL_REG_TRIBUT_3_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->reg_tribut_3; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXFUNDLEGAL_REG_TRIBUT_4_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->reg_tribut_4; ?></span>
	</div>

</div>

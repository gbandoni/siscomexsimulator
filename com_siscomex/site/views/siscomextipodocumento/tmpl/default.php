<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomextipodocumento&id={$data->codigo}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTIPODOCUMENTO_CODIGO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->codigo; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTIPODOCUMENTO_SIGLA_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->sigla; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTIPODOCUMENTO_DESCRICAO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->descricao; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTIPODOCUMENTO_MARITIMA_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->maritima; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTIPODOCUMENTO_FLUVIA_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->fluvia; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTIPODOCUMENTO_AEREA_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->aerea; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTIPODOCUMENTO_RODOVIARIA_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->rodoviaria; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTIPODOCUMENTO_FERROVIARIA_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->ferroviaria; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTIPODOCUMENTO_POSTAL_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->postal; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTIPODOCUMENTO_LACUSTRE_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->lacustre; ?></span>
	</div>

</div>

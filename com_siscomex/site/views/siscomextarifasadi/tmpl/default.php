<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomextarifasadi&id={$data->numerodocumentocarga}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTARIFASADI_NUMERODOCUMENTOCARGA_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->numerodocumentocarga; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTARIFASADI_NUMEROADICAO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->numeroadicao; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTARIFASADI_CODIGOASSUNTOVINCULADO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->codigoassuntovinculado; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTARIFASADI_DATAANOATOVINCULADO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->dataanoatovinculado; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTARIFASADI_NUMEROATOVINCULADO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->numeroatovinculado; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTARIFASADI_NUMEROEXATOVINCULADO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->numeroexatovinculado; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTARIFASADI_SIGLAORGAOATOVINCULADO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->siglaorgaoatovinculado; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXTARIFASADI_SIGLATIPOATOVINCULADO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->siglatipoatovinculado; ?></span>
	</div>

</div>

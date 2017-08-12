<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$data = $this->data;
$link = JRoute::_( "index.php?option=com_siscomex&view=siscomexempresas&id={$data->codigo}" );
?>
<div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXEMPRESAS_CODIGO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->codigo; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXEMPRESAS_TIPOPESSSOA_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->tipopesssoa; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXEMPRESAS_RAZAOSOCIAL_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->razaosocial; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXEMPRESAS_TELEFONE_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->telefone; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXEMPRESAS_ENDERECO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->endereco; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXEMPRESAS_NUMERO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->numero; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXEMPRESAS_COMPLEMENTO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->complemento; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXEMPRESAS_BAIRRO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->bairro; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXEMPRESAS_MUNICIPIO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->municipio; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXEMPRESAS_ESTADO_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->estado; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXEMPRESAS_CEP_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->cep; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXEMPRESAS_PAIS_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->pais; ?></span>
	</div>
	<div class="jcb_fieldDiv">
		<span class="jcb_fieldLabel"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXEMPRESAS_EMAIL_LABEL' ); ?></span>
		<span class="jcb_fieldValue"><?php echo $data->email; ?></span>
	</div>

</div>

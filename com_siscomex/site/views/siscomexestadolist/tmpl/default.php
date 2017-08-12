<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<table>
	<thead>
		<tr>
			<th class="jcb_fieldDiv jcb_fieldLabel" width="6%"><img src="<?php echo JURI::root();?>components/com_siscomex/img/view-icon.png"></th>
	        <th class="jcb_fieldDiv jcb_fieldLabel" width="7%"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXESTADO_ESTADO_ID_LABEL' ); ?></th>
	        <th class="jcb_fieldDiv jcb_fieldLabel" width="7%"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXESTADO_SIGLA_LABEL' ); ?></th>
	        <th class="jcb_fieldDiv jcb_fieldLabel" width="80%"><?php echo JText::_( 'COM_SISCOMEX_SISCOMEXESTADO_NOME_LABEL' ); ?></th>
	    </tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="4">
				<div class="pagination"><?php echo $this->pagination->getPagesLinks(); ?> - <?php echo $this->pagination->getPagesCounter(); ?></div>
			</td>
		</tr>
	</tfoot>
	<tbody>
<?php foreach($this->data as $dataItem):  
	$link = JRoute::_( "index.php?option=com_siscomex&view=siscomexestado&id={$dataItem->estado_id}" );
?>
		<tr>
			<td class="jcb_fieldDiv jcb_fieldValue"><a href="<?php echo $link; ?>"><img src="<?php echo JURI::root();?>components/com_siscomex/img/view-icon.png"></a></td>
	        <td class="jcb_fieldDiv jcb_fieldValue" width="7%"><?php echo $dataItem->estado_id; ?></td>
	        <td class="jcb_fieldDiv jcb_fieldValue" width="7%"><?php echo $dataItem->sigla; ?></td>
	       <td class="jcb_fieldDiv jcb_fieldValue" width="80%"><?php echo $dataItem->nome; ?></td>
		</tr>
<?php endforeach; ?>
	<tbody>
</table>


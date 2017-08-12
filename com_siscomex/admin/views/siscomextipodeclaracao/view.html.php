<?php
/**
 * Siscomex View for Siscomex Component
 * 
 * @package    Siscomex
 * @subpackage com_siscomex
 * @license  GNU/GPL v2
 *
 *
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view' );

/**
 * Siscomex view
 *
 * @package    Joomla.Components
 * @subpackage 	Siscomex
 */
class SiscomexViewSiscomextipodeclaracao extends JViewLegacy
{
	/**
	 * display method of Siscomex view
	 * @return void
	 **/
	function display($tpl = null){
		$user  = JFactory::getUser();
		
		// get the Data
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');
		$this->script = $this->get('Script');
		$this->j3x = version_compare( JVERSION, '3.0', '>=' ); // is Joomla 3+
		
		
		$isNew = ($this->item->codigo_tipo == null);

		$text = $isNew ? JText::_( 'JACTION_CREATE' ) : JText::_( 'JACTION_EDIT' );
		JToolBarHelper::title(   JText::_( 'COM_SISCOMEX_MENU_SISCOMEXTIPODECLARACAOLIST' ).': <span>[ ' . $text.' ]</span>' );
		
		if ($isNew)  {
			if($user->authorise('core.create', 'com_siscomex')){
				JToolBarHelper::apply('siscomextipodeclaracao.apply');
				JToolBarHelper::save('siscomextipodeclaracao.save');
			}
			JToolBarHelper::cancel('siscomextipodeclaracao.cancel');
		} else {
			if($user->authorise('core.edit', 'com_siscomex')){
				JToolBarHelper::apply('siscomextipodeclaracao.apply');
				JToolBarHelper::save('siscomextipodeclaracao.save');
			}
			// for existing items the button is renamed `close`
			JToolBarHelper::cancel( 'siscomextipodeclaracao.cancel', 'JTOOLBAR_CLOSE' );
		}

		
		
		/** J1.5 code		
		// create options for 'select' used in template
		$dataOptions = array();
		foreach(explode(',', '') as $field){
			if (!$field) continue;
			//options array are generated in the model...
			$dataOptions[$field] = $this->get( ucfirst($field) );
		}
		

		// related table example 
		// thisTableFieldKey : foreign key (es #__content.catid -> 'catid')
		// relatedTableModelList : name used for table holding data (es #__content -> 'contentlist')
		// getRelatedTableFieldData : method for getting related table values for key (es #__categories.title -> 'getTitleFieldData()')
		// REMEMBER to add model inclusion in controller recordset list
		// see http://www.mmleoni.net/joomla-component-builder/create-joomla-extensions-manage-the-back-end-part-2

		$rmodel = $this->getModel('relatedTableModelList'); 
		$dataOptions['thisTableFieldKey'] = $rmodel->getRelatedTableFieldData();
		*/
		
		/** J1.5 code
!insertReladedTable!		
		*/
		
		
		/** J1.5 code
		$this->assignRef('dataOptions', $dataOptions);
		*/
		
		parent::display($tpl);
	}
	
		
	protected function auth($area){
		return true;
	}

	
}
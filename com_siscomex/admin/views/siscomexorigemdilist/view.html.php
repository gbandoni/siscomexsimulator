<?php
/**
 * Siscomex View for Siscomex Component
 * 
 * @package    Siscomex
 * @subpackage com_siscomex
 * @license  GNU/GPL v2
 *
 * Created with Marco's Component Creator for Joomla! 1.6
 * http://www.mmleoni.net/joomla-component-builder
 *
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view' );

/**
 * Siscomex View
 *
 * @package    Joomla.Components
 * @subpackage 	Siscomex
 */
class SiscomexViewSiscomexorigemdilist extends JViewLegacy
{
	/**
	 * Siscomexorigemdilist view display method
	 * @return void
	 **/
	function display($tpl = null){
		$app = JFactory::getApplication();
		$this->user  = JFactory::getUser();

		// Get data from the model; method is getItems() in J2.5+
		$this->rows = $this->get( 'Items');
		$this->state = $this->get( 'State');
		$this->pagination = $this->get('Pagination');	
		$this->j3x = version_compare( JVERSION, '3.0', '>=' ); // is Joomla 3+

		
		// draw menu
		//'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.delete'
		JToolBarHelper::title( JText::_( 'COM_SISCOMEX_MENU_SISCOMEXORIGEMDILIST' ), 'generic.png' );
		if($this->user->authorise('core.edit', 'com_siscomex')) JToolBarHelper::editList('siscomexorigemdi.edit');
		if($this->user->authorise('core.create', 'com_siscomex')) JToolBarHelper::addNew('siscomexorigemdi.add');
		if($this->user->authorise('core.delete', 'com_siscomex')) JToolBarHelper::deleteList('', 'siscomexorigemdilist.delete');
		
		if( (isset($this->rows[0]->published)) && ($this->user->authorise('core.edit', 'com_siscomex')) ){
			JToolBarHelper::divider();
			JToolBarHelper::publish('siscomexorigemdilist.publish');
			JToolBarHelper::unpublish('siscomexorigemdilist.unpublish');
		}
		
		// configuration editor for config.xml
		if($this->user->authorise('core.admin', 'com_siscomex')){
			JToolBarHelper::divider();
			JToolBarHelper::preferences('com_siscomex');
		}
		

		// SORTING get the user state of order and direction
		//  ** J1.5 now in $this->state object
		//$default_order_field = 'ID';
		//$lists['order_Dir'] = $app->getUserStateFromRequest('com_siscomexfilter_order_Dir', 'filter_order_Dir', 'ASC');
		//$lists['order'] = $app->getUserStateFromRequest('com_siscomexfilter_order', 'filter_order', $default_order_field);
		//$lists['search'] = $app->getUserStateFromRequest('com_siscomexsearch', 'search', '');

		parent::display($tpl);
	}
	
	protected function auth($area){
		//echo '<pre>' . print_r(JAccess::getActions('com_siscomex','siscomexorigemdi'),true).'</pre>';die();
		$aclLocal = array();
		foreach(JAccess::getActions('com_siscomex', 'siscomexorigemdi') as $ar) $aclLocal[] = $ar->name;
		if(in_array($area, $aclLocal)){
			return $this->user->authorise($area, 'com_siscomex', 'siscomexorigemdi');
		}else{
			$aclGlobal = array();
			foreach(JAccess::getActions('com_siscomex') as $ar) $aclGlobal[] = $ar->name;
			if(in_array($area, $aclGlobal)){
				if(!empty($aclLocal)) JFactory::getApplication()->enqueueMessage('Undefined authorization area: ' . $area . ' -- fall back on component acl', 'Warning');
				return $this->user->authorise($area, 'com_siscomex');
			}else{
				JFactory::getApplication()->enqueueMessage('Undefined authorization area: ' . $area . ' -- NO fall back found', 'Error');
				return true;
			}
		}
		
	}
	
}
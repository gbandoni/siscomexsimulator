<?php
/**
 * Siscomex View for com_siscomex Component
 * 
 * @package    Siscomex
 * @subpackage com_siscomex
 * @license  GNU/GPL v2
 *
 *
 */

jimport( 'joomla.application.component.view');
jimport('joomla.application.component.model');

/**
 * HTML View class for the Siscomex Component
 *
 * @package	Joomla.Components
 * @subpackage	Siscomex
 */
class SiscomexViewSiscomexpaises extends JViewLegacy{
	function display($tpl = null){
		/*
		// load component parameters
		$params = JComponentHelper::getParams( 'com_siscomex' );
		$params = $app->getParams( 'com_siscomex' );	
		$dummy = $params->get( 'dummy_param', 1 ); 

		// load another model
		JModelLegacy::addIncludePath(JPATH_SITE.'/components/com_siscomex/models');
		$otherModel = JModelLegacy::getInstance( 'Record', 'RecordModel' );
		*/
		$data = $this->get('Data');
		$this->assignRef('data', $data);
		
		// Check for errors.
		if (count($errors = $this->get('Errors'))){
			JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');
			return false;
		}
		
		parent::display($tpl);
	}
}
?>

<?php
/**
 * Siscomex Controller for Siscomex Component
 * 
 * @package    Siscomex
 * @subpackage com_siscomex
 * @license  GNU/GPL v2
 *
  *
 */
defined( '_JEXEC' ) or die( 'Restricted access' );

// import Joomla controllerform library
jimport('joomla.application.component.controllerform');
/**
 * Siscomex Controller
 *
 * @package    Joomla.Components
 * @subpackage 	Siscomex
 */
class SiscomexControllerSiscomexdoccargadi extends JControllerForm{
	/**
	 * Parameters in config.xml.
	 *
	 * @var	object
	 * @access	protected
	 */
	protected $params = null;
	
	/**
	 * The URL view item variable.
	 *
	 * @var    string
	 * @since  11.1
	 */
	protected $view_item = 'siscomexdoccargadi';

	/**
	 * The URL view list variable.
	 *
	 * @var    string
	 * @since  11.1
	 */
	protected $view_list = 'siscomexdoccargadilist';	

	/**
	 * constructor (registers additional tasks to methods)
	 * @return void
	 */
	function __construct(){
		parent::__construct();
		
		// Set reference to parameters
		$this->params = JComponentHelper::getParams( 'com_siscomex' );
		//$dummy = $this->params->get('parm_text');

	}
	
	/**MMLBE: Example of override of common task
	function edit($key = null, $urlVar = null) {
		$ret=parent::edit($key, $urlVar);
		return $ret;
	}
	MMLBE*/
	
	/**MMLBE: Example of override of common task
	function save($key = null, $urlVar = null) {
		$ret = parent::save($key, $urlVar);
		return $ret;
	}
	MMLBE*/
	
	/**MMLBE: Example of override of common task
	function cancel($key = null) {
		$ret = parent::cancel($key);
		return $ret;
	}
    MMLBE*/
	

}
<?php
/**
 * Siscomex Model for Siscomex Component
 * 
 * @package    Siscomex
 * @subpackage com_siscomex
 * @license  GNU/GPL v2
 *
 * Created with Marco's Component Creator for Joomla! 2.5
 * http://www.mmleoni.net/joomla-component-builder
 *
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 * Siscomex Table
 *
 * @package    Joomla.Components
 * @subpackage 	Siscomex
 * libraries/joomla/database/table.php
 */
class SiscomexTableSiscomexorigemdi extends JTable{

	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function __construct(&$db){
		parent::__construct('#__siscomex_origem_di', 'ID', $db);
	}
	
	function check(){
		// write here data validation code
		return parent::check();
	}

	function bind($src, $ignore = array()){
		// source value is an array or object.
		return parent::bind($src, $ignore);
	}

	function store($updateNulls = false) {
		// $updateNulls: True to update fields even if they are null.
		return parent::store($updateNulls);
	}
}
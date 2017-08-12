<?php
/**
 * Siscomex Model for Siscomex Component
 * 
 * @package    Siscomex
 * @subpackage com_siscomex
 * @license  GNU/GPL v2
 *
 *
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

// import Joomla modelitem library
jimport('joomla.application.component.modelitem');

/**
 * Siscomex Model
 *
 * @package    Joomla.Components
 * @subpackage 	Siscomex
 */
class SiscomexModelSiscomextransportador extends JModelItem{

	/**
	 * Siscomextransportador data array for tmp store
	 *
	 * @var array
	 */
	protected $_data;
	
	/**
	 * Gets the data
	 * @return mixed The data to be displayed to the user
	 */
	public function getData(){
		if (empty( $this->_data )){
			$id = JRequest::getInt('id',  0);
			$db = JFactory::getDBO();
			$query = "SELECT * FROM `#__siscomex_transportador` where `id` = {$id}";
			$db->setQuery( $query );
			$this->_data = $db->loadObject();
		}
		return $this->_data;
	}
}

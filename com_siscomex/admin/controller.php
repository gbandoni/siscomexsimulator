<?php
/**
 * Siscomex Controller for Siscomex Component
 * 
 * @package    Siscomex
 * @subpackage com_siscomex
 * @license  !license!
 *
  *
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');

/**
 * Siscomex Model
 *
 * @package    Joomla.Components
 * @subpackage 	Siscomex
 */
class SiscomexController extends JControllerLegacy
{
	/**
	 * Method to display the view
	 *
	 * @access	public
	 */
	public function display($cachable = false, $urlparams = false){
		parent::display($cachable, $urlparams);
	}
}
<?php
/**
 * SiscomextipodocumentoRodoviaria Form Field List class for the Siscomex component
 * 
 * @package    Siscomex
 * @subpackage com_siscomex
 * @license  GNU/GPL v2
 *
 *
 */
defined('_JEXEC') or die;
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');
 

class JFormFieldSiscomextipodocumentoRodoviaria extends JFormFieldList{
	/**
	 * The field type.
	 *
	 * @var		string
	 */
	protected $type = 'SiscomextipodocumentoRodoviaria';
 
	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return	array		An array of JHtml options.
	 */
	protected function getOptions(){
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('`!foreignTablePK!` as `key`, `!foreignTableValue!` as `value`');
		$query->from('`#__!foreignTable!`');
		$query->order('`!foreignTableValue!`');
		$db->setQuery($query);
		$rows = $db->loadObjectList();
		$options = array();
		if ($rows){
			foreach($rows as $row){
				$options[] = JHtml::_('select.option', $row->key, $row->value);
			}
		}
		$options = array_merge(parent::getOptions(), $options);
		return $options;
	}
}

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

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 * Siscomex Table
 *
 * @package    Joomla.Components
 * @subpackage 	Siscomex
 * libraries/joomla/database/table.php
 */
class SiscomexTableSiscomextipodocumento extends JTable{

	/**
	 * Construtor
	 *
	 * @param object Objeto de conexão ao banco de dados
	 */
	function __construct(&$db){
		parent::__construct('#__siscomex_tipo_documento', 'codigo', $db);
	}
	
	function check(){
		// Adicione aqui alguma validação específica
		return parent::check();
	}

	function bind($src, $ignore = array()){
		// Tenha em mente que $src é um vetor de objetos
		return parent::bind($src, $ignore);
	}

	function store($updateNulls = false) {
		// $updateNulls: Mude essa variável para True para atualizar os valores mesmo que seja NULL.
		return parent::store($updateNulls);
	}
}
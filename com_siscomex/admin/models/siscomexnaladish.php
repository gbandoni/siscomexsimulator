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

defined( '_JEXEC' ) or die( 'Restricted access' );
jimport('joomla.application.component.modeladmin');

/**
 * Siscomex Model
 *
 * @package    Joomla.Components
 * @subpackage 	Siscomex
 */
class SiscomexModelSiscomexnaladish extends JModelAdmin{
	/**
	 * Construtor que recupera o id da chamada
	 *
	 * @access	public
	 * @return	void
	 */
	function __construct(){
		parent::__construct();

		//$array = JRequest::getVar('cid',  0, '', 'array');
		$array = JFactory::getApplication()->input->server->get('cid', 0, 'INT');
		$this->setId((int)$array[0]);
	}


	/**
	 * Método que verifica se voce pode editar registro
	 *
	 * @param	array	$data	Vetor para os dados do formulário
	 * @param	string	$key	Nome do campo da have primária
	 *
	 * @return	boolean
	 * @since	1.6
	 */
	protected function allowEdit($data = array(), $key = 'id')
	{
		// Checa uma permissão para editar em particular depois olha a permissão geral.
		return JFactory::getUser()->authorise('core.edit', 'com_siscomex.siscomexnaladish.'.((int) isset($data[$key]) ? $data[$key] : 0)) or parent::allowEdit($data, $key);
	}
	
	/**
	 * Prepara e sanitiza os dados da tabela antes de salva-la
	 * @param   JTable  &$table  Referencia para um objeto do tipo JTable
	 * @return  void
	 * @since   11.1
	 */	
    protected function prepareTable($table){
		/* define que colunas pode ter valor NULL */
        $nullable ='';
		if(!$nullable) return;
        foreach (explode(',', $nullable) as $val){
            /* Define as regras quando o valor é passado como null */
            if (!strlen($table->$val)) $table->$val = NULL;
        }
    }	
	
	
	/** Retorna uma referencia para um objeto de tabela , sempre criando uma nova instancia.
	 *
	 * @param	type	O tipo de tabela a instanciar
	 * @param	string	Um prefixo para o nome da classe da tabela, opicional.
	 * @param	array	Vetor de configurações para o modelo.Opcional.
	 * @return	JTable	O objeto da tabela
	 * @since	1.6
	 */
	public function getTable($type = 'Siscomexnaladish', $prefix = 'SiscomexTable', $config = array()) 
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	/**
	 * Método para obter os dados de um formulário
	 *
	 * @param	array	$data		Data para o formulário.
	 * @param	boolean	$loadData	Defina como True se o formulario irá carregar seus próprios dados(padrão).
	 * @return	mixed	Um objeto JForm em caso de sucesso , falso em caso de falha
	 * @since	1.6
	 */
	public function getForm($data = array(), $loadData = true) 
	{
		// Get the form.
		$form = $this->loadForm('com_siscomex.siscomexnaladish', 'siscomexnaladish', array('control' => 'jform', 'load_data' => $loadData));
		if (empty($form)) 
		{
			return false;
		}
		return $form;
	}

	/**
	 * Método para retornar o script que precisa ser incluído no formulário
	 *
	 * @return string	Arquivos de Script
	 */
	public function getScript() 
	{
		return 'administrator/components/com_siscomex/models/forms/siscomexnaladish.js';
	}

	/**
	 * Método para obter os dados que serão inseridos no formulário.
	 *
	 * @return	mixed	Os dados do formulário.
	 * @since	1.6
	 */
	protected function loadFormData() 
	{
		// Verifica a sessão que deveria ter inserido os dados primeiro.
		$data = JFactory::getApplication()->getUserState('com_siscomex.edit.siscomexnaladish.data', array());
		if (empty($data)) 
		{
			$data = $this->getItem();
		}
		return $data;
	}
	
	
	/**
	 * Método para validar os dados de um formulário.
	 * @since   12.2
	 *
	 * Adiciona um valor default para checkbox desmarcados
	 * Funciona no joomla 3+ , não utilize na versão 2.5
	 */	
	/**
	public function validate($form, $data, $group = null){
		$data =  parent::validate($form, $data, $group = null);
		if (version_compare( JVERSION, '3.0', '<' )) return $data; 
		
		foreach($form->getFieldsets() as $fset){
			foreach($form->getFieldset($fset->name) as $f){
				if ( (JString::strcasecmp($f->type, 'Checkbox') == 0) && !isset($data[$f->fieldname]) ) {
					$data[$f->fieldname] = $f->getAttribute('unchecked', '0');
				}
			}
		}
		return $data;
	}
	*/
	
	
	/**
	 * Método para adicionar o identificador de um registro
	 *
	 * @access	public
	 * @param	inteiro do identificador do registro
	 * @return	void
	 */
	public function setId($id){
		// Adiociona o id e zera os dados
		$this->_id		= $id;
		$this->_data	= null;
	}

	
	/**MMLBE: Exemplo para sobrecarregar um método padrão
    public function save($data){
        $app	= JFactory::getApplication();
        $jinput = $app->input;
        $aVarCheck  = $jinput->post->get('aVarCheck', '', 'word');
        if($aVarCheck != $data['aVar']){
                JFactory::getApplication()->enqueueMessage(JText::_( 'ERROR_AVARCHECK__AVAR' ), 'error');
                return false;
            }
        }

        if(!parent::save($data)) return false;		

        return true;
    }
	MMLBE*/
	
	
	
	/**MMLBE: Exemplo de tarefa em ação numa lista
	public function doTaskList(&$pks) {
		$table = $this->getTable();
        $pks = (array) $pks;
		$status = true;

        foreach ($pks as $i => $pk) {
            $table->reset();
            $table->load($pk);
			// faça algo com a tebela aqui
            $status = $table->store(true); // informe true para salvar valores mesmo nulos

			// Faça algo com outra tabela
            $anotherTable = JTable::getInstance('anotherTable', 'SiscomexTable', array());
			$fields = array();
            $date= new JDate();
            $fields['afield'] = $date->toSql();
            $transactionTable->bind($fields);
            if(!$anotherTable->store(true)){
                JFactory::getApplication()->enqueueMessage('ERROR in anotherTable', 'warning');
            }
            
        }
 
        // Limpa o cache do componente
        $this->cleanCache();
        return $status;
    }    
	MMLBE*/	

	/**
	 * Método para obter uma lista de opções para dados específicos
	 * @return objeto com informação
	 */
	public function &getGenericFieldName(){
		$options = array(
            JHTML::_('select.option',  'val1', 'text 1' ),
            JHTML::_('select.option',  'val2', 'text 2' )
        );    
		return $options;
	}
	
	
	


}
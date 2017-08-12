<?php
/**
 * @package    Siscomex
 * @subpackage com_siscomex
 * @license  !license!
 *
  *
 */
defined( '_JEXEC' ) or die( 'Restricted access' );

/** debug
ini_set( 'display_errors', true );
error_reporting( E_ALL );
*/

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_siscomex')){
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

$views = explode(',', 'siscomexabrangenciancmlist,siscomexacordoaladilist,siscomexacrescimoslist,siscomexaladilist,siscomexatribncmlist,siscomexbancoslist,siscomexcidadeslist,siscomexdeducoeslist,siscomexempresaslist,siscomexespecncmlist,siscomexestadolist,siscomexfundlegallist,siscomexincotermslist,siscomexinstfinanceiralist,siscomexlocalidadeembarquelist,siscomexmoddespacholist,siscomexmoedaslist,siscomexmotadmtemplist,siscomexmotsemcoblist,siscomexmotivoretificacaolist,siscomexmotivotransmissaolist,siscomexnaladinccalist,siscomexnaladishlist,siscomexnbmlist,siscomexncmlist,siscomexorgaosurflist,siscomexpaiseslist,siscomexrecintoalfandegadolist,siscomexregimetributlist,siscomextaborcamentarialist,siscomextarifasadilist,siscomextipodeclaracaolist,siscomextipodocumentolist,siscomextipodocumentodeslist,siscomextipoembalagemlist,siscomextipoimportadorlist,siscomextiporecipientelist,siscomextipomanifestolist,siscomextransportadorlist,siscomexvaloraduaneiralist,siscomexveiculoslist,siscomexviatransportelist,siscomexcasoslist,siscomexrespostacasolist');
$view = $views[0];

/*
Please note there are known issues with JInput and Magic Quotes (Deprecated in PHP 5.3.0 and removed in PHP 5.4.0). 
Most servers have these turned off - however it is important to bear this in mind whilst developing a component. 
For this reason all core components in Joomla 2.5.x still use JRequest. 
As of Joomla 3.0+ magic quotes is required to be disabled and thus this is no longer an issue. 

http://docs.joomla.org/Retrieving_request_data_using_JInput

*/


$jinput = JFactory::getApplication()->input;
$view = $jinput->get('view', $view, 'CMD');
$jinput->set('view', $view);

$j3x = version_compare( JVERSION, '3.0', '>=' ); // is Joomla 3+

if (in_array($view, $views)) foreach($views as $v){
	$link = JRoute::_("index.php?option=com_siscomex&view={$v}");
	$selected = ($v == $view);
	if($j3x){
		JHtmlSidebar::addEntry(JText::_( strtoupper('COM_siscomex_MENU_' . $v) ), "index.php?option=com_siscomex&view={$v}", $selected);
	}else{
		JSubMenuHelper::addEntry(JText::_( strtoupper('COM_siscomex_MENU_' . $v) ), "index.php?option=com_siscomex&view={$v}", $selected);
	}
}

// Require the base controller
//require_once( JPATH_COMPONENT.DS.'controller.php' );

// import joomla controller library
jimport('joomla.application.component.controller');

// Create the controller
$controller = JControllerLegacy::getInstance('Siscomex');

// Perform the Request task
$controller->execute($jinput->get('task', '', 'CMD')); // or CMD ??


// Redirect if set by the controller
$controller->redirect();
<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import joomla controller library
jimport('joomla.application.component.controller');
 
// on récupère une instance de la classe [prefix]JControllerLegacy
// ... attention : mode Legacy impératif pour compatibilité Joomla 3.0
// ... le prefix est passé en paramètre (MesPlantes)
// ... la classe est recherchée par Joomla dans le site/controller.php
$controller = JControllerLegacy::getInstance('MesPlantes');
 
// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect();
?>
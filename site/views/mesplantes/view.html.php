<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
// Attention au mode Legacy pour compatibilité Joomla v 3.0
// Le nom doit forcément être [composant]View[composant]
// mais peut importe les majuscules. 
class MesPlantesViewMesPlantes extends JViewLegacy {
	
	// Overwriting JView display method
	function display($tpl = null) {
        
		// On récupère les données du modèle
        $this->msg = $this->get('Msg');
 
		// Check for errors.
		if (count($errors = $this->get('Errors'))) {
			JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');
			return false;
			}
		
		// Display the view
		parent::display($tpl);
        }
	}
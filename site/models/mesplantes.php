<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');
 
// Extension de la classe JModelItem, pas besoin de Legacy car
// JModelItem est déjà une extension de JModelLegacy
class MesPlantesModelMesPlantes extends JModelItem {
	/**
	 * @var string msg
	 */
	protected $msg;

	/**
	 * Get the message
	 * @return string The message to be displayed to the user
	 */
	public function getMsg($id = 1) {
	
		if (!is_array($this->messages)) {
			$this->messages = array();
			}
 
		if (!isset($this->messages[$id])) {
			//request the selected id
			$id = JRequest::getInt('id');
 
			// Get a TableHelloWorld instance
			$table = $this->getTable();
 
			// Load the message
			$table->load($id);
 
			// Assign the message
			$this->messages[$id] = $table->greeting;
			}
 
		return $this->messages[$id];
		}
	}
?>
<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controller library
jimport('joomla.application.component.controller');
 
// Extension de la classe JControllerLegacy pour le composant
// Attention : pour compatibilité Joomla 3.0 mode Legacy obligatoire
// La première partie du nom (MesPlantes) est celle passée comme paramètre
// dans le JController::getInstance du site/mesplantes.php
class MesPlantesController extends JControllerLegacy
{
}

/* Infos :
When no task is given in the request variables, the default task will be executed. 
It's the display task by default. The JController class has such a task. In our example, 
it will display a view named MesPlantes. */
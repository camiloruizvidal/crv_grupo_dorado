<?php
defined( '_JEXEC' ) or die( 'Restricted access' ); 
require_once( dirname(__FILE__).'/helper.php' ); 
$empleos = ModEmpleos::getEmpleos($params,$_GET);require JModuleHelper::getLayoutPath('mod_empleos');
?>
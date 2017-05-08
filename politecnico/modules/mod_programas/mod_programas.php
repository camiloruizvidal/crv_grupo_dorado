<?php
defined( '_JEXEC' ) or die( 'Restricted access' ); 
require_once( dirname(__FILE__).'/helper.php' ); 
$programas = ModProgramas::getProgramas();require JModuleHelper::getLayoutPath('mod_programas');
?>
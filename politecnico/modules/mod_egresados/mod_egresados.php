<?php
defined( '_JEXEC' ) or die( 'Restricted access' ); 
require_once( dirname(__FILE__).'/helper.php' ); 
$Egresados = ModEgresados::getEgresados();require JModuleHelper::getLayoutPath('mod_egresados');
?>
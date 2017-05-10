<?php
defined( '_JEXEC' ) or die( 'Restricted access' ); 
require_once( dirname(__FILE__).'/helper.php' ); 
$Services = ModServicios::getServicios();require JModuleHelper::getLayoutPath('mod_servicios');
?>
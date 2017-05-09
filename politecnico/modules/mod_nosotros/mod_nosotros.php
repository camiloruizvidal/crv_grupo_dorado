<?php
defined( '_JEXEC' ) or die( 'Restricted access' ); 
require_once( dirname(__FILE__).'/helper.php' ); 
$Nosotros = ModNosotros::getNosotros();require JModuleHelper::getLayoutPath('mod_nosotros');
?>
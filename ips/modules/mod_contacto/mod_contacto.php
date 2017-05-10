<?php
defined( '_JEXEC' ) or die( 'Restricted access' ); 
require_once( dirname(__FILE__).'/helper.php' ); 
$contacto = ModContacto::getContacto($params);require JModuleHelper::getLayoutPath('mod_contacto');
?>
<?php
defined( '_JEXEC' ) or die( 'Restricted access' ); 
require_once( dirname(__FILE__).'/helper.php' ); 
$hello = ModHelloWorldHelper::getNotices();
require JModuleHelper::getLayoutPath('mod_helloworld');
?>
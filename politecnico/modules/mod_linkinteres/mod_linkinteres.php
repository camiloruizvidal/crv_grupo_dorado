<?php
defined( '_JEXEC' ) or die( 'Restricted access' ); 
require_once( dirname(__FILE__).'/helper.php' ); 
$links = ModLinkInteres::getLink();								require JModuleHelper::getLayoutPath('mod_linkinteres');
?>
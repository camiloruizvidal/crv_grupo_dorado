<?php
defined( '_JEXEC' ) or die( 'Restricted access' ); 
require_once( dirname(__FILE__).'/helper.php' ); 
$hello = ModNoticeRencet::getNotices();
require JModuleHelper::getLayoutPath('mod_helloworld');
?>
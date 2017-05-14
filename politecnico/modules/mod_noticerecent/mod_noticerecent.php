<?php
defined( '_JEXEC' ) or die( 'Restricted access' ); 
require_once( dirname(__FILE__).'/helper.php' ); 
$notices = ModNoticeRencet::getNotices($params);
require JModuleHelper::getLayoutPath('mod_noticerecent');
?>
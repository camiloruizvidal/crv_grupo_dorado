<?php
class ModEmpleos
{
    public static function getEmpleos(&$params,$data_get)
	{
		  `#__content`
		  INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)
			ORDER BY
		`#__content`.`created` DESC";
		$categorias = $db->loadObjectList();
		$data=$db->loadObjectList();
	}
}
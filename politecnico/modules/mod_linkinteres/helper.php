<?php
class ModLinkInteres
{
    public static function getLink()
	{
		  `#__content`
		  INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)
		ORDER BY
		`#__content`.`title` ASC";
		$db->setQuery($sql);
		$categorias = $db->loadObjectList();
		$data=$db->loadObjectList();
		foreach($data as $key=>$temp)
		{
	}
}
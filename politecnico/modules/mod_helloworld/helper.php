<?php
class ModHelloWorldHelper
{
    public static function getNotices()
	{
		  `#__content`
		  INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)
		ORDER BY
		`#__content`.`created` DESC";
		$db->setQuery($sql);
		$categorias = $db->loadObjectList();
		$data=$db->loadObjectList();
		foreach($data as $key=>$temp)
		{
			$url=json_decode($temp->images)->image_intro;
			if($url==='')
			{
				$url="templates{$ds}crvtemplate{$ds}img{$ds}Logo.jpg";
			}
	}
}
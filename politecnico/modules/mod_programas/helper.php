<?php
class ModProgramas
{
    public static function getProgramas()
	{
		  `#__content`
		  INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)
		ORDER BY
		`#__content`.`title` ASC";
		$db->setQuery($sql);
		$categorias = $db->loadObjectList();
		$data=$db->loadObjectList();
			$html[]=array('id'=>$i,'img'=>$img,'url'=>$temp->url,'nombre'=>$temp->title,'texto'=>trim(strip_tags($temp->introtext)));
	}
}
<?php
class ModEgresados
{
    public static function getEgresados()
	{		$ds=DIRECTORY_SEPARATOR;		$html= array();		$con = new JConfig();		$db = &JFactory::getDBO();		$sql = "SELECT 			  concat(`#__categories`.`id`, '-', `#__categories`.`alias`) AS `url_cat`,			  concat(`#__content`.`id`, '-', `#__content`.`alias`) AS `url_art`,			  concat(`#__categories`.`id`,'-',`#__categories`.`alias`, '/', `#__content`.`id`,'-',`#__content`.`alias`) AS `url`,			  `#__content`.`id`,			  `#__content`.`title`,			  `#__content`.`alias`,			  `#__content`.`introtext`,			  `#__content`.`images`			FROM
		  `#__content`
		  INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)		  WHERE		  `#__content`.`catid` = 23		  AND		  `#__content`.`id` != 35
		ORDER BY
		`#__content`.`title` ASC";
		$db->setQuery($sql);
		$categorias = $db->loadObjectList();
		$data=$db->loadObjectList();		$i=1;		$ds=DIRECTORY_SEPARATOR;		foreach($data as $temp)		{			$img=json_decode($temp->images);			$img=$img->image_intro;			if($img==='')			{				$img='templates'.$ds.'crvtemplate'.$ds.'img'.$ds.'Logo.jpg';			}
			$html[]=array('id'=>$i,'img'=>$img,'url'=>$temp->url,'nombre'=>$temp->title,'texto'=>trim(strip_tags($temp->introtext)));			$i++;		}		return $html;
	}
}
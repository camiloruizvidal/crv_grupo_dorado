<?php
class ModServicios
{
    public static function getServicios()
	{		$services=array();		$con = new JConfig();		$db = &JFactory::getDBO();		$sql = "SELECT 			  concat(`#__categories`.`id`,'-',`#__categories`.`alias`, '/', `#__content`.`id`,'-',`#__content`.`alias`) AS `url`,			  `#__content`.`title`,			  `#__content`.`introtext` as contenido,			  `#__content`.`hits` as vistas,			  `#__content`.`created` as fecha,			  `#__content`.`images` as image			FROM		`#__content`		INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)		WHERE		`#__content`.`catid` = 9		ORDER BY		`#__content`.`created` DESC";		$db->setQuery($sql);		$categorias = $db->loadObjectList();		$data=$db->loadObjectList();		foreach($data as $temp)		{			$date = new DateTime($temp->fecha);			$fecha= $date->format('d-m-Y');			$services[]=array(			'url'		=>	$temp->url,			'title'		=>	$temp->title,			'text'		=>	$temp->contenido,			'img'		=>	json_decode($temp->image)->image_intro);		}				return $services;
	}
}
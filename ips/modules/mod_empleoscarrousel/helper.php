<?php
class ModEmpleosCarrousel
{
    public static function getEmpleosCarrousel()
	{		$carrousel=array();		$con = new JConfig();		$cant=$params->get('cantidad');		$db = &JFactory::getDBO();		$sql = "SELECT 			  concat(`#__categories`.`id`,'-',`#__categories`.`alias`, '/', `#__content`.`id`,'-',`#__content`.`alias`) AS `url`,			  `#__content`.`title`,			  `#__content`.`introtext` as contenido,			  `#__content`.`hits` as vistas,			  `#__content`.`created` as fecha,			  `#__content`.`images` as image			FROM		`#__content`		INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)		WHERE		`#__content`.`catid` = 1		ORDER BY		`#__content`.`created` DESC		LIMIT {$cant}";		$db->setQuery($sql);		$categorias = $db->loadObjectList();		$data=$db->loadObjectList();		foreach($data as $temp)		{			$carrousel[]=array(			'url'		=>	$temp->url,			'title'		=>	$temp->title,			'text'		=>	$temp->contenido,			'views'		=>	$temp->vistas,			'date'		=>	$temp->fecha,			'img'		=>	$temp->image);		}				return $carrousel;
	}
}
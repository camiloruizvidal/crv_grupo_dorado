<?php
class ModEmpleos
{
    public static function getEmpleos(&$params,$data_get)
	{		$pageURL = JURI::base();		$where='';		$para=array();		if(isset($data_get['search']))		{			if($data_get['search']!='')			{			$para[]='			(`#__content`.`title` LIKE("%'.$data_get['search'].'%"))				OR				(`#__content`.`introtext` LIKE("%'.$data_get['search'].'%"))			';			}		}		if(isset($data_get['f_inicio']))		{			if($data_get['f_inicio']!='')			{				$para[]=' date(`#__content`.`created`) >= date(\''.$data_get['f_inicio'].' 00:00:00\') ';			}		}		if(isset($data_get['f_fin']))		{			if($data_get['f_fin']!='')			{								$para[]=' date(`#__content`.`created`) <= date(\''.$data_get['f_fin'].' 23:59:59\') ';			}		}				if(count($para)>0)		{			$where=' AND ('.implode(' AND ',$para).')';		}		$ds=DIRECTORY_SEPARATOR;		$html= array();		$con = new JConfig();		$db = &JFactory::getDBO();		$sql = "SELECT 			  concat('bolsa-de-empleo/', `#__content`.`id`,'-',`#__content`.`alias`) AS `url`,			  `#__content`.`title`,			  `#__content`.`introtext`,			  DATE_FORMAT(`#__content`.`created`,'%d de %m de %Y') AS created			FROM
		  `#__content`
		  INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)		  WHERE		  `#__content`.`catid` = 25		  AND		  `#__content`.`state` = 1		  ".$where."
			ORDER BY
		`#__content`.`created` DESC";		$db->setQuery($sql);
		$categorias = $db->loadObjectList();
		$data=$db->loadObjectList();		$ds=DIRECTORY_SEPARATOR;		foreach($data as $temp)		{			$html[]=array			(				'url'=>$pageURL.$temp->url,				'titulo'=>$temp->title,				'texto'=>$temp->introtext,				'fecha'=>$temp->created			);		}		return $html;
	}
}
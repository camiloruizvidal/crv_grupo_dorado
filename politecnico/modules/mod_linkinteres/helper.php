<?php
class ModLinkInteres
{
    public static function getLink()
	{		$ds=DIRECTORY_SEPARATOR;		$html= '';		$con = new JConfig();		$dbprefix = $con->dbprefix;		$db = &JFactory::getDBO();		$sql = "SELECT 			  concat(`#__categories`.`id`, '-', `#__categories`.`alias`) AS `url_cat`,			  concat(`#__content`.`id`, '-', `#__content`.`alias`) AS `url_art`,			  concat(`#__categories`.`id`,'-',`#__categories`.`alias`, '/', `#__content`.`id`,'-',`#__content`.`alias`) AS `url`,			  `#__content`.`id`,			  `#__content`.`title`,			  `#__content`.`alias`,			  concat(SUBSTRING(`#__content`.`introtext`,1,80),'...' ) AS `introtext`,			  `#__content`.`images`			FROM
		  `#__content`
		  INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)		  WHERE		  `#__content`.`catid` = 14
		ORDER BY
		`#__content`.`title` ASC";
		$db->setQuery($sql);
		$categorias = $db->loadObjectList();
		$data=$db->loadObjectList();
		foreach($data as $key=>$temp)
		{			$html.='<a href="'.$temp->url.'">'.$temp->title.'</a><br/>';		}		return $html;
	}
}
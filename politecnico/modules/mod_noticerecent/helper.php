<?php
class ModNoticeRencet
{
    public static function getNotices(&$params)
	{		$cant=$params->get('cant');		$ds=DIRECTORY_SEPARATOR;		$html= '';		$con = new JConfig();		$db = &JFactory::getDBO();		$sql = "SELECT 			  concat(`#__categories`.`id`, '-', `#__categories`.`alias`) AS `url_cat`,			  concat(`#__content`.`id`, '-', `#__content`.`alias`) AS `url_art`,			  concat(`#__categories`.`alias`, '/', `#__content`.`id`,'-',`#__content`.`alias`) AS `url`,			  `#__content`.`id`,			  `#__content`.`title`,			  `#__content`.`alias`,			  concat(SUBSTRING(`#__content`.`introtext`,1,80),'...' ) AS `introtext`,			  `#__content`.`images`			FROM
		  `#__content`
		  INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)		  WHERE		  `#__content`.`catid` = 8
		ORDER BY
		`#__content`.`created` DESC		LIMIT {$cant}";
		$db->setQuery($sql);		echo '<pre>';		var_dump($db);		exit('true');
		$categorias = $db->loadObjectList();
		$data=$db->loadObjectList();
		foreach($data as $key=>$temp)
		{
			$url=json_decode($temp->images)->image_intro;
			if($url==='')
			{
				$url="templates{$ds}crvtemplate{$ds}img{$ds}Logo.jpg";
			}			$html.='<div class="col-md-12">                                    <div class="col-md-4">                                        <img class="img-responsive" src="'.$url.'" alt="' . $temp->title . '">                                    </div>                                    <div class="col-md-8">                                        <div class="caption">                                            <h3>' . $temp->title . '</h3>                                            <p>' . strip_tags($temp->introtext) . '...</p>                                            <p>                                                <a href="' . $temp->url . '" class="btn btn-primary" role="button">Ver mas</a>                                             </p>                                        </div>                                    </div>                                </div>';		}		return $html;
	}
}
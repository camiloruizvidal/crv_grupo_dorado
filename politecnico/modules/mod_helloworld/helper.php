<?php
class ModHelloWorldHelper
{
    public static function getNotices()
	{		$ds=DIRECTORY_SEPARATOR;		$html= '';		$con = new JConfig();		$dbprefix = $con->dbprefix;		$db = &JFactory::getDBO();		$sql = "SELECT 			  concat(`#__categories`.`id`, '-', `#__categories`.`alias`) AS `url_cat`,			  concat(`#__content`.`id`, '-', `#__content`.`alias`) AS `url_art`,			  concat(`#__categories`.`id`,'-',`#__categories`.`alias`, '/', `#__content`.`id`,'-',`#__content`.`alias`) AS `url`,			  `#__content`.`id`,			  `#__content`.`title`,			  `#__content`.`alias`,			  concat(SUBSTRING(`#__content`.`introtext`,1,80),'...' ) AS `introtext`,			  `#__content`.`images`			FROM
		  `#__content`
		  INNER JOIN `#__categories` ON (`#__content`.`catid` = `#__categories`.`id`)
		ORDER BY
		`#__content`.`created` DESC
		LIMIT ";
		$db->setQuery($sql);
		$categorias = $db->loadObjectList();
		$data=$db->loadObjectList();
		foreach($data as $key=>$temp)
		{
			$url=json_decode($temp->images)->image_intro;
			if($url==='')
			{
				$url="templates{$ds}crvtemplate{$ds}img{$ds}logoRetina.png";
			}			$html.='<div class="col-md-12">                                    <div class="col-md-4">                                        <img class="img-responsive" src="'.$url.'" alt="' . $temp->title . '">                                    </div>                                    <div class="col-md-8">                                        <div class="caption">                                            <h3>' . $temp->title . '</h3>                                            <p>' . strip_tags($temp->introtext) . '...</p>                                            <p>                                                <a href="' . $temp->title . '" class="btn btn-primary" role="button">Ver mas</a>                                             </p>                                        </div>                                    </div>                                </div>';		}		return $html;
	}
}
<?php
defined('_JEXEC') or die;
?>
<div class="custom-services">
<?php
foreach($Services as $temp)
{
$text=trim(strip_tags($temp['text']));
if(strlen($text)>140)
{
	$text.=substr($text,1,140).'...';
}
echo'
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		<div class="service_box">
			<img src="'.$temp['img'].'" alt="'.$temp['title'].'" class="img-responsive">
				<div class="title">
					<h3>'.$temp['title'].'</h3>
				</div><!-- end title -->
			<p>'.$text.'</p>
			<a href="'.$temp['url'].'" class="readmore">Ver mas</a>
		</div><!-- end service_box -->
	</div><!-- end col-sm-4 -->
';
}?>
</div><!-- end cutom services -->
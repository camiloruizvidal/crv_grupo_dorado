<?php 
// No direct access
defined('_JEXEC') or die; ?>

<div class="list-group">
<?php 
foreach($Nosotros as $temp)
{
	echo '<a href="'.$temp['url'].'" class="list-group-item">
	<h4 class="list-group-item-heading">'.$temp['nombre'].'</h4>
		<p class="list-group-item-text">';
	if(strlen($temp['texto'])>600)
	{
		$temp['texto']=substr($temp['texto'],0,600).'...<br/><button class="btn btn-success">Leer mas</button>';
	}
	echo $temp['texto'].'</p>
	</a>';
	
}
?>
</div>
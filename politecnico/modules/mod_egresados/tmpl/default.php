<?php 
// No direct access
defined('_JEXEC') or die; ?>

<div class="list-group">
<?php 
foreach($Egresados as $temp)
{
	echo '<a href="'.$temp['url'].'" class="list-group-item">
	<h4 class="list-group-item-heading">'.$temp['nombre'].'</h4>
	</a>';
	
}
?>
</div>
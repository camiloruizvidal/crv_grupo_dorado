<?php 
// No direct access
defined('_JEXEC') or die;
$url_actual=$_SERVER['REDIRECT_URL'];
$total_paginas=count($empleos)/10;
$para=array();
$search='';
$f_inicio='';
$f_fin='';
$pag='';
if(isset($_GET['search']))
{
	$search=$_GET['search'];
	$para[]='search='.$search;
}
if(isset($_GET['f_inicio']))
{
	$f_inicio=$_GET['f_inicio'];
	$para[]='f_inicio='.$f_inicio;
}
if(isset($_GET['f_fin']))
{
	$f_fin=$_GET['f_fin'];
	$para[]='f_fin='.$f_fin;
}
if(isset($_GET['pag']))
{
	$pag=$_GET['pag'];
	$para[]='pag='.$pag;
}
else
{
	$pag='1';
}
if(count($para)>0)
{
	foreach($para as $key=>$temp)
	{
		$para[$key]=urlencode($temp);
	}
	$url_actual.='?'.implode('&',$para);
}
?>
<style>
.find{
	color:red;
	background-color:yellow;
}
</style>
<script>
$(function()
{
	$('.fecha').datepicker({
		dateFormat:'yy-mm-dd'
	});
	
});
</script>
<div class="row">
	<form action="<?php echo $url_actual;?>" method="get">
		<div class="col-md-6">
			<label>Buscar</label>
			<input value="<?php echo $search;?>" placeholder="Ingrese un criterio de busqueda" name="search" class="form form-control">
		</div>
		<div class="col-md-3">
			<label>Fecha de inicio</label>
			<div class="input-group">
			<span class="input-group-addon">
				<i class="glyphicon glyphicon-calendar"></i>
			</span>
			<input value="<?php echo $f_inicio;?>"  name="f_inicio" class="fecha form form-control">
			</div>
		</div>
		<div class="col-md-3">
			<label>Fecha de fin</label>
			<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">
				<i class="glyphicon glyphicon-calendar"></i>
			</span>
			<input  value="<?php echo $f_fin;?>" name="f_fin" class="fecha form form-control">
			</div>
		</div>
		<div class="col-md-3">
		<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-search"></i></button>
		</div>
	</form>
</div>
<div class="row">
<div class="col-md-12">
<h3>Empleos</h3>
</div>
</div>

<?php
foreach($empleos as $temp)
{
	//$temp['titulo']=str_replace($search,$temp['titulo'],'<span class="find">'.$search.'</span>');
	$temp['titulo']=str_replace(strtoupper($search),'<i class="find">'.strtoupper($search).'</i>', strtoupper($temp['titulo']));
	$temp['texto']=str_replace(strtoupper($search),'<i class="find">'.strtoupper($search).'</i>', strtoupper($temp['texto']));
	echo'	<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="thumbnail">
					<div class="caption">
						<h3 align="center"><a style="color:#000" href="'.$temp['url'].'">'.$temp['titulo'].'</a></h3>
						<p>'.$temp['texto'].'</p>
						<i style="">Oferta publicada el '.$temp['fecha'].'</i>
						<p><a class="btn btn-primary" href="'.$temp['url'].'"><i class="glyphicon glyphicon-briefcase"></i> Revisar</a> </p>
					</div>
				</div>
			</div>
		</div>
	';
}
if(count($empleos)===0)
{
	echo '<center><div class="alert alert-danger" role="alert">NO SE HAN ENCONTRADO RESULTADOS</div></center>';
}?>
<nav aria-label="Page navigation">
  <ul class="pagination">
	<?php
	for($j=0;$j<$total_paginas;$j++)
	{
		$i=$j+1;
		$active='';
		if($pag==$i)
		{
			$active=' class="active" ';
		}
		echo'<li'.$active.'><a href="'.$url_actual.'&pag='.$i.'">'.$i.'</a></li>'."\n";
	}
	?>
  </ul>
</nav>
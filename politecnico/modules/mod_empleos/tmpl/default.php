<?php 
// No direct access
defined('_JEXEC') or die;
$cant=10;
$url_actual=$_SERVER['REDIRECT_URL'];
$total_paginas=count($empleos)/$cant;
$para=array();
$search='';
$f_inicio='';
$f_fin='';
$pag='';
if(isset($_GET['search']))
{
	$search=$_GET['search'];
	$para[]='search='.urlencode($search);
}
if(isset($_GET['f_inicio']))
{
	$f_inicio=$_GET['f_inicio'];
	$para[]='f_inicio='.urlencode($f_inicio);
}
if(isset($_GET['f_fin']))
{
	$f_fin=$_GET['f_fin'];
	$para[]='f_fin='.urlencode($f_fin);
}
if(isset($_GET['pag']))
{
	$pag=$_GET['pag'];
}
else
{
	$pag='1';
}
if(count($para)>0)
{
	$url_actual.='?'.implode('&',$para);
}
?>
<style>
.thumbnail:hover{
	    background: #e9f5fb;
    cursor: pointer;
}
.find{
	background-color: #FFFFCC;
	font-weight: bold;
	padding: 1px 0;
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
<div class="panel panel-success">

<div class="panel-heading">
Busqueda
</div>
<div class="panel-body">
	<form action="<?php echo $url_actual;?>" method="get">
		<div class="col-md-6">
			<label>Buscar</label>
			<div class="input-group">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-search"></i></button>
				</span>
				<input value="<?php echo $search;?>" placeholder="Ingrese un criterio de busqueda" name="search" class="form form-control">
				
			</div>
			
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
		
	</form>
</div>
</div>
</div>
<div class="row">
<div class="panel panel-success">

<div class="panel-heading">
Empleos
</div>
<div class="panel-body">

<?php
for($i=0;$i<$cant;$i++)
{
	$idx=($pag*$cant)-$cant+$i;
	if(isset($empleos[$idx]))
	{
		$temp=$empleos[$idx];
		$temp['titulo']=str_replace(strtoupper($search),'<i class="find">'.strtoupper($search).'</i>', strtoupper($temp['titulo']));
		$temp['texto']=str_replace(strtoupper($search),'<i class="find">'.strtoupper($search).'</i>', strtoupper($temp['texto']));
		echo'	<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="thumbnail">
						<div class="caption">
							<h3><a style="color:#1e82c4" href="'.$temp['url'].'">'.$temp['titulo'].'</a></h3>
							<p>'.$temp['texto'].'</p>
							<i style="color:#7f7f7f;">'.$temp['fecha'].'</i>
							<p><a class="btn btn-primary" href="'.$temp['url'].'"><i class="glyphicon glyphicon-briefcase"></i> Revisar</a> </p>
						</div>
					</div>
				</div>
			</div>
		';
	}
}
if(count($empleos)===0)
{
	echo '<center><div class="alert alert-danger" role="alert">NO SE HAN ENCONTRADO RESULTADOS</div></center>';
}?>

</div>
<div class="panel-footer">
<div class="container-alt">

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
</div>
</div>
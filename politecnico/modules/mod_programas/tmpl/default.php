<?php 
// No direct access
defined('_JEXEC') or die; ?><style>
.program{
	background: -webkit-linear-gradient(#00894B, #009D5C);
	background: -moz-linear-gradient(#00894B, #009D5C);
	background: -o-linear-gradient(#00894B, #009D5C);
}
.program a{
	color:#fff;
}
.program .col-md-9{
	padding-top: 50px;
	padding-bottom: 50px;
}
#p1{}
#p2{}
#p3{}
#p4{}
#p5{}
#p6{}

</style>
<?php 
foreach($programas as $temp)
{
	echo '<div class="row program" id="p'.$temp['id'].'">
		<a href="'.$temp['url'].'">
			<div class="col-md-3">
				<center><img class="img-responsive" src="'.$temp['img'].'"/><br>
				<label>'.$temp['nombre'].'</label></center>
			</div>
			<div class="col-md-9">
				';
				if(strlen($temp['texto'])>600)
				{
					$temp['texto']=substr($temp['texto'],0,600).'...<br/><button class="btn btn-primary">Leer mas</button>';
				}
				echo $temp['texto'].'
			</div>
		</a>
	</div>
	';
}
?>

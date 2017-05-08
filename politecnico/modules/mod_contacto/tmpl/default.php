<?php 
// No direct access
defined('_JEXEC') or die; ?>
<div class="col-md-3">
	<h3>SOBRE NOSOTROS</h3>
	<p><?php echo $contacto['nosotros'];?></p>
</div>
<div class="col-md-3">
	<h3>ULTIMAS NOTICIAS</h3>
    <ul>
	<?php 
		foreach($contacto['noticias'] as $temp)
		{
			echo '<li><a href="'.$temp['url'].'">'.$temp['title'].'</a></li>'."\n";
		}
	?>
	</ul>
</div>
<div class="col-md-3">
	<h3>CONTACTO</h3>
	Direccion: <a href="<?php echo $contacto['gmaps']?>" target="_blank"><?php echo $contacto['direccion']; ?></a><br>
	Telefono: <a href="tel:<?php echo $contacto['tel1']?>"><?php echo $contacto['tel1']?></a><br>
	Email: <a href="mailto:<?php echo $contacto['email']?>"><?php echo $contacto['email']?></a>
	<script>$(function()
	{
		$('#tel2').html('<a class="link" href="tel:Prueba de telefono"><i class="glyphicon glyphicon-phone-alt"></i> <?php echo $contacto['tel2']?></a>');
	});
	</script>
</div>
<div class="col-md-3">
	<h3>REDES SOCIALES</h3>
	<?php
	if(trim($contacto['facebook'])!='')
	{
		echo '<a href="'.trim($contacto['facebook']).'" target="_blank"><img src="/crv_grupo_dorado/politecnico/templates/crvtemplate/img/icons/fb.jpg" alt="Facebook" style="width: 40px;"></a>';
	}
	if(trim($contacto['instagram'])!='')
	{
		echo '<a href="'.trim($contacto['instagram']).'" target="_blank"><img src="/crv_grupo_dorado/politecnico/templates/crvtemplate/img/icons/instagram.jpg" alt="Instagram" style="width: 40px;"></a>';
	}
	if(trim($contacto['youtube'])!='')
	{
		echo '<a href="'.trim($contacto['youtube']).'" target="_blank"><img src="/crv_grupo_dorado/politecnico/templates/crvtemplate/img/icons/youtube.png" alt="Youtube" style="width: 40px;"></a>';
	}
	if(trim($contacto['twitter'])!='')
	{
		echo '<a href="'.trim($contacto['twitter']).'" target="_blank"><img src="/crv_grupo_dorado/politecnico/templates/crvtemplate/img/icons/twitter.png" alt="Twitter" style="width: 40px;"></a>';
	}
	?>
</div>

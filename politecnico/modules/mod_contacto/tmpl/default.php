<?php 
// No direct access
defined('_JEXEC') or die; ?>
<div class="col-md-3">
<h3>CONTACTO</h3>
	Direccion: <a href="<?php echo $contacto['gmaps'];?>" target="_blank"><?php echo $contacto['direccion'];?></a><br>
	Telefono: <a href="tel:<?php echo $contacto['tel1'];?>"><?php echo $contacto['tel1'];?></a><br>
	Email: <a href="mailto:<?php echo $contacto['email'];?>"><?php echo $contacto['email'];?></a>
	<script>$(function()
	{
		$('#tel2').html('<a class="link" href="tel:<?php echo $contacto['tel2'];?>"><i class="glyphicon glyphicon-phone-alt"></i> <?php echo $contacto['tel2'];?></a>');
	});
	</script>
</div>


<?php defined( '_JEXEC' ) or die; 
include_once JPATH_THEMES.'/'.$this->template.'/logic.php';
$ds=DIRECTORY_SEPARATOR;
$v='?v='.date('YmdHis');
$pageURL = JURI::base();
?><!DOCTYPE html>
<html lang="en">
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

  <title>A su salud IPS</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <link href="<?php echo $tpath; ?>/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo $tpath; ?>/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo $tpath; ?>/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo $tpath; ?>/css/owl-carousel.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="<?php echo $tpath; ?>/rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="<?php echo $tpath; ?>/css/style.css?v=<?php echo $v;?>" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900' rel='stylesheet' type='text/css'>
  
	<script src="<?php echo $tpath; ?>/js/jquery.js"></script>
	<script src="<?php echo $tpath; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $tpath; ?>/js/bootstrap-datetimepicker.js"></script>
	<script src="<?php echo $tpath; ?>/js/menu.js"></script>
	<script src="<?php echo $tpath; ?>/js/retina-1.1.0.js"></script>
	<script src="<?php echo $tpath; ?>/js/custom.js"></script>
  </head>
<body>

<div class="animationload">
<div class="loader">Loading...</div>
</div>

    <div class="topbar">
    	<div class="container">
        	<div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="callout">
                        <span class="topbar-email"><i class="fa fa-envelope"></i> <a href="mailto:email@email.com">email@email.com</a></span>
                        <span class="topbar-phone"><i class="fa fa-phone"></i> <a href="tel:3000000000">llamenos: 3000123456789<a></span>
                    </div><!-- end callout -->
                </div><!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12">
				</div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end topbar -->
    
	<header class="header">
		<div class="container">
			<nav class="navbar yamm navbar-default">
				<div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index-2.html" class="navbar-brand"><img src="<?php echo $tpath; ?>/images/logo.png" alt="asusalud"></a>
        		</div><!-- end navbar-header -->
                
				<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Inicio </a>
                        </li><!-- end standard drop down -->
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Quienes somos </a>
                        </li><!-- end standard drop down -->
						<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Correo institucional</a>	
						</li><!-- end drop down -->
                        <li class="active"><a href="contact.html">Contacto</a></li>
					</ul><!-- end navbar-nav -->
				</div><!-- #navbar-collapse-1 -->
			</nav><!-- end navbar yamm navbar-default -->
		</div><!-- end container -->
    </header><!-- end header -->
	<div class="shadow"></div>

   <div class="slider-wrapper">
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <img src="<?php echo $tpath; ?>/demos/sliderbg_01.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption big_title_slider customin customout start"
                            data-x="center" data-hoffset="210"
                            data-y="170"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">Bienvenido <span>A SU SALUD</span><br>
							IPS
                        </div>
                        
                        <div class="tp-caption small_title customin customout start"
                            data-x="center" data-hoffset="204"
                            data-y="290"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1300"
                            data-start="800"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> 
							Quisque mollis pulvinar tempor. Pellentesque<br> 
							sollicitudin a lacus eu rutrum. Vestibulum <br></div>
                        
                        <div class="tp-caption small_title customin customout start"
                            data-x="center" data-hoffset="12"
                            data-y="390"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1100"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="#" class="btn btn-dark btn-lg">ver mas</a>
                        </div>
                        
                        <div class="tp-caption small_title customin customout start"
                            data-x="center" data-hoffset="180"
                            data-y="390"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1400"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="#" class="btn btn-primary btn-lg">contactanos</a>
                        </div>
                        
                        <div class="tp-caption customin customout"
                            data-x="left" data-hoffset="60"
                            data-y="bottom" data-voffset="70"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="700"
                            data-easing="Power4.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3"><img src="<?php echo $tpath; ?>/demos/slider_man_01.png" alt="">
                        </div>
                    </li>
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <img src="<?php echo $tpath; ?>/demos/sliderbg_02.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption big_title_slider customin customout start"
                            data-x="center" data-hoffset="240"
                            data-y="170"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">BIENVENIDO <span>A SU SALUD</span><br>
							IPS
                        </div>
                        
                        <div class="tp-caption small_title customin customout start"
                            data-x="left" data-hoffset="485"
                            data-y="290"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1300"
                            data-start="800"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><img src="<?php echo $tpath; ?>/images/slider_icon.png" alt=""> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam volutpat, neque ut sod.
                        </div>

                        <div class="tp-caption small_title customin customout start"
                            data-x="left" data-hoffset="485"
                            data-y="330" 
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1300"
                            data-start="900"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><img src="<?php echo $tpath; ?>/images/slider_icon.png" alt=""> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam volutpat, neque ut sod.
                        </div>

                        <div class="tp-caption small_title customin customout start"
                            data-x="left" data-hoffset="485"
                            data-y="370"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1300"
                            data-start="1000"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><img src="<?php echo $tpath; ?>/images/slider_icon.png" alt=""> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam volutpat, neque ut sod
                        </div>
                          
                        <div class="tp-caption small_title customin customout start"
                            data-x="center" data-hoffset="-40"
                            data-y="430"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1100"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="#" class="btn btn-dark btn-lg">Ver mas</a>
                        </div>
                        
                        <div class="tp-caption small_title customin customout start"
                            data-x="center" data-hoffset="135"
                            data-y="430"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1400"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="#" class="btn btn-primary btn-lg">Contactar</a>
                        </div>
                    </li>
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <img src="<?php echo $tpath; ?>/demos/sliderbg_01.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption big_title_slider customin customout start"
                            data-x="center" data-hoffset="200"
                            data-y="170"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">Bienvenido <span>A SU SALUD</span><br>
							IPS
                        </div>
                        
                        <div class="tp-caption small_title customin customout start"
                            data-x="center" data-hoffset="204"
                            data-y="290"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1300"
                            data-start="800"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">asusalud is a prefect template for medical and health related projects or<br>
							 businesses. Easy to customizable and very easy to use!<br>
							 We Provide a Lifetime free update! for our template...
                        </div>
                        
                        <div class="tp-caption small_title customin customout start"
                            data-x="center" data-hoffset="12"
                            data-y="390"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1100"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="#" class="btn btn-dark btn-lg">ver mas</a>
                        </div>
                        
                        <div class="tp-caption small_title customin customout start"
                            data-x="center" data-hoffset="180"
                            data-y="390"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1400"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="#" class="btn btn-primary btn-lg">contactanos</a>
                        </div>
                        
                        <div class="tp-caption customin customout"
                            data-x="left" data-hoffset="60"
                            data-y="bottom" data-voffset="70"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="700"
                            data-easing="Power4.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3"><img src="<?php echo $tpath; ?>/demos/slider_woman_01.png" alt="">
                        </div>
                    </li>
                 </ul>
			</div>
        </div>
	</div><!-- end slider-wrapper -->
    
	<div class="white-wrapper">
    	<div class="container">
        	<div class="general-row">
				<jdoc:include type="component" />
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end white-wrapper -->
    
	<div class="grey-wrapper">
    	<div class="container">
        	<div class="general_row">
			<jdoc:include type="modules" name="carrousel" style="none" />
            	<!-- end row -->
            </div><!-- end general row -->
        </div><!-- end container -->
    </div><!-- end grey-wrapper -->

	<div class="white-wrapper">
    	<div class="container">
		<div class="big-title clearfix">
                	<h3>Calendario de visitas medicas <i class="glyphicon glyphicon-plus" style="color:#5cb85c"></i></h3>
                </div>
			<div class="col-md-4">
			<h3>Mes anterior</h3>
				<iframe src="https://fullcalendar.io/js/fullcalendar-3.4.0/demos/agenda-views.html" style="width:100%; height :400px;"></iframe>
			</div>
			<div class="col-md-4">
			<h3>Mes actual</h3>
				<iframe src="https://fullcalendar.io/js/fullcalendar-3.4.0/demos/agenda-views.html" style="width:100%; height :400px;"></iframe>
			</div>
			<div class="col-md-4">
			<h3>Mes siguiente</h3>
				<iframe src="https://fullcalendar.io/js/fullcalendar-3.4.0/demos/agenda-views.html" style="width:100%; height :400px;"></iframe>
			</div>
		</div><!-- end container -->
    </div><!-- end white-wrapper -->

	<div class="custom-wrapper">
    	<div class="container">
       		<div class="newsletter_wrapper">
            	<h3>Escribanos y estaremos en contacto con usted</h3>

                <div class="row margin-top">
                    <form id="loginform" method="post" name="loginform">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Tu nombre">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="text" class="form-control" placeholder="Tu correo electronico">
                                </div>
                            </div>
                        </div>      	
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input type="text" class="form-control" placeholder="Tu numero telefonico">
                                </div>
                            </div>
                        </div>    
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                                    <textarea class="form-control" placeholder="Su comentario"></textarea>
                                </div>
                            </div>
                        </div>    
                        <div class="clearfix"></div><br>
                        <button class="btn btn-default btn-lg">Enviar</button>    
                    </form>
                </div>
                                 
            </div><!-- end newsletter_wrapper -->
       	</div><!-- end container -->
    </div><!-- end custom_wrapper -->
    
    <footer class="footer">
                        <div class="container">
                            <jdoc:include type="modules" name="footer" style="none" />
                            <div class="col-md-12">
                                <div id="copy-rigth">
                                    <a href="http://solucionescrv.com" target="_blank">DISEÑO WEB POR <img src="<?php echo $tpath; ?>/images/logo-crv.png" alt="logo crv"> SOLUCIONES SOFTWARE</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                
	<div class="dmtop">Scroll to Top</div>
    
	<!-- Main Scripts-->


	<!-- CALENDAR WIDGET -->
	<script type="text/javascript">
		(function($) {
		  "use strict";
			$('.form_datetime').datetimepicker({
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				forceParse: 0,
				showMeridian: 1
			});
		})(jQuery);
	</script>
	<script type="text/javascript" src="<?php echo $tpath; ?>/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="<?php echo $tpath; ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript">
		(function($) {
		  "use strict";
			var revapi;
			jQuery(document).ready(function() {
				revapi = jQuery('.tp-banner').revolution(
				{
					delay:9000,
					startwidth:1170,
					startheight:560,
					hideThumbs:10,
					fullWidth:"on",
					forceFullWidth:"on"
				});
			});	//ready
		})(jQuery);
	</script>
    
	<!-- CAROUSEL WIDGET -->
	<script src="<?php echo $tpath; ?>/js/owl.carousel.min.js"></script>
	<script>
		(function($) {
		  "use strict";
			// OWL Carousel
			$("#owl-testimonial-widget").owlCarousel({
				items : 2,
				lazyLoad : true,
				navigation : true,
				pagination : false,
				autoPlay: false
			});

			// OWL Carousel
			$("#owl-blog").owlCarousel({
				items : 3,
				lazyLoad : true,
				navigation : true,
				pagination : false,
				autoPlay: false
			});
		})(jQuery);
	</script>
    
</body>
</html>
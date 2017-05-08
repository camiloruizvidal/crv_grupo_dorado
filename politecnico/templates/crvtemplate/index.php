<?php
$v = '?v=' . date('YmdHis');
?>
<?php defined( '_JEXEC' ) or die; 
include_once JPATH_THEMES.'/'.$this->template.'/logic.php';
?><!doctype html>
<html lang="<?php echo $this->language; ?>">
<head>
<script>var url_fil="<?php echo $tpath; ?>/";</script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">        
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $tpath; ?>/css/bootstrap/bootstrap.min.css" />        
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $tpath; ?>/css/bootstrap/bootstrap-theme.css" />        
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $tpath; ?>/css/jquery/jquery-ui.css" />        
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $tpath; ?>/css/jquery/jquery-ui.theme.css" />        
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $tpath; ?>/css/styles/style.css<?php echo $v; ?>" />        
        <script src="<?php echo $tpath; ?>/js/jquery/jquery.js" type="text/javascript"></script>
        <script src="<?php echo $tpath; ?>/js/jquery/jquery-ui.js" type="text/javascript"></script>
        <script src="<?php echo $tpath; ?>/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo $tpath; ?>/js/jquery/responsiveslides.min.js" type="text/javascript"></script>
        <script src="<?php echo $tpath; ?>/js/sources/syshtl.js<?php echo $v; ?>" type="text/javascript"></script>
        <title>Plantilla politecnico</title>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
		 <jdoc:include type="head" />
    </head>
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>">
        <div class="panel panel-default" id="navbar_panel">
            <div class="panel-heading">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <a class="link" href="tel:0328369000"><i class="glyphicon glyphicon-phone-alt"></i> 8369000</a></a>
                    </div>
                    <div class="col-md-6">
                        <a class="link" href="#"><i class="glyphicon glyphicon-envelope"></i> Correo institucional</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="logo" id="nav_logos">
                </div>
            </div>
            <div class="panel-menu">
                <!-- Static navbar -->
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav" style="margin: auto;">
                                <li class="active"><a href="#">INICIO</a></li>
                                <li><a href="#">NOSOTROS</a></li>
                                <li><a href="#">PROGRAMAS</a></li>
                                <li><a href="#">PREINSCRIPCION</a></li>
                            </ul>
                            <form class="navbar-form navbar-right" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Buscar">
                                </div>
                            </form>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>
            </div>
        </div>

        <div class="container-fluid" id="content-ini">
		
            <script>
                $(function () {
                    $("#sliders").responsiveSlides({
                        maxwidth: 2880,
                        speed: 4000,
                        timeout: 5000,
                        random: true,
                        pager: false,
                        //nav: true,
                        namespace: "large-btns",
                        pauseControls: true,
                    });
                });
            </script>
            <!--<div class="container-fluid">-->
            <div                            id="imagenes">
                <ul id="sliders">
                    <li><img class="img-responsive" src="<?php echo $tpath; ?>/img/baner/1.jpg"/></li>
                    <li><img class="img-responsive" src="<?php echo $tpath; ?>/img/baner/2.jpg"/></li>
                    <li><img class="img-responsive" src="<?php echo $tpath; ?>/img/baner/3.jpg"/></li>
                </ul>
            </div>
            <div id="items">
                <ul id="item_menu">
                    <li id="item1">
                        <a href="#">
                            <div class="item_div">
                                <div class="img-circule">
                                    <img src="<?php echo $tpath; ?>/img/icons/user.png">
                                </div>
                                <span>ESTUDIANTES</span>
                            </div>
                        </a>
                    </li>
                    <li id="item2">
                        <a href="15-banner-items/1-q10">
                            <div class="item_div">
                                <div class="img-circule">
                                    <img src="<?php echo $tpath; ?>/img/icons/q10.png">
                                </div>
                                <span>Q10</span>
                            </div>
                        </a>
                    </li>
                    <li id="item3">
                        <a href="#">
                            <div class="item_div">
                                <div class="img-circule">
                                    <img src="<?php echo $tpath; ?>/img/icons/sgc.png">
                                </div>
                                <span>SGC</span>
                            </div>
                        </a>
                    </li>
                    <li id="item4">
                        <a href="#">
                            <div class="item_div">
                                <div class="img-circule">
                                    <img src="<?php echo $tpath; ?>/img/icons/college-512.png">
                                </div>
                                <span>EGRESADOS</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            
			<div id="content">
                <div class="col-md-12">

                    <div class="container-fluid">
                        <div class="col-md-3">
                            <div class="cab">PQRS</div>
                            <div class="container-fluid">
                                <img src="<?php echo $tpath; ?>/img/noticias/pqrs.png" class="img-responsive"/>
                            </div>
							<div class="sidebar">
                            
                                <div class="cab">links de interes</div>
                                <div class="container-fluid">
                                    <a href="#">BECAS</a><br/>
                                    <a href="#">REGLAMENTO</a><br/>
                                    <a href="#">BOLETIN DE CALIDAD</a><br/>
                                    <a href="#">SEDES SUROCCIDENTE COLOMBIANO</a><br/>
                                    <a href="#">SEDES POPAY&#193;N</a><br/>
                                </div>
                                <div class="cab">eventos</div>
                                <div class="container-fluid">
                                    <img src="<?php echo $tpath; ?>/img/noticias/evento.png" class="img-responsive" alt="evento"/>

                                </div>
                        </div>
                        </div>
                        <div class="col-md-9">
                            <div class="cab">Noticias</div>
                            <div class="notice">
							  <jdoc:include type="modules" name="debug" />
							  <jdoc:include type="modules" name="position-10" />
							  <jdoc:include type="component" />

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12" id="footer_div">
                    <footer class="footer">
                        <div class="container">
                            <div class="col-md-3">
                                <h3>SOBRE NOSOTROS</h3>
                                <P>Indicamos informacion basica de  la empresa y demas informacion que sea relevante para el usuario</P>
                            </div>
                            <div class="col-md-3">
                                <h3>ULTIMAS NOTICIAS</h3>
                                <ul>
                                    <li><a href="#">Noticia numero 1</a></li>
                                    <li><a href="#">Noticia numero 2</a></li>
                                    <li><a href="#">Noticia numero 3</a></li>
                                    <li><a href="#">Noticia numero 4</a></li>
                                    <li><a href="#">Noticia numero 5</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h3>CONTACTO</h3>
                                Direccion: <a href="https://www.google.com/maps/place/Politecnico+Latinoamericano+Del+Norte/@2.4421009,-76.6069539,17z/data=!4m5!3m4!1s0x8e30030f8e9a9279:0x5e6fe39fea57bb33!8m2!3d2.4421009!4d-76.6047652" target="_blank">Calle con carrera Popay&#225;n Cauca Colombia</a><br/>
                                Telefono: <a href="tel:0328369000">8369000</a><br/>
                                Email: <a href="mailto:Email@email.com">Email@email.com</a>
                            </div>
                            <div class="col-md-3">
                                <h3>REDES SOCIALES</h3>
                                <a href="https://www.facebook.com/Politecnico-Latinoamericano-del-Norte-236525263194338" target="_blank"><img src="<?php echo $tpath; ?>/img/icons/fb.jpg" alt="Facebook"style="width: 40px;"/></a>
                            </div>
                            <div class="col-md-12">
                                <div id="copy-rigth">
                                    <a href="http://solucionescrv.com" target="_blank">DISE&#209;O WEB POR <img src="<?php echo $tpath; ?>/img/icons/logo-crv.png" alt="logo crv"/> SOLUCIONES SOFTWARE</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
		
        <div id="CertificacionIcontec">
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
    </body>
</html>
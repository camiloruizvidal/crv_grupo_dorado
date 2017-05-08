<?php
$v = '?v=' . date('YmdHis');
defined( '_JEXEC' ) or die; 
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
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
		 <jdoc:include type="head" />
    </head>
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>">
        <div class="panel panel-default" id="navbar_panel">
            <div class="panel-heading">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <span id="tel2"></span>
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
                                <li><a href="17-main-menu/10-pre-inscripcion">PREINSCRIPCION</a></li>
                            </ul>
                            <form class="navbar-form navbar-right" action="component/search/" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="searchword" placeholder="Buscar">
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
					$('#searchForm').attr('class','col-md-4')
					$('#name_article').html($('title').text());
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
            <div id="imagenes">
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
                        <a href="15-banner-items/8-sistema-de-gestion-de-calidad">
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
                                <a href="#" data-toggle="modal" data-target="#modalpqrs"><img src="<?php echo $tpath; ?>/img/noticias/pqrs.png" class="img-responsive"/></a>
                            </div>
							<div class="sidebar">
								<jdoc:include type="modules" name="position-3"/>
                                <div class="cab">eventos</div>
                                <div class="container-fluid">
                                    <img src="<?php echo $tpath; ?>/img/noticias/evento.png" class="img-responsive" alt="evento"/>

                                </div>
                        </div>
                        </div>
                        <div class="col-md-9">
							<jdoc:include type="modules" name="position-1" style="none" />
                            <div class="cab" id="name_article">Noticias</div>
                            <div class="notice">
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
                            <jdoc:include type="modules" name="position-contact"/>
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
		<div id="pqrs">
            <div class="modal fade" id="modalpqrs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">PQRS</h4>
                        </div>
                        <div class="modal-body">
								<div class="row">
									<form>
									<div class="col-md-6">
										<label>Nombre completo</label>
										<input class="form form-control" name="" id="" required="required"/>
									</div>
									
									<div class="col-md-6">
										<label>Celular</label>
										<input class="form form-control" name="" id="" required="required"/>
									</div>
									<div class="col-md-6">
										<label>Telefono</label>
										<input class="form form-control" name="" id="" required="required"/>
									</div>
									<div class="col-md-6">
										<label>Email</label>
										<input class="form form-control" name="" id="" required="required"/>
									</div>
									<div class="col-md-6">
										<label>Seleccion tipo de cliente</label>
										<select id="" name="" class="form form-control">
											<option value="" selected="selected">Seleccione Tipo</option>
											<option value="estudiante">Estudiante</option>
											<option value="funcionario">Funcionario</option>
											<option value="cliente externo">Otro Cliente Externo</option>
										</select>
									</div>
									<div class="col-md-6">
										<label>Seleccione PQRSF:</label>
										<select id="" name="" class="form form-control">
											<option value="" selected="selected">Seleccione Opción</option>
											<option value="petición">Petición</option>
											<option value="queja">Queja</option>
											<option value="reclamo">Reclamo</option>
											<option value="sugerencia">Sugerencia</option>
											<option value="felicitación">Felicitación</option>
										</select>
									</div>
									<div class="col-md-12">
										<label>Comentarios</label>
										<textarea class="form form-control" name="" id="" required="required"></textarea>
									</div>
									<captcha>
									</form>
								</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Enviar PQRS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
    </body>
</html>
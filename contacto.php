<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sebastián Jiménez</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <link href="style.css" rel="stylesheet">
    
	<script type="text/javascript" src="//use.typekit.net/ctw4igp.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header class="container">
        <div class="col-lg-2 text-center">
            <a href="index.php"><img src="img/logo-menu-header.png" alt=""></a>
        </div>
        <div class="col-lg-8">
            <nav>
            	<ul>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="clinicas-veterinarias-recomendadas.php">Clínicas veterinarias</a></li>
                    <li><a href="#">Profesionales</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-2">
            <ol>
                <li><a href="#"><span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span></a></li>
                <li><a href="#"><span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span></a></li>
            </ol>
        </div>
    
    </header>
    <section id="breadcrumbs">
    	<div class="container no-column">
            <div class="col-lg-12 text-left no-column">
                <ol class="breadcrumb">
                  <li><a href="#">Inicio</a></li>
                  <li class="active">Contacto</li>
                </ol>
            </div>
        </div>
    </section>
	<section id="header-secciones" class="box fwidth text-center">
    	<div class="container no-column">
        	<div class="col-lg-12 text-center no-column">
		    	<img src="img/header-contacto.jpg" alt="">
        	</div>
        </div>
    </section>
    
	<section class="box fwidth">
    	<div class="container no-column contacto">
        	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3 text-center">
            	<p>Completa los campos a continuación, déjanos tu duda o consulta y nos pondremos en contacto a la brevedad.</p>
                <div class="container-fluid">
            	<form>
                	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right no-column">
                    	<label>Nombre</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 text-left ">
                    	<input type="text">
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left no-column">
                    	<span class="requerido">*</span>
                    </div>
                    <div class="clearfix"></div><br>

                	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right no-column">
                    	<label>Apellido</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 text-left ">
                    	<input type="text">
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left no-column">
                    	<span class="requerido">*</span>
                    </div>
                    <div class="clearfix"></div><br>
                    
                	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right no-column">
                    	<label>Mail</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 text-left ">
                    	<input type="email">
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left no-column">
                    	<span class="requerido">*</span>
                    </div>
                    <div class="clearfix"></div><br>
                    
                	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right no-column">
                    	<label>Teléfono</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 text-left ">
                    	<input type="tel">
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left no-column">
                    	<span class="requerido">&nbsp;</span>
                    </div>
                    <div class="clearfix"></div><br>
                    
                	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right no-column">
                    	<label>Mensaje</label>
                    </div>
                	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 text-left">
                    	<textarea></textarea>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left no-column">
                    	<span class="requerido">*</span>
                    </div>
                    <div class="clearfix"></div><br>

                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    	<input type="submit" value="Enviar">
                    </div>
                    
                    
                </form>
                </div>
            </div>
        </div>
    </section>    
    
    
    <footer class="fwidth fleft">
    	<span class="sj"></span>
    	<div class="container logo-menu">
        	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-center logo">
            	<img src="img/logo-menu-header.png" alt="">
                <div class="clearfix"></div>
                <ul>
                    <li><a href="#"><span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                    </span></a></li>
                    <li><a href="#"><span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    </span></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 menu-footer">
            	<ul>
                	<li><a href="blog.php">Blog</a></li>
                    <li><a href="clinicas-veterinarias-recomendadas.php">Clínicas veterinarias</a></li>
                    <li><a href="#">Profesionales</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </footer>
    
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/scripts.js"></script>
    
  </body>
</html>
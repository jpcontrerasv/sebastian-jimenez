<?php include 'header.php'; ?>
    <section id="breadcrumbs">
    	<div class="container no-column">
            <div class="col-lg-12 text-left no-column">
                <ol class="breadcrumb">
                  <li><a href="#">Inicio</a></li>
                  <li class="active">Clinicas Veterinarias Recomendadas</li>
                </ol>
            </div>
        </div>
    </section>
	<section id="header-secciones" class="box fwidth text-center">
    	<div class="container no-column">
        	<div class="col-lg-12 text-center no-column">
		    	<img src="img/img-header-clinicas.jpg" alt="">
        	</div>
        </div>
    </section>
    
	<section class="box fwidth">
        <div id="filtros-tipo" class="container">
        	<div class="col-lg-12 col-xs-12">
                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                    <li class="active"><a href="#animales" data-toggle="tab"><i class="fa fa-paw"></i> Animales</a> </li>
                    <li><a href="#especialidad" data-toggle="tab"><i class="fa fa-user"></i> Especialidad</a> </li>
                    <li><a href="#ubicacion" data-toggle="tab"><i class="fa fa-map-marker"></i> Ubicación</a> </li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
        
        <div id="filtros-secundarios" class="container">
        	<form>
            <div id="my-tab-content" class="tab-content">
                <div class="tab-pane active" id="animales">
                    <label><input class="check-animal" type="checkbox" name="animales" value="todos" id="animales_0">Todos</label>
                    <label><input class="check-animal" type="checkbox" name="animales" value="perros" id="animales_1">Perros</label>
                    <label><input class="check-animal" type="checkbox" name="animales" value="gatos" id="animales_2">Gatos</label>
                    <label><input class="check-animal" type="checkbox" name="animales" value="mamiferos" id="animales_2">Pequeños Mamíferos</label>
                    <label><input class="check-animal" type="checkbox" name="animales" value="aves" id="animales_2">Aves</label>
                    <label><input class="check-animal" type="checkbox" name="animales" value="reptiles" id="animales_2">Reptiles</label>
                </div>
                <div class="tab-pane" id="especialidad">
                    <label><input type="checkbox" name="Especialidad" value="todos" id="Especialidad_0">Todos</label>
                    <label><input type="checkbox" name="Especialidad" value="dermatologia" id="Especialidad_1">Dermatología</label>
                </div>
                <div class="tab-pane" id="ubicacion">
                	<!--<p>Selecciona ciudad</p>
                    <select id="single">
                    	<option>&nbsp;</option>
                        <option>Santiago</option>
                        <option>Valparaíso</option>
                    </select>
                    <select id="multiple" multiple="multiple">
                        <option>Providencia</option>
                        <option>Santiago Centro</option>
                        <option>Estación Central</option>
                    </select>-->
                    <label><input type="checkbox" name="Ubicacion" value="Todos" id="Ubicacion_0">Todos</label>
                    <label><input type="checkbox" name="Ubicacion" value="Santiago Centro" id="Ubicacion_1">Santiago Centro</label>
                    <label><input type="checkbox" name="Ubicacion" value="Providencia" id="Ubicacion_2">Providencia</label>
                    
                                        
                </div>
            </div>
            </form>
        </div>
        <div class="clearfix"></div>
        
        <div id="filtrado" class="box fwidth">
        	<div class="container">
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contenedor-filtros">
                	<p>Filtros seleccionados:&nbsp;&nbsp;<span id="animales-seleccionados"></span>&nbsp;<span id="especialidad-seleccionada"></span>&nbsp;<span id="ubicacion-seleccionada"></span></p>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                	<button class="btn btn-default btn-success"><span class="glyphicon glyphicon-ok"></span> Filtrar</button>
                </div>
            </div>
            <!--/container-->
        </div>
        <div class="clearfix"></div>
    </section>    
    
    
	<section id="lista-de-clinicas" class="box fwidth">
    	<div class="container no-column">
        
        	<div class="item-clinica text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid">
                	<div class="col-lg-12 text-center">
                    	<h4>veteromovil</h4>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-map-marker fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Avenida Providencia #1959, Santiago<br>
                    </div>
                    <div class="dire box fwidth fleft"></div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-list fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Perros, Gatos y Aves. 
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
            
            
        	<div class="item-clinica text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid">
                	<div class="col-lg-12 text-center">
                    	<h4>veteromovil</h4>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-map-marker fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Avenida Providencia #1959, Santiago<br>
                    </div>
                    <div class="dire box fwidth fleft"></div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-list fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Perros, Gatos y Aves. 
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-clinica text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid">
                	<div class="col-lg-12 text-center">
                    	<h4>veteromovil</h4>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-map-marker fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Avenida Providencia #1959, Santiago<br>
                    </div>
                    <div class="dire box fwidth fleft"></div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-list fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Perros, Gatos y Aves. 
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-clinica text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid">
                	<div class="col-lg-12 text-center">
                    	<h4>veteromovil</h4>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-map-marker fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Avenida Providencia #1959, Santiago<br>
                    </div>
                    <div class="dire box fwidth fleft"></div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-list fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Perros, Gatos y Aves. 
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>

        	<div class="item-clinica text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid">
                	<div class="col-lg-12 text-center">
                    	<h4>veteromovil</h4>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-map-marker fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Avenida Providencia #1959, Santiago<br>
                    </div>
                    <div class="dire box fwidth fleft"></div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-list fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Perros, Gatos y Aves. 
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>

        	<div class="item-clinica text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid">
                	<div class="col-lg-12 text-center">
                    	<h4>veteromovil</h4>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-map-marker fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Avenida Providencia #1959, Santiago<br>
                    </div>
                    <div class="dire box fwidth fleft"></div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-list fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Perros, Gatos y Aves. 
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>

        	<div class="item-clinica text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid">
                	<div class="col-lg-12 text-center">
                    	<h4>veteromovil</h4>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-map-marker fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Avenida Providencia #1959, Santiago<br>
                    </div>
                    <div class="dire box fwidth fleft"></div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-list fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Perros, Gatos y Aves. 
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>

        	<div class="item-clinica text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid">
                	<div class="col-lg-12 text-center">
                    	<h4>veteromovil</h4>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-map-marker fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Avenida Providencia #1959, Santiago<br>
                    </div>
                    <div class="dire box fwidth fleft"></div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-list fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Perros, Gatos y Aves. 
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>

        	<div class="item-clinica text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid">
                	<div class="col-lg-12 text-center">
                    	<h4>veteromovil</h4>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-map-marker fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Avenida Providencia #1959, Santiago<br>
                    </div>
                    <div class="dire box fwidth fleft"></div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-list fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Perros, Gatos y Aves. 
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>

        	<div class="item-clinica text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid">
                	<div class="col-lg-12 text-center">
                    	<h4>veteromovil</h4>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-map-marker fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Avenida Providencia #1959, Santiago<br>
                    </div>
                    <div class="dire box fwidth fleft"></div>
                    <div class="clearfix"></div>
                    <div class="col-sm-3 col-xs-1 text-center no-column">
                    	<i class="fa fa-list fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	Perros, Gatos y Aves. 
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
            
        </div>
    </section>    
    
    
    <?php include 'footer.php'; ?>
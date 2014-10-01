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
    
    <div class="container">
    
	<section id="sidebar-filtros" class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-column">
        <div class="box fwidth text-left titular-seccion">
            <h6>Filtros</h6>
        </div>
        <div id="filtros-tipo" class="container-fluid no-column">
        	<div class="col-lg-12 col-xs-12">
                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                    <li class="active"><a href="#animales" data-toggle="tab"><i class="fa fa-paw"></i> Animales</a> </li>
                    <li><a href="#especialidad" data-toggle="tab"><i class="fa fa-user"></i> Especialidad</a> </li>
                    <li><a href="#ubicacion" data-toggle="tab"><i class="fa fa-map-marker"></i> Ubicación</a> </li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
        
        <div id="filtros-secundarios" class="container-fluid no-column">
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
        
        <div id="filtrado" class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contenedor-filtros">
                <p>Filtros seleccionados:&nbsp;&nbsp;<span id="animales-seleccionados"></span>&nbsp;<span id="especialidad-seleccionada"></span>&nbsp;<span id="ubicacion-seleccionada"></span></p>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
                <input type="submit" class="btn btn-success" value="Buscar"/>
            </div>
        </div>
        <div class="clearfix"></div>
        
        <div class="box fwidth text-left titular-seccion">
            <h6>Busca en el mapa</h6>
        </div>
        <div id="geoloc" class="box fwidth fleft text-center">
            
            <button class="btn btn-success" onclick="javascript:showlocation()" ><span class="glyphicon glyphicon-zoom-in"></span> Ver locales cercanos a mi</button>
            
             <div class="ocultar">Latitude: <span id="latitude"></span>        Longitude: <span id="longitude"></span></div>
             
        	 <div id="map-canvas"></div>
        </div>
        <script type="text/javascript"> 
			var map = null;
			function showlocation() {
			   // One-shot position request.
				navigator.geolocation.getCurrentPosition(callback);
			}
			function callback(position) {
				var lat = position.coords.latitude;
				var lon = position.coords.longitude;
				
				document.getElementById('latitude').innerHTML = lat;
				document.getElementById('longitude').innerHTML = lon;
				
				var latLong = new google.maps.LatLng(lat, lon);
				
				var marker = new google.maps.Marker({
				position: latLong
				});      
				
				marker.setMap(map);
				map.setZoom(13);
				map.setCenter(marker.getPosition());
			}
			google.maps.event.addDomListener(window, 'load', initMap);
			function initMap() {
			var mapOptions = {
			  center: new google.maps.LatLng(-36.739055, -71.0574941),
			  zoom: 4,
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
			
			}
        </script>
        
        
        <div class="box fwidth text-left titular-seccion">
            <h6>Directorio</h6>
        </div>
        <div id="form-registra" class="box fwidth">
    		<div class="container-fluid no-column">
    			<div id="formulario-pregunta" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-column text-center">
    				<h3>¿Quieres ver tu tienda acá?</h3>
                    <a href="#" class="btn btn-success">Regístrate con nosotros &nbsp;<span class="glyphicon glyphicon-hand-right"></span></a>
    			</div>
    			<div class="clearfix"></div>
    			<div class="caja-sidebar-home box fwidth no-column hidden-xs">
    				<div class="box fwidth text-left titular-seccion">
    					<h6>Facebook</h6>
    				</div>
    				<div class="content-caja-sidebar-home fwidth text-center">
    					<div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="250" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
    				</div>
    			</div>
                <div class="caja-sidebar-home box fwidth no-column hidden-xs">
                    <div class="box fwidth text-left titular-seccion">
                        <h6>Twitter</h6>
                    </div>
                    <div class="content-caja-sidebar-home fwidth">
                        <a class="twitter-timeline" href="https://twitter.com/lindorfovet" data-widget-id="494934675450638340">Tweets por @lindorfovet</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>
                </div>
    		</div>
        </div>
    </section>    
    
    
	<section id="lista-lugares" class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <div class="box fwidth text-left titular-seccion">
            	<div class="col-lg-2 no-column">
                <h6><strong>Resultados para</strong></h6>
                </div>
                <div class="col-lg-10">
                <p>perros, gatos, dermatología, providencia</p>
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
                    	<h4>la clínica del veteromovil</h4>
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a> 
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
                    	<h4>la clínica del veteromovil</h4>
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
        	<div class="item-lugar text-center">
            	<img src="img/logo-clinica-1.png" alt=""><br>
                <div class="container-fluid no-column">
                	<div class="col-lg-12 text-center no-column">
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
                    	<i class="fa fa-phone fa-lg"></i>
                    </div>
                    <div class="col-sm-9 col-xs-11 text-left">
                    	<a href="tel:+56229651061">+56 2 9978 8997</a>  
                    </div>
                    <div class="clearfix"></div>
                    <a href="single-veterinarias.php" class="vermas">Ver más</a>                     
                </div>
            </div>
            
            
        <div id="paginacion" class="box fwidth fleft text-center">
            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
        
        
        
        
        
        
    </section>    
    
    </div>
    
    <?php include 'footer.php'; ?>
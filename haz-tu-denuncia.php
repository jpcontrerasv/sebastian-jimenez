<?php include 'header.php'; ?>
    
    
    <section id="breadcrumbs">
    	<div class="container no-column">
            <div class="col-lg-12 text-left no-column">
                <ol class="breadcrumb">
                  <li><a href="index.php">Inicio</a></li>
                  <li class="active">Haz tu denuncia</li>
                </ol>
            </div>
        </div>
    </section>
	<section id="header-secciones" class="box fwidth text-center">
    	<div class="container no-column">
        	<div class="col-lg-12 text-center no-column">
		    	<a href="agenda-de-adopciones.php"><img src="img/header-adopciones.jpg" alt=""></a>
        	</div>
        </div>
    </section>
    
    
    
    <section class="container no-column">
    	<div id="denuncia" class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h2>Haz tu denuncia</h2>
            <?php /*?><div id="advertencia-denuncia" class="box fwidth">
            	<h2>Advertencia</h2>
                <p>Las policías, como la Fiscalía, no aceptan las denuncias anónimas, el denunciante debe individualizarse al momento de interponer la denuncia y cuando ésta sea conocida por la fiscalía debe ratificarla cuando se le pida, sin perjuicio que al ser una acción publica cualquier persona la puede presentar.</p><br> 
                <p>Sea un amigo, familiar, agrupación animalista, el testigo o víctima por temor a una supuesta represalia puede recurrir a otra persona para que la interponga como testigo maltrato animal facilitándole los medios prueba.</p><br><br>
                <p>En asociación con:</p>
                <ul>
                	<li><img src="img/logo-pdi.jpg" alt=""><span>PDI Chile</span></li>
                    <li><img src="img/logo-policia-animal.png" alt=""><span>Policia Animal</span></li>
                    <li><img src="img/logo-fiscalia.jpg" alt=""><span>Fiscalía</span></li>
                </ul>
                <button class="aceptodenuncia btn btn-success btn-lg">Acepto, tengo una denuncia creíble. <span class="glyphicon glyphicon-ok-circle"></span></button>
            </div><?php */?>
            
            
            
            
            
            <form class="form-horizontal" role="form">
                <div class="box fwidth text-left titular-seccion">
                    <h6>Tus Datos</h6>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">RUT</label>
                    <div class="col-sm-3">
                      <input id="rutdenuncia" type="text" class="form-control" placeholder="RUT" maxlength="12">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Domicilio</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" placeholder="Domicilio">
                    </div>
                </div>
              
                <div class="box fwidth text-left titular-seccion">
                    <h6>Tu Denuncia</h6>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nombre del denunciado</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" placeholder="Domicilio">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Domicilio</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Domicilio">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Descripción detallada de la denuncia</label>
                    <div class="col-sm-6">
                      <textarea id="descripcion-denuncia" class="form-control" placeholder="Descripción de los hechos supuestamente delictivos y circunstancias en que ocurrieron. Intentando ordenar cronológicamente los datos de la forma más simple posible. No olvidar que este texto debe respetar los principios constitucionales de presunción de inocencia."></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Adjunta fotos</label>
                    <div id="fotos-denuncia" class="col-sm-6">
                        <input type="file" class="foto-denuncia">
                    </div>
                    <div class="col-sm-4">
                        <button type="button" id="insert-foto" class="">Agrega una foto</button>
                        <button type="button" id="remove-foto" class="button tiny radius">Quita una foto</button>
                    </div>
                </div>
                
                
                
              
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Remember me
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Sign in</button>
                </div>
              </div>
            </form>
            
            
            
    	</div>
        
        
        
    	<div id="sidebar-comunidad" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    		<div class="container-fluid">
    		
    			<div class="caja-sidebar-home box fwidth no-column mascota-perdida">
    				<div class="box fwidth text-left titular-seccion">
    					<h6>Facebook</h6>
    				</div>
    				<div class="content-caja-sidebar-home fwidth text-center">
    					<div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="250" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
    				</div>
    			</div>
    			
    				<div class="caja-sidebar-home box fwidth no-column mascota-perdida">
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
    
    
    
    
    <?php include 'footer.php'; ?>
    
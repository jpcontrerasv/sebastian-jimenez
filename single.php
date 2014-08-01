<?php include 'header.php'; ?>
    <section id="breadcrumbs">
    	<div class="container no-column">
            <div class="col-lg-12 text-left no-column">
                <ol class="breadcrumb">
                  <li><a href="#">Inicio</a></li>
                  <li><a href="blog.php">Blog</a></li>
                  <li class="active">Nombre de la entrada</li>
                </ol>
            </div>
        </div>
    </section>
  
	<section id="header-secciones" class="box fwidth text-left">
    	<div class="container no-column">
        	<div class="col-lg-12 text-left no-column header-single" style="background:url(img/bg-header-single-blog.jpg) no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
            	<div class="tabla">
                    <div class="table-cell">
                        <h1>Titulo de la entrada</h1>
                    </div>
                </div>
            	<?php /*?><span class="bg-gradient-top"></span>
                <span class="bg-gradient-bottom"></span><?php */?>
        	</div>
        </div>
    </section>
    
	<section id="contenido-single" class="container no-column">
    	
        	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 no-column">
            
            	<div id="loop" class="container-fluid">
                	<!--loop-->
                    	<div class="col-lg-10 text-left">
                        	<h3>Titular secundario</h3>
                        </div>
                        <div class="col-lg-2 text-left fecha">
                        	01/01/01
                        </div>
                        <div class="clearfix"></div><br>
                        
                        <div class="col-lg-12 text-justify">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <img src="img/img-blog-interior.jpg" class="fright">
                            <h3>Titular secundario</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            
                            <div class="clearfix"></div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-8 col-md-offset-8 footer-loop">
                                <ol>
                                	<li>Compártelo</li>
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
                            <div class="clearfix"></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div id="disqus_thread"></div>
                                <script type="text/javascript">
                                    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                                    var disqus_shortname = 'sebastinjimenez'; // required: replace example with your forum shortname
                            
                                    /* * * DON'T EDIT BELOW THIS LINE * * */
                                    (function() {
                                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                    })();
                                </script>
                                <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
                                
                            </div>
                            
                        </div>
                        
                        
                    <!--/loop-->
                </div>
            
            </div>
        	<div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        			<div class="caja-sidebar-home box fwidth no-column mascota-perdida">
        				<div class="box fwidth text-left titular-seccion">
        					<h6>Temas</h6>
        				</div>
        				<ul>
        					<li><a href="#">Perros</a></li>
        					<li><a href="#">Gatos</a></li>
        					<li><a href="#">Alimentación</a></li>
        					<li><a href="#">Vida Sana</a></li>
        				</ul>
        				
        				<div class="box fwidth text-left titular-seccion">
        					<h6>Mascota Perdida</h6>
        				</div>
        				<div class="content-caja-sidebar-home fwidth">
        					<div class="box fwidth text-center">
        						<img src="img/perdido.jpg" alt="">
        					</div>
        					
        					
        					<div class="container-fluid datos-mascota no-column">
        						<div class="col-lg-12">	
        							<h4>Cachupín</h4>
        						</div>
        						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        							<p>Visto por última vez:</p>
        						</div>
        						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        							<p>13 de agosto</p>
        						</div>
        						<div class="clearfix"></div>
        						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        							<p>Identificable por:</p>
        						</div>
        						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        							<p>Es blanca y tiene manchas negras</p>
        						</div>
        						<div class="clearfix"></div>
        						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
        							<a href="#" class="vermas">Ver más</a>
        						</div>
        						
        					</div>
        					<!--/container-->
        				</div>
        			</div>
        			<div class="caja-sidebar-home box fwidth no-column mascota-perdida">
        				<div class="box fwidth text-left titular-seccion">
        					<h6>Facebook</h6>
        				</div>
        				<div class="content-caja-sidebar-home fwidth">
        					<div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="250" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
        				</div>
        			</div>
        			<div class="caja-sidebar-home box fwidth no-column mascota-perdida">
        				<div class="box fwidth text-left titular-seccion">
        					<h6>Twitter</h6>
        				</div>
        				<div class="content-caja-sidebar-home fwidth">
        					<div class="content-caja-sidebar-home fwidth">
        						<a class="twitter-timeline" href="https://twitter.com/lindorfovet" data-widget-id="494934675450638340">Tweets por @lindorfovet</a>
        						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        					
        				</div>
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
                    <!--<li><a href="#">Profesionales</a></li>-->
                    <li><a href="productos.php">Productos</a></li>
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
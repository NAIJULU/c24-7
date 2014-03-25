<?php
/*
Template Name: Clima en Vivo
*/
?>
<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span12 clearfix" role="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						
						<section class="post_content">
							
                             <div class="row-fluid clearfix">
                             <div class="span12">
                             <header>
								<div class="page-header"><h1><?php the_title(); ?></h1></div>
							 </header> <!-- end article header -->
							
                            	<div id="VideoEmision">
                                	<!-- AQUÍ VA EL REPRODUCTOR DE LA ÚLTIMA EMISIÓN -->
                                </div>	
                                                               
                                 <!-- Controles para búsqueda de emisiones -->
                                 <div id="controlesEmisiones">
                                 	<h3>Buscar emisiones por fecha</h3>
                                    <!-- Belmar, en este espacio puedes poner el componente para buscar las emisiones por fecha -->
                                 </div>
                                 
                                 
                                 <!-- BOTONES INFERIORES DE EMISIONES -->
                                  <div class="row-fluid clearfix">
                                  	<div class="span4">
                                    	<a href="#">
                                       	 <img src="#" />
                                       	 <h3>EMISIÓN MAÑANA</h3>
                                        </a>
                                    </div>
                                    
                                    <div class="span4">
                                    	<a href="#">
                                       	 <img src="#" />
                                       	 <h3>EMISIÓN TARDE</h3>
                                        </a>
                                    </div>
                                    
                                    <div class="span4">
                                    	<a href="#">
                                       	 <img src="#" />
                                       	 <h3>EMISIÓN NOCHE</h3>
                                        </a>
                                    </div>  
                                  </div>
                                  
                                  <div id="botonVerUltimaEmision" style="display:none;">
                                  	<a href="#">Ver última emisión</a>
                                  </div>
                                 
                                    
                                   
								</div>
                            
                            
                         </div>
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
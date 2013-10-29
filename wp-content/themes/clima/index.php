<?php get_header(); ?>	

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home_widget') ) : ?>

			<?php endif; ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span12 clearfix" role="main">
                	<div class="row-fluid">
                		<div class="span7 videoEmision">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('ultimaemision_widget') ) : ?>

							<?php endif; ?>                			
                		</div>
                        <div class="span5 fotosUsuarios"></div>
                    </div>
                    
                </div>
                    
             
					<div class="row-fluid">
                    
                    <div class="galeriaHome span12">
                   	 	<h2>Artículos destacados</h2>
                        
                        <div class="span1"></div>
                        
                        <div class="span3">
                        	<img src="<?php bloginfo('template_directory'); ?>/images/imagenGenerica.jpg" />
                           	<h3>LAS MANZANAS YA NO SABEN IGUAL POR EL CAMBIO CLIMÁTICO</h3>
                            <p>Según la Organización Nacional de Agricultura y de investigación alimentaria en Japón (NARO), el sabor y la textura de esta fruta han cambiado en los últimos 40 años.</p>
                        </div>
                        
                        <div class="span3">
                        	<img src="<?php bloginfo('template_directory'); ?>/images/imagenGenerica.jpg" />
                            <h3>LAS PLANTAS AYUDAN A PREDECIR EL CAMBIO CLIMÁTICO</h3>
                           <p> El reloj biológico de las plantas, también conocido como reloj circadiano, puede ayudar a predecir los cambios que se van a presentar con el clima.</p>
                        </div>
                        
                        <div class="span3">
                        	<img src="<?php bloginfo('template_directory'); ?>/images/imagenGenerica.jpg" />
                            <h3>Con 100 toneladas quedó la playa de Acapulco después de "Manuel"</h3>
                            <p>Centenares de toneladas de basura en las playas de Acapulco han sido el resultado de la tormenta tropical Manuel, que afectó la costa oeste de México en los últimos días.</p>
                        </div>
                        
                        <div class="span1"></div>
                    </div>
                        
					
                    <?php if(!is_home()): ?>
                    
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>					
					<?php endwhile; ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					
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
                    <?php endif; ?>
                   
			
				</div> <!-- end #main -->
                
    
				<?php
				if(!is_home()){
					get_sidebar(); 
					// sidebar 1
				}
				?>
                </div>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
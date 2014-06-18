<?php
/*
Template Name: Institucional
*/
?>
<?php get_header(); ?>

		<div id="content" class="clearfix row-fluid">
				<div id="main" class="span8 clearfix" role="main">
					<section class="post_content">
                          <div class="row-fluid clearfix">
		                       <div class="span12">
		                             <header>
										<div class="page-header"><h1>Institucional</h1></div>
									 </header>
								</div>
							<div id="main">
								Somos un proyecto de comunicación pública para la prevención de situaciones de emergencias 
								provocadas por las variables del estado del tiempo; la divulgación de los efectos del cambio 
								climático y la relación del clima en la salud de los habitantes del Valle del Aburrá. 
								Esta iniciativa es liderada por el Área Metropolitana del Valle del Aburrá en asocio con 
								Telemedellín, el acompañamiento de la Alcaldía de Medellín y la asesoría técnica del Sistema 
								de Alerta Temprana de Medellín y el Valle de Aburrá.
								 <?php //echo do_shortcode('[wp_sitemap_page]');?>
							</div>	
						   </div>	
					</section>
				</div>
				<div id="slidebar-der" class="span4">
      			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('slidebar_derecha') ) : ?>
    		 	<?php endif; ?>
    			</div>
		</div>			
<?php get_footer(); ?>					
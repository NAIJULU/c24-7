<?php
/*
Template Name: Historial-malo
*/
get_header(); ?>
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span12 clearfix" role="main">
					<div class="page-header">
					  <h1>Emisión 5 de septiembre de 2013 - Mañana</h1>
					</div>					
					<div class="span12" id="videoEmision">
<?php
if (have_posts()) :

   while (have_posts()) :
   	echo  'sizas';

     echo the_post();
     echo the_content();
     
   endwhile;
endif;
?>


					<!--	<iframe width="853" height="480" src="//www.youtube.com/embed/S2MRFelDt30" frameborder="0" allowfullscreen></iframe> -->
						<h3>Buscar Emisiones por Fecha</h3>
						<div class="btn-group">
						  <button class="btn btn-primary"><i class="icon-chevron-left icon-white"></i></button>
						  <button class="btn btn-primary">Septiembre</button>
						  <button class="btn btn-primary"><i class="icon-chevron-right icon-white"></i></button>
						</div>
						<div class="btn-group">
						  <button class="btn btn-primary"><i class="icon-chevron-left icon-white"></i></button>
						  <button class="btn btn-primary">18</button>
						  <button class="btn btn-primary"><i class="icon-chevron-right icon-white"></i></button>
						</div>		
						<div class="btn-group">
						  <button class="btn btn-primary"><i class="icon-chevron-left icon-white"></i></button>
						  <button class="btn btn-primary">2013</button>
						  <button class="btn btn-primary"><i class="icon-chevron-right icon-white"></i></button>
						</div>										
					</div>
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
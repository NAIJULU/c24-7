<?php
/*
Template Name: Historial
*/




function theme_name_scripts() {
	//wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	 wp_enqueue_script('jquery_ui');
	 wp_enqueue_script('jquery_ui_core');
	 wp_enqueue_style('css_query_ui');
	 wp_enqueue_style('css_query_ui_core');
	 wp_enqueue_style('css_query_ui_datepicker');


}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );




get_header(); 
$meses 		= unserialize(C247_MESES);

?>
			<div id="content" class="clearfix row-fluid">
<?php

			if( isset($_POST['fecha']) )
			{
				$fecha_e = explode("/", $_POST['fecha']);

				$args = array('cat'=>'10', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '1' ,'date_query' => array(array('year'  => $fecha_e[2] ,'month' => $fecha_e[1] ,'day'   => $fecha_e[0] ,),)  );
			}
			else
			{
				$args = array('cat'=>'10', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '1' );	
			}

			$query = new WP_Query( $args );

			if ($query->have_posts()) :
   				while ($query->have_posts() ) : $query->the_post();

   						$fechaPost  = explode('-', the_date('Y-m-d', '','',FALSE));
   				
 ?>		
				<div id="post-<?php the_ID(); ?>" class="span12 clearfix" role="main">
					<div class="page-header">
					  	<h1><?php the_title(); ?></h1>
					</div>					
					<div class="span12" id="videoEmision">
						<?php echo get_the_content(); ?>
					</div>
				</div>
<?php
   endwhile;
   else : ;
   ?>
			   	<div id="content" class="clearfix row-fluid">
			   		<div class="page-header">
						 <h1>No hay resultados.</h1>
					</div>	
			   	</div>

<?php 			
endif;
?>
			<div class="titulo-emisiones text-center">
							<p>Buscar emisiones por fecha</p>
						</div>
			<div class="selector-fecha text-center">
				<form id="form-fechas" method="POST" action="" >
							<div class="btn-group">
							  <input type="text" name="fecha" class="datepicker" placeholder="Selecciona la fecha" >
							  <input type="submit" id="ir-emisiones" class="btn btn-primary btn-ver" value="Ver" />
							</div>
								
				</form>
			</div>


<!-- Emisiones durante el dia -->
	<div id="emisiones-todo-dia" class="row-fluid">
<?php

			if(isset($fechaPost)) :

				if( isset($_POST['fecha']) )
				{
					$fecha_e = explode("/", $_POST['fecha']);
					$args = array('cat'=>'10', 'orderby' => 'date', 'order' => 'ASC','date_query' => array(array('year'  => $fecha_e[2] ,'month' => $fecha_e[1] ,'day'   => $fecha_e[0] ,),)  );
				}
				else
				{
					$args = array('cat'=>'10', 'orderby' => 'date', 'order' => 'ASC', 'date_query' => array(array('year'  => $fechaPost[0] ,'month' => $fechaPost[1] ,'day'   => $fechaPost[2] ,),));	
				}

				$query = new WP_Query( $args );

				if ($query->have_posts()) :
	   				while ($query->have_posts() ) : $query->the_post();
?>
<?php 

$content1 = get_the_content();
$content1 = apply_filters('the_content', $content1); 

?>

					<a id="tumb-<?php the_ID(); ?>" href="#" class="btn-tumb emision-tumb span4">
						<div class="img-emision-tumb">
							<img src="<?php echo get_thumbnail_youtube( $content1 ); ?>"/> 
						</div>
						<input type="hidden" class="emision-tumb-title" value ="<?php the_title() ?>" />
						<input type="hidden" class="emision-tumb-content" value = '<?php echo get_the_content(); ?>' />

							 <div class="emision-titulo">
							  			<?php $posttags = get_the_tags();
										if ($posttags) {
										  foreach($posttags as $tag) {
										    echo 'Emisión de la '.ucwords($tag->name); 
										  }
										} ?>

							</div>
					</a>
				
<?php
					   endwhile;
				 endif;
			endif;
?>

	</div>

		<div style="clear: both;"></div>

		<?php  if( isset($_POST['fecha']) ): ?>
					<div id="ultima-emision" class="row-fluid">
						<a href="" class="span12"> Ver <strong>última Emision</strong> </a>
					</div>	
			<?php endif ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>


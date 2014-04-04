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

			if( isset($_POST['year']) )
			{
				$args = array('cat'=>'10', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '1' ,'date_query' => array(array('year'  => $_POST['year'] ,'month' => $_POST['month'] ,'day'   => $_POST['day'] ,),)  );
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
			
			<form id="form-fechas" method="POST" action="" >
				<!--
						<div class="btn-group">
						  <button id="m-left" class="btn btn-primary"><i class="icon-chevron-left icon-white"></i></button>
						  <label id="label-mes" class="btn btn-primary"><?php  echo $meses[date('n')]; ?></label>
						  <button id="m-right" class="btn btn-primary"><i class="icon-chevron-right icon-white"></i></button>
						  <input type="hidden" name="month" id="month" value="<?php  echo date('n'); ?>">
						</div>
						<div class="btn-group">
						  <button id="d-left" class="btn btn-primary"><i class="icon-chevron-left icon-white"></i></button>
						  <label id="label-day" class="btn btn-primary"><?php  echo date('j'); ?></label>
						  <button id="d-right" class="btn btn-primary"><i class="icon-chevron-right icon-white"></i></button>
						  <input type="hidden" name="day" id="day" value="<?php  echo date('j'); ?>">
						</div>		
						<div class="btn-group">
						  <button id="y-left" class="btn btn-primary"><i class="icon-chevron-left icon-white"></i></button>
						  <label id="label-year" class="btn btn-primary"><?php  echo date('Y'); ?></label>
						  <button id="y-right" class="btn btn-primary"><i class="icon-chevron-right icon-white"></i></button>
						  <input type="hidden" name="year" id="year" value="<?php  echo date('Y'); ?>">
						</div>
					-->

						<div class="btn-group">
						  <input type="text" id="fecha" class="datepicker" placeholder="[dia] / [mes] / [año]" >
						</div>

					

						<input type="submit" id="ir-emisiones" class="btn btn-primary" value="Ver" />	
			</form>


<!-- Emisiones durante el dia -->
	<div id="emisiones-todo-dia" style="display:inline;" class="row">
<?php

			if(isset($fechaPost)) :

				if( isset($_POST['year']) )
				{
					$args = array('cat'=>'10', 'orderby' => 'date', 'order' => 'ASC','date_query' => array(array('year'  => $_POST['year'] ,'month' => $_POST['month'] ,'day'   => $_POST['day'] ,),)  );
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

					<div id="tumb-<?php the_ID(); ?>" class="emision-tumb span3">
						<div class="img-emision-tumb">
							<img src="<?php echo get_thumbnail_youtube( $content1 ); ?>" width="222" /> 
						</div>
						<div class="content-emision-tumb">
							 <button class="btn-tumb btn-primary">
							  			<?php $posttags = get_the_tags();
										if ($posttags) {
										  foreach($posttags as $tag) {
										    echo 'Emisión de la '.ucwords($tag->name); 
										  }
										} ?>
										<input type="hidden" class="emision-tumb-title" value ="<?php the_title() ?>" />
										<input type="hidden" class="emision-tumb-content" value = '<?php echo get_the_content(); ?>' />
							 </button>
							
						</div>
					</div>
				
<?php
					   endwhile;
				 endif;
			endif;
?>

	</div>

		<div style="clear: both;"></div>

		<?php  if( isset($_POST['year']) ): ?>
					<div id="ultima-emision" class="row">
						<a href="" class="btn btn-primary span10"> Ultima Emision </a>
					</div>	
			<?php endif ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>


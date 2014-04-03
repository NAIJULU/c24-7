<?php
/*
Template Name: Historial
*/
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

						<input type="submit" class="btn btn-primary" value="Ver emisiones" />	
			</form>


<!-- Emisiones durante el dia -->
	<div id="emisiones-todo-dia" style="display:inline;">
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

					<span id="tumb-<?php the_ID(); ?>" class="emision-tumb">
						<div class="img-emision-tumb">
							<img src="<?php echo get_template_directory_uri().'/images/icon2-ult-emision_02.png' ?>" width="100" /> 
						</div>
						<div class="content-emision-tumb">
							 <button class="btn-tumb btn-primary">
							  			<?php the_tags(''); ?>
										<input type="hidden" class="emision-tumb-title" value ="<?php the_title() ?>" />
										<input type="hidden" class="emision-tumb-content" value = '<?php echo get_the_content(); ?>' />
							 </button>
							
						</div>
					</span>
				
<?php
					   endwhile;
				 endif;
			endif;
?>

	</div>

		<div style="clear: both;"></div>

		<?php  if( isset($_POST['year']) ): ?>
					<div id="ultima-emision">
						<a href="" class="btn btn-primary"> Ultima Emision </a>
					</div>	
			<?php endif ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
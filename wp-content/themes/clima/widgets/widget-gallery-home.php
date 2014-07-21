<?php
  setlocale(LC_ALL, 'es_ES.UTF8');
  class widgetGaleriaHome extends WP_Widget 
   {

	  function widgetGaleriaHome()
	  {
		  parent::__construct( false, 'Slider Galeria Home', array('description'=>'Este widget muestra la galeria de imagenes en la pagina del home.'));
	  }
  
	  function widget( $args, $instance )
	  {
		  $this->mostrarArticulos($args, $instance);
	  }
  
	  function update( $new_instance, $old_instance )
	  {
		  return $new_instance;
	  }

	 function form( $instance ) {

	}
	
function mostrarArticulos($args, $instance)
 {

	extract($args);																					
	/* Se muestra el título del widget */
	echo $before_widget;
	$galerias = '';

?>

	<div class="widget-home-gallery-contenedor">
		<h3>ÚLTIMAS FOTOS</h3>
	<?php
	$args = array('cat'=>'23', 'orderby' => 'date', 'order' => 'DESC' );
	$the_query = new WP_Query($args);
	$active = false;


	if ($the_query->have_posts())
	{

	while ($the_query->have_posts() ) : $the_query->the_post(); 

	  if(in_category(23)) :

		$contenido = get_the_content();		
		$post_thumbnail_id	= get_post_thumbnail_id(get_the_ID(), 'full');
		$post_thumbnail_url	= (!empty($post_thumbnail_id)) ? wp_get_attachment_url( $post_thumbnail_id ) : get_template_directory_uri().'/images/dummie-post.png';
		$item = ($active) ? "item" : "item active";
		$galerias			= 	$galerias .'<div id="gal-'.get_the_ID().'" class="'.$item.'">'.
								'<div class="widget-home-gallery-head row-fluid">'.
								'<span class="widget-home-gallery-head-title span12">'.the_title('','',false).'</span>'.
								'<img class="thumb" src="'.$post_thumbnail_url.'"  ></div>'.
								'<span class="widget-home-gallery-head-date"><time datetime="'.get_the_time('Y-m-j').'" pubdate>'.get_the_time('j').' de '.get_the_time('F').' del '.get_the_time('Y').'</time></span>'.
								'<div class="widget-home-gallery-footer"><span class="gfooter-span1"> Foto enviada por: <a href="#" target="_blank">'.$contenido.'</a></span> </div></div>';
		$active = true;
							
	   
	        endif;
	endwhile;
	}

	?>
		<!-- <div class="widget-home-gallery-head row-fluid">
			<span class="widget-home-gallery-head-title span6">
				<?php echo the_title('','',false); ?>
			</span>
			<span class="widget-home-gallery-head-date span6">
				<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('j'); echo " de "; the_time('F'); echo " del "; the_time('Y'); ?></time>
			</span>
		
		</div> -->
	    <div id="widget-gallery-home" class="carousel slide" data-ride="carousel">
					    	<!-- Wrapper for slides -->
			<div class="carousel-inner">
				   <?php echo $galerias; ?>	  	    
			 </div>

			<!-- Controls -->
			<a class="left carousel-control" href="#widget-gallery-home" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#widget-gallery-home" data-slide="next">
				 <span class="glyphicon glyphicon-chevron-right"></span>
			</a>

	    </div>
	<!--    <div class="widget-home-gallery-footer">
	    	<span class="gfooter-span1"> Foto enviada por: <a href="#" target="_blank"><?php echo $contenido ?></a></span>
	    </div>
	  -->  
	</div>	
	<?php

	  echo $after_widget;
	}

}

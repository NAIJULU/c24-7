<?php
  setlocale(LC_ALL, 'es_ES.UTF8');
  class widgetGaleria extends WP_Widget 
   {

	  function widgetGaleria()
	  {
		  parent::__construct( false, 'Slider Galeria', array('description'=>'Este widget muestra los utimas fotos validas Puestas en Galerias (requiere lib js y css).'));
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

	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

?>

	<div class="enc-widget">
		<h2>Ultimas Fotos</h2>
	</div>

	<?php
	$args = array('cat'=>'23', 'orderby' => 'date', 'order' => 'DESC' );
	$the_query = new WP_Query($args);
	$active = false;


	if ($the_query->have_posts())
	{

	while ($the_query->have_posts() ) : $the_query->the_post(); 

	  if(in_category(23)) :

		$post_thumbnail_id	= get_post_thumbnail_id(get_the_ID(), 'full');
		$post_thumbnail_url	= (!empty($post_thumbnail_id)) ? wp_get_attachment_url( $post_thumbnail_id ) : get_template_directory_uri().'/images/dummie-post.png';
		$item = ($active) ? "item" : "item active";
		$galerias			= $galerias .'<div id="gal-'.get_the_ID().'" class="'.$item.'"><img alt="sizas" class="thumb" src="'.$post_thumbnail_url.'"  ></div>';
		$active = true;									
	   
	        endif;
	endwhile;
	}

	?>
	    <div id="widget-gallery" class="carousel slide" data-ride="carousel">
					    	<!-- Wrapper for slides -->
			<div class="carousel-inner">
				   <?php echo $galerias; ?>	  	    
			 </div>

			<!-- Controls -->
			<a class="left carousel-control" href="#widget-gallery" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#widget-gallery" data-slide="next">
				 <span class="glyphicon glyphicon-chevron-right"></span>
			</a>

	    </div>
	</div>	
	<?php

	  echo $after_widget;
	}




}

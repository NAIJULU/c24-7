<?php
  setlocale(LC_ALL, 'es_ES.UTF8');
  class mostRatingPostWidget extends WP_Widget 
   {

	  function mostRatingPostWidget()
	  {
		  parent::__construct( false, 'Most Rating PostWidget', array('description'=>'Este widget se activa junto con el pluggin mostViewPluggin, Muestra post mas valorados.'));
	  }
  
	  function widget( $args, $instance )
	  {
		  $this->mostrarArticulosValorados($args, $instance);
	  }
  
	  function update( $new_instance, $old_instance )
	  {
		  return $new_instance;
	  }

	 function form( $instance ) {

	}
 
function mostrarArticulosValorados($args, $instance)
 {
	extract($args);																					
	/* Se muestra el título del widget */
	echo $before_widget;

	global $wpdb;
	$optionPost = get_option( 'optionPost' );
	$num_per = get_option('option_num');
	$num_per = ( !empty($num_per) ) ? $num_per : 1;
	$optionPost = ( !empty($optionPost) ) ? $optionPost : 1;

	$post_array = array();

	?>


	<div class="enc-widget-val">
		<h2>Mayor Valoracion.</h2>
	</div>

	<?php

	$args = array('cat'=>$optionPost, 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1' );
	$the_query = new WP_Query($args); 
	$cont_coment = $wpdb->get_results("SELECT post_id, CAST(meta_value AS SIGNED) as meta_value2 FROM c247_postmeta WHERE meta_key = 'ec_stars_rating' ORDER BY meta_value2 DESC LIMIT 1;");

	if ($the_query->have_posts())
	{

	while ($the_query->have_posts() ) : $the_query->the_post(); 

	  if(in_category($optionPost)) :

		foreach ($cont_coment as $key => $value) 
		{

			if(get_the_ID() == $value->post_id)
			{
	    	  $categoria    = get_the_category();
	      	  $categoria    = ( !empty($categoria[1]->name) ) ? $categoria[1]->name : $categoria[0]->name ;

		      $post_thumbnail_id   = get_post_thumbnail_id(get_the_ID(), 'full');
		      $post_thumbnail_url  = (!empty($post_thumbnail_id)) ? wp_get_attachment_url( $post_thumbnail_id ) : get_template_directory_uri().'/images/dummie-post.png';

		      $contenuto = get_the_content();

			  $post_array['post'][] = 	'<article id="most-'.get_the_ID().'" class="most-widget" >'.
			    	  					'<a href="'.get_permalink( get_the_ID() ).'" >'.
			      						'<figure> <img src="'.$post_thumbnail_url.'" alt="'.the_title('','',false).'" class="thumb" /></figure>'.
			      						'<div class="contenido"><span class="categorias">'.strtolower($categoria).'</span>'.
				      					'<h1>'.the_title('','',false).'</h1>'.
				      					'<time datetime="'.get_the_time('Y-m-j').'" pubdate>'.get_the_time('j').' de '.get_the_time('F').' del '.get_the_time('Y').'</time>'.
			      						'</div></a></article>';
			}

		}

	        endif;
	endwhile;
	}

	for($i=0; $i < $num_per; $i++)
	{
		if( isset($post_array['post'][$i]) )
		{
			echo $post_array['post'][$i];
		}
		
	}

	  echo $after_widget;
	}




}	  

<?php
  setlocale(LC_ALL, 'es_ES.UTF8');
  class mostRelatedPostWidget extends WP_Widget 
   {

	  function mostRelatedPostWidget()
	  {
		  parent::__construct( false, 'Most Related Post Widget', array('description'=>'Este widget se activa junto con el de mas visto, Muestra el articulo con mayor valoracion.para que funcione correctamente active el pluggin mostviewpost y el de votacion yet-anothe-related-post-pluggin (yarpp)'));
	  }
  
	  function widget( $args, $instance )
	  {
		  $this->mostrarArticulosRel($args, $instance);
	  }
  
	  function update( $new_instance, $old_instance )
	  {
		  return $new_instance;
	  }

	 function form( $instance ) {
	?>
			<div>
				<h1>sizas</h1>
			</div>
	<?php 
	}
 
function mostrarArticulosRel($args, $instance)
 {
	extract($args);																					
	/* Se muestra el título del widget */
	echo $before_widget;
	$optionPost = get_option( 'optionPost' );
	$num_per = get_option('option_num');
	$optionPost = ( !empty($optionPost) ) ? $optionPost : 1;
	$num_per = ( !empty($num_per) ) ? $num_per : 1;

	$post_array = null;

	?>

	<script>(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1&appId=150278208448155";
  		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	</script>

	<div class="enc-widget">
		<h2>Más Comentados.</h2>
	</div>

	<?php

	$args = array('cat'=>$optionPost, 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1' );
	$the_query = new WP_Query($args); 



	if ($the_query->have_posts())
	{

	while ($the_query->have_posts() ) : $the_query->the_post(); 

	  if(in_category($optionPost)) :

	      $categoria    = get_the_category();
	      $categoria    = ( !empty($categoria[1]->name) ) ? $categoria[1]->name : $categoria[0]->name ;

	      $post_thumbnail_id   = get_post_thumbnail_id($post->ID, 'full');
	      $post_thumbnail_url  = (!empty($post_thumbnail_id)) ? wp_get_attachment_url( $post_thumbnail_id ) : get_template_directory_uri().'/images/dummie-post.png';

	      $contenuto = get_the_content();

		  $post_array['post'][] = '<article id="most-'.get_the_ID().'" class="most-widget" >'.
		    	  						'<a href="'.get_permalink( get_the_ID() ).'" >'.
		      							'<figure> <img src="'.$post_thumbnail_url.'" alt="'.the_title('','',false).'" class="thumb" /></figure>'.
		      							'<div class="contenido">'.'<fb:comments-count expr:href='.get_permalink( get_the_ID() ).' ></fb:comments-count>'.
			      						'<header><span class="categorias">'.strtolower($categoria).'</span></header>'.
			      						'<p>'.substr(wp_filter_nohtml_kses( the_title('','',false) ), 0,80).'...'.'</p>'.
		      							'</div></a></article>';


	        endif;
	endwhile;
	}

	//ordenar por votos
	//array_multisort($post_array['count'], SORT_DESC,$post_array['post']);

	for($i=0; $i < $num_per; $i++)
	{
		echo $post_array['post'][$i];
	}

	  echo $after_widget;
	}




}	  
<?php
  setlocale(LC_ALL, 'es_ES.UTF8');
  class widgetMinUltimaEmision extends WP_Widget 
   {

	  function widgetMinUltimaEmision()
	  {
		  parent::__construct( false, 'Miniatura Ultima Emision', array('description'=>'Este widget muestra la ultima emision en version miniatura con enlace a Emisiones.'));
	  }
  
	  function widget( $args, $instance )
	  {
		  $this->mostrarUltimaEmision($args, $instance);
	  }
  
	  function update( $new_instance, $old_instance )
	  {
		  return $new_instance;
	  }

	 function form( $instance ) {

		}
	
	function mostrarUltimaEmision($args, $instance)
	 {

		extract($args);																					
		echo $before_widget;
		$galerias = '';

	?>

		<div class="widget-ultima-emision" href="/c24-7/emisiones">
			<h3>ÚLTIMA EMISION</h3>
		<?php
		$args = array('cat'=>'10', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '1' );	
		$the_query = new WP_Query($args);
		
		
		if ($the_query->have_posts())
		{

		while ($the_query->have_posts() ) : $the_query->the_post(); 

		  if(in_category(10)) :
			$content1 = get_the_content();
			$content1 = apply_filters('the_content', $content1); 
											
			?>
			<div id="mini-<?php the_ID(); ?>" class="clearfix">					
				<a href="/c24-7/emisiones" id="videoMinEmision">
					<div class="img-min-tumb">
							<img src="<?php echo get_thumbnail_youtube( $content1, '0' ); ?>" />
					</div>
				</a>
			</div>
		</div>	
			<?php
				endif;
		endwhile;
		}

		  echo $after_widget;
		}
}

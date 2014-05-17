<?php
  setlocale(LC_ALL, 'es_ES.UTF8');
  class widgetUltimosArticulos extends WP_Widget 
   {

	  function widgetUltimosArticulos()
	  {
		  parent::__construct( false, 'Miniatura Ultimos Articulos', array('description'=>'Este widget Muestra los ultimos articulos.'));
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
		echo $before_widget;
		$galerias = '';

	?>

		<div class="galeriaHome span12">
			<h2>Últimos Articulos</h2>
		</div>
        <?php
           $args = array('cat'=>'2', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '4' );
           $query = new WP_Query( $args );
		?>
			<div id="main" class="clearfix" role="main">
				<div id="ultimos-articulos" class="row-fluid">
		<?php
		
				if ($query->have_posts()) :
				  	while ($query->have_posts() ) : $query->the_post();	
							if(in_category(2)) : ?>
								<?php	
									$content = get_the_content();

									$post_thumbnail_id 	 = get_post_thumbnail_id($post->ID, 'full');
									$post_thumbnail_url  = (!empty($post_thumbnail_id)) ? wp_get_attachment_url( $post_thumbnail_id ) : get_template_directory_uri().'/images/dummie-galeria.png';
								?>
								<article id="post-<?php the_ID(); ?>"  class="blog-thumb span8">
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">					
											<?php 
												$categoria 		= get_the_category();
												$categoria 		= ( !empty($categoria[1]->name) ) ? $categoria[1]->name : $categoria[0]->name ;	
											?>
										<figure class="img-post"><img src="<?php echo $post_thumbnail_url ?>" alt="<?php the_title(); ?>" class="thumb" /></figure>
											<div class="contenido">
											<header ><!-- key isotope --><span class="categorias"><?php echo $categoria;  ?> <!-- end key isotope --></span>
												<h1><?php the_title(); ?></h1>
													<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('j'); echo " de "; the_time('F'); echo " del "; the_time('Y'); ?></time>
											</header>
											<p><?php echo substr(wp_filter_nohtml_kses( $content ), 0,80).'...'; ?>
												<span>Leer Más +<span></p>
											</div>	
									</a>
								</article>
							<?php endif; ?>
					<?php $i++; endwhile; ?>									
				<?php endif; ?>
				
				</div>
			</div>
	  </div> 
	<?php
		 echo $after_widget;
		 
	}
}
?>

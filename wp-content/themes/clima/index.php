<?php get_header(); ?>	

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home_widget') ) : ?>

<?php endif; ?>

<div id="content" class="clearfix row-fluid">

	<div id="main" class="clearfix" role="main">
		<div class="clearfix">
			<div class="videoEmision span7">
				<div class="contenedor-ultima-emision" >
					<h3 class="titulo-widget-ultima-emision" >Última Emisión</h3>

					<div class="video-ultima-emision">
						<?php
						$args = array('cat'=>'10', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '1' );

						$query = new WP_Query( $args );

						if ($query->have_posts()) :
							while ($query->have_posts() ) : $query->the_post();	

						echo get_the_content();

						endwhile;	
						endif;
						?>
					</div>
					<div class="emision">
						<span class="emision-title">
							Clima 24/7 – <?php echo the_title(); ?>
						</span>
						<span>
							<a class="btnHistorial" href="emisiones">Ver Historial</a>
						</span>          			
					</div>
				</div>
			</div>	

			<div class="fotosUsuarios span5">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home_gallery') ) : ?>

			<?php endif; ?>                           	
		</div>
	</div>

</div>

<div class="row-fluid">

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
			/* Para sacar etiquetas HTML del contenido */
			$content = get_the_content();

			$post_thumbnail_id 	 = get_post_thumbnail_id($post->ID, 'full');
			$post_thumbnail_url  = (!empty($post_thumbnail_id)) ? wp_get_attachment_url( $post_thumbnail_id ) : get_template_directory_uri().'/images/dummie-galeria.png';
			?>

			<article id="post-<?php the_ID(); ?>"  class="blog-thumb span3">
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
				<?php endwhile; ?>									
			<?php endif; ?>
		</div>
	</div>

</div> 


<?php if(!is_home()): ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php get_template_part( 'content', get_post_format() ); ?>					
<?php endwhile; ?>	


<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>

<?php page_navi(); // use the page navi function ?>

<?php } else { // if it is disabled, display regular wp prev & next links ?>
<nav class="wp-prev-next">
	<ul class="clearfix">
		<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
		<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
	</ul>
</nav>
<?php } ?>		

<?php else : ?>

	<article id="post-not-found">
		<header>
			<h1><?php _e("Not Found", "bonestheme"); ?></h1>
		</header>
		<section class="post_content">
			<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
		</section>
	</article>

<?php endif; ?>
<?php endif; ?>

</div> <!-- end #main -->


<?php
if(!is_home()){

	get_sidebar(); 
					// sidebar 1
}
?>
</div> <!-- end #content -->

<?php get_footer(); ?>
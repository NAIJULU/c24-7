<?php

/*
function theme_name_scripts() {
	//wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	 wp_enqueue_script('jquery_ui');
	 wp_enqueue_script('jquery_ui_core');
	 wp_enqueue_style('css_query_ui');
	 wp_enqueue_style('css_query_ui_core');
	 wp_enqueue_style('css_query_ui_datepicker');

	 // jquery fancyBox
	 wp_enqueue_script('jquery_mousewheel');
	 wp_enqueue_script('fancybox');
	 wp_enqueue_script('fancybox_buttons');
	 wp_enqueue_script('fancybox_pack');
	 wp_enqueue_script('fancybox_media');

	 wp_enqueue_style('css_fancybox');
	 wp_enqueue_style('css_fancybox_buttons');
	 wp_enqueue_style('css_fancybox_thumbs');

}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

*/

// ID DE LOS ARTICULOS TIPO BLOG.
$blogId		= 23;

$args = array(
  'orderby' => 'name',
  'parent' => $blogId	
  );

$categories = get_categories( $args );
?>
<?php get_header(); ?>

<!--
<div>
	<a class="fancybox" rel="group" href="../wp-content/uploads/2014/04/bliss.jpg" title="no me importa..com"><img src="../wp-content/uploads/2014/04/bliss.jpg" alt="" /><h1>titulo de la vuelta</h1></a>
	<a class="fancybox" rel="group" href="../wp-content/uploads/2014/04/paisajesHD.jpg" title="no me importa..com"><img src="../wp-content/uploads/2014/04/paisajesHD.jpg" alt="" /></a>
	<a class="fancybox" rel="group" href="../wp-content/uploads/2014/04/leprosy-death_halifaxcollect.net_2-990x1024.jpg" title="no me importa..com"><img src="../wp-content/uploads/2014/04/leprosy-death_halifaxcollect.net_2-990x1024.jpg" alt="" /></a>
</div>
-->

            <div class="clearfix row-fluid">
					<div class="blog-title page-header span12">
								<?php if (is_category()) { ?>
									<h1 class="archive_title h2">
										<span><?php _e("Posts Categorized:", "bonestheme"); ?></span> <?php single_cat_title(); ?>
									</h1>
								<?php } elseif (is_tag()) { ?> 
									<h1 class="archive_title h2">
										<span><?php _e("Posts Tagged:", "bonestheme"); ?></span> <?php single_tag_title(); ?>
									</h1>
								<?php } elseif (is_author()) { ?>
									<h1 class="archive_title h2">
										<span><?php _e("Posts By:", "bonestheme"); ?></span> <?php get_the_author_meta('display_name'); ?>
									</h1>
								<?php } elseif (is_day()) { ?>
									<h1 class="archive_title h2">
										<span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
									</h1>
								<?php } elseif (is_month()) { ?>
								    <h1 class="archive_title h2">
								    	<span><?php _e("Monthly Archives:", "bonestheme"); ?>:</span> <?php the_time('F Y'); ?>
								    </h1>
								<?php } elseif (is_year()) { ?>
								    <h1 class="archive_title h2">
								    	<span><?php _e("Yearly Archives:", "bonestheme"); ?>:</span> <?php the_time('Y'); ?>
								    </h1>
								<?php } ?>

							
					</div>

             </div>

			<div id="content" class="clearfix row-fluid">
            <div class="span3 side-bar">
            	<div class="menu-clima" id="menu-clima">
            		<p class="texto-filtro">Filtra las imágenes por categoría</p>
					<?php
						foreach ($categories as  $value) 
						{
					?>
				            <label class="checkbox">
								<input id="filtro" class="filtro" type="checkbox" data-filter= "<?php echo '.category-'.strtolower($value->slug) ?>" >
									<?php echo $value->name ?>
							</label>
			
					<?php				
						}					
					?>

					<label class="checkbox">
						<input class="filtro" type="checkbox" data-filter=".todos">
						Todos
					</label>

					<select id="size" name="filter by" class="isotopenav" style="display:none"></select> 
					<div id="bar-fecha">
						<p>Filtra las imágenes por fecha de publicación</p>
						<div class="bar-fecha-control-1">
					  		<input type="text" name="fecha" class="datepicker" placeholder="Selecciona la fecha" >
					  	</div>
					<div class="bar-fecha-control-2">
				  		<a class="btn-ir" id="ir-fecha" href="#" title="Presione este boton en caso de que quiera buscar imagenes por fecha y filtrarlas.">Ir </a>
				  	</div>
				 	<a class="btn-todas" href="" title="Presione este boton en caso de que quiera volver a ver todas las imagenes.">Borrar el filtro de fechas</a>
				</div>
				</div>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('mix-galeria') ) : ?>
			<?php endif; ?>
	         <div class="widget_mailchimpsf_widget" >
	          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('suscrib') ) : ?>
	          <?php endif; ?>
	        </div>
		</div>
			
			  <div id="main" class="span9 clearfix" role="main">
			  	
			  	<div class="layout-load span12" >
					<div class="spinner">
					  <div class="bounce1"></div>
					  <div class="bounce2"></div>
					  <div class="bounce3"></div>
					</div>
		  		</div>
		  		<?php
						if( isset($_GET['id']) )
						{
								if( getElementGallery($_GET['id']) != null )
								{
									echo getElementGallery($_GET['id']);	
								}
						} 

				?>
				<div id="main-articulos" class="main-galeria">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php	if(in_category($blogId)) : ?>
					<?php	
					/* Para sacar etiquetas HTML del contenido */
						$content 		= get_the_content();

						$post_thumbnail_id 	 = get_post_thumbnail_id($post->ID, 'full');
						$post_thumbnail_url  = (!empty($post_thumbnail_id)) ? wp_get_attachment_url( $post_thumbnail_id ) : get_template_directory_uri().'/images/dummie-galeria.png';

					//	$url 			= wp_get_attachment_url( get_the_post_thumbnail($post->ID,'medium') ) ; 
					//	$url    		= (!empty($url)) ? $url : get_template_directory_uri().'/images/dummie-post.png'; 				
						$categoria 		= get_the_category();
						$categoria 		= ( !empty($categoria[1]->name) ) ? $categoria[1]->name : $categoria[0]->name ;	
								
					?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" class="blog-thumb">
						<a href="<?php echo $post_thumbnail_url  ?>" rel="bookmark" class="galeria-item fancybox" title="<?php the_title_attribute(); ?>" 
							caption="<?php echo $content ;  ?>" datePub="<?php echo get_the_time('j').' de '.get_the_time('F').' del '.get_the_time('Y') ?>" 
							cat="<?php echo ucwords( strtolower($categoria) ) ;  ?>" >

								<!-- key isotope --><span class="categorias"><?php echo strtolower($categoria);  ?> <!-- end key isotope --></span>

								<figure class="img-galeria"><img src="<?php echo $post_thumbnail_url ?>" alt="<?php the_title(); ?>"  class="thumb" /></figure>
								<div class="contenido">
									<header >
										<h1><?php the_title(); ?></h1>
										<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('j'); echo " de "; the_time('F'); echo " del "; the_time('Y'); ?></time>
									</header>
									<p><?php echo $content ;  ?></p>

								</div>	
						</a>
					</article>
					<?php endif; ?>
					<?php endwhile; ?>									
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("No Posts Yet", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, What you were looking for is not here.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					<?php endif; ?>
					</div> 		
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
							<div class="row pagination">
								<ul class="span12">
									<li class="span10 more-post-gallery"><?php //next_posts_link("VER MÁS") ?><a id="pagina"  rel=1 >VER MÁS</a></li>
									<li class="span2 subir"><a href="#" title="Inicio">&#9650;</a></li>
								</ul>
						</div>
						<?php //page_navi(); // use the page navi function ?>

					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>								   							
				</div> <!-- end #main -->

			</div> <!-- end #content -->

<?php get_footer(); ?>

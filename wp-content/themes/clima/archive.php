<?php
// ID DE LOS ARTICULOS TIPO BLOG.
$blogId		= 2;
?>
<?php get_header(); ?>
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
            <div class="span3">
            	<div class="menu-clima" id="menu-clima">
		            <label class="checkbox">
						<input id="filtro" class="filtro" type="checkbox" data-filter=".category-medio-ambiente">
						Medio Ambiente
					</label>
					<label class="checkbox">
						<input class="filtro" type="checkbox" data-filter=".category-clima-y-autos">
						Clima y Autos
					</label>
					<label class="checkbox">
						<input class="filtro" type="checkbox" data-filter=".category-clima-y-ciencia">
						Clima y Ciencia
					</label>			
					<label class="checkbox">
						<input class="filtro" type="checkbox" data-filter=".category-clima-y-salud">
						Clima y Salud
					</label>		
					<label class="checkbox">
						<input class="filtro" type="checkbox" data-filter=".category-innovacion-sostenible">
						Innovación Sostenible
					</label>				
					<label class="checkbox">
						<input class="filtro" type="checkbox" data-filter=".category-clima-novedades">
						Clima Novedades
					</label>			
					<label class="checkbox">
						<input class="filtro" type="checkbox" data-filter=".category-prevencion">
						Prevención
					</label>
					<label class="checkbox">
						<input class="filtro" type="checkbox" data-filter=".todos">
						Todos
					</label>						
					<select id="size" name="filter by" class="isotopenav" style="display:none"></select> 
			</div> 
			<?php get_sidebar(); // sidebar 1 ?>
		</div>
			
			  <div id="main" class="span9 clearfix" role="main">
				<div id="main-articulos">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php
						/* Para sacar etiquetas HTML del contenido */
						$content = get_the_content();
					?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" class="blog-thumb">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								<?php in_category($blogId); ?>
								<?php 
									$categoria 		= get_the_category();
									$categoria 		= ( !empty($categoria[1]->name) ) ? $categoria[1]->name : $categoria[0]->name ;	
								 ?>
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ; ?>
								<?php $url = (!empty($url)) ? $url : get_template_directory_uri().'/images/dummie-post.png'; ?>

								<figure><img src="<?php echo $url ?>" alt="<?php the_title(); ?>" class="thumb" /></figure>
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
						
					<?php $i++; endwhile; ?>									
					
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
									<li class="span10 more-post"><?php //next_posts_link("VER MÁS") ?><a id="pagina"  rel=1 >VER MÁS</a></li>
									<li class="span2"><a href="#" title="Inicio">&#9650;</a></li>
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

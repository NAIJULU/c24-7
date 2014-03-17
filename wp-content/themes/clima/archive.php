

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

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" style="display:block; width: 220px; height: 220px; padding-right: 20px;">

						<?php
						$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

						?>
						<section class="post_content" style="background-image:url('<?php echo $url ?>'); display:block; width: 220px; height: 220px">
						
							<p class="meta" style="background-color: #000; color: #FFF">
								<?php the_category(', '); ?><br/> 
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a><br/>
								<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('j'); echo " de "; the_time('F'); echo " del "; the_time('Y'); ?></time>
							</p>							
											
						</section> <!-- end article section -->
						
						<footer>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
				
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
						<div class="pagination">
							<ul class="clearfix">
								<li class="more-post"><?php next_posts_link("VER MÁS") ?></li>
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

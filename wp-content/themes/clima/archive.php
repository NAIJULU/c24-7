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
			<ul id="filters">
				<li><a href="#" data-filter="*">show all</a></li>
				<li><a href="#" data-filter=".metal">metal</a></li>
				<li><a href="#" data-filter=".transition">transition</a></li>
				<li><a href="#" data-filter=".alkali, .alkaline-earth">alkali and alkaline-earth</a></li>
				<li><a href="#" data-filter=":not(.transition)">not transition</a></li>
				<li><a href="#" data-filter=".metal:not(.transition)">metal but not transition</a></li>
			</ul>	
			<div id="container">
			  <div class="element transition metal"><img src="http://lorempixel.com/200/200"/></div>
			  <div class="element post-transition metal"><img src="http://lorempixel.com/200/200"/></div>
			  <div class="element alkali metal"><img src="http://lorempixel.com/200/200"/></div>
			  <div class="element transition metal"><img src="http://lorempixel.com/200/200"/></div>
			  <div class="element lanthanoid metal inner-transition"><img src="http://lorempixel.com/200/200"/></div> 
			  <div class="element halogen nonmetal"><img src="http://lorempixel.com/200/200"/></div> 
			  <div class="element alkaline-earth metal"><img src="http://lorempixel.com/200/200"/></div>
			</div>			
			<div id="content" class="clearfix row-fluid">
            <div class="span3"><div class="menu-clima"><label class="checkbox">
				<input class="filtro" type="checkbox" id="medio-ambiente">
				Medio Ambiente
			</label>
			<label class="checkbox">
				<input class="filtro" type="checkbox" id="clima-autos">
				Clima y Autos
			</label>
			<label class="checkbox">
				<input class="filtro" type="checkbox" id="clima-ciencia">
				Clima y Ciencia
			</label>			
			<label class="checkbox">
				<input class="filtro" type="checkbox" id="clima-salud">
				Clima y Salud
			</label>		
			<label class="checkbox">
				<input class="filtro" type="checkbox" id="innovacion-sostenible">
				Innovación Sostenible
			</label>				
			<label class="checkbox">
				<input class="filtro" type="checkbox" id="clima-novedades">
				Clima Novedades
			</label>			
			<label class="checkbox">
				<input class="filtro" type="checkbox" id="prevencion">
				Prevención
			</label>			
			<select id="size" name="filter by" class="isotopenav" style="display:none">
				<option value="">View by...</option>
				<option value="*">All</option>
				<option value=".category-innovacion-sostenible">Innovación Sostenible</option>
				<option value=".category-medio-ambiente">Medio Ambiente</option>
				<option value=".category-clima-y-autos, .category-medio-ambiente">Clima y Autos</option>
			</select> </div> </div>
			
			  <div id="main" class="span9 clearfix" role="main">
				<div id="main-articulos">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							
							<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content">
						
							<?php the_post_thumbnail( 'wpbs-featured' ); ?>
						
							<?php the_excerpt(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
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

		
				<?php get_sidebar(); // sidebar 1 ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>
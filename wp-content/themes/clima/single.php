<?php get_header();?>
			
			<div id="content" class=" row-fluid">
			
			<div class="span3">
					<?php get_sidebar(); ?>
			</div>		
			
				<div id="main" class="span9 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
						
							<?php the_post_thumbnail( 'wpbs-featured' ); ?>
							<div class="clearfix row-fluid" id="titulo-int-blog">
							<div class="titulo-entrada span9"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>
							
							<!-- Fecha con el formato deseado -->

							<span class="meta-titulo span2">  <p style="font-size: 45px;margin-top:10px;"><?php echo get_the_date('d'); ?><p>  <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate> <?php the_date('F'); ?>  </span></div>
							
							<div class="span2">
							<!-- Boton imprimir articulo -->
							<?php if(function_exists('wp_print')) { print_link(); } ?> 
							</div>

							<div  style="width:50px;">
								<!-- Boton aumentar letra -->
								<?php if(function_exists('fontResizer_place')) { fontResizer_place(); } ?>
							</div>


						</header> <!-- end article header -->
						
						<section class="post_content clearfix" itemprop="articleBody">

							<?php the_content(); ?>

							<?php 
							//NAV 

							//previous_post_link();
							previous_post_link('%link', 'Anterior');
							echo '----';
							next_post_link('%link', 'Siguiente'); 
							?>
							<?php //wp_link_pages(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', '</p>'); ?>
							
							<?php 
							// only show edit button if user has permission to edit posts
							if( $user_level > 0 ) { 
							?>
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","bonestheme"); ?></a>
							<?php } ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template('',true); ?>
					
					<?php endwhile; ?>			
						
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>

				</div> <!-- end #main -->
    
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>

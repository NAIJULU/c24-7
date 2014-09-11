<?php get_header(); ?>

<?php

// ID DE LOS ARTICULOS TIPO BLOG.
$cat_cod 		  = get_cat_ID( single_cat_title("", false) );
$args = array(
  'orderby' => 'ID',
  'include' => $cat_cod
 );
$current_category =  get_categories( $args );

$cat_menu = ($current_category[0]->category_parent != 0 ) ? $current_category[0]->category_parent : $cat_cod;
$args = array(
  'orderby' => 'name',
  'parent'  => $cat_menu
 );
  
$categories = get_categories( $args );
?>



<div class="clearfix row-fluid">
	<div class="blog-title page-header span12">
		<?php if (is_category()) { ?>
		<h1 class="archive_title h2">
			<span><?php // _e("Posts Categorized:", "bonestheme"); ?></span> <?php single_cat_title(); ?>
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

<?php the_breadcrumb( $cat_cod ); ?>


<div id="content" class="clearfix row-fluid">
	<div class="span3">
		<div class="menu-clima" id="menu-clima">
			<?php if( $cat_cod == 23 ): ?>
					<p class="texto-filtro">Filtra las imágenes por categoría</p>
			<?php else: ?>
				<p class="texto-filtro">Categorias</p>
			<?php endif; ?>
				
			<?php
			foreach ($categories as  $value) 
			{	
				if( $value->cat_ID == $cat_cod )
				{
					$activo = ' menu-activo';
				}
				else
				{
					$activo = '';
				}
			?>
				<label class="checkbox<?php echo $activo ?>">
					<a href='<?php echo esc_url(get_category_link($value->cat_ID)) ?>' id="filtro" class="filtro" >
						<?php echo $value->name ?>
					</a>
				</label>
				<?php				
			}					
			?>
			<label class="checkbox">
				<?php 
					if( $current_category[0]->category_parent == 0 )
					{
						$activo = ' menu-activo';
					}
					else
					{
						$activo = '';
					}
				?>
				<a href="<?php get_category_link($cat_cod) ?>" class="filtro<?php echo $activo ?>" type="checkbox">
					Todos
				</a>
			</label>
									
		</div> 
		<?php if( $cat_cod == 23 || $current_category[0]->category_parent == 23): ?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('mix-galeria') ) : ?>
			<?php endif; ?>
	         <div class="widget_mailchimpsf_widget" >
				  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('suscrib') ) : ?>
				  <?php endif; ?>
			 </div>
		<?php else: 
			 get_sidebar();
		endif; ?>
		
	</div>
			
			<div id="main" class="span9 clearfix" role="main">
				<?php if( $cat_cod == 23 || $current_category[0]->category_parent == 23) : 

					$idGallery = cleanInt($_GET['id']);

					if( getElementGallery($idGallery) != null )
					{
						echo '<span span="clearfix row-fluid">';
						echo  getElementGallery($idGallery);	
						$cont = 2;

					}
					else
					{
						$cont = 1;	
					}
					
				?>
				
				<div id="main-articulos" class="span12 clearfix">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php

					
						$content 			 = get_the_content();

						$post_thumbnail_id 	 = get_post_thumbnail_id($post->ID, 'full');
						$post_thumbnail_url  = (!empty($post_thumbnail_id)) ? wp_get_attachment_url( $post_thumbnail_id ) : get_template_directory_uri().'/images/dummie-galeria.png';			
						$categoria 			 = get_the_category($post->ID);
						$categoria 			 = $categoria[0]->name;	
				 
						if( $cont == 1 ) 
						{
							echo '<span span="clearfix row-fluid">';
						}
					?>
					<article id="post-<?php the_ID(); ?>" role="article" class="blog-thumb span4">
						<a href="<?php echo $post_thumbnail_url  ?>" rel="bookmark" class="galeria-item fancybox" title="<?php the_title_attribute(); ?>" 
							caption="<?php echo $content ;  ?>" datePub="<?php echo get_the_time('j').' de '.get_the_time('F').' del '.get_the_time('Y') ?>" 
							cat="<?php echo ucwords( strtolower($categoria) ) ;  ?>" >

								<span class="categorias"><?php echo strtolower($categoria);  ?> <!-- end key isotope --></span>

								<figure class="img-galeria"><img src="<?php echo $post_thumbnail_url ?>" alt="<?php the_title(); ?>"  class="thumb" /></figure>
								<div class="contenido">
									<header >
										<h1><?php the_title(); ?></h1>
										<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('j'); echo " de "; the_time('F'); echo " del "; the_time('Y'); ?></time>
									</header>
									<p><?php echo $content ;  ?></p>

								</div>	
						</a>
					<?php 
					if( $cont >= 3 ) 
					{
						echo '</span>';
						$cont = 1;
					}
					else
					{
						$cont = $cont + 1 ;
					}
					?>
					</article>

					<?php endwhile; ?>									
					<?php 
					if( $cont < 3)
					  {
					  	echo '</span>';
					  }

					  ?>
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
					
			<?php else: ?>
					<div id="main-articulos" class="span12 clearfix">
						<?php if (have_posts()) : while (have_posts()) : the_post(); 

								$cont = 1;
						?>
							<?php	
							/* Para sacar etiquetas HTML del contenido */
							$content = get_the_content();

							$post_thumbnail_id 	 = get_post_thumbnail_id($post->ID, 'full');
							$post_thumbnail_url  = (!empty($post_thumbnail_id)) ? wp_get_attachment_url( $post_thumbnail_id ) : get_template_directory_uri().'/images/dummie-galeria.png';
				 
							if( $cont == 1 ) 
							{
								echo '<span span="clearfix row-fluid">';
							}

						?>

							<article id="post-<?php the_ID(); ?>" role="article" class="blog-thumb span4">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">					
									<?php 
									$categoria 		= get_the_category($post->ID);
									$categoria 		= $categoria[0]->name;
									?>
									<figure class="img-post"><img src="<?php echo $post_thumbnail_url ?>" alt="<?php the_title(); ?>" class="thumb" /></figure>
									<div class="contenido">
										<header ><!-- key isotope --><span class="categorias"><?php echo $categoria;  ?> <!-- end key isotope --></span>
											<h1><?php the_title(); ?></h1>
											<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('j'); echo " de "; the_time('F'); echo " del "; the_time('Y'); ?></time>
										</header>
										<p><?php
												$content = substr(wp_filter_nohtml_kses( $content ), 0,80).'...'; 
												//$content      = preg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]","", $content);
												$content      = preg_replace("/((http|https|www)[^\s]+)/","", $content);
												echo $content;
											?> 
										<span>Leer Más +<span></p>
									</div>	
								</a>
							</article>
						<?php 
							if( $cont >= 3 ) 
							{
								echo '</span>';
								$cont = 1;
							}
							else
							{
								$cont = $cont + 1 ;
							}
						?>	
						<?php endwhile; ?>		
					<?php 
					if( $cont < 3)
					  {
					  	echo '</span>';
					  }

					  ?>
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
					
			<?php endif; ?>
		</div> 		
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
	</div> <!-- end #main -->

</div> <!-- end #content -->
<?php get_footer(); ?>

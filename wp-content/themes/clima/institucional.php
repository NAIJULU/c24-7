<?php
/*
Template Name: Institucional
*/
?>
<?php get_header(); ?>

		<div id="content" class="clearfix row-fluid">
				<div id="main" class="span8 clearfix" role="main">
					<section class="post_content">
                          <div class="row-fluid clearfix">
		                       <div class="span12">
		                             <header>
										<div class="page-header"><h1>Institucional</h1></div>
									 </header>
								</div>
							<div id="main">
								<p>
								<?php                              
					                if (have_posts()) : while (have_posts()) : the_post();
					                  echo get_the_content();
					                endwhile;
					                endif;
					             ?>
								</p>
							</div>	
						   </div>	
					</section>
				</div>
				<div id="slidebar-der" class="span4">
      			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('slidebar_derecha') ) : ?>
    		 	<?php endif; ?>
    			</div>
		</div>			
<?php get_footer(); ?>					
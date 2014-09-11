<?php
/*
Template Name: Faq
*/
?>
<?php 

get_header(); 

$id_faq           	= ( !empty($_GET['id']) ) ? $_GET['id'] : 0;
$id_faq      		= cleanInt($id_faq);
$typeCollapse		= '';

?>
<div id="content" class="clearfix row-fluid">
	<div id="main" class="span12 clearfix" role="main">
		<div id="main-content" class="span9">
		  <section class="post_content">
			<div class="row-fluid clearfix">
				<div class="span12">
				  <header>
					<div class="page-header"><h1>FAQ</h1></div>
				  </header>
				</div>
			</div>
				<?php
					$args = array('cat'=>'37', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1' ); 
					$query = new WP_Query( $args );

					if ($query->have_posts()) :
					while ($query->have_posts() ) : $query->the_post();

					if ($id_faq == $post->ID )
					{
						$typeCollapse = 'in';
					}
					else
					{
						$typeCollapse  = '';
					}

					$url_faq = get_bloginfo( 'url' ).'/faq/?id='.$post->ID;
				?>
				<meta property="og:title"           content="Chocolate Pecan Pie" /> 
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $post->ID ?>" >
									<?php the_title(); ?>
								</a>
							</h4>
						</div>
						<div id="collapse-<?php echo $post->ID ?>" class="panel-collapse collapse <?php echo $typeCollapse ?> ">
							<div class="panel-body">
								<?php echo get_the_content(); ?>
								<div id="share">
									<span class="social-button">
										<div class="fb-share-button" data-href="<?php echo get_permalink() ?>" data-width="500" data-type="button"></div>
									</span>
									<span class="social-button">
										<a href="https://twitter.com/share" class="twitter-share-button" 
										data-url="<?php echo $url_faq ?>" data-text="clima 24 /7 | FAQ <?php echo the_title('','',false); ?>" data-count="none">Tweet</a>
									</span>
								</div>  
							</div>
						</div>
					</div>
				</div>
					<?php
					endwhile;
					else : ;
					?>
						<div id="content" class="clearfix row-fluid">
						<div class="page-header">
						<h1>No hay preguntas disponibles.</h1>
						</div>  
						</div>

					<?php       
						endif;
					?>
		 </section>
			</div>
		<div id="slidebar-der" class="span3">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('slidebar_derecha') ) : ?>
			<?php endif; ?>
		</div>
	</div>
</div>      
<?php get_footer(); ?>  

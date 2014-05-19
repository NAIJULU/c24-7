<?php
/*
Template Name: Suscripcion
*/
?>
<?php get_header(); ?>

    <div id="content" class="clearfix row-fluid">
      <div id="main" class="span12 clearfix" role="main">
        <section class="post_content">
          <div class="row-fluid clearfix">
              <div class="span12">
               <header>
                <div class="page-header"><h1>SUSCRIPCION</h1></div>
              </header>
            </div>
            <div>
              <?php                              
              if (have_posts()) : while (have_posts()) : the_post();
                echo get_the_content();
              endwhile;
              endif;
              ?>
            </div>
              <!-- para mas info consulte a functions.php -->
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('suscrib') ) : ?>
            <?php endif; ?>
          </div>
      </section>
    </div>
  </div>      
<?php get_footer(); ?>  

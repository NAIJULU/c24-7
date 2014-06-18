<?php
/*
Template Name: Mapa_Sitio
*/
?>
<?php get_header(); ?>

    <div id="content" class="clearfix row-fluid">
      <div id="main" class="span8 clearfix" role="main">
        <section class="post_content">
          <div class="row-fluid clearfix">
              <div class="span12">
               <header>
                <div class="page-header"><h1>Mapa del Sitio</h1></div>
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
            <?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('suscrib') ) : ?>
            <?php //endif; ?>
          </div>
      </section>
    </div>
    <div id="slidebar-der" class="span4">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('slidebar_derecha') ) : ?>
    <?php endif; ?>
  </div>
  </div>      
<?php get_footer(); ?>  
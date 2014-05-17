<?php
/*
Template Name: contacto
*/
?>
<?php get_header(); ?>

    <div id="content" class="clearfix row-fluid">
        <div id="main" class="span12 clearfix" role="main">
          <section class="post_content">
                  <div class="row-fluid clearfix">
                           <div class="span12">
                              <header>
                              <div class="page-header"><h1>Contacto</h1></div>
                              </header>
                            </div>
                              <!-- pluggin de contacto -->
                             <?php echo do_shortcode('[contact-form-7 id="407" title="Formulario de contacto 1"]'); ?>

                  </div>

          </section>
        </div>
    </div>      
<?php get_footer(); ?>  

<?php
/*
Template Name: Glosario
*/
?>
<?php get_header(); ?>

    <div id="content" class="clearfix row-fluid">
        <div id="main" class="span12 clearfix" role="main">
          <section class="post_content">
                          <div class="row-fluid clearfix">
                           <div class="span12">
                              <header>
                              <div class="page-header"><h1>GLOSARIO</h1></div>
                              </header>
                            </div>
                         </div>
                         <?php
                            $args = array('cat'=>'38', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1' ); 
                            $query = new WP_Query( $args );

                            if ($query->have_posts()) :
                                while ($query->have_posts() ) : $query->the_post();
                          ?>
                         <div class="panel-group" id="accordion">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $post->ID ?>" >
                                  <?php the_title(); ?>
                                </a>
                              </h4>
                            </div>
                            <div id="collapse-<?php echo $post->ID ?>" class="panel-collapse collapse">
                              <div class="panel-body">
                                <?php echo get_the_content(); ?>
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
    </div>      
<?php get_footer(); ?>  

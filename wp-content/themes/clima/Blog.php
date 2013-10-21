<?php
/*
Template Name: Clima en Vivo
*/
?>
<?php get_header(); ?>

<div id="content" class="clearfix row-fluid">
  <div id="main" class="span12 clearfix" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
      <section class="post_content">
        <div class="row-fluid clearfix">
          <div class="span3">
            <header>
              <div class="page-header">
                <h1>
                  <?php the_title(); ?>
                </h1>
              </div>
            </header>
            <!-- end article header --> 
            
            <!-- menu Blog -->
            <ul>
              <li id="btnMostrarClimaCiencia">Clima y Ciencia</li>
              <li id="btnMostrarClimaSalud">Clima y Salud</li>
              <li id="btnMostrarMedioAmbiente">Medio Ambiente</li>
              <li id="btnMostrarClimaAutos">Clima y Autos</li>
              <li id="btnMostrarClimaNovedades">Clima Novedades</li>
              <li id="btnMostrarPrevencion">Prevención</li>
              <li id="btnMostrarInnovacionSostenible">Innovación sostenible</li>
            </ul>
            
            <!-- Botones para compartir el blog en redes sociales -->
            <div id="Compartir">
              <ul>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="#">Facebook</a></li>
              </ul>
            </div>
            
            <!-- Suscripción -->
            <div id="suscripcion"> Suscríbete a Novedades
              <input class="suscribete" />
            </div>
            <div id="masVisto"> 
              <!-- AQUÍ VA EL WIDGET PARA EL ARTÍCULO MÁS VISTO --> 
            </div>
            <div id="masVotado"> 
              <!-- AQUÍ VA EL WIDGET PARA EL ARTÍCULO MÁS VOTADO --> 
            </div>
            <div id="masComentado"> 
              <!-- AQUÍ VA EL WIDGET PARA EL ARTÍCULO MÁS COMENTADO --> 
            </div>
          </div>
          <div class="span9"> 
            
            <!-- LINEA DE TRES ARTÍCULOS -->
            <div class="row-fluid clearfix">
              <div class="span4"> <img src="#" />
                <div class="metadatosArticulo">
                  <h2>Título del artículo</h2>
                  <h3>Sección artículo</h3>
                  <span>Fecha del articulo</span> </div>
              </div>
              <div class="span4"> <img src="#" />
                <div class="metadatosArticulo">
                  <h2>Título del artículo</h2>
                  <h3>Sección artículo</h3>
                  <span>Fecha del articulo</span> </div>
              </div>
              <div class="span4"> <img src="#" />
                <div class="metadatosArticulo">
                  <h2>Título del artículo</h2>
                  <h3>Sección artículo</h3>
                  <span>Fecha del articulo</span> </div>
              </div>
            </div>
            <!-- FIN LINEA DE TRES ARTÍCULOS --> 
            
            <!-- boton Ver más artículos -->
            <div id="controlesBlog">
              <ul>
                <li id="BtnVerMasBlog"><a href="#">Ver más</a></li>
                <li id="BtnSubirBlog"><a href="#">Subir</a></li>
              </ul>
            </div>
          </div>
        </div>
        <?php the_content(); ?>
      </section>
      <!-- end article section -->
      
      <footer>
        <p class="clearfix">
          <?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?>
        </p>
      </footer>
      <!-- end article footer --> 
      
    </article>
    <!-- end article -->
    
    <?php comments_template(); ?>
    <?php endwhile; ?>
    <?php else : ?>
    <article id="post-not-found">
      <header>
        <h1>
          <?php _e("Not Found", "bonestheme"); ?>
        </h1>
      </header>
      <section class="post_content">
        <p>
          <?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?>
        </p>
      </section>
      <footer> </footer>
    </article>
    <?php endif; ?>
  </div>
  <!-- end #main -->
  
  <?php //get_sidebar(); // sidebar 1 ?>
</div>
<!-- end #content -->

<?php get_footer(); ?>

<?php
/*
Template Name: Clima en Vivo
*/
$hoy = strtotime(date('Y-m-d'));
$manana = strtotime(date('Y-m-d').' +1 day');   
?>
<?php get_header(); ?>

<div id="content" class="clearfix row-fluid">
  <div id="main" class="span12 clearfix" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
	     <header>
	      <div class="page-header">
	          <h1>
	            <?php the_title(); ?>
	          </h1>
	      </div>
	     </header>
      <!-- end article header -->
  
      <section class="post_content">
        <div class="row-fluid clearfix">
          <div class="span3"> 
            <!-- menu Clima en vivo -->
           
	         <div class="menu-clima">
	            <ul>
	              <li class="item-clima"><a id="btnMostrarRadarMeteorologico" class="radar" href="radar-meterologico">Radar Meteorológico</a></li>
	              <li class="item-clima"><a id="btnMostrarPronosticoTemperatura" class="pronostico" href="pronostico">Pronóstico - Temperatura actual, máxima y mínima</a></li>
	              <li class="item-clima"><a id="btnMostrarVistaVivo" class="siata" href="vista-vivo">Vista en vivo del SIATA</a></li>
	              <li class="item-clima"><a id="btnMostrarSensores" class="sensores" href="sensores">Red de sensores de nivel de quebradas</a></li>
                <li class="item-clima"><a id="btnMostrarTemperaturaActual" class="sensores" href="temperatura-actual">Temperatura Actual</li>
	            </ul>
            </div>

            <!-- Últimas fotos -->
            
            <div id="ultimasFotos">
              <h2>Últimas fotos</h2>
              <!-- INSERTAR AQUÍ EL WIDGET PARA LAS ÚLTIMAS FOTOS SUBIDAS POR LOS USUARIOS --> 
            </div>
            
            <!-- Suscripción -->
            <div id="suscripcion">
            	<img src="/c24-7/wp-content/themes/clima/images/rss-ico.png" class="icono-sus"></img>
            	<p>Suscríbete a nuestro <strong>pronóstico diario</strong></p>
             	<input class="suscribete" /><a href="#" class="enviar-suscripcion"><i class="icon-play icon-white"></i></a>
            </div>
          </div>
          <div class="span9">
            <div id="radar-meterologico" class="container-function-1"><!-- <a class="convencion" href="#convencionesRadar">Ver convenciones</a>
                <div class="convencionesRadar" style="display:none"> 
                  
                </div>
              -->

               <?php viewConvenciones("Este es un mapa climatologico que muestra en donde estan las mayores concentraciones de lluvia, ambar, queso rayado, se puede divisar los diferentes tipo de aguapanela") ?>

                <div id="contenedor-radar" class="fondo-contenido-1">
                  <div id="mapa"></div>
                </div>
            </div>
            <div id="pronostico" style="display:none" class="container-function-1"> <!-- <a class="convencion" href="#convencionesPronostico">Ver convenciones</a> -->

              <?php viewConvenciones(" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed justo et dui lacinia tristique pellentesque vitae diam. Nullam malesuada leo at adipiscing porta. Suspendisse nec mauris felis. Sed adipiscing suscipit nibh sed blandit. Nulla aliquam cursus quam, eu dictum justo tincidunt ac. Integer varius lorem magna, ut fermentum odio pellentesque a. Nulla sed aliquam diam. Nullam aliquet libero semper magna aliquet sodales. Nullam vel bibendum neque, nec porta ligula.

        Phasellus rhoncus accumsan enim, sed dictum orci convallis vitae. Vestibulum et congue arcu. Phasellus at tellus sed mauris lobortis consequat. Etiam quis rhoncus magna. Donec fermentum imperdiet velit ut sodales. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla orci elit, lobortis sit amet ornare id, rutrum non enim. Quisque quis dui vel neque aliquet imperdiet. Integer consequat, velit ut molestie interdum, arcu turpis laoreet magna, vitae tincidunt est ipsum facilisis orci. Nulla facilisi. Nulla facilisi. Aliquam erat volutpat. Aenean ipsum magna, tincidunt in sodales et, auctor ac risus.

        Sed a lacus mollis, molestie dolor at, posuere enim. Pellentesque consequat in metus eget lobortis. Cras a venenatis urna, ut vulputate mauris. Nunc tristique massa a sem tincidunt, et dignissim nulla rutrum. Duis at nunc euismod, varius leo sed, malesuada nisi. Phasellus ultrices ipsum massa, feugiat euismod leo placerat eu. Sed tristique rhoncus mattis.

        Nullam hendrerit tortor vel faucibus accumsan. Etiam porttitor dolor ac tortor bibendum sagittis. Nam enim tellus, facilisis sed tristique ac, eleifend varius tortor. In hac habitasse platea dictumst. Sed pellentesque nulla quis enim sagittis, id ultrices dui mollis. Integer ultrices nisi eu diam congue, dictum ultricies augue commodo. Ut malesuada iaculis dui ac lobortis. Quisque vitae eros posuere, gravida neque vel, hendrerit tortor. Maecenas fringilla faucibus dui. Nam consectetur quam id metus fermentum eleifend. Duis vel feugiat mi. Donec eu justo nisl. "); ?>

          <!--    <div class="convencionesPronostico" style="display:none"> 
               
                  </div> -->
				      <div id="pronosticos" class="carousel slide"> 
				          <!-- Carousel items -->
				  			<!-- para mas info consulte a functions.php -->
		          	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('pronostico-widget') ) : ?>

		          	<?php endif; ?>
              </div>
            </div>
              
            <div id="vista-vivo" style="display:none">
              <!--  <div class="convencionesVistaVivo" style="display:none"> 
                </div>
              -->
          
              <div id="vivo-camara1" class="container-vivo">

                  <?php viewConvenciones(" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed justo et dui lacinia tristique pellentesque vitae diam. Nullam malesuada leo at adipiscing porta. Suspendisse nec mauris felis. Sed adipiscing suscipit nibh sed blandit. Nulla aliquam cursus quam, eu dictum justo tincidunt ac. Integer varius lorem magna, ut fermentum odio pellentesque a. Nulla sed aliquam diam. Nullam aliquet libero semper magna aliquet sodales. Nullam vel bibendum neque, nec porta ligula.

              Phasellus rhoncus accumsan enim, sed dictum orci convallis vitae. Vestibulum et congue arcu. Phasellus at tellus sed mauris lobortis consequat. Etiam quis rhoncus magna. Donec fermentum imperdiet velit ut sodales. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla orci elit, lobortis sit amet ornare id, rutrum non enim. Quisque quis dui vel neque aliquet imperdiet. Integer consequat, velit ut molestie interdum, arcu turpis laoreet magna, vitae tincidunt est ipsum facilisis orci. Nulla facilisi. Nulla facilisi. Aliquam erat volutpat. Aenean ipsum magna, tincidunt in sodales et, auctor ac risus.

              Sed a lacus mollis, molestie dolor at, posuere enim. Pellentesque consequat in metus eget lobortis. Cras a venenatis urna, ut vulputate mauris. Nunc tristique massa a sem tincidunt, et dignissim nulla rutrum. Duis at nunc euismod, varius leo sed, malesuada nisi. Phasellus ultrices ipsum massa, feugiat euismod leo placerat eu. Sed tristique rhoncus mattis.

              Nullam hendrerit tortor vel faucibus accumsan. Etiam porttitor dolor ac tortor bibendum sagittis. Nam enim tellus, facilisis sed tristique ac, eleifend varius tortor. In hac habitasse platea dictumst. Sed pellentesque nulla quis enim sagittis, id ultrices dui mollis. Integer ultrices nisi eu diam congue, dictum ultricies augue commodo. Ut malesuada iaculis dui ac lobortis. Quisque vitae eros posuere, gravida neque vel, hendrerit tortor. Maecenas fringilla faucibus dui. Nam consectetur quam id metus fermentum eleifend. Duis vel feugiat mi. Donec eu justo nisl. "); ?>

                <div class="img-vivo"> <img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_86_TORRESIATA_nororiente.jpg" alt="Torre SIATA Nororiente"/> </div>
                <div class="description">
                  <h4>Vista Nororiente - Torre Siata</h4>
                  <p>Poblado, Envigado, Itagüi, Sabaneta, Caldas, La Estrella.</p>
                </div>
              </div>

              <div id="vivo-camara2" class="container-vivo" style="display:none">
                
               <?php viewConvenciones(" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed justo et dui lacinia tristique pellentesque vitae diam. Nullam malesuada leo at adipiscing porta. Suspendisse nec mauris felis. Sed adipiscing suscipit nibh sed blandit. Nulla aliquam cursus quam, eu dictum justo tincidunt ac. Integer varius lorem magna, ut fermentum odio pellentesque a. Nulla sed aliquam diam. Nullam aliquet libero semper magna aliquet sodales. Nullam vel bibendum neque, nec porta ligula.

              Phasellus rhoncus accumsan enim, sed dictum orci convallis vitae. Vestibulum et congue arcu. Phasellus at tellus sed mauris lobortis consequat. Etiam quis rhoncus magna. Donec fermentum imperdiet velit ut sodales. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla orci elit, lobortis sit amet ornare id, rutrum non enim. Quisque quis dui vel neque aliquet imperdiet. Integer consequat, velit ut molestie interdum, arcu turpis laoreet magna, vitae tincidunt est ipsum facilisis orci. Nulla facilisi. Nulla facilisi. Aliquam erat volutpat. Aenean ipsum magna, tincidunt in sodales et, auctor ac risus.

              Sed a lacus mollis, molestie dolor at, posuere enim. Pellentesque consequat in metus eget lobortis. Cras a venenatis urna, ut vulputate mauris. Nunc tristique massa a sem tincidunt, et dignissim nulla rutrum. Duis at nunc euismod, varius leo sed, malesuada nisi. Phasellus ultrices ipsum massa, feugiat euismod leo placerat eu. Sed tristique rhoncus mattis.

              Nullam hendrerit tortor vel faucibus accumsan. Etiam porttitor dolor ac tortor bibendum sagittis. Nam enim tellus, facilisis sed tristique ac, eleifend varius tortor. In hac habitasse platea dictumst. Sed pellentesque nulla quis enim sagittis, id ultrices dui mollis. Integer ultrices nisi eu diam congue, dictum ultricies augue commodo. Ut malesuada iaculis dui ac lobortis. Quisque vitae eros posuere, gravida neque vel, hendrerit tortor. Maecenas fringilla faucibus dui. Nam consectetur quam id metus fermentum eleifend. Duis vel feugiat mi. Donec eu justo nisl. "); ?>
              
                <div class="img-vivo"> <img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_82_TORRESIATA_suroriente.jpg" alt="Torre SIATA Suroriente"/> </div>
                <div class="description">
                  <h4>Vista Suroriente - Torre Siata</h4>
                  <p>Poblado, Envigado, Itagüi, Sabaneta, Caldas, La Estrella.</p>
                </div>
              </div>

              <div id="vivo-camara3" class="container-vivo" style="display:none">


               <?php viewConvenciones(" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed justo et dui lacinia tristique pellentesque vitae diam. Nullam malesuada leo at adipiscing porta. Suspendisse nec mauris felis. Sed adipiscing suscipit nibh sed blandit. Nulla aliquam cursus quam, eu dictum justo tincidunt ac. Integer varius lorem magna, ut fermentum odio pellentesque a. Nulla sed aliquam diam. Nullam aliquet libero semper magna aliquet sodales. Nullam vel bibendum neque, nec porta ligula.

              Phasellus rhoncus accumsan enim, sed dictum orci convallis vitae. Vestibulum et congue arcu. Phasellus at tellus sed mauris lobortis consequat. Etiam quis rhoncus magna. Donec fermentum imperdiet velit ut sodales. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla orci elit, lobortis sit amet ornare id, rutrum non enim. Quisque quis dui vel neque aliquet imperdiet. Integer consequat, velit ut molestie interdum, arcu turpis laoreet magna, vitae tincidunt est ipsum facilisis orci. Nulla facilisi. Nulla facilisi. Aliquam erat volutpat. Aenean ipsum magna, tincidunt in sodales et, auctor ac risus.

              Sed a lacus mollis, molestie dolor at, posuere enim. Pellentesque consequat in metus eget lobortis. Cras a venenatis urna, ut vulputate mauris. Nunc tristique massa a sem tincidunt, et dignissim nulla rutrum. Duis at nunc euismod, varius leo sed, malesuada nisi. Phasellus ultrices ipsum massa, feugiat euismod leo placerat eu. Sed tristique rhoncus mattis.

              Nullam hendrerit tortor vel faucibus accumsan. Etiam porttitor dolor ac tortor bibendum sagittis. Nam enim tellus, facilisis sed tristique ac, eleifend varius tortor. In hac habitasse platea dictumst. Sed pellentesque nulla quis enim sagittis, id ultrices dui mollis. Integer ultrices nisi eu diam congue, dictum ultricies augue commodo. Ut malesuada iaculis dui ac lobortis. Quisque vitae eros posuere, gravida neque vel, hendrerit tortor. Maecenas fringilla faucibus dui. Nam consectetur quam id metus fermentum eleifend. Duis vel feugiat mi. Donec eu justo nisl. "); ?>

                <div class="img-vivo"> <img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_81_TORRESIATA_oriente.jpg" alt="Torre SIATA Oriente"/> </div>
                <div class="description">
                  <h4>Vista Oriente - Torre Siata</h4>
                  <p>Poblado, Envigado, Itagüi, Sabaneta, Caldas, La Estrella.</p>
                </div>
              </div>
              <div id="vivo-camara4" class="container-vivo" style="display:none">


               <?php viewConvenciones(" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed justo et dui lacinia tristique pellentesque vitae diam. Nullam malesuada leo at adipiscing porta. Suspendisse nec mauris felis. Sed adipiscing suscipit nibh sed blandit. Nulla aliquam cursus quam, eu dictum justo tincidunt ac. Integer varius lorem magna, ut fermentum odio pellentesque a. Nulla sed aliquam diam. Nullam aliquet libero semper magna aliquet sodales. Nullam vel bibendum neque, nec porta ligula.

              Phasellus rhoncus accumsan enim, sed dictum orci convallis vitae. Vestibulum et congue arcu. Phasellus at tellus sed mauris lobortis consequat. Etiam quis rhoncus magna. Donec fermentum imperdiet velit ut sodales. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla orci elit, lobortis sit amet ornare id, rutrum non enim. Quisque quis dui vel neque aliquet imperdiet. Integer consequat, velit ut molestie interdum, arcu turpis laoreet magna, vitae tincidunt est ipsum facilisis orci. Nulla facilisi. Nulla facilisi. Aliquam erat volutpat. Aenean ipsum magna, tincidunt in sodales et, auctor ac risus.

              Sed a lacus mollis, molestie dolor at, posuere enim. Pellentesque consequat in metus eget lobortis. Cras a venenatis urna, ut vulputate mauris. Nunc tristique massa a sem tincidunt, et dignissim nulla rutrum. Duis at nunc euismod, varius leo sed, malesuada nisi. Phasellus ultrices ipsum massa, feugiat euismod leo placerat eu. Sed tristique rhoncus mattis.

              Nullam hendrerit tortor vel faucibus accumsan. Etiam porttitor dolor ac tortor bibendum sagittis. Nam enim tellus, facilisis sed tristique ac, eleifend varius tortor. In hac habitasse platea dictumst. Sed pellentesque nulla quis enim sagittis, id ultrices dui mollis. Integer ultrices nisi eu diam congue, dictum ultricies augue commodo. Ut malesuada iaculis dui ac lobortis. Quisque vitae eros posuere, gravida neque vel, hendrerit tortor. Maecenas fringilla faucibus dui. Nam consectetur quam id metus fermentum eleifend. Duis vel feugiat mi. Donec eu justo nisl. "); ?>

                <div class="img-vivo"> <img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_89_TORRESIATA_occidente.jpg" alt="Torre SIATA Occidente"/> </div>
                <div class="description">
                  <h4>Vista Occidente - Torre Siata</h4>
                  <p>Poblado, Envigado, Itagüi, Sabaneta, Caldas, La Estrella.</p>
                </div>
              </div>
              <div id="controles-vivo">
                <ul>
                  <li>
                  	<a id="btnMostrarCam1" href="vivo-camara1" class="thumb-camara">
                  		<img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_86_TORRESIATA_nororiente.jpg" alt="Torre SIATA Nororiente" />
                  		<p>Noroccidente1</p>
                  	</a>
                  </li>
                  <li>

				        	 <a id="btnMostrarCam2" href="vivo-camara2" class="thumb-camara">
                  		<img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_82_TORRESIATA_suroriente.jpg" alt="Torre SIATA Suroriente" />
                  		<p>Noroccidente2</p>
                  	</a>
                  </li>
                  <li>
                  	<a id="btnMostrarCam3" href="vivo-camara3" class="thumb-camara">
                  		<img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_81_TORRESIATA_oriente.jpg" alt="Torre SIATA Oriente" />
                  		<p>Noroccidente3</p>
                  	</a>
                  </li>
                  <li>
                  	<a id="btnMostrarCam4" href="vivo-camara4" class="thumb-camara">
                  		<img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_89_TORRESIATA_occidente.jpg" alt="Torre SIATA Occidente" />
                  		<p>Noroccidente4</p>
                  	</a>
                  </li>
                </ul>
              </div>
            </div>
           
            <div id="sensores" style="display:none"> <a class="convencion" href="#convencionesSensores">Ver convenciones</a>
              <div class="convencionesSensores" style="display:none"> 
                <!-- AQUÍ VAN LAS CONVENCIONES DE ESTE ITEM --> 
              </div>
              <h1>Sensores de Nivel</h1>
            </div>


          <div id="temperatura-actual" style="display:none" class="container-function-1"> 

              <?php viewConvenciones(" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed justo et dui lacinia tristique pellentesque vitae diam. Nullam malesuada leo at adipiscing porta. Suspendisse nec mauris felis. Sed adipiscing suscipit nibh sed blandit. Nulla aliquam cursus quam, eu dictum justo tincidunt ac. Integer varius lorem magna, ut fermentum odio pellentesque a. Nulla sed aliquam diam. Nullam aliquet libero semper magna aliquet sodales. Nullam vel bibendum neque, nec porta ligula.

                Phasellus rhoncus accumsan enim, sed dictum orci convallis vitae. Vestibulum et congue arcu. Phasellus at tellus sed mauris lobortis consequat. Etiam quis rhoncus magna. Donec fermentum imperdiet velit ut sodales. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla orci elit, lobortis sit amet ornare id, rutrum non enim. Quisque quis dui vel neque aliquet imperdiet. Integer consequat, velit ut molestie interdum, arcu turpis laoreet magna, vitae tincidunt est ipsum facilisis orci. Nulla facilisi. Nulla facilisi. Aliquam erat volutpat. Aenean ipsum magna, tincidunt in sodales et, auctor ac risus... "); ?>

              <div id="temperatura" >
                <img src=<?php echo bloginfo('template_url')."/images/tempactual.png";  ?> />
              </div> 

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
    
    <?php //comments_template(); ?>
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
</div>
<!-- end #content -->

<?php get_footer(); ?>

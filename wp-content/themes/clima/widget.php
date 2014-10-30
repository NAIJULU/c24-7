<?php
/*
Template Name: widget
*/
get_header(); 

$tema     = $_POST['tema'];
$opcion1  = $_POST['opcion1'];
$opcion2  = $_POST['opcion2'];

echo $opcion2;

gettype($tema, "int");
gettype($opcion1, "int");
gettype($opcion2 ,"int" );

$nombre     = filter_var($_POST['nombre'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$correo     = filter_var($_POST['correo'],FILTER_SANITIZE_EMAIL);
$web        = filter_var($_POST['web'],FILTER_SANITIZE_URL);

?>
<div id="content" class="clearfix row-fluid">
  <div id="widget" class="span12 clearfix" role="main">

    <div class="span6">
        <p> incluye en tu web, el widget de clima 24/7 </p>
        <form class="form-horizontal" method="post" action="">
            <div class="control-group">
                <label class="control-label" for="inputOpciones">Pronostico: </label>
                <div class="controls">
                     <label class="checkbox">
                        Lluvias  <input type="checkbox" name="opcion1" value="1">
                    </label>
                    <label class="checkbox">
                        Temperatura <input type="checkbox" name="opcion2" value="1">
                    </label>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="inputOpciones">Tema: </label>
                <div class="controls">
                    <select id="tema" name="tema">
                        <option value="1">Azul (defecto)</option>
                        <option value="2">Crema</option>
                        <option value="3">Darks</option>
                        <option value="4">Frutas tropiclaes</option>
                    </select>
                </div>
            </div>

            <div class="control-group">
               <input id="btn-widget" class="btn btn-success" type="button" value="Generar">
            </div>
            <!-- ventana modal de confirmacion -->

            <div id="modalWidget" class="modal hide fade">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Datos Básicos </h3>
              </div>
              <div class="modal-body">
                <p>
                   <label >
                        Nombre <input type="text" name="nombre" value="" required>
                    </label>
                </p>
                <p>
                   <label >
                        Correo Electronico <input type="email" name="correo" value="" required>
                    </label>
                </p>
                <p>
                   <label >
                        Web <input type="text" name="web" value="">
                    </label>
                </p>
              </div>
              <div class="modal-footer">
                <a href="#" id="btn-clima-cerrar" class="btn">Cerrar</a>
                <input type="submit" class="btn btn-primary" value="Guardar" />
              </div>
            </div>
        </form>
    </div>

    <div class="span6">
    	<article id="p-lluvia">
    		<header>
    			<div id="img-encabezado">
    				<img src="<?php echo bloginfo('template_url') .'/images/logoClima.png' ?>" alt="clima 24/7">
    			</div>
    		</header>
    		<section>
    			<div class="enc-ciudad">
    				<div class="enc enc-ciudad-cont">
    					<h3>Miercoles 25 de Julio</h3>
    					<h1>Copacabana</h1>
    				</div>
    			</div>
    			<div class="body-ciudad">
    				<div class="span12">
    					<div id="enc-lluvia" class="enc span6">
    						<h3>Pronostico de lluvias</h3>
    					</div>
    					<div id="enc-temp" class="enc span6">
    						<h3>pronostico de temperatura</h3>
    					</div>
    				</div>

    				<div class="span12">
    					<div class="det span6">
    						<span>Madrugada</span>
    					</div>
    					<div class="det span6">
                            <span class="span5">
                              <img src="<?php echo bloginfo('template_url') .'/images/BAJANOCHE.png' ?>" alt="clima 24/7">
                          </span>
                          <span class="span6">
                              <span>30%</span>
                          </span>
                      </div>
                  </div>

                  <div class="span12">
                        <div class="det span6">
                              <span>Madrugada</span>
                        </div>
                        <div class="det span6">
                            <span class="span5">
                              <img src="<?php echo bloginfo('template_url') .'/images/BAJADIA.PNG' ?>" alt="clima 24/7" />
                            </span>
                             <span class="span6">
                              <span>30%</span>
                            </span>
                        </div>
                    </div>
                    <div class="span12">
                          <div class="det span6">
                              <span>Tarde</span>
                          </div>
                          <div class="det span6">
                               <span class="span5">
                                  <img src="<?php echo bloginfo('template_url') .'/images/MEDIA.png' ?>" alt="clima 24/7">
                               </span>
                              <span class="span6">
                                <span>40%</span>
                              </span>
                           </div>
                    </div>
                    <div class="span12">
                         <div class="det span6">
                          <span>Noche</span>
                        </div>
                        <div class="det span6">
                          <span class="span5">
                              <img src="<?php echo bloginfo('template_url') .'/images/ALTANOCHE.png' ?>" alt="clima 24/7">
                          </span>
                          <span class="span6">
                              <span>60%</span>
                          </span>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="span12">
             <div class="more-info">
                <a href="http://www.clima247.gov.co">¿Quieres conocer mas sobre el clima?</a>
            </div>
            </footer>
        </article>
    </div>

  </div> <!-- end main -->
</div><!-- end content -->





<?php get_footer(); ?>
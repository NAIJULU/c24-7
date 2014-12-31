<?php
/*
* Template Name: widget
*/
get_header(); 
$generado   = false;
$ciudades = getCiudades();
$hoy      = strtotime(date('Y-m-d'));
$manana   = strtotime(date('Y-m-d').' +1 day');
$dias     = unserialize(C247_DIAS);
$meses    = unserialize(C247_MESES);


if( count( $_POST ) > 0 )
{
  include( 'procesoWidget.php');  
  $generado = true;
}

?>
<div id="content" class="clearfix row-fluid">
  <div id="widget" class="span12 clearfix" role="main">

    <div class="span6">
    
        <form id="widget-form" class="form-horizontal" method="post" action="">
          <div id="inner-form">
              <div class="page-header">
                <h1> Incluye el widget de clima 24/7 en tu sitio web</h1>
              </div>

              <p>Ahora toda la información de clima 24/7 la podras tener en tu sitio web
              .Configura el siguiente widget con el contenido que te interese , 
              genera el código e inclúyelo en tu sitio web </p>

            <div class="control-group punteo">
                <label>
                 <strong> 1. Selecciona la información que quieres incluir en el widget:</strong>
                </label>
                  <label class="checkbox inline control-par">
                      Lluvias  <input type="checkbox" name="opcion1" value="1">
                  </label>
                  <label class="checkbox inline control-par">
                          Temperatura <input type="checkbox" name="opcion2" value="1">
                  </label>
            </div>

            <div class="control-group punteo">
              <label>
                <strong>2. Selecciona los sectores del Área Metropolitana de los cuales quieres 
                que se muestre información:</strong>
              </label>
                  <?php foreach ($ciudades as $key => $value) : ?>
                     <label class="checkbox inline control-par">
                        <?php echo $value ?><input class="widget-ciudad" type="checkbox" name="ciudades[]" value="<?php echo ( $key + 1 ) ?>" />
                    </label>
                  <?php endforeach; ?>    
            </div>

            <div class="control-group punteo">
                <label>
                  <strong>3. Selecciona el esquema de color que más se ajuste a tu sitio web: </strong>
                </label>
                <div class="controls">
                    <select id="tema" name="tema">
                        <option value="1">Azul (Por Defecto )</option>
                        <option value="2">Crema</option>
                        <option value="3">Darks</option>
                        <option value="4">Frutas tropiclaes</option>
                    </select>
                </div>
            </div>
            <div class="punteo" >

              <div>
                <label >
                  <strong>4. Llena estos datos basicos para completar el proceso:</strong>
                </label>
              </div>

              <div class="control-group">
                <label class="control-label" for="inputNombre">Nombre: </label>
                <div class="controls">
                  <input id="widget-nombre" type="text" name="nombre" value="" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputNombre">Correo : </label>
                <div class="controls">
                  <input id="widget-correo" type="email" name="correo" value="" required>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="inputNombre">Web : </label>
                <div class="controls">
                 <input id="widget-web" type="text" name="web" value="">
               </div>
             </div>
           </div>  

             <?php if( !$generado ): ?>
                <div class="control-group">
                  <input id="btn-guardar-widget" type="submit" class="btn btn-success" value="Generar" />
                </div>
            <?php endif; ?> 
        </div>
      </form>

        <?php if( $generado ): ?>
        <?php
          settype($lastId, 'int');
        ?>
        <p> Ingresa el siguiente código dentro de tu sitio web web </p>
        <div class="well">
           <?php echo htmlspecialchars('<div class="widget-c247"><div class="inner-widget" data-id="'.$lastId.'"></div><script src="http://localhost/c24-7/wp-content/themes/clima/library/js/widget-embed.js"></script></div>'); ?> 
        </div>
        <?php endif; ?>

    </div>

    <div class="span6">
      <div class="info">
         Previsualización con datos de ejemplo
      </div> 
    	<article class="span12" id="pronosticos">
    		<header>
    			<div id="img-encabezado">
    				<img src="<?php echo bloginfo('template_url') .'/images/logoClima.png' ?>" alt="clima 24/7">
    			</div>
    		</header>
    		<section>
    			<div class="enc-ciudad">
    				<div class="enc enc-ciudad-cont">
    					<h3><span class="dia"><?php echo $dias[strftime("%w", $hoy)] ?> </span> <span class="dias"><?php echo strftime("%d", $hoy); ?> </span> de <span class="mes"><?php echo $meses[date('n')]; ?> </span></h3>
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

            <div id="lluvias">
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
            <div id="p-temperatura" style="display:none;">
              <div class="span12">
                <div  class="det-temp span6">
                 <span class="span5">
                  <img src="<?php echo bloginfo('template_url') .'/images/t-azul.png' ?>" alt="clima 24/7">
                </span>
              </div>
              <div  class="det-temp span6">
                <span class="span5">
                  <img src="<?php echo bloginfo('template_url') .'/images/t-naranja.png' ?>" alt="clima 24/7">
                </span>
              </div>
            </div>
            <div class="span12">
               <div class="enc span6">
                <h3>30 %</h3>
              </div>
              <div class="enc span6">
                <h3>60 %</h3>
              </div>
            </div>
            <div class="span12">
               <div class="enc span6">
                <h3>Minimo</h3>
              </div>
              <div class="enc span6">
                <h3>Maximo</h3>
              </div>
            </div>
          </div>

        </div>
        </section>
        <footer class="span12">
           <div class="more-info">
            <a target="_blank" href="http://www.clima247.gov.co">¿Quieres conocer mas sobre el clima?</a>
          </div>
        </footer>
    </article>
    
    </div>

  </div> <!-- end main -->
</div><!-- end content -->





<?php get_footer(); ?>
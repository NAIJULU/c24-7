<?php
  setlocale(LC_ALL, 'es_ES.UTF8');
  class WidgetPronosticoHome extends WP_Widget 
   {
  
	  private $hoy;
	  private $manana;
  
	  function WidgetPronosticoHome(){
		  $this->hoy = strtotime(date('Y-m-d'));
		  $this->manana = strtotime(date('Y-m-d').' +1 day');
		  parent::__construct( false, 'Widget Pronóstico / Radar / Temperatura Actual', array('description'=>'Este widget muestra 3 pestañas que contienen el pronóstico, radar y la temperatura actual.'));
	  }
  
	  function widget( $args, $instance ){
		  $this->mostrarPronosticoHome($args, $instance);
	  }
  
	  function update( $new_instance, $old_instance ){
		  return $new_instance;
	  }
 
	  function mostrarPronosticoHome($args, $instance){
		  extract($args);																					
		  /* Se muestra el título del widget */
		  echo $before_widget;
		  ?>

<div id="widget-pronostico">
  <div class="controles">
    <ul class="menuControles">
      <li><a href="#pronosticos" id="btnMostrarPronostico">Pronóstico</a></li>
      <li><a href="#radar" id="btnMostrarRadar">Radar</a></li>
      <li><a href="#temperaturas" id="btnMostrarTemperatura">Temperatura</a></li>
    </ul>
  </div>
  <div id="pronosticos" class="carousel slide"> 
    <!-- Carousel items -->
    <div id="ciudades" class="carousel-inner">

    <?php $i=1;
	$ciudades = array(
		'Medellín' => 'Medellin', 
		'Barbosa' => 'Barbosa',
		'Girardota' => 'Girardota',
		'Copacabana' => 'Copacabana',
		'Bello' => 'Bello',
		'Envigado' => 'Envigado',
		'Sabaneta' => 'Sabaneta',
		'La Estrella' => 'LaEstrella',
		'Itagüí' => 'Itagui',
		'Caldas' => 'Caldas',
		
	);
	foreach($ciudades as $nombre => $ciudad):?>
    <div class="<?php if($i) echo 'active';$i=0?> item">
        <h2>Pronóstico de <?php echo $nombre?></h2>
        <div class="row-fluid">
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span12"> <span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $this->hoy); ?> </span> <span class="dias"><?php echo strftime("%d", $this->hoy); ?> </span> </div>
              <div class="span12 lluvias"> <span class="titulo2">Pronóstico Lluvia</span>
                <div class="row-fluid">
                  <div class="span3">
                    
                      <div class="pronostico-item">Madrugada</div>
                       <div class="numMax"><?php echo porcentajeEquivalente( get_option('LluvMad'.$ciudad) )."%"; ?></div>
                      <div class="numMax"><?php echo get_option('LluvMad'.$ciudad) ?></div>
                    
                  </div>
                  <div class="span3">
                    
                      <div class="pronostico-item">Mañana</div>
                       <div class="numMax"><?php echo porcentajeEquivalente( get_option('LluvMan'.$ciudad) )."%"; ?></div>
                      <div class="numMax"><?php echo get_option('LluvMan'.$ciudad) ?></div>
                    
                  </div>
                  <div class="span3">
                    
                      <div class="pronostico-item">Tarde</div>
                       <div class="numMax"><?php echo porcentajeEquivalente( get_option('LluvTar'.$ciudad) )."%"; ?></div>
                      <div class="numMax"><?php echo get_option('LluvTar'.$ciudad) ?></div>
                    
                  </div>
                  <div class="span3">
                    
                      <div class="pronostico-item">Noche</div>
                       <div class="numMax"><?php echo porcentajeEquivalente( get_option('LluvNoc'.$ciudad) )."%"; ?></div>
                      <div class="numMax"><?php echo get_option('LluvNoc'.$ciudad) ?></div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="row-fluid">
              <div class="span12 temp"> <span class="titulo2">Pronóstico Temperatura</span>
                <div class="row-fluid">
                  <div class="span6">
                    <div class="row-fluid">
                      <div class="span8 tempMaxgrados">Máxima</div>
                      <div class="span4 numMaxgrados"> <?php echo get_option('tempMax'.$ciudad); ?>° </div>
                    </div>
                  </div>
                  <div class="span6">
                    <div class="rowfluid">
                      <div class="span8 tempMingrados">Mínima</div>
                      <div class="span4 numMingrados"><?php echo get_option('tempMin'.$ciudad) ?>° </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="span6 mapa-ciudades"> <img src="wp-content/uploads/mapas/mapa_<?php echo ucfirst($ciudad)?>.png" />   </div>
        </div>
      </div>
    <?php endforeach?>
    </div>
    <ol class="ciudades">
      <li data-target="#pronosticos" data-slide-to="0" class="active">Medellín</li>
      <li data-target="#pronosticos" data-slide-to="1">Barbosa</li>
      <li data-target="#pronosticos" data-slide-to="2">Girardota</li>
      <li data-target="#pronosticos" data-slide-to="3">Copacabana</li>
      <li data-target="#pronosticos" data-slide-to="4">Bello</li>
      <li data-target="#pronosticos" data-slide-to="5">Envigado</li>
      <li data-target="#pronosticos" data-slide-to="6">Sabaneta</li>
      <li data-target="#pronosticos" data-slide-to="7">La Estrella</li>
      <li data-target="#pronosticos" data-slide-to="8">Itagüi</li>
      <li data-target="#pronosticos" data-slide-to="9">Caldas</li>
    </ol>
  </div>
  <div id="radar">
    <div id="contenedor-radar">
      <div id="mapa"> </div>
    </div>
  </div>
  <div id="temperaturas" class="carousel slide"> 
    <!-- Carousel items -->
    <div id="ciudades" class="carousel-inner">
      <div class="active item"><img src="http://www.areadigital.gov.co/ftpclima/TemperaturaAMVA.png"/></div>
      <div class="item"><img src="http://www.areadigital.gov.co/ftpclima/pronosticonorte.png"/></div>
      <div class="item"><img src="http://www.areadigital.gov.co/ftpclima/pronosticomedellin.png"/></div>
      <div class="item"><img src="http://www.areadigital.gov.co/ftpclima/pronosticosur.png"/></div>
      <div class="item"><img src="http://www.areadigital.gov.co/ftpclima/TemperaturaAMVA.png"/></div>
      <div class="item"><img src="http://www.areadigital.gov.co/ftpclima/pronosticonorte.png"/></div>
      <div class="item"><img src="http://www.areadigital.gov.co/ftpclima/pronosticomedellin.png"/></div>
      <div class="item"><img src="http://www.areadigital.gov.co/ftpclima/pronosticosur.png"/></div>
      <div class="item"><img src="http://www.areadigital.gov.co/ftpclima/pronosticonorte.png"/></div>
      <div class="item"><img src="http://www.areadigital.gov.co/ftpclima/pronosticonorte.png"/></div>
    </div>
    <ol class="ciudades">
      <li data-target="#temperaturas" data-slide-to="0" class="active">Medellín</li>
      <li data-target="#temperaturas" data-slide-to="1">Barbosa</li>
      <li data-target="#temperaturas" data-slide-to="2">Girardota</li>
      <li data-target="#temperaturas" data-slide-to="3">Copacabana</li>
      <li data-target="#temperaturas" data-slide-to="4">Bello</li>
      <li data-target="#temperaturas" data-slide-to="5">Envigado</li>
      <li data-target="#temperaturas" data-slide-to="6">Sabaneta</li>
      <li data-target="#temperaturas" data-slide-to="7">La Estrella</li>
      <li data-target="#temperaturas" data-slide-to="8">Itagüi</li>
      <li data-target="#temperaturas" data-slide-to="9">Caldas</li>
    </ol>
  </div>
</div>
<?php 
		  echo $after_widget;
	  }
  }


<?php
  setlocale(LC_ALL, 'es_ES.UTF8');
  class WidgetPronosticoHome extends WP_Widget {
  
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
      <div class="active item">
        <h2>Pronóstico de Medellín</h2>
        <div class="row-fluid">
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span12"> <span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $this->hoy); ?> </span> <span class="dias"><?php echo strftime("%d", $this->hoy); ?> </span> </div>
              <div class="span12 lluvias"> <span class="titulo2">Pronostico Lluvia</span>
                <div class="row-fluid">
                  <div class="span4">
                    
                      <div class="tempMax">Mañana</div>
                      <div class="numMax"><?php echo get_option('LluvManMedellin') ?></div>
                    
                  </div>
                  <div class="span4">
                    
                      <div class="tempMin">Tarde</div>
                      <div class="numMin"><?php echo get_option('LluvTarMedellin') ?></div>
                    
                  </div>
                  <div class="span4">
                    
                      <div class="tempMin">Noche</div>
                      <div class="numMin"><?php echo get_option('LluvNocMedellin') ?></div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="row-fluid">
              <div class="span12 temp"> <span class="titulo2">Pronostico Temperatura</span>
                <div class="row-fluid">
                  <div class="span6">
                    <div class="tempMaxgrados">Máx</div>
                    <div class="numMaxgrados"> <?php echo get_option('tempMaxMedellin'); ?>° </div>
                  </div>
                  <div class="span6">
                    <div class="tempMingrados">Min</div>
                    <div class="numMingrados"><?php echo get_option('tempMinMedellin') ?>° </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="span6"> Mapa </div>
        </div>
      </div>
      <div class="item">
        <h2>Pronóstico de Barbosa</h2>
        <div class="row-fluid clearfix">
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span4"> <span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $this->hoy); ?> </span> <span class="dias"><?php echo strftime("%d", $this->hoy); ?> </span> </div>
              <div class="span4">
                <div class="tempMax">Máx</div>
                <div class="numMax"> <?php echo get_option('tempMaxBarbosa') ?>° </div>
              </div>
              <div class="span4">
                <div class="tempMin">Min</div>
                <div class="numMin"> <?php echo get_option('tempMinBarbosa') ?>°</div>
              </div>
            </div>
          </div>
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span3"> <span class="dia">Pronostico Lluvia</span> </div>
              <div class="span3">
                <div class="tempMax">Mañana</div>
                <div class="numMax"><?php echo get_option('LluvManBarbosa') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Tarde</div>
                <div class="numMin"><?php echo get_option('LluvTarBarbosa') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Noche</div>
                <div class="numMin"><?php echo get_option('LluvNocBarbosa') ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <h2>Pronóstico de Girardota</h2>
        <div class="row-fluid clearfix">
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span4"> <span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $this->hoy); ?> </span> <span class="dias"><?php echo strftime("%d", $this->hoy); ?> </span> </div>
              <div class="span4">
                <div class="tempMax">Máx</div>
                <div class="numMax"><?php echo get_option('tempMaxGirardota') ?>° </div>
              </div>
              <div class="span4">
                <div class="tempMin">Min</div>
                <div class="numMin"> <?php echo get_option('tempMinGirardota') ?>°</div>
              </div>
            </div>
          </div>
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span3"> <span class="dia">Pronostico Lluvia</span> </div>
              <div class="span3">
                <div class="tempMax">Mañana</div>
                <div class="numMax"><?php echo get_option('LluvManGirardota') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Tarde</div>
                <div class="numMin"><?php echo get_option('LluvTarGirardota') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Noche</div>
                <div class="numMin"><?php echo get_option('LluvNocGirardota') ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <h2>Pronóstico de Copacabana</h2>
        <div class="row-fluid clearfix">
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span4"> <span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $this->hoy); ?> </span> <span class="dias"><?php echo strftime("%d", $this->hoy); ?> </span> </div>
              <div class="span4">
                <div class="tempMax">Máx</div>
                <div class="numMax"> <?php echo get_option('tempMaxCopacabana') ?>° </div>
              </div>
              <div class="span4">
                <div class="tempMin">Min</div>
                <div class="numMin"><?php echo get_option('tempMinCopacabana') ?>° </div>
              </div>
            </div>
          </div>
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span3"> <span class="dia">Pronostico Lluvia</span> </div>
              <div class="span3">
                <div class="tempMax">Mañana</div>
                <div class="numMax"><?php echo get_option('LluvManCopacabana') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Tarde</div>
                <div class="numMin"><?php echo get_option('LluvTarCopacabana') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Noche</div>
                <div class="numMin"><?php echo get_option('LluvNocCopacabana') ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <h2>Pronóstico de Bello</h2>
        <div class="row-fluid clearfix">
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span4"> <span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $this->hoy); ?> </span> <span class="dias"><?php echo strftime("%d", $this->hoy); ?> </span> </div>
              <div class="span4">
                <div class="tempMax">Máx</div>
                <div class="numMax"> <?php echo get_option('tempMaxBello') ?>°</div>
              </div>
              <div class="span4">
                <div class="tempMin">Min</div>
                <div class="numMin"><?php echo get_option('tempMinBello') ?>° </div>
              </div>
            </div>
          </div>
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span3"> <span class="dia">Pronostico Lluvia</span> </div>
              <div class="span3">
                <div class="tempMax">Mañana</div>
                <div class="numMax"><?php echo get_option('LluvManCopacabana') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Tarde</div>
                <div class="numMin"><?php echo get_option('LluvTarCopacabana') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Noche</div>
                <div class="numMin"><?php echo get_option('LluvNocCopacabana') ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <h2>Pronóstico de Envigado</h2>
        <div class="row-fluid clearfix">
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span4"> <span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $this->hoy); ?> </span> <span class="dias"><?php echo strftime("%d", $this->hoy); ?> </span> </div>
              <div class="span4">
                <div class="tempMax">Máx</div>
                <div class="numMax"><?php echo get_option('tempMaxEnvigado') ?>° </div>
              </div>
              <div class="span4">
                <div class="tempMin">Min</div>
                <div class="numMin"> <?php echo get_option('tempMinEnvigado') ?>° </div>
              </div>
            </div>
          </div>
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span3"> <span class="dia">Pronostico Lluvia</span> </div>
              <div class="span3">
                <div class="tempMax">Mañana</div>
                <div class="numMax"><?php echo get_option('LluvManEnvigado') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Tarde</div>
                <div class="numMin"><?php echo get_option('LluvTarEnvigado') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Noche</div>
                <div class="numMin"><?php echo get_option('LluvNocEnvigado') ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <h2>Pronóstico de Sabaneta</h2>
        <div class="row-fluid clearfix">
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span4"> <span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $this->hoy); ?> </span> <span class="dias"><?php echo strftime("%d", $this->hoy); ?> </span> </div>
              <div class="span4">
                <div class="tempMax">Máx</div>
                <div class="numMax"> <?php echo get_option('tempMaxSabaneta') ?>° </div>
              </div>
              <div class="span4">
                <div class="tempMin">Min</div>
                <div class="numMin"> <?php echo get_option('tempMinSabaneta') ?>° </div>
              </div>
            </div>
          </div>
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span3"> <span class="dia">Pronostico Lluvia</span> </div>
              <div class="span3">
                <div class="tempMax">Mañana</div>
                <div class="numMax"><?php echo get_option('LluvManSabaneta') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Tarde</div>
                <div class="numMin"><?php echo get_option('LluvTarSabaneta') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Noche</div>
                <div class="numMin"><?php echo get_option('LluvNocSabaneta') ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <h2>Pronóstico de La Estrella</h2>
        <div class="row-fluid clearfix">
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span4"> <span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $this->hoy); ?> </span> <span class="dias"><?php echo strftime("%d", $this->hoy); ?> </span> </div>
              <div class="span4">
                <div class="tempMax">Máx</div>
                <div class="numMax"> <?php echo get_option('tempMaxLaEstrella') ?>° </div>
              </div>
              <div class="span4">
                <div class="tempMin">Min</div>
                <div class="numMin"> <?php echo get_option('tempMinLaEstrella') ?>° </div>
              </div>
            </div>
          </div>
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span3"> <span class="dia">Pronostico Lluvia</span> </div>
              <div class="span3">
                <div class="tempMax">Mañana</div>
                <div class="numMax"><?php echo get_option('LluvManLaEstrella') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Tarde</div>
                <div class="numMin"><?php echo get_option('LluvTarLaEstrella') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Noche</div>
                <div class="numMin"><?php echo get_option('LluvNocLaEstrella') ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <h2>Pronóstico de Itagui</h2>
        <div class="row-fluid clearfix">
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span4"> <span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $this->hoy); ?> </span> <span class="dias"><?php echo strftime("%d", $this->hoy); ?> </span> </div>
              <div class="span4">
                <div class="tempMax">Máx</div>
                <div class="numMax"> <?php echo get_option('tempMaxItagui') ?>° </div>
              </div>
              <div class="span4">
                <div class="tempMin">Min</div>
                <div class="numMin"><?php echo get_option('tempMinItagui') ?>° </div>
              </div>
            </div>
          </div>
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span3"> <span class="dia">Pronostico Lluvia</span> </div>
              <div class="span3">
                <div class="tempMax">Mañana</div>
                <div class="numMax"><?php echo get_option('LluvManItagui') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Tarde</div>
                <div class="numMin"><?php echo get_option('LluvTarItagui') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Noche</div>
                <div class="numMin"><?php echo get_option('LluvNocItagui') ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <h2>Pronóstico de Caldas</h2>
        <div class="row-fluid clearfix">
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span4"> <span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $this->hoy); ?> </span> <span class="dias"><?php echo strftime("%d", $this->hoy); ?> </span> </div>
              <div class="span4">
                <div class="tempMax">Máx</div>
                <div class="numMax"> <?php echo get_option('tempMaxCaldas') ?>° </div>
              </div>
              <div class="span4">
                <div class="tempMin">Min</div>
                <div class="numMin"> <?php echo get_option('tempMinCaldas') ?>° </div>
              </div>
            </div>
          </div>
          <div class="span6">
            <div class="row-fluid clearfix">
              <div class="span3"> <span class="dia">Pronostico Lluvia</span> </div>
              <div class="span3">
                <div class="tempMax">Mañana</div>
                <div class="numMax"><?php echo get_option('LluvManCaldas') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Tarde</div>
                <div class="numMin"><?php echo get_option('LluvTarCaldas') ?></div>
              </div>
              <div class="span3">
                <div class="tempMin">Noche</div>
                <div class="numMin"><?php echo get_option('LluvNocCaldas') ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
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


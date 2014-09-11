<?php
  setlocale(LC_ALL, 'es_ES.UTF8');
  class WidgetPronostico extends WP_Widget 
   {
  
	  private $hoy;
	  private $manana;
	  public  $ciudades;
  
	  function WidgetPronostico()
	  {
		  $this->hoy 		= strtotime(date('Y-m-d'));
		  $this->manana 	= strtotime(date('Y-m-d').' +1 day');
		  $this->ciudades 	= unserialize(C247_CIUDADES);
		  $this->meses 		= unserialize(C247_MESES);

		  parent::__construct( false, 'Pronóstico', array('description'=>'Este widget contiene los pronosticos hoy y mañana.'));
	  }
  
	  function widget( $args, $instance )
	  {
		  $this->mostrarPronostico($args, $instance);
	  }
  
	  function update( $new_instance, $old_instance )
	  {
		  return $new_instance;
	  }
 
	  function mostrarPronostico($args, $instance)
	  {
		  extract($args);																					
		  /* Se muestra el título del widget */
		  echo $before_widget;
?>
<div id="widget-pronostico">
	  <div class="controles">
	<!--    <ul class="menuControles">
	      <li><a href="#pronosticos" id="btnMostrarPronostico">Pronóstico</a></li>
	    </ul> -->
  	</div>
	  <div id="pronosticos" class="carousel slide"> 
	    <!-- Carousel items -->
	    <div id="ciudades" class="carousel-inner">

	    <?php 

	    $i=1;

		foreach($this->ciudades as $key => $ciudad):?>

		 <?php 

        $madrugada    = get_option('LluvMad'.$key);
        $mañana       = get_option('LluvMan'.$key);
        $tarde        = get_option('LluvTar'.$key); 
        $noche        = get_option('LluvNoc'.$key);
        //Temperaturas
        $minima       = get_option('tempMin'.$key);
        $maxima       = get_option('tempMax'.$key);

        $classMinima  = '';
        $classMaxima  = '';

        $classMadrugada   = strtolower($madrugada).'-noche';
        $classMañana      = strtolower($mañana).'-dia';
        $classTarde       = strtolower($tarde).'-dia';
        $classNoche       = strtolower($noche).'-noche';

        if( $maxima > 0 && $maxima <= 15 )
        {
            $classMaxima = 'term-azul';
        }
        else
        {
        	if( $maxima > 15 && $maxima <= 22 )
        	{
        		$classMaxima = 'term-verde';
        	}
        	else
        	{
        		if( $maxima > 22 &&  $maxima <= 29 )
        		{
        			$classMaxima = 'term-amarillo';
        		}
        		else
        		{
        			if( $maxima > 29 && $maxima <= 37)
        			{
        				$classMaxima = 'term-naranja';
        			}
        			else
        			{
        				if( $maxima > 37 )
        				{
        					$classMaxima = "term-rojo";
        				}
        				else
        				{
        					$classMaxima = 'term-azul';
        				}
        			}
              	}
            }
         }


         if( $minima > 0 && $minima <= 15 )
         {
         	$classMinima = 'term-azul';
         }
         else
         {
         	if( $minima > 15 && $minima <= 22 )
         	{
         		$classMinima = 'term-verde';
         	}
         	else
         	{
         		if( $minima > 22 &&  $minima <= 29 )
         		{
         			$classMinima = 'term-amarillo';
         		}
         		else
         		{
         			if( $minima > 29 && $minima <= 37)
         			{
         				$classMinima = 'term-naranja';
         			}
         			else
         			{
         				if( $minima > 37 )
         				{
         					$classMinima = "term-rojo";
         				}
         				else
         				{
         					$classMinima = 'term-azul';
         				}
         			}
         		}
         	}
         }
        
   		 ?>
	    <div class="<?php if($i) echo 'active'; $i=0?> item">
	        <h2>Pronóstico de <?php echo $ciudad ?></h2>
		        <div class="row-fluid">
				          <div class="span7">
				    	      <div class="row-fluid clearfix">
				        	      <div class="span12 texto-centro"> <span class="dia">Hoy </span> <span class="mes"><?php echo $this->meses[date('n')]; ?> </span> <span class="dias"><?php echo strftime("%d", $this->hoy); ?> </span> </div>
					              <div class="span12 lluvias"> <span class="titulo2">Probabilidad de Lluvia</span>
					                <div class="row-fluid">
						               	  <div class="span3 item-left">
						                    
						                      <div class="pronostico-item <?php echo  $classMadrugada ?>">Madrugada</div>
						                      <div class="numMax"><?php echo porcentajeEquivalente( get_option('LluvMad'.$key) )."%"; ?></div>
						                      <div class="numMax"><?php echo get_option('LluvMad'.$key) ?></div>
						                    
						                  </div>

						                  <div class="span3 item-right">
						                    
						                      <div class="pronostico-item <?php echo  $classMañana ?>">Mañana</div>
						                      <div class="numMax"><?php echo porcentajeEquivalente( get_option('LluvMan'.$key) )."%"; ?></div>
						                      <div class="numMax"><?php echo get_option('LluvMan'.$key) ?></div>
						                  </div>
						                  <div class="span3 item-left">
						                    
						                      <div class="pronostico-item <?php echo  $classTarde ?>">Tarde</div>
						                      <div class="numMax"><?php echo porcentajeEquivalente( get_option('LluvTar'.$key) )."%"; ?></div>
						                      <div class="numMax"><?php echo get_option('LluvTar'.$key) ?></div>
						                    
						                  </div>
						                  <div class="span3 item-right">
						                    
						                      <div class="pronostico-item <?php echo  $classNoche ?>">Noche</div>
						                      <div class="numMax"><?php echo porcentajeEquivalente( get_option('LluvNoc'.$key) )."%"; ?></div>
						                      <div class="numMax"><?php echo get_option('LluvNoc'.$key) ?></div>
						                    
						                  </div>
					                </div>
					              </div>
				            </div>

				            <div class="row-fluid">
				              <div class="span12 temp"> <span class="titulo2">Pronóstico Temperatura</span>
				                <div class="row-fluid">
					                  <div class="span6 item-left">
					                  	<div class="row-fluid">
						                    <div class="span8 tempMaxgrados <?php echo  $classMaxima ?>">Máxima</div>
						                    <div class="span4 numMaxgrados "> <?php echo get_option('tempMax'.$key); ?>° </div>
						                </div>
					                  </div>
					                  <div class="span6 item-right">
					                  	<div class="row-fluid">
					                    	<div class="span8 tempMingrados <?php echo $classMinima ?>">Mínima</div>
					                    	<div class="span4 numMingrados"><?php echo get_option('tempMin'.$key) ?>° </div>
					                    </div>
					                  </div>
				                </div>
				              </div>
				              <!-- mientras se solucionan los problemas diplomaticos con el siata -->
				              <div>
				              	<span style="font-size: 14px;color: black;"> <strong>Datos SIATA</strong></span>
				              </div>
				            </div>
				       </div>
			          <div class="span5 mapa-ciudades hidden-phone">
			          	<figure>
			          		<img src="<?php echo bloginfo('wpurl').'/wp-content/uploads/mapas/mapa_'.ucfirst($key).'.png'  ?>" />   
			          	</figure> 
			          </div>
	        </div>
	      </div>
	<?php endforeach ?>
	  </div>

	    <ol class="ciudades">
	    	<?php

	    	
	    			$i = 0;
	    			foreach($this->ciudades as $value ) 
	    			{
	    				if($i == 0)
	    				{
	    					echo '<li data-target="#pronosticos" data-slide-to="'.$i.'" class="active">'.$value.'</li>';			
	    				}
	    				else
	    				{
	    					echo '<li data-target="#pronosticos" data-slide-to="'.$i.'" >'.$value.'</li>';				
	    				}
	    			
	    				$i = $i + 1;
	    			}
	    	?>	      

	    </ol>
	  </div>
</div>  
<?php
	echo $after_widget;
	}
}	  
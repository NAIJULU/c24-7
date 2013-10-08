<?php

class WidgetPronosticoHome extends WP_Widget {

	function WidgetPronosticoHome(){
		parent::__construct( false, 'Widget Pronóstico / Radar / Temperatura Actual', array('description'=>'Este widget muestra 3 pestañas que contienen el pronóstico, radar y la temperatura actual.'));
	}

	function widget( $args, $instance ){
		$this->mostrarPronosticoHome($args, $instance);
	}

	function update( $new_instance, $old_instance ){
		return $new_instance;
	}

	function form( $instance ){
		$title = esc_attr($instance['title']);
		$numero = esc_attr($instance['numero']);
	?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Titulo: </label>
			<input id="<?php echo $this->get_field_id('title'); ?>" class="widefat" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('numero'); ?>">Cantidad a mostrar: </label>
			<input id="<?php echo $this->get_field_id('numero'); ?>" class="widefat" name="<?php echo $this->get_field_name('numero'); ?>" type="text" value="<?php echo $numero; ?>" />
		</p>		
	<?php
	}

	function mostrarPronosticoHome($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$numero = apply_filters('widget_title', $instance['numero']);
		/* Se muestra el título del widget */
		echo $before_widget;
		if(!empty($title))
			echo $before_title . $title . $after_title;
		else
			echo $before_title . "Más comentados" . $after_title;
		?>
			<div id="widget-pronostico">		
				<div class="controles">
					<button id="btnMostrarPronostico">Pronóstico</button>
					<button id="btnMostrarRadar">Radar</button>
					<button id="btnMostrarTemperatura">Temperatura</button>
				</div>
				<div id="pronosticos" class="carousel slide">
					<!-- Carousel items -->
					<div id="ciudades" class="carousel-inner">
						<div class="active item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
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
				<div id="radar" class="carousel slide">
					<!-- Carousel items -->
					<div id="ciudades" class="carousel-inner">
						<div class="active item"><iframe width="970" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=6.2694,-75.590529&amp;spn=0.026619,0.040169&amp;t=m&amp;z=15&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/?ie=UTF8&amp;ll=6.2694,-75.590529&amp;spn=0.026619,0.040169&amp;t=m&amp;z=15&amp;source=embed" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small></div>
					</div>		  
				</div>	
				<div id="temperaturas" class="carousel slide">
					<!-- Carousel items -->
					<div id="ciudades" class="carousel-inner">
						<div class="active item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
						<div class="item"><img src="http://www.lorempixel.com/970/600"/></div>
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
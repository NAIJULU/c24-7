<?php 

class WidgetUltimaEmision extends WP_Widget {
	function WidgetUltimaEmision(){
		parent::__construct( false, 'Última Emisión', array('description'=>'Este widget muestra la última emisión de Clima 24/7.'));
	}

	function form($instance){
		if( $instance) {
		     $titulo = esc_attr($instance['titulo']);
		     $emision = esc_attr($instance['emision']);
		     $codigo = esc_textarea($instance['codigo']);
		} else {
		     $titulo = '';
		     $emision = '';
		     $codigo = '';
		}
		?>
		<p>
			<label for="<?php echo $this->get_field_id('titulo'); ?>">Título:</label>
			<input class="widefat" id="<?php echo $this->get_field_id('titulo'); ?>" name="<?php echo $this->get_field_name('titulo'); ?>" type="text" value="<?php echo $titulo; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('emision'); ?>">Emisión:</label>
			<input class="widefat" id="<?php echo $this->get_field_id('emision'); ?>" name="<?php echo $this->get_field_name('emision'); ?>" type="text" value="<?php echo $emision; ?>" />
		</p>		
		<p>
			<label for="<?php echo $this->get_field_id('codigo'); ?>">Código Embebido: (490x276)</label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('codigo'); ?>" name="<?php echo $this->get_field_name('codigo'); ?>"><?php echo $codigo; ?></textarea>
		</p>				
		<?php
	}

	function update($new_instance, $old_instance){
		$instance = $old_instance;

		$instance['titulo'] = strip_tags($new_instance['titulo']);
		$instance['emision'] = strip_tags($new_instance['emision']);
		$instance['codigo'] = $new_instance['codigo'];

		return $instance;
	}

	  function widget( $args, $instance ){
		  $this->mostrarWidgetUltimaEmision($args, $instance);
	  }	

	function mostrarWidgetUltimaEmision($args, $instance){
		extract( $args );

		$titulo = apply_filters('widget_title', $instance['titulo']);
		$emision = apply_filters('widget_title', $instance['emision']);
		$codigo = $instance['codigo'];
		echo $before_widget;

		if ( $titulo ) {
		  echo $before_title . $titulo . $after_title;
		}

		if( $codigo ) {
		 echo '<div class="video-ultima-emision">'.$codigo.'</div>';
		}
		echo '<div class="emision">' . $emision . '</div>';
		echo '<div class="historial"><a class="btnHistorial">Ver Historial</a></div>';
		echo $after_widget;
	}
}
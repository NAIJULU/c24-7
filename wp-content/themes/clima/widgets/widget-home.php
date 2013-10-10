<?php
setlocale(LC_ALL, 'es_ES.UTF8');
class WidgetPronosticoHome extends WP_Widget {

	private $hoy;
	private $manana;

	function WidgetPronosticoHome(){
		$this->hoy = strtotime(date('d-m-y'));
		$this->manana = strtotime(date('d-m-y').' +1 day');
		parent::__construct( false, 'Widget Pronóstico / Radar / Temperatura Actual', array('description'=>'Este widget muestra 3 pestañas que contienen el pronóstico, radar y la temperatura actual.'));
	}

	function widget( $args, $instance ){
		$this->mostrarPronosticoHome($args, $instance);
	}

	function update( $new_instance, $old_instance ){
		return $new_instance;
	}

	function form( $instance ){
		$tempMaxMedellin     = esc_attr($instance['tempMaxMedellin']);
		$tempMinMedellin     = esc_attr($instance['tempMinMedellin']);
		$tempMaxMedellinMa   = esc_attr($instance['tempMaxMedellinMa']);
		$tempMinMedellinMa   = esc_attr($instance['tempMinMedellinMa']);
		$tempMaxBarbosa      = esc_attr($instance['tempMaxBarbosa']);
		$tempMinBarbosa      = esc_attr($instance['tempMinBarbosa']);
		$tempMaxBarbosaMa    = esc_attr($instance['tempMaxBarbosaMa']);
		$tempMinBarbosaMa    = esc_attr($instance['tempMinBarbosaMa']);		
		$tempMaxGirardota    = esc_attr($instance['tempMaxGirardota']);
		$tempMinGirardota    = esc_attr($instance['tempMinGirardota']);
		$tempMaxGirardotaMa  = esc_attr($instance['tempMaxGirardotaMa']);
		$tempMinGirardotaMa  = esc_attr($instance['tempMinGirardotaMa']);	
		$tempMaxCopacabana    = esc_attr($instance['tempMaxCopacabana']);
		$tempMinCopacabana    = esc_attr($instance['tempMinCopacabana']);
		$tempMaxCopacabanaMa  = esc_attr($instance['tempMaxCopacabanaMa']);
		$tempMinCopacabanaMa  = esc_attr($instance['tempMinCopacabanaMa']);
		$tempMaxBello    = esc_attr($instance['tempMaxBello']);
		$tempMinBello    = esc_attr($instance['tempMinBello']);
		$tempMaxBelloMa  = esc_attr($instance['tempMaxBelloMa']);
		$tempMinBelloMa  = esc_attr($instance['tempMinBelloMa']);
		$tempMaxEnvigado    = esc_attr($instance['tempMaxEnvigado']);
		$tempMinEnvigado    = esc_attr($instance['tempMinEnvigado']);
		$tempMaxEnvigadoMa  = esc_attr($instance['tempMaxEnvigadoMa']);
		$tempMinEnvigadoMa  = esc_attr($instance['tempMinEnvigadoMa']);	
		$tempMaxSabaneta    = esc_attr($instance['tempMaxSabaneta']);
		$tempMinSabaneta    = esc_attr($instance['tempMinSabaneta']);
		$tempMaxSabanetaMa  = esc_attr($instance['tempMaxSabanetaMa']);
		$tempMinSabanetaMa  = esc_attr($instance['tempMinSabanetaMa']);
		$tempMaxLaEstrella    = esc_attr($instance['tempMaxLaEstrella']);
		$tempMinLaEstrella    = esc_attr($instance['tempMinLaEstrella']);
		$tempMaxLaEstrellaMa  = esc_attr($instance['tempMaxLaEstrellaMa']);
		$tempMinLaEstrellaMa  = esc_attr($instance['tempMinLaEstrellaMa']);
		$tempMaxItagui    = esc_attr($instance['tempMaxItagui']);
		$tempMinItagui    = esc_attr($instance['tempMinItagui']);
		$tempMaxItaguiMa  = esc_attr($instance['tempMaxItaguiMa']);
		$tempMinItaguiMa  = esc_attr($instance['tempMinItaguiMa']);	
		$tempMaxCaldas    = esc_attr($instance['tempMaxCaldas']);
		$tempMinCaldas    = esc_attr($instance['tempMinCaldas']);
		$tempMaxCaldasMa  = esc_attr($instance['tempMaxCaldasMa']);
		$tempMinCaldasMa  = esc_attr($instance['tempMinCaldasMa']);																				
	?>
		<h1>Temperatura</h1>
		<!-- Start: Formulario Medellín -->
		<h2>Medellín</h2>
		<h3><?php echo ucfirst(strftime("%B %d", $this->hoy)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxMedellin'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxMedellin'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxMedellin'); ?>" type="number" value="<?php echo $tempMaxMedellin; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinMedellin'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinMedellin'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinMedellin'); ?>" type="number" value="<?php echo $tempMinMedellin; ?>">
		</p>		
		<h3><?php echo ucfirst(strftime("%B %d", $this->manana)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxMedellinMa'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxMedellinMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxMedellinMa'); ?>" type="number" value="<?php echo $tempMaxMedellinMa; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinMedellinMa'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinMedellinMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinMedellinMa'); ?>" type="number" value="<?php echo $tempMinMedellinMa; ?>">
		</p>
		<!-- End: Formulario Medellín -->
		<hr/>
		<!-- Start: Formulario Barbosa -->
		<h2>Barbosa</h2>
		<h3><?php echo ucfirst(strftime("%B %d", $this->hoy)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxBarbosa'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxBarbosa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxBarbosa'); ?>" type="number" value="<?php echo $tempMaxBarbosa; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinBarbosa'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinBarbosa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinBarbosa'); ?>" type="number" value="<?php echo $tempMinBarbosa; ?>">
		</p>		
		<h3><?php echo ucfirst(strftime("%B %d", $this->manana)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxBarbosaMa'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxBarbosaMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxBarbosaMa'); ?>" type="number" value="<?php echo $tempMaxBarbosaMa; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinBarbosaMa'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinBarsosaMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinBarbosaMa'); ?>" type="number" value="<?php echo $tempMinBarbosaMa; ?>">
		</p>
		<!-- End: Formulario Barbosa -->
		<hr/>
		<!-- Start: Formulario Girardota -->
		<h2>Girardota</h2>
		<h3><?php echo ucfirst(strftime("%B %d", $this->hoy)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxGirardota'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxGirardota'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxGirardota'); ?>" type="number" value="<?php echo $tempMaxGirardota; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinGirardota'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinGirardota'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinGirardota'); ?>" type="number" value="<?php echo $tempMinGirardota; ?>">
		</p>		
		<h3><?php echo ucfirst(strftime("%B %d", $this->manana)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxGirardotaMa'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxGirardotaMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxGirardotaMa'); ?>" type="number" value="<?php echo $tempMaxGirardotaMa; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinGirardotaMa'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinBarsosaMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinGirardotaMa'); ?>" type="number" value="<?php echo $tempMinGirardotaMa; ?>">
		</p>
		<!-- End: Formulario Girardota -->
		<hr/>
		<!-- Start: Formulario Copacabana -->
		<h2>Copacabana</h2>
		<h3><?php echo ucfirst(strftime("%B %d", $this->hoy)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxCopacabana'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxCopacabana'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxCopacabana'); ?>" type="number" value="<?php echo $tempMaxCopacabana; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinCopacabana'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinCopacabana'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinCopacabana'); ?>" type="number" value="<?php echo $tempMinCopacabana; ?>">
		</p>		
		<h3><?php echo ucfirst(strftime("%B %d", $this->manana)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxCopacabanaMa'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxCopacabanaMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxCopacabanaMa'); ?>" type="number" value="<?php echo $tempMaxCopacabanaMa; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinCopacabanaMa'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinBarsosaMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinCopacabanaMa'); ?>" type="number" value="<?php echo $tempMinCopacabanaMa; ?>">
		</p>
		<!-- End: Formulario Copacabana -->
		<hr/>
		<!-- Start: Formulario Bello -->
		<h2>Bello</h2>
		<h3><?php echo ucfirst(strftime("%B %d", $this->hoy)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxBello'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxBello'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxBello'); ?>" type="number" value="<?php echo $tempMaxBello; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinBello'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinBello'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinBello'); ?>" type="number" value="<?php echo $tempMinBello; ?>">
		</p>		
		<h3><?php echo ucfirst(strftime("%B %d", $this->manana)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxBelloMa'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxBelloMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxBelloMa'); ?>" type="number" value="<?php echo $tempMaxBelloMa; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinBelloMa'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinBarsosaMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinBelloMa'); ?>" type="number" value="<?php echo $tempMinBelloMa; ?>">
		</p>
		<!-- End: Formulario Bello -->
		<hr/>
		<!-- Start: Formulario Envigado -->
		<h2>Envigado</h2>
		<h3><?php echo ucfirst(strftime("%B %d", $this->hoy)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxEnvigado'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxEnvigado'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxEnvigado'); ?>" type="number" value="<?php echo $tempMaxEnvigado; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinEnvigado'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinEnvigado'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinEnvigado'); ?>" type="number" value="<?php echo $tempMinEnvigado; ?>">
		</p>		
		<h3><?php echo ucfirst(strftime("%B %d", $this->manana)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxEnvigadoMa'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxEnvigadoMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxEnvigadoMa'); ?>" type="number" value="<?php echo $tempMaxEnvigadoMa; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinEnvigadoMa'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinBarsosaMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinEnvigadoMa'); ?>" type="number" value="<?php echo $tempMinEnvigadoMa; ?>">
		</p>
		<!-- End: Formulario Envigado -->
		<hr/>
		<!-- Start: Formulario Sabaneta -->
		<h2>Sabaneta</h2>
		<h3><?php echo ucfirst(strftime("%B %d", $this->hoy)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxSabaneta'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxSabaneta'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxSabaneta'); ?>" type="number" value="<?php echo $tempMaxSabaneta; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinSabaneta'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinSabaneta'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinSabaneta'); ?>" type="number" value="<?php echo $tempMinSabaneta; ?>">
		</p>		
		<h3><?php echo ucfirst(strftime("%B %d", $this->manana)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxSabanetaMa'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxSabanetaMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxSabanetaMa'); ?>" type="number" value="<?php echo $tempMaxSabanetaMa; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinSabanetaMa'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinBarsosaMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinSabanetaMa'); ?>" type="number" value="<?php echo $tempMinSabanetaMa; ?>">
		</p>
		<!-- End: Formulario Sabaneta -->
		<hr/>
		<!-- Start: Formulario LaEstrella -->
		<h2>La Estrella</h2>
		<h3><?php echo ucfirst(strftime("%B %d", $this->hoy)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxLaEstrella'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxLaEstrella'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxLaEstrella'); ?>" type="number" value="<?php echo $tempMaxLaEstrella; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinLaEstrella'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinLaEstrella'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinLaEstrella'); ?>" type="number" value="<?php echo $tempMinLaEstrella; ?>">
		</p>		
		<h3><?php echo ucfirst(strftime("%B %d", $this->manana)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxLaEstrellaMa'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxLaEstrellaMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxLaEstrellaMa'); ?>" type="number" value="<?php echo $tempMaxLaEstrellaMa; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinLaEstrellaMa'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinBarsosaMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinLaEstrellaMa'); ?>" type="number" value="<?php echo $tempMinLaEstrellaMa; ?>">
		</p>
		<!-- End: Formulario LaEstrella -->
		<hr/>
		<!-- Start: Formulario Itagui -->
		<h2>Itagüi</h2>
		<h3><?php echo ucfirst(strftime("%B %d", $this->hoy)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxItagui'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxItagui'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxItagui'); ?>" type="number" value="<?php echo $tempMaxItagui; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinItagui'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinItagui'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinItagui'); ?>" type="number" value="<?php echo $tempMinItagui; ?>">
		</p>		
		<h3><?php echo ucfirst(strftime("%B %d", $this->manana)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxItaguiMa'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxItaguiMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxItaguiMa'); ?>" type="number" value="<?php echo $tempMaxItaguiMa; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinItaguiMa'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinBarsosaMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinItaguiMa'); ?>" type="number" value="<?php echo $tempMinItaguiMa; ?>">
		</p>
		<!-- End: Formulario Itagui -->
		<hr/>
		<!-- Start: Formulario Caldas -->
		<h2>Caldas</h2>
		<h3><?php echo ucfirst(strftime("%B %d", $this->hoy)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxCaldas'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxCaldas'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxCaldas'); ?>" type="number" value="<?php echo $tempMaxCaldas; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinCaldas'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinCaldas'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinCaldas'); ?>" type="number" value="<?php echo $tempMinCaldas; ?>">
		</p>		
		<h3><?php echo ucfirst(strftime("%B %d", $this->manana)) ?></h3>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMaxCaldasMa'); ?>">Temperatura Máxima: </label>
			<input id="<?php echo $this->get_field_id('tempMaxCaldasMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMaxCaldasMa'); ?>" type="number" value="<?php echo $tempMaxCaldasMa; ?>">
		</p>
		<p>			
			<label for="<?php echo $this->get_field_id('tempMinCaldasMa'); ?>">Temperatura Mínima: </label>
			<input id="<?php echo $this->get_field_id('tempMinBarsosaMa'); ?>" class="span1" name="<?php echo $this->get_field_name('tempMinCaldasMa'); ?>" type="number" value="<?php echo $tempMinCaldasMa; ?>">
		</p>
		<!-- End: Formulario Caldas -->																
	<?php
	}

	function mostrarPronosticoHome($args, $instance){
		extract($args);
		$tempMaxMedellin   = apply_filters('widget_title', $instance['tempMaxMedellin']);
		$tempMinMedellin   = apply_filters('widget_title', $instance['tempMinMedellin']);
		$tempMaxMedellinMa = apply_filters('widget_title', $instance['tempMaxMedellinMa']);
		$tempMinMedellinMa = apply_filters('widget_title', $instance['tempMinMedellinMa']);		
		$tempMaxBarbosa   = apply_filters('widget_title', $instance['tempMaxBarbosa']);
		$tempMinBarbosa   = apply_filters('widget_title', $instance['tempMinBarbosa']);
		$tempMaxBarbosaMa = apply_filters('widget_title', $instance['tempMaxBarbosaMa']);
		$tempMinBarbosaMa = apply_filters('widget_title', $instance['tempMinBarbosaMa']);	
		$tempMaxBarbosa   = apply_filters('widget_title', $instance['tempMaxBarbosa']);
		$tempMinBarbosa   = apply_filters('widget_title', $instance['tempMinBarbosa']);
		$tempMaxGirardota   = apply_filters('widget_title', $instance['tempMaxGirardota']);
		$tempMinGirardota   = apply_filters('widget_title', $instance['tempMinGirardota']);		
		$tempMaxGirardotaMa = apply_filters('widget_title', $instance['tempMaxGirardotaMa']);
		$tempMinGirardotaMa = apply_filters('widget_title', $instance['tempMinGirardotaMa']);
		$tempMaxCopacabana   = apply_filters('widget_title', $instance['tempMaxCopacabana']);
		$tempMinCopacabana   = apply_filters('widget_title', $instance['tempMinCopacabana']);		
		$tempMaxCopacabanaMa = apply_filters('widget_title', $instance['tempMaxCopacabanaMa']);
		$tempMinCopacabanaMa = apply_filters('widget_title', $instance['tempMinCopacabanaMa']);
		$tempMaxBello   = apply_filters('widget_title', $instance['tempMaxBello']);
		$tempMinBello   = apply_filters('widget_title', $instance['tempMinBello']);		
		$tempMaxBelloMa = apply_filters('widget_title', $instance['tempMaxBelloMa']);
		$tempMinBelloMa = apply_filters('widget_title', $instance['tempMinBelloMa']);
		$tempMaxEnvigado   = apply_filters('widget_title', $instance['tempMaxEnvigado']);
		$tempMinEnvigado   = apply_filters('widget_title', $instance['tempMinEnvigado']);		
		$tempMaxEnvigadoMa = apply_filters('widget_title', $instance['tempMaxEnvigadoMa']);
		$tempMinEnvigadoMa = apply_filters('widget_title', $instance['tempMinEnvigadoMa']);	
		$tempMaxSabaneta   = apply_filters('widget_title', $instance['tempMaxSabaneta']);
		$tempMinSabaneta   = apply_filters('widget_title', $instance['tempMinSabaneta']);		
		$tempMaxSabanetaMa = apply_filters('widget_title', $instance['tempMaxSabanetaMa']);
		$tempMinSabanetaMa = apply_filters('widget_title', $instance['tempMinSabanetaMa']);
		$tempMaxLaEstrella   = apply_filters('widget_title', $instance['tempMaxLaEstrella']);
		$tempMinLaEstrella   = apply_filters('widget_title', $instance['tempMinLaEstrella']);		
		$tempMaxLaEstrellaMa = apply_filters('widget_title', $instance['tempMaxLaEstrellaMa']);
		$tempMinLaEstrellaMa = apply_filters('widget_title', $instance['tempMinLaEstrellaMa']);
		$tempMaxItagui   = apply_filters('widget_title', $instance['tempMaxItagui']);
		$tempMinItagui   = apply_filters('widget_title', $instance['tempMinItagui']);		
		$tempMaxItaguiMa = apply_filters('widget_title', $instance['tempMaxItaguiMa']);
		$tempMinItaguiMa = apply_filters('widget_title', $instance['tempMinItaguiMa']);
		$tempMaxCaldas   = apply_filters('widget_title', $instance['tempMaxCaldas']);
		$tempMinCaldas   = apply_filters('widget_title', $instance['tempMinCaldas']);		
		$tempMaxCaldasMa = apply_filters('widget_title', $instance['tempMaxCaldasMa']);
		$tempMinCaldasMa = apply_filters('widget_title', $instance['tempMinCaldasMa']);																						
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
						<div class="active item">
							<h1>Medellín</h1>
							Hoy <?php echo strftime("%B %d", $this->hoy); ?> Temp Max Hoy: <?php echo $tempMaxMedellin ?>° Tem Min Hoy: <?php echo $tempMinMedellin ?>°<br/>

							Mañana <?php echo strftime("%B %d", $this->manana); ?> Temp Max Mañana: <?php echo $tempMaxMedellinMa ?>° Temp Min Mañana: <?php echo $tempMinMedellinMa ?>°

						</div>
						<div class="item">
							<h1>Barbosa</h1>
							Hoy <?php echo strftime("%B %d", $this->hoy); ?> Temp Max Hoy: <?php echo $tempMaxBarbosa ?>° Tem Min Hoy: <?php echo $tempMinBarbosa ?>°<br/>

							Mañana <?php echo strftime("%B %d", $this->manana); ?> Temp Max Mañana: <?php echo $tempMaxBarbosaMa ?>° Temp Min Mañana: <?php echo $tempMinBarbosaMa ?>°							
						</div>
						<div class="item">
							<h1>Girardota</h1>
							Hoy <?php echo strftime("%B %d", $this->hoy); ?> Temp Max Hoy: <?php echo $tempMaxGirardota ?>° Tem Min Hoy: <?php echo $tempMinGirardota ?>°<br/>

							Mañana <?php echo strftime("%B %d", $this->manana); ?> Temp Max Mañana: <?php echo $tempMaxGirardotaMa ?>° Temp Min Mañana: <?php echo $tempMinGirardotaMa ?>°								
						</div>
						<div class="item">
							<h1>Copacabana</h1>
							Hoy <?php echo strftime("%B %d", $this->hoy); ?> Temp Max Hoy: <?php echo $tempMaxCopacabana ?>° Tem Min Hoy: <?php echo $tempMinCopacabana ?>°<br/>

							Mañana <?php echo strftime("%B %d", $this->manana); ?> Temp Max Mañana: <?php echo $tempMaxCopacabanaMa ?>° Temp Min Mañana: <?php echo $tempMinCopacabanaMa ?>°								
						</div>
						<div class="item">
							<h1>Bello</h1>
							Hoy <?php echo strftime("%B %d", $this->hoy); ?> Temp Max Hoy: <?php echo $tempMaxBello ?>° Tem Min Hoy: <?php echo $tempMinBello ?>°<br/>

							Mañana <?php echo strftime("%B %d", $this->manana); ?> Temp Max Mañana: <?php echo $tempMaxBelloMa ?>° Temp Min Mañana: <?php echo $tempMinBelloMa ?>°							
						</div>
						<div class="item">
							<h1>Envigado</h1>
							Hoy <?php echo strftime("%B %d", $this->hoy); ?> Temp Max Hoy: <?php echo $tempMaxEnvigado ?>° Tem Min Hoy: <?php echo $tempMinEnvigado ?>°<br/>

							Mañana <?php echo strftime("%B %d", $this->manana); ?> Temp Max Mañana: <?php echo $tempMaxEnvigadoMa ?>° Temp Min Mañana: <?php echo $tempMinEnvigadoMa ?>°								
						</div>
						<div class="item">
							<h1>Sabaneta</h1>
							Hoy <?php echo strftime("%B %d", $this->hoy); ?> Temp Max Hoy: <?php echo $tempMaxSabaneta ?>° Tem Min Hoy: <?php echo $tempMinSabaneta ?>°<br/>

							Mañana <?php echo strftime("%B %d", $this->manana); ?> Temp Max Mañana: <?php echo $tempMaxSabanetaMa ?>° Temp Min Mañana: <?php echo $tempMinSabanetaMa ?>°							
						</div>
						<div class="item">
							<h1>La Estrella</h1>
							Hoy <?php echo strftime("%B %d", $this->hoy); ?> Temp Max Hoy: <?php echo $tempMaxLaEstrella ?>° Tem Min Hoy: <?php echo $tempMinLaEstrella ?>°<br/>

							Mañana <?php echo strftime("%B %d", $this->manana); ?> Temp Max Mañana: <?php echo $tempMaxLaEstrellaMa ?>° Temp Min Mañana: <?php echo $tempMinLaEstrellaMa ?>°
						</div>
						<div class="item">
							<h1>Itagüi</h1>
							Hoy <?php echo strftime("%B %d", $this->hoy); ?> Temp Max Hoy: <?php echo $tempMaxItagui ?>° Tem Min Hoy: <?php echo $tempMinItagui ?>°<br/>

							Mañana <?php echo strftime("%B %d", $this->manana); ?> Temp Max Mañana: <?php echo $tempMaxItaguiMa ?>° Temp Min Mañana: <?php echo $tempMinItaguiMa ?>°
						</div>
						<div class="item">
							<h1>Caldas</h1>
							Hoy <?php echo strftime("%B %d", $this->hoy); ?> Temp Max Hoy: <?php echo $tempMaxCaldas ?>° Tem Min Hoy: <?php echo $tempMinCaldas ?>°<br/>

							Mañana <?php echo strftime("%B %d", $this->manana); ?> Temp Max Mañana: <?php echo $tempMaxCaldasMa ?>° Temp Min Mañana: <?php echo $tempMinCaldasMa ?>°
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
						<div id="mapa">
						</div>
					</div>		  
				</div>	
				<div id="temperaturas" class="carousel slide">
					<!-- Carousel items -->
					<div id="ciudades" class="carousel-inner">
						<div class="active item"><img src="http://www.areadigital.gov.co/ftpclima/TemperaturaAMVA.png"/></div>
						<div class="item"><img src="http://www.areadigital.gov.co/ftpclima/pronosticonorte.png"/></div>
						<div class="item"><img src="http://www.areadigital.gov.co/ftpclima/pronosticomedellin.png"/></div>
						<div class="item"><img src="http://www.areadigital.gov.co/ftpclima/pronosticosur.png"/></div>
						<div class="active item"><img src="http://www.areadigital.gov.co/ftpclima/TemperaturaAMVA.png"/></div>
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
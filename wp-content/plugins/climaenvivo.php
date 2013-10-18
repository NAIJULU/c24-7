<?php 
/*
Plugin Name: Clima en Vivo
Plugin URI http://www.telemedellin.tv
Description: Este plugin permite almacenar los datos que muestran el pronóstico, radar, temperatura, vistas en vivo y la red de sensores
Version: 0.5
Author: Belmar Santanilla Gutiérrez
Author URI: belmar.santanilla@telemedellin.tv
License: GNU Public (GPL2)
*/
/*  Copyright 2013 BELMAR SANTANILLA GUTIÉRREZ  (email : belmar.santanilla@telemedellin.tv)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
setlocale(LC_ALL, 'es_ES.UTF8');
 
add_action("admin_menu", "menu_clima_vivo");

function menu_clima_vivo(){
	add_menu_page("Configuración Clima en Vivo", "Clima en Vivo", 10, "climaenvivo", "pagina_configuracion", plugins_url( 'climaenvivo/img/ico.png' ));
	add_action( 'admin_init', 'registrar_opciones' );
}

function registrar_opciones() {
	//register our settings
	register_setting( 'climaenvivo-opciones', 'tempMaxMedellin' );
	register_setting( 'climaenvivo-opciones', 'tempMinMedellin' );
	register_setting( 'climaenvivo-opciones', 'tempMaxMedellinMa' );
	register_setting( 'climaenvivo-opciones', 'tempMinMedellinMa' );
	register_setting( 'climaenvivo-opciones', 'tempMaxBarbosa' );
	register_setting( 'climaenvivo-opciones', 'tempMinBarbosa' );
	register_setting( 'climaenvivo-opciones', 'tempMaxBarbosaMa' );
	register_setting( 'climaenvivo-opciones', 'tempMinBarbosaMa' );	
	register_setting( 'climaenvivo-opciones', 'tempMaxGirardota' );
	register_setting( 'climaenvivo-opciones', 'tempMinGirardota' );
	register_setting( 'climaenvivo-opciones', 'tempMaxGirardotaMa' );
	register_setting( 'climaenvivo-opciones', 'tempMinGirardotaMa' );	
	register_setting( 'climaenvivo-opciones', 'tempMaxCopacabana' );
	register_setting( 'climaenvivo-opciones', 'tempMinCopacabana' );
	register_setting( 'climaenvivo-opciones', 'tempMaxCopacabanaMa' );
	register_setting( 'climaenvivo-opciones', 'tempMinCopacabanaMa' );
	register_setting( 'climaenvivo-opciones', 'tempMaxBello' );
	register_setting( 'climaenvivo-opciones', 'tempMinBello' );
	register_setting( 'climaenvivo-opciones', 'tempMaxBelloMa' );
	register_setting( 'climaenvivo-opciones', 'tempMinBelloMa' );
	register_setting( 'climaenvivo-opciones', 'tempMaxEnvigado' );
	register_setting( 'climaenvivo-opciones', 'tempMinEnvigado' );
	register_setting( 'climaenvivo-opciones', 'tempMaxEnvigadoMa' );
	register_setting( 'climaenvivo-opciones', 'tempMinEnvigadoMa' );
	register_setting( 'climaenvivo-opciones', 'tempMaxSabaneta' );
	register_setting( 'climaenvivo-opciones', 'tempMinSabaneta' );
	register_setting( 'climaenvivo-opciones', 'tempMaxSabanetaMa' );
	register_setting( 'climaenvivo-opciones', 'tempMinSabanetaMa' );
	register_setting( 'climaenvivo-opciones', 'tempMaxLaEstrella' );
	register_setting( 'climaenvivo-opciones', 'tempMinLaEstrella' );
	register_setting( 'climaenvivo-opciones', 'tempMaxLaEstrellaMa' );
	register_setting( 'climaenvivo-opciones', 'tempMinLaEstrellaMa' );
	register_setting( 'climaenvivo-opciones', 'tempMaxItagui' );
	register_setting( 'climaenvivo-opciones', 'tempMinItagui' );
	register_setting( 'climaenvivo-opciones', 'tempMaxItaguiMa' );
	register_setting( 'climaenvivo-opciones', 'tempMinItaguiMa' );
	register_setting( 'climaenvivo-opciones', 'tempMaxCaldas' );
	register_setting( 'climaenvivo-opciones', 'tempMinCaldas' );
	register_setting( 'climaenvivo-opciones', 'tempMaxCaldasMa' );
	register_setting( 'climaenvivo-opciones', 'tempMinCaldasMa' );								
}

function pagina_configuracion(){
	$hoy = strtotime(date('Y-m-d'));
	$manana = strtotime(date('Y-m-d').' +1 day');    
	?>
	<div class="wrap">
		<h1><img src="<?php echo plugins_url( 'climaenvivo/img/ico.png' )?>"> Configuración de Clima en Vivo</h1>
		<!-- Start: Formulario Medellín -->
		<form action="options.php" method="POST">
		<h2>Temperatura</h2>
		<div style="float:left">			
			<?php settings_fields( 'climaenvivo-opciones' ); ?>			
			<h3>Medellín</h3>
			<h4><?php echo ucfirst(strftime("%B %d", $hoy)) ?></h4>
			<p>
			<label for="tempMaxMedellin">Temperatura Máxima: </label>
			<input id="tempMaxMedellin" class="span1" name="tempMaxMedellin" type="number" value="<?php echo get_option('tempMaxMedellin'); ?>">
			</p>
			<p>
			<label for="tempMinMedellin">Temperatura Mínima: </label>
			<input id="tempMinMedellin" class="span1" name="tempMinMedellin" type="number" value="<?php echo get_option('tempMinMedellin'); ?>">
			</p>
			<h4><?php echo ucfirst(strftime("%B %d", $manana)) ?></h4>
			<p>
			<label for="tempMaxMedellinMa">Temperatura Máxima: </label>
			<input id="tempMaxMedellinMa" class="span1" name="tempMaxMedellinMa" type="number" value="<?php echo get_option('tempMaxMedellinMa'); ?>">
			</p>
			<p>
			<label for="tempMinMedellinMa">Temperatura Mínima: </label>
			<input id="tempMinMedellinMa" class="span1" name="tempMinMedellinMa" type="number" value="<?php echo get_option('tempMinMedellinMa'); ?>">
			</p>
		</div>
		<!-- End: Formulario Medellín -->

		<!-- Start: Formulario Barbosa -->
		<div style="float:left">
			<h3>Barbosa</h3>
			<h4><?php echo ucfirst(strftime("%B %d", $hoy)) ?></h4>
			<p>
			<label for="tempMaxBarbosa">Temperatura Máxima: </label>
			<input id="tempMaxBarbosa" class="span1" name="tempMaxBarbosa" type="number" value="<?php echo get_option('tempMaxBarbosa'); ?>">
			</p>
			<p>
			<label for="tempMinBarbosa">Temperatura Mínima: </label>
			<input id="tempMinBarbosa" class="span1" name="tempMinBarbosa" type="number" value="<?php echo get_option('tempMinBarbosa'); ?>">
			</p>
			<h4><?php echo ucfirst(strftime("%B %d", $manana)) ?></h4>
			<p>
			<label for="tempMaxBarbosaMa">Temperatura Máxima: </label>
			<input id="tempMaxBarbosaMa" class="span1" name="tempMaxBarbosaMa" type="number" value="<?php echo get_option('tempMaxBarbosaMa'); ?>">
			</p>
			<p>
			<label for="tempMinBarbosaMa">Temperatura Mínima: </label>
			<input id="tempMinBarbosaMa" class="span1" name="tempMinBarbosaMa" type="number" value="<?php echo get_option('tempMinBarbosaMa'); ?>">
			</p>
		</div>
		<!-- End: Formulario Barbosa -->

		<!-- Start: Formulario Girardota -->
		<div style="float:left">
			<h3>Girardota</h3>
			<h4><?php echo ucfirst(strftime("%B %d", $hoy)) ?></h4>
			<p>
			<label for="tempMaxGirardota">Temperatura Máxima: </label>
			<input id="tempMaxGirardota" class="span1" name="tempMaxGirardota" type="number" value="<?php echo get_option('tempMaxGirardota'); ?>">
			</p>
			<p>
			<label for="tempMinGirardota">Temperatura Mínima: </label>
			<input id="tempMinGirardota" class="span1" name="tempMinGirardota" type="number" value="<?php echo get_option('tempMinGirardota'); ?>">
			</p>
			<h4><?php echo ucfirst(strftime("%B %d", $manana)) ?></h4>
			<p>
			<label for="tempMaxGirardotaMa">Temperatura Máxima: </label>
			<input id="tempMaxGirardotaMa" class="span1" name="tempMaxGirardotaMa" type="number" value="<?php echo get_option('tempMaxGirardotaMa'); ?>">
			</p>
			<p>
			<label for="tempMinGirardotaMa">Temperatura Mínima: </label>
			<input id="tempMinGirardotaMa" class="span1" name="tempMinGirardotaMa" type="number" value="<?php echo get_option('tempMinGirardotaMa'); ?>">
			</p>
		</div>
		<!-- End: Formulario Girardota -->

		<!-- Start: Formulario Copacabana -->
		<div style="float:left">
			<h3>Copacabana</h3>
			<h4><?php echo ucfirst(strftime("%B %d", $hoy)) ?></h4>
			<p>
			<label for="tempMaxCopacabana">Temperatura Máxima: </label>
			<input id="tempMaxCopacabana" class="span1" name="tempMaxCopacabana" type="number" value="<?php echo get_option('tempMaxCopacabana'); ?>">
			</p>
			<p>
			<label for="tempMinCopacabana">Temperatura Mínima: </label>
			<input id="tempMinCopacabana" class="span1" name="tempMinCopacabana" type="number" value="<?php echo get_option('tempMinCopacabana'); ?>">
			</p>
			<h4><?php echo ucfirst(strftime("%B %d", $manana)) ?></h4>
			<p>
			<label for="tempMaxCopacabanaMa">Temperatura Máxima: </label>
			<input id="tempMaxCopacabanaMa" class="span1" name="tempMaxCopacabanaMa" type="number" value="<?php echo get_option('tempMaxCopacabanaMa'); ?>">
			</p>
			<p>
			<label for="tempMinCopacabanaMa">Temperatura Mínima: </label>
			<input id="tempMinCopacabanaMa" class="span1" name="tempMinCopacabanaMa" type="number" value="<?php echo get_option('tempMinCopacabanaMa'); ?>">
			</p>
		</div>
		<!-- End: Formulario Copacabana -->

		<!-- Start: Formulario Bello -->
		<div style="float:left">
			<h3>Bello</h3>
			<h4><?php echo ucfirst(strftime("%B %d", $hoy)) ?></h4>
			<p>
			<label for="tempMaxBello">Temperatura Máxima: </label>
			<input id="tempMaxBello" class="span1" name="tempMaxBello" type="number" value="<?php echo get_option('tempMaxBello'); ?>">
			</p>
			<p>
			<label for="tempMinBello">Temperatura Mínima: </label>
			<input id="tempMinBello" class="span1" name="tempMinBello" type="number" value="<?php echo get_option('tempMinBello'); ?>">
			</p>
			<h4><?php echo ucfirst(strftime("%B %d", $manana)) ?></h4>
			<p>
			<label for="tempMaxBelloMa">Temperatura Máxima: </label>
			<input id="tempMaxBelloMa" class="span1" name="tempMaxBelloMa" type="number" value="<?php echo get_option('tempMaxBelloMa'); ?>">
			</p>
			<p>
			<label for="tempMinBelloMa">Temperatura Mínima: </label>
			<input id="tempMinBelloMa" class="span1" name="tempMinBelloMa" type="number" value="<?php echo get_option('tempMinBelloMa'); ?>">
			</p>
		</div>
		<!-- End: Formulario Bello -->
		<br class="clear"/>
		<!-- Start: Formulario Envigado -->
		<div style="float:left">
			<h3>Envigado</h3>
			<h4><?php echo ucfirst(strftime("%B %d", $hoy)) ?></h4>
			<p>
			<label for="tempMaxEnvigado">Temperatura Máxima: </label>
			<input id="tempMaxEnvigado" class="span1" name="tempMaxEnvigado" type="number" value="<?php echo get_option('tempMaxEnvigado'); ?>">
			</p>
			<p>
			<label for="tempMinEnvigado">Temperatura Mínima: </label>
			<input id="tempMinEnvigado" class="span1" name="tempMinEnvigado" type="number" value="<?php echo get_option('tempMinEnvigado'); ?>">
			</p>
			<h4><?php echo ucfirst(strftime("%B %d", $manana)) ?></h4>
			<p>
			<label for="tempMaxEnvigadoMa">Temperatura Máxima: </label>
			<input id="tempMaxEnvigadoMa" class="span1" name="tempMaxEnvigadoMa" type="number" value="<?php echo get_option('tempMaxEnvigadoMa'); ?>">
			</p>
			<p>
			<label for="tempMinEnvigadoMa">Temperatura Mínima: </label>
			<input id="tempMinEnvigadoMa" class="span1" name="tempMinEnvigadoMa" type="number" value="<?php echo get_option('tempMinEnvigadoMa'); ?>">
			</p>
		</div>
		<!-- End: Formulario Envigado -->
		
		<!-- Start: Formulario Sabaneta -->
		<div style="float:left">
			<h3>Sabaneta</h3>
			<h4><?php echo ucfirst(strftime("%B %d", $hoy)) ?></h4>
			<p>
			<label for="tempMaxSabaneta">Temperatura Máxima: </label>
			<input id="tempMaxSabaneta" class="span1" name="tempMaxSabaneta" type="number" value="<?php echo get_option('tempMaxSabaneta'); ?>">
			</p>
			<p>
			<label for="tempMinSabaneta">Temperatura Mínima: </label>
			<input id="tempMinSabaneta" class="span1" name="tempMinSabaneta" type="number" value="<?php echo get_option('tempMinSabaneta'); ?>">
			</p>
			<h4><?php echo ucfirst(strftime("%B %d", $manana)) ?></h4>
			<p>
			<label for="tempMaxSabanetaMa">Temperatura Máxima: </label>
			<input id="tempMaxSabanetaMa" class="span1" name="tempMaxSabanetaMa" type="number" value="<?php echo get_option('tempMaxSabanetaMa'); ?>">
			</p>
			<p>
			<label for="tempMinSabanetaMa">Temperatura Mínima: </label>
			<input id="tempMinSabanetaMa" class="span1" name="tempMinSabanetaMa" type="number" value="<?php echo get_option('tempMinSabanetaMa'); ?>">
			</p>
		</div>
		<!-- End: Formulario Sabaneta -->
		
		<!-- Start: Formulario LaEstrella -->
		<div style="float:left">
			<h3>La Estrella</h3>
			<h4><?php echo ucfirst(strftime("%B %d", $hoy)) ?></h4>
			<p>
			<label for="tempMaxLaEstrella">Temperatura Máxima: </label>
			<input id="tempMaxLaEstrella" class="span1" name="tempMaxLaEstrella" type="number" value="<?php echo get_option('tempMaxLaEstrella'); ?>">
			</p>
			<p>
			<label for="tempMinLaEstrella">Temperatura Mínima: </label>
			<input id="tempMinLaEstrella" class="span1" name="tempMinLaEstrella" type="number" value="<?php echo get_option('tempMinLaEstrella'); ?>">
			</p>
			<h4><?php echo ucfirst(strftime("%B %d", $manana)) ?></h4>
			<p>
			<label for="tempMaxLaEstrellaMa">Temperatura Máxima: </label>
			<input id="tempMaxLaEstrellaMa" class="span1" name="tempMaxLaEstrellaMa" type="number" value="<?php echo get_option('tempMaxLaEstrellaMa'); ?>">
			</p>
			<p>
			<label for="tempMinLaEstrellaMa">Temperatura Mínima: </label>
			<input id="tempMinLaEstrellaMa" class="span1" name="tempMinLaEstrellaMa" type="number" value="<?php echo get_option('tempMinLaEstrellaMa'); ?>">
			</p>
		</div>
		<!-- End: Formulario LaEstrella -->
		
		<!-- Start: Formulario Itagui -->
		<div style="float:left">
			<h3>Itagüi</h3>
			<h4><?php echo ucfirst(strftime("%B %d", $hoy)) ?></h4>
			<p>
			<label for="tempMaxItagui">Temperatura Máxima: </label>
			<input id="tempMaxItagui" class="span1" name="tempMaxItagui" type="number" value="<?php echo get_option('tempMaxItagui'); ?>">
			</p>
			<p>
			<label for="tempMinItagui">Temperatura Mínima: </label>
			<input id="tempMinItagui" class="span1" name="tempMinItagui" type="number" value="<?php echo get_option('tempMinItagui'); ?>">
			</p>
			<h4><?php echo ucfirst(strftime("%B %d", $manana)) ?></h4>
			<p>
			<label for="tempMaxItaguiMa">Temperatura Máxima: </label>
			<input id="tempMaxItaguiMa" class="span1" name="tempMaxItaguiMa" type="number" value="<?php echo get_option('tempMaxItaguiMa'); ?>">
			</p>
			<p>
			<label for="tempMinItaguiMa">Temperatura Mínima: </label>
			<input id="tempMinItaguiMa" class="span1" name="tempMinItaguiMa" type="number" value="<?php echo get_option('tempMinItaguiMa'); ?>">
			</p>
		</div>
		<!-- End: Formulario Itagui -->
	
		<!-- Start: Formulario Caldas -->
		<div style="float:left">
			<h3>Caldas</h3>
			<h4><?php echo ucfirst(strftime("%B %d", $hoy)) ?></h4>
			<p>
			<label for="tempMaxCaldas">Temperatura Máxima: </label>
			<input id="tempMaxCaldas" class="span1" name="tempMaxCaldas" type="number" value="<?php echo get_option('tempMaxCaldas'); ?>">
			</p>
			<p>
			<label for="tempMinCaldas">Temperatura Mínima: </label>
			<input id="tempMinCaldas" class="span1" name="tempMinCaldas" type="number" value="<?php echo get_option('tempMinCaldas'); ?>">
			</p>
			<h4><?php echo ucfirst(strftime("%B %d", $manana)) ?></h4>
			<p>
			<label for="tempMaxCaldasMa">Temperatura Máxima: </label>
			<input id="tempMaxCaldasMa" class="span1" name="tempMaxCaldasMa" type="number" value="<?php echo get_option('tempMaxCaldasMa'); ?>">
			</p>
			<p>
			<label for="tempMinCaldasMa">Temperatura Mínima: </label>
			<input id="tempMinCaldasMa" class="span1" name="tempMinCaldasMa" type="number" value="<?php echo get_option('tempMinCaldasMa'); ?>">
			</p>
		</div>
		<br class="clear"/>
		<!-- End: Formulario Caldas -->
			<?php submit_button(); ?>
		</form>		
	</div>
	<?php
} 

?>
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

add_action("admin_menu", "menu_clima_vivo");

function menu_clima_vivo(){
	add_menu_page("Configuración Clima en Vivo", "Clima en Vivo", 10, "climaenvivo", "pagina_configuracion");
}

function pagina_configuracion(){    
	echo "<div class='wrap'> 
	<h2>Hola  - Esta es la página del plugin </h2>
	Puedes poner el código que quieras que wordpress muestre, imagenes, formularios, etc.
	</div>";
} 

?>
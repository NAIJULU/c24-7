<?php
/*
Plugin Name: REcursos
Description: Permite gestionar los recursos externos graficos de clima24/7
Version: 1.0
Author: Pablo Martinez
License: GPL2
*/
add_action( 'admin_menu', 'admin_recursos' );

function admin_recursos()
{
	add_options_page( 'RE cursos', 'REcursos', 'manage_options', 'pluginRecursos', 'pluginRecursos' );
}

function pluginRecursos()
{
  $temperatura  = get_option( 'temperatura' );
  $inflarojo    = get_option('inflarojo');
  $vapor        = get_option('vapor');

  $cam1  = get_option('cam1' );
  $cam2  = get_option('cam2');
  $cam3  = get_option('cam3');
  $cam4  = get_option('cam4');

  if( isset( $_POST['temperatura'] ) OR isset( $_POST['inflarojo'] ) OR isset( $_POST['vapor'] ) OR
      isset( $_POST['cam1'] ) OR isset( $_POST['cam2'] ) OR isset( $_POST['cam3'] ) OR isset( $_POST['cam4'] ) )
  {
    update_option( 'temperatura', $_POST['temperatura'] );   
    update_option( 'inflarojo', $_POST['inflarojo'] );
    update_option( 'vapor', $_POST['vapor'] );

    update_option( 'cam1', $_POST['cam1'] );   
    update_option( 'cam2', $_POST['cam2'] );
    update_option( 'cam3', $_POST['cam3'] );
    update_option( 'cam4', $_POST['cam4'] );
  }

?>
    <link rel="stylesheet" href="<?php echo plugins_url( 'recursos.css' , __FILE__ ) ?>">
    <script src="<?php echo plugins_url( 'urlVal.js' , __FILE__ ) ?>"></script>

    <div id="REcursos">
        <div id="r-encabezado">
          <h1> Gestión de recursos Clima 24/7 </h1>
        </div>
        <div class="REcursos-form">
            <form id="form" enctype="multipart/form-data" action="" method="post" class="form-inline">

              <div id="r-temperatura" class="r-element">
                <span class="r-field"> Enlace de temperatura </span>
                <input type="text" id="temperatura" name="temperatura" value="<?php echo get_option( 'temperatura' ) ?>">
                <input type="button" onClick="urlValidator('temperatura')">
              </div>
              <div id="r-inflarrojo" class="r-element">
                <span class="r-field"> Enlace de inflarojo </span>
                <input type="text" id="inflarojo" name="inflarojo" value="<?php echo get_option( 'inflarojo' )  ?>" >
                <input type="button" onClick="urlValidator('inflarojo')">
              </div>
              <div id="r-vapor" class="r-element">
                <span class="r-field"> Enlace de vapor de agua </span>
                <input type="text" id="vapor" name="vapor" value="<?php echo get_option( 'vapor' )  ?>" >
                <input type="button" onClick="urlValidator('vapor')">
              </div>

              <div id="r-line">
                <hr>
              </div>

              <div id="r-cams">
                <h1> Cámaras vista en vivo </h1>
                <div class="elem-cam">
                  <span class="r-field">Enlace Cámara 1</span>
                  <input type="text"  id="cam1" name="cam1"  value="<?php echo get_option( 'cam1' )  ?>" >
                  <input type="button" onClick="urlValidator('cam1')">
                </div>
                <div class="elem-cam">
                  <span class="r-field">Enlace Cámara 2</span>
                  <input type="text"  id="cam2" name="cam2" value="<?php echo get_option( 'cam2' )  ?>" >
                  <input type="button" onClick="urlValidator('cam2')">
                </div>
                <div class="elem-cam">
                  <span class="r-field">Enlace Cámara 3</span>
                  <input type="text"  id="cam3" name="cam3" value="<?php echo get_option( 'cam3' )  ?>" >
                  <input type="button" onClick="urlValidator('cam3')">
                </div>
                <div class="elem-cam">
                  <span class="r-field">Enlace Cámara 4</span>
                  <input type="text"  id="cam4" name="cam4" value="<?php echo get_option( 'cam4' )  ?>" >
                  <input type="button" onClick="urlValidator('cam4')">
                </div>

              </div>
              <div>
                  <?php submit_button(); ?>
              </div>
            </form>
        </div>
    </div>
  <?php
}


?>
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


  if( isset( $_POST['temperatura'] ) OR isset( $_POST['inflarojo'] ) OR isset( $_POST['vapor'] ) )
  {
    update_option( 'temperatura', $_POST['temperatura'] );   
    update_option( 'inflarojo', $_POST['inflarojo'] );
    update_option( 'vapor', $_POST['vapor'] );
  }

 /* $j = 1;
  while(  !empty(get_option('cam'.$j )) )
  {
    $cam.$$j                     = get_option('cam'.$j ); 
    $j ++;     
  }

  $j = 1; 
  while(  !empty(get_option('text_cam'.$j )) )
  {
    $text_cam.$$j.'text_cam'.$j  = get_option('text_cam'.$j );   
    $j ++;     
  }
*/
  $j = 1;
  while( isset( $_POST['cam'.$j] ) )
  {
    update_option( 'cam'.$j, $_POST['cam'.$j] );
    if( isset( $_POST['text_cam'.$j] ) )
    {
      update_option( 'text_cam'.$j, $_POST['text_cam'.$j] );       
    }
    
    $j ++;     
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
                <input class="r-button-v" type="button" value="Validar" onClick="urlValidator('temperatura')">
              </div>
              <div id="r-inflarrojo" class="r-element">
                <span class="r-field"> Enlace de inflarojo </span>
                <input type="text" id="inflarojo" name="inflarojo" value="<?php echo get_option( 'inflarojo' )  ?>" >
                <input class="r-button-v" type="button" value="Validar" onClick="urlValidator('inflarojo')">
              </div>
              <div id="r-vapor" class="r-element">
                <span class="r-field"> Enlace de vapor de agua </span>
                <input type="text" id="vapor" name="vapor" value="<?php echo get_option( 'vapor' )  ?>" >
                <input class="r-button-v" type="button" value="Validar" onClick="urlValidator('vapor')">
              </div>

              <div id="r-line">
                <hr>
              </div>

              <div id="r-cams">
                <h1> Cámaras vista en vivo </h1>
                <?php for($i=1; $i <= 10 ; $i++ ): ?>
                  <div class="elem-cam">
                    <span class="r-field">Enlace Cámara <?php echo $i ?></span><br>   
                    <input type="text"  id="cam<?php echo $i ?>" name="cam<?php echo $i ?>"  value="<?php echo get_option( 'cam'.$i )  ?>" ><input  class="r-button-v" type="button" value="Validar" onClick="urlValidator('cam'.$i)">
                    <br>
                    <input type="text"  id="text_cam<?php echo $i ?>" placeholder="Titulo Camara" name="text_cam<?php echo $i ?>"  value="<?php echo get_option('text_cam'.$i ); ?>" >
                  </div>
                <?php endfor; ?>

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
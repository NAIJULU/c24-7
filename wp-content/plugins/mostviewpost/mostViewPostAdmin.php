<?php

$opt_name = 'optionPost';
$opt_val  = get_option( $opt_name );
$opt_num  = get_option('option_num');


if( isset($_POST[$opt_name]) )
{
	if(isset($_POST['option_num'] ))
	{
		$opt_val = $_POST[$opt_name];
		$opt_num = $_POST['option_num'];
		update_option( $opt_name, $opt_val );		
		update_option( 'option_num', $opt_num );		
	}
}

?>

<div id="view-post-admin">
	<div class="view-post-admin-form">
		<form action="" method="post" class="form-inline">
			<header>
				<h1>Administracion de conteo de los articulos mas populares.</h1> 
			</header>
			<section>
				<article>
					<p> Seleccione la categoría de los post sobre cual quiere hacer el conteo.</p>
					  		<span class="help-block">Seleccione una categoria.</span>
							<select id="option-post" class="input-medium" name="<?php echo $opt_name ?>" >
								<?php echo getCategorias($opt_val) ?>
							</select>

							<span class="help-block">Numero de resultados.</span>
							<select id="option-num" name="option_num" class="input-medium" >
								<?php for($i=1 ; $i <= 4; $i++)
									{
										if( isset($opt_num) && $opt_num == $i )
										{
											echo '<option selected value="'.$i.'">'.$i.'</option>';	
										}
										else
										{
											echo '<option value="'.$i.'">'.$i.'</option>';	
										}
										
									}
								?>
							</select>

							<input type="submit" name="Submit" class="button-primary" value="Guardar" >	
				</article>
			</section>
		</form>	
	</div>
</div>
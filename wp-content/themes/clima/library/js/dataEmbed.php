<?php
echo 'die';

	$id = "<script  type='text/javascript' >document.write( $('iframe').attr('id');) </script>";
	settype($id, 'int');

	$prep_stmt = "SELECT id_widget,cliente FROM c247_widget WHERE id_widget = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
   // Verifica el correo electrónico existente.  
    if ($stmt) {
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->store_result();
         	echo 'noem2';
        if ($stmt->num_rows > 0) {
        	echo 'noem3';
            // Ya existe otro usuario con este correo electrónico.
            
        	/* vincular variables a la sentencia preparada */
		    $stmt->bind_result($id_widget, $cliente);

		    /* obtener valores */
		    while ($stmt->fetch()) {
		        printf("%s %s\n", $id_widget, $cliente);
		    }

            $stmt->close();
        }
             $stmt->close();
    } else {
        $error_msg .= '<p class="error">Database error Line 39</p>';
         $stmt->close();
    }
?>
<?php

include_once '../TEMA/header.php';;

?>



		
		<form method="POST" action= "verificaRegistro1aEtapa.php" enctype="multipart/form-data">
			<table>
                            <tr>
                                <td><h1>REGISTRO DE USUARIO</h1><td>
                            </tr>
				<tr>
					<td>Numero de documento:</td><td><input type="number" name = "numerodoc"/></td>
				</tr>
				<tr>
					<td></td><td><input type = "submit" name = "boton" value = "Enviar"/></td>
				</tr>
					
			</table>
			
			
		
		</form>

















<?php

include_once '../TEMA/footer.php';
?>



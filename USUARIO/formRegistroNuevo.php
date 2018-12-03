<?php

include_once("../Bootstrap/science_lab/header.php");

?>



		<h1>NUEVO USUARIO</h1>
		<form method="POST" action= "registrar.php" enctype="multipart/form-data">
			<table>
				<tr>
                                    <td>Tipo de documento:</td><td><select name="TpoDoc"> 
                                            <option value="CI Fronterizo UY">CI FORNTERIZA</option>
                                            <option value="DNI ARGENTINA">DNI ARGENTINA</option>
                                            <option value="DNI BRASIL">DNI BRASIL</option>
                                            <option value="DNI URUGUAY">DNI URUGUAY</option></td>
				</tr>
				<tr>
					<td>Numero de documento:</td><td><input type="number" name = "numerodoc"/></td>
				</tr>
				<tr>
					<td>Primer nombre:</td><td><input type="text" name = "PrimerNombre"/></td>
				</tr>
				<tr>
					<td>Segundo nombre:</td><td><input type="text" name = "SegundoNombre"/></td>
				</tr>
				<tr>
					<td>Apellido paterno:</td><td><input type="text" name = "ApellidoPaterno"/></td>
				</tr>
				<tr>
					<td>Apellido materno:</td><td><input type="text" name = "ApellidoMaterno"/></td>
				</tr>
				<tr>
                                    <td>Fecha de nacimiento:</td><td><input type="date" name = "Fecha_nacimiento"/></td>
				</tr>
				<tr>
					<td>Dirección:</td><td><input type="text" name = "Direccion"/></td>
				</tr>
				<tr>
					<td>Telefono:</td><td><input type="text" name = "Telefono"/></td>
				</tr>
				<tr>
					<td>Contraseña:</td><td><input type="text" name = "clave"/></td>
				<tr>
					<td></td><td><input type = "submit" name = "boton" value = "Enviar"/></td>
				</tr>
					
			</table>
			
			
		
		</form>

















<?php

include_once("../Bootstrap/science_lab/footer.php");
?>

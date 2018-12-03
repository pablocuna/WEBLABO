<?php

include_once '../CLASES/Estudios.clase.php';

$objetoEstudios= new Estudios();
$resultado=$objetoEstudios->listarEstudios(33114898);


?>

<html>
    
    <head>
        <script src="../Bootstrap/science_lab/js/jquery-3.3.1.min.js.js"></script>
        <script src="../Bootstrap/science_lab/js/bajarDoc.js"></script>
    </head>

    <body>
	<h1>LISTA DE ESTUDIOS REALIZADOS</h1>
		<table border>
			<thead>
				<th>AÑO</th>
				<th>LETRA</th>
				<th>NUMERO</th>
				<th>FECHA</th>
				<th>TIPO DE ESUDIO</th>
				<th>NOMBRE</th>
				<th >DESCARGAR</th>
			
 			</thead>
			<tbody>
				<?php
					foreach($resultado as $dados){
						echo '<tr>
									<td>'.$dados->AnioID.'</td>
									<td>'.$dados->letraid.'</td>
									<td>'.$dados->numeroid.'</td>
									<td>'.$dados->Fecha.'</td>
									<td>'.$dados->TpoEstudioId.'</td>
                                    <td>'.$dados->NombreCompleto.'</td>
                                    <td><a onclick="bajarDoc('.$dados->AnioID.',\''.$dados->letraid.'\','.$dados->numeroid.')" href="#">bajar</a></td>
                                     

									
								</tr>';
						
					}
				
				?>
			
			
			
			
			</tbody>
		
		
		</table>
	
	</body>
    
</html>

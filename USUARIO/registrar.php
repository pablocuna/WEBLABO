<?php


	include_once '../CLASES/Usuario.clase.php';
	
        
        $objetoUsuario= new Usuario();
	
        $TpoDoc = filter_input(INPUT_POST, "TpoDoc", FILTER_SANITIZE_STRING);
        $numerodoc = filter_input(INPUT_POST, "numerodoc", FILTER_SANITIZE_STRING);
        $PrimerNombre = filter_input(INPUT_POST, "PrimerNombre", FILTER_SANITIZE_STRING);
        $SegundoNombre = filter_input(INPUT_POST, "SegundoNombre", FILTER_SANITIZE_STRING);
        $ApellidoPaterno = filter_input(INPUT_POST, "ApellidoPaterno", FILTER_SANITIZE_STRING);
        $ApellidoMaterno = filter_input(INPUT_POST, "ApellidoMaterno", FILTER_SANITIZE_STRING);
        $FechaNacimiento = filter_input(INPUT_POST, "FechaNacimiento", FILTER_SANITIZE_STRING);
        $Direccion = filter_input(INPUT_POST, "Direccion", FILTER_SANITIZE_STRING);
        $Telefono = filter_input(INPUT_POST, "Telefono", FILTER_SANITIZE_STRING);
        $clave = filter_input(INPUT_POST, "clave", FILTER_SANITIZE_STRING);
        

	
        
        
        
	
	
	$retorno = $objUsuarios->inserir();
	if($retorno)
		echo "Usuario agregado exitosamente";
	else
		echo "Error usuario no agregado";

	echo "<meta HTTP-EQUIV='refresh' content='1;url=listar.php'/>";
	include_once("../../Theme/rodape.php");
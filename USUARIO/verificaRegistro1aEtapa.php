<?php
include_once ('../CLASES/Usuario.clase.php');

$objetoUsuario= new Usuario();

$numerodoc = filter_input(INPUT_POST, "numerodoc", FILTER_SANITIZE_STRING);

//$documentoCOnsultado=$objetoUsuario->verificaDocumento($numerodoc);


if($objetoUsuario->verificaDocumento($numerodoc)==$numerodoc){
    if($objetoUsuario->verificaExisteClave($numerodoc)==1){
        echo '<script type="text/javascript">
        alert("El usuario ya está registrado");
        window.location.href="formRegistro1aEtapa.php";
        </script>';
    }
    else{
        header("Location:formRegistroClave.php?documento=$numerodoc");
    }
    
}
else{
    header('Location:formRegistroNuevo.php ');
}



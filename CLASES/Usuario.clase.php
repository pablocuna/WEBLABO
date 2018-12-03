<?php
include_once ("Coneccion_BD.php");



class Usuario extends coneccionBd{
    
    
    
    private $TpoDoc;
    private $numerodoc;
    private $PrimerNombre;
    private $SegundoNombre;
    private $ApellidoPaterno;
    private $ApellidoMaterno;
    private $FechaNacimiento;
    private $Direccion;
    private $Telefono;
    private $clave;
    private $claveseguridad;
    private $ingreso1vez;
    
    public function __get($key){
		return $this->$key;
                
    }
    
    
    public function verificaDocumento($numerodoc){
        if ($this->conectar() == TRUE) {
            $elemento1 = null;
            $consultaSQL = $this->coneccion->prepare(strip_tags("select numerodoc from Personas where numerodoc='$numerodoc'"));
            if ($consultaSQL->execute() == TRUE) {
                $documentoConsultado = $consultaSQL->fetchAll(PDO::FETCH_COLUMN, 0);
                if (sizeof($documentoConsultado) == 0) {
                    $elemento1 = null;
                } else {
                    $elemento1 = $documentoConsultado[0];
                }
            }
            $this->cerrar_conection();
            return $elemento1;
        }
    }
    
    
    public function validaClaveSeguridad($numerodoc, $clave){
        if ($this->conectar() == TRUE) {
            $retorno = 0;
            $consultaSQL = $this->coneccion->prepare(strip_tags("select claveseguridad from Personas where numerodoc='$numerodoc'"));
            if ($consultaSQL->execute() == TRUE) {
                $respuestaSql = $consultaSQL->fetchAll(PDO::FETCH_COLUMN, 0);
                if (sizeof($respuestaSql) == 0) {
                    $claveConsultada = null;
                }
                else {
                    $claveConsultada = $respuestaSql[0];
                }
            }
            $this->cerrar_conection();
            if($claveConsultada == $clave)
            $retorno = 1;
        }

        return $retorno;
    }

    
    public function verificaExisteClave($numerodoc){
        if($this->conectar()==true){
            $retorno=1;//Si devuelve 1 la clve existe
            $consultaSQL = $this->coneccion->prepare(strip_tags("select clave from Personas where numerodoc='$numerodoc'"));
            if ($consultaSQL->execute() == TRUE) {
                $respuestaSql = $consultaSQL->fetchAll(PDO::FETCH_COLUMN, 0);
                if (sizeof($respuestaSql) == 0) {
                    $claveConsultada = null;
                }
                else {
                    $claveConsultada = $respuestaSql[0];
                }
            }
            $this->cerrar_conection();
            if($claveConsultada == NULL)
            $retorno = 0;//Si retorno igual 0 la clave no existe
        }

        return $retorno;
        }
    
        
    
    public function registraUsuarioNuevo($parametroIngreso1vez){
        if($this->conectar()==true){
            $retorno = null;
            $consultaSQL = $this->coneccion->prepare(strip_tags("insert into Personas (TpoDoc,numerodoc,PrimerNombre,SegundoNombre,ApellidoPaterno,ApellidoMaterno,
                                                    FechaNacimiento,Direccion,Telefono,clave,ingreso1vez)
                                                    values ('$this->TpoDoc', $this->numerodoc, '$this->PrimerNombre', '$this->SegundoNombre', '$this->ApellidoPaterno', '$this->ApellidoMaterno', $this->FechaNacimiento, '$this->Direccion', $this->Telefono, '$this->clave',$parametroIngreso1vez); "));
            $retorno = $consultaSQL->execute();
            
        }
        return $retorno;
        
    }
    
    
    public function retornaUsuario($numerodoc){
        if($this->conectar()==true){
            $listaDeRetorno=null;
            $consultaSQL = $this->coneccion->prepare(strip_tags("select * from Personas where numerodoc='$numerodoc'"));
            if ($consultaSQL->execute() == TRUE) {
                while($listaUsuarioConsulta = $consultaSQL->fetch(PDO::FETCH_ASSOC)){
                    $usuario=new Usuario();
                    $usuario->TpoDoc = $listaUsuarioConsulta["TpoDoc"];
                    $usuario->numerodoc = $listaUsuarioConsulta["numerodoc"];
                    $usuario->PrimerNombre = $listaUsuarioConsulta["PrimerNombre"];
                    $usuario->SegundoNombre = $listaUsuarioConsulta["SegundoNombre"];
                    $usuario->ApellidoPaterno = $listaUsuarioConsulta["ApellidoPaterno"];
                    $usuario->ApellidoMaterno = $listaUsuarioConsulta["ApellidoMaterno"];
                    $usuario->FechaNacimiento = $listaUsuarioConsulta["FechaNacimiento"];
                    $usuario->Direccion = $listaUsuarioConsulta["Direccion"];
                    $usuario->Telefono = $listaUsuarioConsulta["Telefono"];
                    $usuario->clave = $listaUsuarioConsulta["clave"];
                    $usuario->claveseguridad = $listaUsuarioConsulta["claveseguridad"];
                    $usuario->ingreso1vez = $listaUsuarioConsulta["ingreso1vez"];
                    
                    $listaDeRetorno[]= $usuario;
                }
            }
            $this->cerrar_conection();
            return $listaDeRetorno;
        }
    }
    
   
    
    
    
    
        
        
}
    
    
?>

<?php

$usu=new Usuario();
$per=$usu->retornaUsuario(36694481);
foreach ($per as $key) {
    
    echo $key->PrimerNombre;
    
}



<?php
include_once ("Coneccion_BD.php");



class Estudios extends coneccionBd{
    
    
    private $AnioID;
    private $letraid;
    private $numeroid;
    private $Fecha;
    private $TpoEstudioId;
    private $ObservacionesBloques;
    private $TpoDoc;
    private $numerodoc;
    private $ObservacionesLaminas;
    private $ObservacionesFinProc;
    private $ObservacionesInicioProc;
    private $ObservacionesMacro;
    private $OrigenId;
    private $MatriculaId;
    private $Edad;
    private $DatoClinico;
    private $EnSuma;
    private $ResultadoFinal;
    private $horaIngreso;
    private $NombreCompleto;
    private $Sexo;
    private $IdMedico;
    private $TelefonoActual;
    private $DirecconActual;
    private $avisar;
    private $TemplateInforme;
    private $Impreso;
    private $UsuarioId;
    private $fechaimpreso;
    private $HoraImpreso;
    private $TpoEstudioWF;
    private $codanat;
    private $subcodanat;
    
    public function __get($key){
		return $this->$key;
                
    }
    
    public function listarEstudios($numerodoc){
        if ($this->conectar() == TRUE) {
            $listaRetornada = null;
            $consultaSQL = $this->coneccion->prepare("select * from Base where numerodoc='$numerodoc'");
            if ($consultaSQL->execute() == TRUE) {
                while($listaEstudiosConsulta = $consultaSQL->fetch(PDO::FETCH_ASSOC)){
                    $estudio=new Estudios();
                    $estudio->AnioID = $listaEstudiosConsulta["AnioID"];
                    $estudio->letraid = $listaEstudiosConsulta["letraid"];
                    $estudio->numeroid = $listaEstudiosConsulta["numeroid"];
                    $estudio->Fecha = $listaEstudiosConsulta["Fecha"];
                    $estudio->TpoEstudioId = $listaEstudiosConsulta["TpoEstudioId"];
                    $estudio->NombreCompleto = $listaEstudiosConsulta["NombreCompleto"];
                    
                    $listaRetornada[]= $estudio;
                }
                
                
            }
            $this->cerrar_conection();
            return $listaRetornada;
        }
        
    }
    
    
    
}
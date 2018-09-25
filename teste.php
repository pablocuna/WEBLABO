<?php

include_once 'ConeccionBD.php';

class consultas extends ConeccionBD {



function consultarPersona() {

        if ($this->conectar() == TRUE) {
            $listRetorno = null;
            $consultaSQL = $this->coneccion->prepare("select * from Personas");
            if ($consultaSQL->execute() == TRUE) {
                $listRetorno = $consultaSQL->fetchAll();
            }
            $this->cerrar_conection();
            return $listRetorno;
        }
    }
}

?>

<html>


    
    <body>
    <?php
        $consulta=new consultas();
        print $consulta->consultarPersona();
    
    ?>
        
    </body>
</html>
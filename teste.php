<?php

include_once 'Coneccion_BD.php';

class consultas extends coneccionbd {



function consultarAgenda() {

        if ($this->conectar() == TRUE) {
            $listRetorno = null;
            $consultaSQL = $this->coneccion->prepare(
                    "select * from AgPacientesAgendados");
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
        print_r($consulta->consultarAgenda());
    
    ?>
        
    </body>
</html>
<?php

class coneccionbd {

    protected $coneccion = null;
    private $serverName = "laboapc.ddns.net\sqlexpress, 8956";
    

    public function conectar() {
        try {
            
            print_r(PDO::getAvailableDrivers());
            echo "AQUI SIM";
            $this->coneccion = new PDO("sqlsrv:Server=laboapc.ddns.net\sqlexpress, 8956;Database=APC", "pcbrujo", "OIU8932hoi.=");
            return TRUE;
        } catch (PDOException $exc) {
            if ((isset($this->coneccion)) && ($this->coneccion->inTransaction())) {
                $this->coneccion->rollBack();
            }
            
            print $exc;
            print "No se conecta a la base tarado!!";
            return FALSE;
        }
    }

    protected function cerrar_conection() {
        unset($this->coneccion);
    }

}


$c=new coneccionbd();
$c->conectar();
?>
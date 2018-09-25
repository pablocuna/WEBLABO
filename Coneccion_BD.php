<?php

class ConeccionBD {

    protected $coneccion = null;
    private $serverName = "laboapc.ddns.net\sqlexpress";

    public function conectar(): bool {
        try {
            $this->coneccion = new PDO('sqlsrv:server=$serverName;port=8956;dbname=APC', 'pcbrujo','OIU8932hoi.=');
            return TRUE;
        } catch (PDOException $exc) {
            if ((isset($this->coneccion)) && ($this->coneccion->inTransaction())) {
                $this->coneccion->rollBack();
            }
            return FALSE;
        }
    }

    protected function cerrar_conection() {
        unset($this->coneccion);
    }

}

?>
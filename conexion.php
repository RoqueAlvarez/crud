<?php
class Conexion {
    public function conectar() {
        $con = new mysqli("localhost", "root", "", "crud");
        
        if ($con->connect_error) {
            die("Error de conexión: " . $con->connect_error);
        }
        
        return $con;
    }
}
?>
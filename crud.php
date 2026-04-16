<?php
require_once "conexion.php";

class Crud extends Conexion {

    public function guardar($nombre) {
        $conexion = parent::conectar();
        $sql = "INSERT INTO t_nombres (nombre) VALUES ('$nombre')";
        return $conexion->query($sql);
    }

    public function mostrar() {
        $conexion = parent::conectar();
        $sql = "SELECT * FROM t_nombres";
        $respuesta = $conexion->query($sql);
        return $respuesta->fetch_all(MYSQLI_ASSOC);
    }

    public function eliminar($id) {
        $conexion = parent::conectar();
        $sql = "DELETE FROM t_nombres WHERE id='$id'";
        return $conexion->query($sql);
    }

    public function actualizar($id, $nombre) {
        $conexion = parent::conectar();
        $sql = "UPDATE t_nombres SET nombre = '$nombre' WHERE id = '$id'";
        return $conexion->query($sql);
    }
}
?>
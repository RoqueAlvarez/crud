<?php
require_once "crud.php";

if (isset($_POST['nombre']) && !empty(trim($_POST['nombre']))) {
    $crud = new Crud();
    $nombre = trim($_POST['nombre']);
    
    $crud->guardar($nombre);
}

header("Location: index.php");
exit();
?>
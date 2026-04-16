<?php
require_once "crud.php";

if (isset($_POST['id']) && isset($_POST['nombre'])) {
    $crud = new Crud();
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    
    $crud->actualizar($id, $nombre);
}

header("Location: index.php");
exit();
?>
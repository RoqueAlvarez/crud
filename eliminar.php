<?php
require_once "crud.php";

if (isset($_GET['id'])) {
    $crud = new Crud();
    $id = intval($_GET['id']);
    
    $crud->eliminar($id);
}

header("Location: index.php");
exit();
?>
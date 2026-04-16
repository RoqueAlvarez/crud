<?php require_once "crud.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema CRUD</title>
</head>
<body>
    <h3>Gestión de Nombres</h3>
    <form action="guardar.php" method="post">
        <label>Nuevo Registro:</label>
        <input type="text" name="nombre" required>
        <button type="submit">Crear</button>
    </form>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th colspan="4">Ver registros</th>
            </tr>
            <tr>
                <td>ID</td>
                <td>Nombre del Registro</td>
                <td>Acción</td>
                <td>Eliminar</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            $obj = new Crud();
            $datos = $obj->mostrar();
            foreach ($datos as $dato): 
            ?>
            <tr>
                <td><?php echo $dato['id']; ?></td>
                <td>
                    <form id="form_actualizar_<?php echo $dato['id']; ?>" action="actualizar.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $dato['id']; ?>">
                        <input type="text" name="nombre" value="<?php echo $dato['nombre']; ?>" required>
                    </form>
                </td>
                <td>
                    <button type="submit" form="form_actualizar_<?php echo $dato['id']; ?>">Actualizar</button>
                </td>
                <td>
                    <a href="eliminar.php?id=<?php echo $dato['id']; ?>" onclick="return confirm('¿Estás seguro de eliminar este registro?')">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
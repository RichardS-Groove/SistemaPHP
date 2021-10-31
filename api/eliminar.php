<?php
//http://localhost/SistemaPHP/api/eliminar.php?id=8

$conexion = new mysqli("localhost", "root", "", "sistema") or die("not conected" . mysqli_connect_error());

if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo mysqli_error($conexion);
}

//echo "Conexion exitosa";

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `clientes` WHERE `clientes`.`id` = $id";

    $query = mysqli_query($conexion, $sql);

    if ($query) {
        echo "Eliminado";
    } else {
        echo "No se pudo eliminar";
    }
}

?>
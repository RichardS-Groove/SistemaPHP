<?php
//http://localhost/SistemaPHP/api/agregar.php?nombre=Irene&apellidos=Meza&email=irenemeza18@hotmail.com&telefono=1161564460&detalle=La%20mejor%20madre%20y%20abuela%20del%20mundo

$conexion = new mysqli("localhost", "root", "", "sistema") or die("not conected" . mysqli_connect_error());

//echo "Conexion exitosa";

if (isset($_GET['nombre']) && isset($_GET['apellidos']) && isset($_GET['email']) && isset($_GET['telefono'])) {

    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $apellidos = $_GET['apellidos'];
    $email = $_GET['email'];
    $telefono = $_GET['telefono'];
    $detalle = $_GET['detalle'];

    $sql = "UPDATE `clientes` SET `nombre` = '$nombre', `apellidos` = '$apellidos', `email` = '$email', `telefono` = '$telefono', `detalle` = '$detalle' WHERE `clientes`.`id` = $id";

    $query = mysqli_query($conexion, $sql);
}

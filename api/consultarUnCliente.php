<?php
//http://localhost/SistemaPHP/api/consultarUnCliente.php=id=1

$conexion = new mysqli("localhost", "root", "", "sistema") or die("not conected" . mysqli_connect_error());

$id = $_GET['id'];

$sql = "SELECT * FROM `clientes` WHERE id = $id";

$result = mysqli_query($conexion, $sql);

$clientes = array();

while ($fila = mysqli_fetch_array($result)) {
    array_push($clientes, $fila);
}

echo json_encode($clientes);

mysqli_free_result($result);
mysqli_close($conexion);

?>
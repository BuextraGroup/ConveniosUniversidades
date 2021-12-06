<?php
include("conexion.php");
$con=conectar();

$universidad = $_POST['universidad'];
$nombre = $_POST['nombre'];
$estatus = $_POST['estatus'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFinal = $_POST['fechaFinal'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$estado = $_POST['estado'];
$observaciones = $_POST['observaciones'];

$sql = "INSERT INTO datos_universidades VALUES('$universidad', '$nombre', '$estatus', '$fechaInicio', '$fechaFinal', '$telefono', '$correo', '$estado', '$observaciones')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}
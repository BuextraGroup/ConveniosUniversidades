<?php
include("conexion.php");
$con = conectar();

$universidad = $_POST['universidad'];
$nombre = $_POST['nombre'];
$estatus = $_POST['estatus'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFinal = $_POST['fechaFinal'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$estado = $_POST['estado'];
$observaciones = $_POST['observaciones'];

$sql = "UPDATE datos_universidades SET nombre='$nombre', estatus='$estatus', fechaInicio='$fechaInicio', fechaFinal='$fechaFinal', telefono='$telefono', correo='$correo', estado='$estado', observaciones='$observaciones' WHERE universidad= '$universidad'";
    $query = mysqli_query($con, $sql);

if($query){
    Header("Location: datos.php");
}


echo "Actualizado correctamente";
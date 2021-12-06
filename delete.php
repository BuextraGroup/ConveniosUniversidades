<?php

include("conexion.php");
$con=conectar();

$universidad = $_GET['id'];

$sql = "DELETE FROM datos_universidades WHERE universidad = '$universidad'";
$query = mysqli_query($con, $sql);

    if($query){
        Header("Location: datos.php");
    }
?>
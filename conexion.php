<?php
function conectar(){
    $host="localhost";
    $user="buextrag_adminbd";
    $pass="Adminbbdd9826#";

    $bd="buextrag_convenio";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
<?php
    include("conexion.php");
    $con=conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM datos_universidades WHERE universidad='$id'";
$query = mysqli_query($con, $sql);
$row=mysqli_fetch_array($query); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="logo.png">
</head>
<body>
    <!--Inicio menú-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"></a>
        <img src="logo.png" alt="" width="135" height="80">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="datos.php"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="50" height="50"
viewBox="0 0 172 172"
style=" fill:#000000;"><defs><linearGradient x1="171.05042" y1="86" x2="90.74075" y2="86" gradientUnits="userSpaceOnUse" id="color-1_O5Sw1V6t7StG_gr1"><stop offset="0" stop-color="#f44f5a"></stop><stop offset="0.443" stop-color="#ee3d4a"></stop><stop offset="1" stop-color="#e52030"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="" fill="none"></path><g><path d="M16.61233,83.46526l19.74417,-20.2315c0.51233,-0.51238 1.28274,-0.66595 1.95237,-0.38916c0.66963,0.27679 1.10677,0.9295 1.1078,1.65407v14.33333h28.66667c1.97873,0.00071 3.58262,1.60461 3.58333,3.58333v7.16667c-0.00071,1.97873 -1.60461,3.58262 -3.58333,3.58333h-28.66667v14.33333c-0.00061,0.72473 -0.43733,1.37788 -1.10684,1.65536c-0.66951,0.27748 -1.44022,0.12475 -1.95333,-0.38707l-18.69425,-19.18484l-1.04992,-1.04992c-0.67277,-0.67147 -1.05084,-1.58295 -1.05084,-2.53347c0,-0.95052 0.37807,-1.86201 1.05084,-2.53347z" fill="#b31523"></path><path d="M146.91667,125.41667h-35.83333v0l0,-78.83333v0h35.83333c1.97902,0 3.58333,1.60431 3.58333,3.58333l0,71.66667c0,1.97902 -1.60431,3.58333 -3.58333,3.58333z" fill="url(#color-1_O5Sw1V6t7StG_gr1)"></path><path d="M96.75,150.5h-7.16667c-1.97902,0 -3.58333,-1.60431 -3.58333,-3.58333l0,-121.83333c0,-1.97902 1.60431,-3.58333 3.58333,-3.58333h7.16667c7.91608,0 14.33333,6.41725 14.33333,14.33333l0,100.33333c0,7.91608 -6.41725,14.33333 -14.33333,14.33333z" fill="#eb6773"></path></g></g></svg></a>
          </div>
        </div>
      </div>
    </nav>
    <!--Fin menú-->

    <!--Inicio campos para actualizar información-->
    <h1 style="text-align: center;">Edita los campos que quieras actualizar</h1>
    <div class="actualizar">
        <form action="update.php" method="POST">
        
              <input type="hidden" name="universidad" value="<?php echo $row['universidad'] ?>">
              <input type="text" class="form-control mb-3" name="universidad" placeholder="Nombre de la universidad" value="<?php echo $row['universidad']  ?>">
              <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre de la persona encargada" value="<?php echo $row['nombre']  ?>">
              Estatus:
                  <select style="margin-bottom: 20px;" name="estatus">
                      <option selected value="Elige una opción"> Elige una opción </option>
                      <option value="Sin contactar">Sin contactar</option>
                      <option value="Dar seguimiento">Dar seguimiento</option>
                      <option value="Convenio realizado">Convenio realizado</option>
              |       <option value="No formalizado">No formalizado</option>
                      value="<?php echo $row['estatus'] ?>">
                  </select> <br>   
              <input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono" value="<?php echo $row['telefono']  ?>">
              Fecha de inicio: <input type="date" class="form-control mb-3" name="fechaInicio" placeholder="Fecha">
              Fecha Final: <input type="date" class="form-control mb-3" name="fechaFinal" placeholder="Fecha">
              <input type="text" class="form-control mb-3" name="correo" placeholder="Correo" value="<?php echo $row['correo']  ?>">
              <input type="text" class="form-control mb-3" name="estado" placeholder="Estado" value="<?php echo $row['estado']  ?>">
              <input type="text" class="form-control mb-3" name="observaciones" placeholder="Observaciones" value="<?php echo $row['observaciones'] ?>">
              <div class="boton">
                <input type="submit" class="btn btn-primary" value="Actualizar">
            </div>
        </form>
    </div>
    <!--Fin campos para actualizar información-->
    
</body>
</html>

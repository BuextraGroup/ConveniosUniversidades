<?php
  include("conexion.php");
  $con=conectar();

  $sql="SELECT universidad, nombre, estatus, telefono, correo, estado, observaciones FROM datos_universidades WHERE estatus = 'No formalizado'";
  $query=mysqli_query($con,$sql);

  $row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No formalizado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="logo.png">
</head>
<body>
    
    <!--Inicio menú-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <img src="logo.png" alt="" width="135" height="80">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" 
stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path>
<g fill="#ffffff"><path d="M86,13.94141l-3.86328,3.69531l-69.875,69.875l7.72656,7.72656l6.88672,-6.88672v62.14844h48.375v-53.75h21.5v53.75h48.375v-62.14844l6.88672,6.88672l7.72656,
-7.72656l-69.875,-69.875zM86,29.22656l48.375,48.375v62.14844h-26.875v-53.75h-43v53.75h-26.875v-62.14844z"></path></g></g></svg> Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="datos.php"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M8.74094,5.38419c-1.85404,0 -3.35675,1.50599 -3.35675,3.36003v154.5155c0,1.85437 1.50305,3.3561 3.35675,3.3561h120.92503c1.8537,0 3.35938,-1.50239 3.35938,-3.3561v-26.87434c18.52124,0 33.59047,-15.06589 33.59047,-33.58982c0.00034,-18.52124 -15.06923,-33.58915 -33.59047,-33.58915v-60.46219c0,-1.85404 -1.50567,-3.36003 -3.35937,-3.36003zM12.10031,12.10359h114.20563v40.30791h-114.20563zM22.17909,18.82169c-1.85706,0 -3.35937,1.50404 -3.35937,3.35741v20.15494c0,1.85505 1.50231,3.36003 3.35938,3.36003c1.85404,0 3.35675,-1.50498 3.35675,-3.36003v-20.15494c0.00034,-1.8537 -1.50271,-3.35741 -3.35675,-3.35741zM72.56447,38.97466v6.71941h6.71613v-6.71941zM86,38.97466v6.71941h6.71613v-6.71941zM99.43553,38.97466v6.71941h6.71613v-6.71941zM112.87106,38.97466v6.71941h6.71941v-6.71941zM12.10031,59.12894h114.20563v10.75197c-14.24173,2.90384 -25.23673,14.84922 -26.70309,29.55791h-87.50253zM22.17909,65.84703c-1.85706,0 -3.35937,1.50433 -3.35937,3.35938v20.15297c0,1.8574 1.50231,3.36003 3.35938,3.36003c1.85404,0 3.35675,-1.50263 3.35675,-3.36003v-20.15297c0.00034,-1.85505 -1.50271,-3.35937 -3.35675,-3.35937zM133.02534,75.9245c14.81619,0 26.87041,12.05388 26.87041,26.87041c0.00067,14.81988 -12.05355,26.87434 -26.87041,26.87434c-14.81652,0 -26.87369,-12.05446 -26.87369,-26.87434c0,-14.81652 12.05716,-26.87041 26.87369,-26.87041zM72.56447,86v6.71941h6.71613v-6.71941zM86,86v6.71941h6.71613v-6.71941zM146.55142,86.00131c-1.0781,-0.02797 -2.15081,0.46315 -2.82332,1.40608l-14.4919,20.28616l-3.91446,-3.91446c-1.31217,-1.31217 -3.43752,-1.31217 -4.75036,0c-1.30948,1.31284 -1.30948,3.43852 0,4.75102l6.71941,6.71941c1.45998,1.46032 3.89757,1.26959 5.10796,-0.4232l16.79556,-23.51431c1.07937,-1.50937 0.72826,-3.60604 -0.78145,-4.68541c-0.56589,-0.40476 -1.21457,-0.60851 -1.86144,-0.62529zM12.10031,106.15494h87.50253c1.46637,14.70835 12.46136,26.65381 26.70309,29.55463v24.19012h-114.20563zM22.17909,112.87434c-1.85706,0 -3.35937,1.50265 -3.35937,3.35938v20.15166c0,1.85639 1.50231,3.35938 3.35938,3.35938c1.85404,0 3.35675,-1.50298 3.35675,-3.35937v-20.15166c0.00034,-1.85673 -1.50271,-3.35937 -3.35675,-3.35937zM72.56447,146.46416v6.71547h6.71613v-6.71547zM86,146.46416v6.71547h6.71613v-6.71547zM99.43553,146.46416v6.71547h6.71613v-6.71547zM112.87106,146.46416v6.71547h6.71941v-6.71547z"></path></g></g></svg> Datos guardados</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="28" viewBox="0 0 172 172" style=" fill:#000000;">
          <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" 
          stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
          <path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86.12765,6.88c-0.54666,-0.02009 -1.09024,0.09047 -1.58562,0.3225l-75.68,
          35.38765c-1.20769,0.56521 -1.98002,1.77737 -1.98203,3.11078v5.89906c0.00019,1.89978 1.54022,3.43981 3.44,3.44h6.88c0,4.47114 2.87183,8.36646 6.88,
          9.7489v63.00844c-4.03157,1.33931 -6.88,5.31384 -6.88,9.80265v3.44h-0.53078c-5.52334,0 -9.78922,4.8064 -9.78922,10.32v10.32h158.24v-10.32c0,-5.5136 
          -4.26588,-10.32 -9.78922,-10.32h-0.53078v-3.44c0,-4.48881 -2.84843,-8.46334 -6.88,-9.80265v-63.00844c4.00817,-1.38245 6.88,-5.27776 6.88,
          -9.7489h6.88c1.89978,-0.00019 3.43981,-1.54022 3.44,-3.44v-5.89906c-0.00201,-1.33341 -0.77434,-2.54557 -1.98203,-3.11078l-75.68,-35.38765c-0.41736,
          -0.19552 -0.86975,-0.30519 -1.33031,-0.3225zM86,14.11609l72.24,33.77516v0.26875h-144.48v-0.26875zM24.08,55.04h123.84c0,2.02375 -1.44272,3.44 
          -3.12422,3.44h-69.11578h-13.76h-34.71578c-1.6815,0 -3.12422,-1.41625 -3.12422,-3.44zM30.96,65.36h6.88v61.92h-6.88zM44.72,65.36h13.76v61.92h-13.76zM65.36,
          65.36h6.88v61.92h-6.88zM79.12,65.36h13.76v61.92h-13.76zM99.76,65.36h6.88v61.92h-6.88zM113.52,65.36h13.76v61.92h-13.76zM134.16,65.36h6.88v61.92h-6.88zM26.
          98922,134.16h34.93078h13.76h69.33078c1.49426,0 2.90922,1.35808 2.90922,3.44v3.44h-123.84v-3.44c0,-2.08192 1.41495,-3.44 2.90922,-3.44zM16.66922,
          147.92h138.66156c1.49426,0 2.90922,1.35808 2.90922,3.44v3.44h-144.48v-3.44c0,-2.08192 1.41495,-3.44 2.90922,-3.44z"></path></g></g></svg> Universidades
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="sincontactar.php"><img src="https://img.icons8.com/color/20/000000/callback.png"/> Sin contactar</a></li>
            <li><a class="dropdown-item" href="seguimiento.php"><img src="https://img.icons8.com/cotton/20/000000/track-order.png"/> En seguimiento</a></li>
            <li><a class="dropdown-item" href="convenios.php"><img src="https://img.icons8.com/color/20/000000/man-with-money.png"/> Convenio realizado</a></li>
            <li><a class="dropdown-item" href="noformalizado.php"><img src="https://img.icons8.com/external-bearicons-outline-color-bearicons/24/000000/external-rejected-approved-and-rejected-bearicons-outline-color-bearicons-14.png"/> No se formalizó</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!--Fin menú-->

    <!--Inicio tabla de información-->
    <h1 style="text-align: center;">Convenios no formalizados</h1>
    <div class="datos">
      <div class="col-md-8">
        <table class="table table-danger" style="text-align: center;">
            <thead class="table">
                <tr>
                    <th><b><font color="blue">Universidad</font></b></th>
                    <th><b><font color="blue">Persona encargada</font></b></th>
                    <th><b><font color="blue">Estatus</font></b></th>
                    <th><b><font color="blue">Teléfono</font></b></th>
                    <th><b><font color="blue">Correo</font></b></th>
                    <th><b><font color="blue">Estado</font></b></th>
                    <th><b><font color="blue">Observaciones</font></b></th>
                </tr>
            </thead>

            <tbody>
                    <?php
                        while($row=mysqli_fetch_array($query)){
                    ?>    
                        <tr>
                            <th><?php echo $row['universidad']?></th>
                            <th><?php echo $row['nombre']?></th>
                            <th><?php echo '<span style="color:#DF2E2E;">', $row['estatus']?></th>
                            <th><?php echo $row['telefono']?></th>
                            <th><?php echo $row['correo']?></th>
                            <th><?php echo $row['estado']?></th>
                            <th><?php echo $row['observaciones']?></th>
                        </tr>
                    <?php  
                        }
                    ?>
            </tbody>
        </table>

      </div>
    </div>
    <!--Fin tabla de información-->
    
    <footer id="footer" class="center">
      <p>&copy; Administración de TI</p>
    </footer>
    
</body>
</html>

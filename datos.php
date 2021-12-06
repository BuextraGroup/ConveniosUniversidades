<?php
  include("conexion.php");
  $con=conectar();

  $sql="SELECT * FROM datos_universidades";
  $query=mysqli_query($con,$sql);

  $row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos almacenados</title>
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
            <li><a class="dropdown-item" href="convenios.php"> <img src="https://img.icons8.com/color/20/000000/man-with-money.png"/> Convenio realizado</a></li>
            <li><a class="dropdown-item" href="noformalizado.php"> <img src="https://img.icons8.com/external-bearicons-outline-color-bearicons/24/000000/external-rejected-approved-and-rejected-bearicons-outline-color-bearicons-14.png"/> No se formalizó</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!--Fin menú-->

    <!--Inicio tabla de información-->
    <div class="tabladatos">
      <div class="col-md-8">
        <table class="table table-secondary table-striped" style="text-align: center;">
            <thead class="table">
                <tr>
                    <th><b><font color="blue">Universidad</font></b></th>
                    <th><b><font color="blue">Persona encargada</font></b></th>
                    <th><b><font color="blue">Estatus</font></b></th>
                    <th><b><font color="blue">Teléfono</font></b></th>
                    <th><b><font color="blue">Correo</font></b></th>
                    <th><b><font color="blue">Estado</font></b></th>
                    <th><b><font color="blue">Observaciones</font></b></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                    <?php
                        while($row=mysqli_fetch_array($query)){
                    ?>    
                        <tr>
                            <th><?php echo $row['universidad']?></th>
                            <th><?php echo $row['nombre']?></th>
                            <th><?php echo '<span style="color:#185ADB;">', $row['estatus']?></th>
                            <th><?php echo $row['telefono']?></th>
                            <th><?php echo $row['correo']?></th>
                            <th><?php echo $row['estado']?></th>
                            <th><?php echo $row['observaciones']?></th>
                            <th><a href="actualizar.php?id=<?php echo $row['universidad'] ?>" class="btn btn-info"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 172 172"
                                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" 
                                font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M119.59375,170.65625h-53.75c-2.28438,
                                0 -4.03125,-1.74687 -4.03125,-4.03125c0,-2.28438 1.74687,-4.03125 4.03125,-4.03125h53.75c2.28437,0 4.03125,1.74687 4.03125,4.03125c0,2.28438 -1.74688,4.03125 -4.03125,4.03125zM139.75,162.59375c-2.2264,
                                0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125z" fill="#444b54"></path><g><path 
                                d="M113.81563,52.54063l-50.12187,86.5375c-4.16563,7.25625 -9.94375,13.4375 -16.93125,18.00625l-14.5125,9.54063l1.075,-17.33437c0.5375,-8.33125 2.95625,-16.39375 7.12187,-23.65l50.12188,-86.5375" 
                                fill="#ffffff"></path><path d="M81.1625,59.25938c-0.67187,0 -1.34375,-0.13437 -2.01562,-0.5375c-1.88125,-1.075 -2.55312,-3.62813 -1.47812,-5.50938l9.40625,-16.125c1.075,-1.88125 3.62812,-2.55312 5.50937,
                                -1.47812c1.88125,1.075 2.55313,3.62812 1.47812,5.50937l-9.40625,16.125c-0.80625,1.20938 -2.15,2.01563 -3.49375,2.01563zM104.40938,72.69688c-0.67187,0 -1.34375,-0.13438 -2.01562,-0.5375c-1.88125,-1.075 -2.55312,
                                -3.62812 -1.47812,-5.50937l9.40625,-16.125c1.075,-1.88125 3.62813,-2.55312 5.50937,-1.47812c1.88125,1.075 2.55313,3.62813 1.47813,5.50937l-9.40625,16.125c-0.80625,1.20937 -2.15,2.01563 -3.49375,2.01563z" 
                                fill="#ffffff"></path><path d="M63.425,127.3875c-0.67187,0 -1.34375,-0.13438 -2.01562,-0.5375c-1.88125,-1.075 -2.55313,-3.62813 -1.47813,-5.50937l33.59375,-58.31875c1.075,-1.88125 3.49375,-2.41875 5.50937,
                                -1.47813c7.525,3.62813 7.525,3.62813 7.525,3.62813l-39.50625,60.33438c-0.80625,1.34375 -2.28437,1.88125 -3.62812,1.88125z" fill="#fcca3d"></path><path d="M32.25,170.65625c-0.67187,0 -1.34375,-0.13438 -2.01562,
                                -0.5375c-1.34375,-0.80625 -2.15,-2.15 -2.01562,-3.7625l1.075,-17.33437c0.5375,-8.86875 3.225,-17.7375 7.65938,-25.39687l40.71563,-70.4125c1.075,-1.88125 3.62812,-2.55312 5.50937,-1.47812c1.88125,1.075 2.55313,
                                3.62813 1.47813,5.50937l-40.71562,70.4125c-3.89688,6.58437 -6.04687,14.24375 -6.58438,21.90312l-0.5375,9.27188l7.79375,-5.10625c6.45,-4.16563 11.825,-9.94375 15.72187,-16.6625l40.71562,-70.4125c1.075,-1.88125 
                                3.62813,-2.55313 5.50938,-1.47813c1.88125,1.075 2.55312,3.62812 1.47812,5.50938l-40.85,70.4125c-4.43437,7.79375 -10.75,14.37813 -18.14062,19.35l-14.5125,9.54063c-0.67187,0.40312 -1.47812,0.67188 -2.28437,0.67188z" 
                                fill="#444b54"></path><path d="M117.84688,49.31563c-0.67187,0 -1.34375,-0.13438 -2.01562,-0.5375c-1.88125,-1.075 -2.55312,-3.62813 -1.47812,-5.50937c1.20938,-2.15 1.6125,-4.70312 0.94063,-7.12188c-0.67187,-2.41875 
                                -2.15,-4.43437 -4.43438,-5.64375c-2.15,-1.20937 -4.70312,-1.6125 -7.12187,-0.94063c-2.41875,0.67188 -4.43438,2.15 -5.77813,4.43437c-1.075,1.88125 -3.62812,2.55313 -5.50937,1.47813c-1.88125,-1.075 -2.55313,-3.62813 
                                -1.47812,-5.50938c4.8375,-8.33125 15.5875,-11.15313 23.91875,-6.45c4.03125,2.28438 6.9875,6.04688 8.19687,10.61563c1.20937,4.56875 0.5375,9.27187 -1.74688,13.30312c-0.80625,1.20938 -2.15,1.88125 -3.49375,1.88125z" 
                                fill="#ff5576"></path><path d="M117.84688,45.28438c3.7625,-6.45 1.47813,-14.64687 -4.97187,-18.40937v0c-6.45,-3.7625 -14.64688,-1.47813 -18.40937,4.97188l-4.97188,8.73438l23.24688,13.4375z" fill="#ff5576"></path>
                                <path d="M112.74063,58.05c-0.67187,0 -1.34375,-0.13438 -2.01562,-0.5375l-23.24688,-13.4375c-0.94062,-0.5375 -1.6125,-1.47812 -1.88125,-2.41875c-0.26875,-1.075 -0.13438,-2.15 0.40313,-3.09063l4.97188,-8.73437c4.8375,
                                -8.33125 15.5875,-11.15313 23.91875,-6.45c4.03125,2.28438 6.9875,6.04688 8.19687,10.61563c1.20937,4.56875 0.5375,9.27188 -1.74687,13.30313l-4.97188,8.73438c-0.5375,0.94063 -1.47812,1.6125 -2.41875,1.88125c-0.5375,0.13438 
                                -0.80625,0.13438 -1.20938,0.13438zM95.00313,39.10313l16.25938,9.40625l2.95625,-5.24062v0c1.20938,-2.15 1.6125,-4.70312 0.94062,-7.12188c-0.67187,-2.41875 -2.15,-4.43437 -4.43437,-5.64375c-4.43438,-2.55312 -10.2125,-1.075 
                                -12.9,3.49375z" fill="#ff5576"></path><g fill="#d32f56"><path d="M112.74063,58.05c-0.67187,0 -1.34375,-0.13438 -2.01562,-0.5375c-1.88125,-1.075 -2.55313,-3.62813 -1.47812,-5.50937l4.97187,-8.73437c1.34375,-2.41875 1.6125,
                                -5.375 0.67188,-8.0625c-0.80625,-2.15 0.26875,-4.43438 2.41875,-5.24062c2.15,-0.80625 4.43437,0.26875 5.24063,2.41875c1.88125,4.97187 1.34375,10.34687 -1.20938,14.91562l-4.97188,8.73438c-0.80625,1.34375 -2.15,2.01563 
                                -3.62812,2.01563z"></path></g></g></g></g></svg> </a></th>
                            <th><a href="delete.php?id=<?php echo $row['universidad'] ?>" class="btn btn-danger"> <img src="https://img.icons8.com/ultraviolet/25/000000/delete-sign.png"/></a></th>
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

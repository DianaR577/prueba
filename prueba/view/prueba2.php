<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

  <body>
  <h1>PRUEBA 2</h1>
  <!--INSERTAR DATOS-->
   <form action="../controller/metodoGET.php" method="get">
     <div class="form-group">
       <label for="exampleInputEmail1">Nombres</label>
       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="nombres">
     </div>
     <div class="form-group">
       <label for="exampleInputPassword1">Apellidos</label>
       <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="apellidos">
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1">Email</label>
       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
     </div>
     <div class="form-group">
       <label for="exampleInputPassword1">Teléfono</label>
       <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Password" name="telefono">
     </div>
     <button type="submit" class="btn btn-primary">Enviar</button>
   </form>
   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>

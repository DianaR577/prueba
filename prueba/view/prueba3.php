<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");
require_once("../controller/mostrarInfo.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

  <body>
  <h1>PRUEBA 3</h1>
  <!--INSERTAR DATOS-->
   <form action="../controller/insertarPOST2.php" method="post">
   <div class="form-group">
       <label for="exampleInputEmail1">Número</label>
       <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="numero">
     </div>
     <button type="submit" class="btn btn-primary">Enviar</button>
   </form>
  </body>
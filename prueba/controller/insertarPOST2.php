<?php
require_once("../model/conexion.php");
require_once("../modelm/consultas.php");

$numero = $_POST['numero'];

$objConsultas = new Consultas();
$result = $objConsultas-> insertarNumero($numero);



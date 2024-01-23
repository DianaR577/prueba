<?php
require_once("../model/conexion.php");
require_once("../modelm/consultas.php");

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

$objConsultas = new Consultas();
$result = $objConsultas-> insertarInfo($nombres, $apellidos, $email, $telefono);


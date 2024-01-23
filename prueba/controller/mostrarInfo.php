<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");

function cargarInfo()
{

    $objConsultas = new Consultas();
    $result = $objConsultas-> mostrarInfo();

        foreach ($result as $f) {
            echo '
                <tr>
                    <td >' . $f['nombres'] . '</td>
                    <td>' . $f['apellidos'] . '</td>
                    <td >' . $f['email'] . '</td>
                    <td>' . $f['telefono'] . '</td>
                </tr>
                ';
        }
}
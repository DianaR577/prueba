<?php
class Consultas
{

    public function insertarInfo($nombres, $apellidos, $email, $telefono){

        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

            $insertar = "INSERT INTO prueba1 (email, telefono)
            VALUES (:email, :telefono)";

            $result = $conexion->prepare($insertar);

            $result->bindParam(":nombres", $nombres);
            $result->bindParam(":apellidos", $apellidos);
            $result->bindParam(":email", $email);
            $result->bindParam(":telefono", $telefono);
 
            $result->execute();

            echo "<script> location.href='../view/prueba1.php' </script>";
        }

    public function mostrarInfo(){

        $f = null;

        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM prueba1";


        $result = $conexion->prepare($consultar);

        $result->execute();

        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }

        return $f;
    }

    public function insertarNumero($numero){

        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

            for ($i = 1; ; $i++){
                if ($i == $numero){
                   break;
                }
                echo "('Hola soy el número' $i)";              
            }
      }   

}
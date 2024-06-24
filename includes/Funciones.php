<?php

function obtener_servicios(){

    try {
        //Importarndo credenciales
        // $db = mysqli_connect('localhost', 'root','1234', 'appsalon');
        require 'database.php'; // Se asume que 'database.php' contiene la conexión a la base de datos

        //Consulta SQL
        $sql = "SELECT * FROM servicios";

        // realizar la consulta
        $consulta = mysqli_query($db, $sql);

        
        return $consulta;

        //Acceder a los resultados
        // echo "<pre>";  // Corregido: 'prev' a 'pre'
        // var_dump(mysqli_fetch_assoc($consulta));
        // echo "</pre>";



        //cerrar conexion 
       // mysqli_close($db); // Corregido: 'resultado' a 'mysqli_close'

    } catch (\Throwable $th) {
        var_dump($th);
    }
}

obtener_servicios(); // LLammada base de datos
?>

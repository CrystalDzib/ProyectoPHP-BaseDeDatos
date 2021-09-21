<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ('conexion.php');
// Realizar consulta SQL

$consulta = "select * from alumnos";
echo ('<br>');
echo ($consulta);
$resultado = mysqli_query($mysqli, $consulta);
if (!$resultado) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}

while ($filasql = mysqli_fetch_array($resultado)) {
    // Imprimir por Indice del Arreglo
    echo '<br>';
    echo $filasql[0] . ' ';
    echo $filasql[1] . ' ';
    echo $filasql[2] . ' ';
    echo $filasql[3] . ' ';
    echo '-';
    // Imprimir por Arreglo Asociado
    echo $filasql['id'] . ' ';
    echo $filasql['alumnos'] . ' ';
    echo $filasql['nombre'] . ' ';
    echo $filasql['sexo'] . ' ';
}

//http://localhost/ProyectoPHP/model/test.php para ver que tengo conexion 
?>
<?php

$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';
echo "<br>";
switch ($var_getMenu) {
    case "bienvenida":
        require_once ('./views/bienvenida.php');
        break;
  case "acercademi":
    require_once('./views/acercademi.php');
    break;
    case "escuela":
     require_once('./views/escuela.php');
       break;
    case "alumnos":
        include_once './model/alumnos.php';
        $sqlAlumnos = alumnos::consultar();
        
        include_once './views/viewalumnos.php';
        break;
   case "viajes":
       require_once('./views/viajes.php');
        break;
    case "login":
       require_once('./views/login.php');
        break;
    default:
       require_once('./views/bienvenida.php');
}
?>

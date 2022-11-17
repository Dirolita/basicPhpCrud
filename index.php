<?php session_start();

if(isset($_SESSION['usuario'])){
    header('location: Controllers/contenido.php');
}
else{
    header('location: Controllers/registrate.php');
}


?>
<?php
$id = $_GET['id'];
try{
    $conexion = new PDO('mysql:host=localhost:33065;dbname=blog_libros', 'root','');
    $eliminar = $conexion->prepare("DELETE FROM libros WHERE id = ?");
    echo "seguro";
    $ex = $eliminar->execute([$id]);
    header('location: contenido.php');
}

catch(PDOException $e){
echo "Error" . $e->getMessage();
}



?>

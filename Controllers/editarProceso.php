<?php
//print_r($_POST);

try{
    $conexion = new PDO('mysql:host=localhost:33065;dbname=blog_libros', 'root','');

    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $categoria = $_POST['categoria'];
    $id = $_POST['id'];
    $exito = '';

    $insert = $conexion->prepare('UPDATE libros set  nombre= ?,autor =?,categoria=? WHERE id = ?');
    $resultado = $insert->execute([$nombre, $autor,$categoria,$id]);

    echo '<script language="javascript">alert("Elemento Editado")</script>';

    header('location: contenido.php');

}
catch(PDOException $e){
echo "Error" . $e->getMessage();
}
//require'editar.php';
?>
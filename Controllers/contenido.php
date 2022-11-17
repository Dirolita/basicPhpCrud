<?php
 require '../Controllers/connection/connectiondDb';

    $connectionDb= DBconnection();
    $ver = $connectionDb->prepare('SELECT * FROM libros');
    $ver->execute();
    $libros = $ver->fetchAll();
    //print_r($libros);

    //INSERTAR DATOS DEL LIBROS
    if($_SERVER['REQUEST_METHOD']== 'POST'){
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $categoria = $_POST['categoria'];
    $exito = '';

    $insert = $connectionDb->prepare('INSERT INTO libros (id,nombre,autor,categoria) VALUES (null, :nombre, :autor, :categoria)');
    $insert->execute(array(':nombre'=> $nombre,  ':autor'=> $autor, ':categoria'=> $categoria));
    $addRes = $insert->fetchAll();

    header('location: contenido.php');

    //echo '<script language="javascript">alert("El libro se guardo exitosamente");</script>';


}




require '../view/contenidoView.php'
?>

<?php session_start();


if(isset($_SESSION['usuario'])){
    header('location: ../index.php');
}

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $usuario = $_POST['user'];
    $passw = $_POST['passw'];
    //echo"$usuario $passw";

    //Conexion a la base de datos
    try{
        $conexion = new PDO('mysql:host=localhost:33065;dbname=blog_libros', 'root','');
    }
    catch(PDOException $e){
        echo "Error" . $e->getMessage();
    }

    //consulta y verificacion de los datos en la bd

    $stament =$conexion->prepare('SELECT * FROM usuario where user = :user AND passw = :passw');
    $stament->execute(array(':user'=> $usuario, ':passw' => $passw));
    $resultado = $stament->fetch();
    $errores = '';
    //var_dump($resultado);

    if($resultado !== false){
        $_SESSION['usuario']= $usuario;
        header('Location: ../index.php');
        //echo "DATOS OK";
    }
    else{
        $errores .= '<li>Datos incorrecos</li>';
    }
}

require'../view/loginView.php';

?>
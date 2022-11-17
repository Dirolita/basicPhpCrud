<?php session_start();

require '../Controllers/connection/connectiondDb';

if(isset($_SESSION['usuario'])){
    header('location: index.php');
}
try{
    $connectionDb= DBconnection();
}
catch(PDOException $e){
    echo "Error" . $e->getMessage();
}
$ver =$connectionDb->prepare('SELECT * FROM libros');
    $ver->execute();
    $libro = $ver->fetchAll();
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $usuario = $_POST['user'];
    $passw = $_POST['passw'];
    //echo"$usuario $passw";

    //Conexion a la base de datos
   
    
    
    //print_r($libro);
    //var_dump($resultado);
  
   
    //consulta y verificacion de los datos en la bd

    $stament =$connectionDb->prepare('SELECT * FROM usuario where user = :user AND passw = :passw');
    $stament->execute(array(':user'=> $usuario, ':passw' => $passw));
    $resultado = $stament->fetch();
    $errores = '';

   
   
    
     


    if($resultado !== false){
        $_SESSION['usuario']= $usuario;
        header('Location: ../index.php');
        //echo "DATOS OK";
    }
    else{
        $errores .= '<li>Datos incorrecos</li>';
    }


}

//vista libros



require'../view/loginView.php';

?>
<?php session_start();



// Evitamos que el usuario ya registrado se redirija al registro
if(isset($_SESSION['usuario'])){
    header('location:index.php');
}
// Recibir los datos
if($_SERVER['REQUEST_METHOD']== 'POST') {// SI SE RECIBIERON LOS DATOS ENTONCES..

$usuario = $_POST['user']; //ojo ese parametro es el name el input
$correo = $_POST['email'];
$pss = $_POST['passw'];
$confirmar = $_POST['confirmar'];

$errores = '';

if(empty($usuario) or empty($correo) or empty($pss) or empty($confirmar) ){

    $errores .= '<li>Profavor rellena todos los datos correctamente</li>';
}
//si no hay errores vamos hacer la conexion a la base de datos y confirmar que el usuario no exista ya
else{

    try{
        $conexion = new PDO('mysql:host=localhost:33065;dbname=blog_libros', 'root','');
        $stament =$conexion->prepare('SELECT * FROM usuario where user = :user');
        $stament->execute(array(':user'=> $usuario));
        $resultado = $stament->fetch();
        // si el usuario no existe en la variable resultado me va a almacenar un ballor booleano FALSE EL:  var_dump($resultado);
        
        if($resultado != false){
            $errores .= '<li>El usuario ya existe</li>';
        }
        if($pss != $confirmar){
            $errores .= '<li>Las contraseñas no coinciden</li>';
        }
        if($errores ==''){
            $add = $conexion->prepare('INSERT INTO usuario (id,user,correo,passw) VALUES (null, :user, :email, :passw)');
            $add->execute(array(':user'=> $usuario,  ':email'=> $correo, ':passw'=> $pss));
            $addRes = $add->fetchAll();
        }
        
        header('location: login.php');
    
    
}
catch(PDOException $e){
    echo "Error" . $e->getMessage();
}
}
}
require'views/registrate.view.php';
?>
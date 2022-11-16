<?php
if(!isset($_GET)){
    header('location: contenido.php');
}
$conexion = new PDO('mysql:host=localhost:33065;dbname=blog_libros', 'root','');
$id = $_GET['id'];
$ver = $conexion->prepare("SELECT * FROM libros  WHERE id = ?;");
$ver->execute([$id]);
$libro = $ver->fetch(PDO::FETCH_OBJ);
//print_r($libro);

//print_r($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style_cont.css">
    
    <title>Document</title>
</head>
<body>
<div class="form-insert">
       
    <form method="POST" action="editarProceso.php">
    <label for="nombre" class="form-label">Nombre de Libro</label>
                <input type="text" class="form-control" id="nombre" name ="nombre" value="<?php echo $libro->nombre;?>">

                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autor" name ="autor" value=<?php echo $libro->autor;?>>

                <label for="categoria" class="form-label">Categoria del Libro</label>
                <input type="text" class="form-control" id="categoria" name ="categoria" value=<?php echo $libro->categoria;?>>
              
                <input type="hidden" name="id" value=<?php echo $libro->id;?>>
                <input type="hidden" name="oculto">
                <button type="submit" class="btn btn-primary mb-3" >EDITAR</button>
    </form>
</div>
</body>
</html>
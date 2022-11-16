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

<body class="bod">

    <div class="main-conti">

        <div class="contenedor">
            <h1 class="titulo">LIBROS</h1>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NOMBRE LIBRO</th>
                            <th scope="col">AUTOR</th>
                            <th scope="col">CATEGORIA</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach($libros as $dato):?>
                        <tr>
                            <td><?php echo $dato['id'] ?></td>
                            <td><?php echo $dato['nombre'] ?></td>
                            <td><?php echo $dato['autor'] ?></td>
                            <td><?php echo $dato['categoria'] ?></td>
                            <td colspan="2">
                            <a class="btn btn-primary" href ="editar.php?id=<?php echo $dato['id'];?>">
                            EDITAR
                        </a>
                        <a class="btn btn-danger" href ="eliminar.php?id=<?php echo $dato['id'];?>">
                            ELIMINAR
                        </a>
                        </td>
                        </tr>
                        <?php endforeach;?>


                          

                           
                           
                        

                    </tbody>
                </table>
            </div>
        </div>
        <div class="portada">
            <a href="cerrar.php" >Cerrar Sesion</a>
            <img src="img/imagen.png">
        </div>
    </div>
    <div class="form-insert">
       
            <h2>Ingresar Libro</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST" name="insert">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de Libro</label>
                <input type="text" class="form-control" id="nombre" name ="nombre" placeholder="Ej: Cien años de soledad">

                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autor" name ="autor" placeholder="Gabriel Gracia">

                <label for="categoria" class="form-label">Categoria del Libro</label>
                <input type="text" class="form-control" id="categoria" name ="categoria" placeholder="Ficcion">

                <button type="submit" class="btn btn-primary mb-3" >Guardar</button>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>
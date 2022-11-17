<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../src/css/stylesDoc.css">
    <title>Document</title>
</head>

<body class="log">
    <div class="contenedor-login">
        <div class="asid">
        <h1 class="titulo">"Esta es la aplicación telemática de <br>FERNANDO SERRANO TOVAR"</h1>
        <p>La aplicación es un sistema básico de registro, llevando a cabo las acciones de crear, actualizar y eliminar datos, se ingresa por medio de un formulario de inicio de sesión.
</p>

<div class="table">

<table class="table" id="data_table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE LIBRO</th>
            <th scope="col">AUTOR</th>
            <th scope="col">CATEGORIA</th>
        </tr>
    </thead>
    <tbody>

    <?php
                        foreach ($libro as $dato) : ?>
                            <tr>
                                <td><?php echo $dato['id'] ?></td>
                                <td><?php echo $dato['nombre'] ?></td>
                                <td><?php echo $dato['autor'] ?></td>
                                <td><?php echo $dato['categoria'] ?></td>
                                <td colspan="2">
                                    <a id="eliminar" onclick="eliminar(e)" class="btn btn-primary" href="editar.php?id=<?php echo $dato['id']; ?>">
                                        EDITAR
                                    </a>
                                    <a class="btn btn-danger" href="eliminar.php?id=<?php echo $dato['id']; ?>">ELIMINAR</a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
    </tbody>
</table>
</div>
        </div>
        <div class="frm">

        <!--En el accion quiero despues de enviarlo que se redirija a la misma pagina-->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST" name="login">
            <div class="mb-3">
                <h1>Inicio de sesión</h1>
                <img src="../src/img/User-80_icon-icons.com_57249.png">
                <br>
                <label for="user" name ="user"class="form-label label_s" >Usuario</label>
                <input type="text" class="form-control" name ="user" id="user"  placeholder="Ej: Diana">
                <br>
                <label for="passw" class="form-label label_s">Contraseña</label>
                <input type="password" class="form-control" name="passw"id="inputPassword"><br>
                <button type="submit" class="btn btn-primary mb-3" >Confirmar</button>
            </div>

            <?php if(!empty($errores)):?>
            <div>
            <ul><?php echo $errores; ?></ul>
            </div>
            <?php endif; ?>
        </form>
        <p>¿Aun no tienes cuenta?</p>
        <a href="registrate.php">Registrate</a>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>
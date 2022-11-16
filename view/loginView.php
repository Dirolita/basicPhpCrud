<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="contenedor">
        <h1 class="titulo">Inicio de sesión</h1>

        <!--En el accion quiero despues de enviarlo que se redirija a la misma pagina-->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST" name="login">
            <div class="mb-3">
                <label for="user" name ="user"class="form-label">Usuario</label>
                <input type="text" class="form-control" name ="user" id="user"  placeholder="Ej: Diana">
                <label for="passw" class="col-sm-2 col-form-label">Contraseña</label>
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
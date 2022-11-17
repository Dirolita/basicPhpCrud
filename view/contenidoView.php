<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../src/css/stylesDoc.css">
    <title>Document</title>
</head>

<body class="contenido">

    <div class="main-conti">

        <div class="main-form">
            <div class="form-insert">
                <h2>Ingresar Libro</h2>
                <img src="../src/img/book-bookmark-icon_34486.png" class="img" width="150px">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="insert">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre de Libro</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Cien años de soledad">

                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Gabriel Gracia">

                        <label for="categoria" class="form-label">Categoria del Libro</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Ficcion">

                        <label for="categoria" class="form-label">Año</label>
                        <input type="text" class="form-control" placeholder="2005">
                        <br>
                        <button type="submit" class="btn btn-primary mb-3">Guardar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="table-data">
            <div class="head-table">
                <h1 class="titulo">LIBROS</h1>
                <div>
                    <a href="cerrar.php" class="btn btn-success">Salir</a>
                    <img src="../src/img/User-80_icon-icons.com_57249.png">
                </div>
            </div>

            <div class="table">

                <table class="table" id="data_table">
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
                        foreach ($libros as $dato) : ?>
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

    </div>


    <script>
        var tabla = document.querySelector("#data_table");

        var mydataTable = new DataTable(tabla, {
            labels: {
                placeholder: "Buscar...",
                perPage: "{select} Registros por pagina",
                noRows: "No se encuentran ningún registro",
                info: "Mostrando {start} a {end} de {rows} registros",
            }

        });
    </script>


    <script src="../src/alerts/alerts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>
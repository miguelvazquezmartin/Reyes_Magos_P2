<?php
    require("modeloRegalos.php");

    $regalos = new Regalos();
    $filas = $regalos -> listaRegalos();

    if($filas -> num_rows == 0)
    {
        $error = "No se han encontrado regalos";
    }
?>

<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap links -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">

        <title> DWES - Práctica 2 PHP</title>
    </head>
    <body>
        <div>
            <div class="text-center">
                <h2>Lista de los regalos </h2>
                <?php
                if(isset($error))
                {
                ?>
                    <div>
                        <?php echo $error; ?>
                    </div>
                <?php
                }
                ?>
            </div>

            <?php 
            if((int)$filas -> num_rows)
            { 
            ?>
                <div class="text-center">
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-dark">
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Rey Mago</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($fila = $filas -> fetch_assoc())
                            {
                                if($fila["idReyFK"] == 1){
                                    $rey = "melchor";
                                }
                                else if($fila["idReyFK"] == 2)
                                {
                                    $rey = "gaspar";
                                }
                                else if($fila["idReyFK"] == 3){
                                    $rey = "balatasar";
                                }
                            ?>
                            <tr>
                                <td><?php echo $fila["idRegalo"]; ?></td>
                                <td><?php echo $fila["nombreRegalo"]; ?></td>
                                <td><?php echo $fila["precioRegalo"]; ?></td>
                                <td><?php echo $rey; ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-4 text-center">
                                <a href="agregarRegalo.php"><button class="btn btn-info"  type="button">Agregar Regalo</button></a>
                            </div>
                            <div class="col-4 text-center">
                                <a href = "modificarRegalo.php"><button class="btn btn-success"  type="button">Modificar regalo</button></a>
                            </div>
                            <div class="col-4 text-center">
                                <a href = "borrarRegalo.php"><button class="btn btn-danger"  type="button">Borrar regalo</button></a>
                            </div> 
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 text-center py-5">
                                <a href="index.php"><button class="btn btn-warning"  type="button">Volver</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
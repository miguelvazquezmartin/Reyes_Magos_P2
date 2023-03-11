<?php
    require("modeloNinos.php");

    $ninos = new Ninos();
    $filas = $ninos -> listaNinos();

    if($filas -> num_rows == 0)
    {
        $error = "No se han encontrado niños";
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
                <h2>Lista de los niños </h2>
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
                                <th>Apellidos</th>
                                <th>Fecha Nacimiento</th>
                                <th>Buen@</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($fila = $filas -> fetch_assoc())
                            {
                                if($fila["buenoNino"] == 1){
                                    $bueno = "si";
                                }
                                else
                                {
                                    $bueno = "no";
                                }
                            ?>
                            <tr>
                                <td><?php echo $fila["idNino"]; ?></td>
                                <td><?php echo $fila["nombreNino"]; ?></td>
                                <td><?php echo $fila["apellidosNino"]; ?></td>
                                <td><?php echo $fila["anoNacimientoNino"]; ?></td>
                                <td><?php echo $bueno; ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4 text-center">
                            <a href="agregarNino.php"><button class="btn btn-info"  type="button"> Añadir Niño </button></a>
                        </div>
                        <div class="col-4 text-center">
                            <a href = "modificarNino.php"><button class="btn btn-success"  type="button"> Modificar niño </button></a>
                        </div>
                        <div class="col-4 text-center">
                            <a href = "borrarNino.php"><button class="btn btn-danger"  type="button"> Borrar niño </button></a>
                        </div> 
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center py-5">
                            <a href="index.php"><button class="btn btn-warning"  type="button"> Volver </button></a>
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
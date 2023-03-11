<?php
    require("ninos.php");

    $ninos = new Ninos();
    $agregar = $ninos -> agregarNino();
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
        <style>
            .card {
                border-radius: 20px; /* redondea los bordes */
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* agrega un efecto de sombra */
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title text-center">Niño nuevo</h2>
                            <form action="agregarNino.php" method="POST">
                                <div class="form-group">
                                    <label for="name">Nombre:</label>
                                    <input type="text" class="form-control" id="name" name="nombreNino" required>
                                </div>
                                <div class="form-group">
                                    <label for="surname">Apellidos:</label>
                                    <input type="text" class="form-control" id="surname" name="apellidosNino" required>
                                </div>
                                <div class="form-group">
                                    <label for="date">Año de Nacimiento:</label>
                                    <input type="date" class="form-control" id="date" name="anoNacimientoNino" required>
                                </div>
                                <div class="form-group">
                                    <label for="comportamiento">Es un niñ@ Buen@</label>
                                    <input type="text" class="form-control" id="comportamiento" name="buenoNino" required>
                                </div>
                                <div class="text-center  pt-2">
                                    <button class="btn btn-success btn-block" type="submit" name="enviar">Agregar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
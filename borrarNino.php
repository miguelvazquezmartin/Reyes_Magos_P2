<?php
    require("ninos.php");

    $ninos = new Ninos();
    $borrar = $ninos -> borrarNino();
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
                        <div class="card-body text-center">
                            <h3 class="card-title text-center">Introduce el id del niñ@ que desea quitar</h3>
                            <form action="borrarNino.php" method="POST">
                                <div class="row">
                                    <div class="col-12 py-3">
                                        <label>Número id del niñ@</label>
                                        <input type="number" id="idNino" name="idNino" min="1" required>
                                    </div>
                                    <div class="col-12 py-3">
                                        <button class="btn btn-danger" type="submit" name="borrar">Borrar</button>
                                    </div>
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
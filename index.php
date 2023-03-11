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
                height: 20rem;
            }

            #boton{
                margin: 3rem 0rem;
            }
        </style>

    </head>
    <body>
        <div class="container-fluid">
            <div>
                <h2 class="text-center py-5"> DWES - Práctica 2 PHP</h2>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="card">
                            <div class="card-body text-center">
                                 <div class="row justify-content-center">
                                    <h5 class="card-title">Los Reyes Magos</h5>
                                    <div id="boton" class="col-md-6">
                                        <a href = "ninos.php"><button class="btn btn-dark"  type="button"> Niños </button></a>
                                    </div>
                                    <div id="boton" class="col-md-6">
                                        <a href = "regalos.php"><button class="btn btn-dark"  type="button"> Regalos </button></a>
                                    </div>
                                    <div id="boton" class="col-md-6">
                                        <a href = "reyesMagos.php"><button class="btn btn-dark"  type="button"> Reyes </button></a>
                                    </div>
                                    <div id="boton" class="col-md-6">
                                        <a href = "busqueda.php"><button class="btn btn-dark"  type="button"> Buscar </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
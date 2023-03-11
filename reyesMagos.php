<?php
    require("modeloReyesMagos.php");

    $reyes = new ReyesMagos();
    $regalosBaltasar = $reyes -> tablaBaltasar();
    $regalosGaspar = $reyes -> tablaGaspar();
    $regalosMelchor = $reyes -> tablaMelchor();

    if($regalosBaltasar -> num_rows == 0)
    {
        $errorBaltasar = "Baltasar no tiene regalos";
    }

    if($regalosGaspar -> num_rows == 0)
    {
        $errorGaspar = "Gaspar no tiene regalos";
    }
    
    if($regalosMelchor -> num_rows == 0)
    {
        $errorMelchor = "Melchor no tiene regalos";
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
                <h2 class="mb-5">Listado de los regalos y niños de cada rey mago </h2>
                <?php
                if(isset($errorBaltasar))
                {
                ?>
                    <div>
                        <?php echo $errorBaltasar; ?>
                    </div>
                <?php
                }
                ?>
                <?php
                if(isset($errorGaspar))
                {
                ?>
                    <div>
                        <?php echo $errorGaspar; ?>
                    </div>
                <?php
                }
                ?>
                <?php
                if(isset($errorMelchor))
                {
                ?>
                    <div>
                        <?php echo $errorMelchor; ?>
                    </div>
                <?php
                }
                ?>
            </div>

            <?php 
            if((int)$regalosMelchor -> num_rows)
            { 
            ?>
                <div class="text-center">
                    <h2>Melchor</h2>
                </div>
                <div class="text-center">
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-dark">
                                <th>Regalo</th>
                                <th>Niño</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $dineroTotalMelchor=0;
                            while($regaloMelchor = $regalosMelchor -> fetch_assoc())
                            {
                            ?>
                                <tr>
                                <?php
                                    if($regaloMelchor["buenoNino"] != 0)
                                    {
                                ?>
                                    <td><?php echo $regaloMelchor["nombreRegalo"]; ?></td>
                                    <td><?php echo $regaloMelchor["nombreNino"]; ?></td>
                                </tr>
                                <?php
                                    $dineroTotalMelchor = $regaloMelchor["precioRegalo"] + $dineroTotalMelchor;
                                ?>
                                <?php
                                    }
                                    else
                                    {
                                ?>
                                <tr>
                                    <td>Carbón</td>
                                    <td><?php echo $regaloMelchor["nombreNino"]; ?></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            <?php
                            }
                            ?>
                                <tr class="table-secondary">
                                    <td> Precio Total:</td>
                                    <td><?php echo $dineroTotalMelchor; ?> € </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            <?php
            }
            ?>
        </div>

        <?php 
            if((int)$regalosGaspar -> num_rows)
            { 
            ?>
                <div class="text-center">
                    <h2>Gaspar</h2>
                </div>
                <div class="text-center">
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-dark">
                                <th>Regalo</th>
                                <th>Niño</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $dineroTotalGaspar=0;
                            while($regaloGaspar = $regalosGaspar -> fetch_assoc())
                            {
                            ?>
                                <tr>
                                <?php
                                    if($regaloGaspar["buenoNino"] != 0)
                                    {
                                ?>
                                    <td><?php echo $regaloGaspar["nombreRegalo"]; ?></td>
                                    <td><?php echo $regaloGaspar["nombreNino"]; ?></td>
                                </tr>
                                <?php
                                    $dineroTotalGaspar = $regaloGaspar["precioRegalo"] + $dineroTotalGaspar;
                                ?>
                                <?php
                                    }
                                    else
                                    {
                                ?>
                                <tr>
                                    <td>Carbón</td>
                                    <td><?php echo $regaloGaspar["nombreNino"]; ?></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            <?php
                            }
                            ?>
                                <tr class="table-secondary">
                                    <td> Precio Total:</td>
                                    <td><?php echo $dineroTotalGaspar; ?> € </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            <?php
            }
            ?>
        </div>

        <?php 
            if((int)$regalosMelchor -> num_rows)
            { 
            ?>
                <div class="text-center">
                    <h2>Baltasar</h2>
                </div>
                <div class="text-center">
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-dark">
                                <th>Regalo</th>
                                <th>Niño</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $dineroTotalBaltasar=0;
                            while($regaloBaltasar = $regalosBaltasar -> fetch_assoc())
                            {
                            ?>
                                <tr>
                                <?php
                                    if($regaloBaltasar["buenoNino"] != 0)
                                    {
                                ?>
                                    <td><?php echo $regaloBaltasar["nombreRegalo"]; ?></td>
                                    <td><?php echo $regaloBaltasar["nombreNino"]; ?></td>
                                </tr>
                                <?php
                                    $dineroTotalBaltasar = $regaloBaltasar["precioRegalo"] + $dineroTotalBaltasar;
                                ?>
                                <?php
                                    }
                                    else
                                    {
                                ?>
                                <tr>
                                    <td>Carbón</td>
                                    <td><?php echo $regaloBaltasar["nombreNino"]; ?></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            <?php
                            }
                            ?>
                                <tr class="table-secondary">
                                    <td> Precio Total:</td>
                                    <td><?php echo $dineroTotalBaltasar; ?> € </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <a href="index.php"><button class="btn btn-warning"  type="button">Volver</button></a>
                </div>
            </div>
        </div>
    </body>
</html>
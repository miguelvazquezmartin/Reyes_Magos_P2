<?php
    require("Conexion.php");

    class Ninos extends Conexion
    {
        //Consulta para crear la lista de niños
        public function listaNinos()
        {
            $sql = "SELECT * FROM ninos ORDER BY nombreNino ASC";
            return $this -> conexion -> query($sql);
        }

        //funcionalidad para agregar un niño nuevo
        public function agregarNino()
        {
            if(isset($_POST['enviar']))
            {
                if(strlen($_POST['nombreNino']) > 0 && strlen($_POST['apellidosNino']) > 0 && strlen($_POST['anoNacimientoNino']) > 0 && strlen($_POST['buenoNino']) > 0)
                {
                    $nombreNino = $_POST['nombreNino'];
                    $apellidosNino = $_POST['apellidosNino'];
                    $anoNacimientoNino = $_POST['anoNacimientoNino'];
                    $buenoNino = $_POST['buenoNino'];
                    if( $buenoNino == "si"){
                        $bueno = 1;
                    }
                    else
                    {
                        $bueno = 0;
                    }
                    $fecha_original = $anoNacimientoNino;
                    $marca_tiempo = strtotime($fecha_original);
                    $fecha_formateada = date('Y/m/d', $marca_tiempo);

                    $sql = "INSERT INTO ninos(nombreNino, apellidosNino, anoNacimientoNino, buenoNino) VALUES ('$nombreNino','$apellidosNino','$fecha_formateada','$bueno')";
                    $con = new Conexion();
                    $con = $con -> __construct(); 
                    $sql = mysqli_query($con, $sql);

                    if($sql)
                    {
                        ?>  
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 text-center py-5">
                                        <a href="ninos.php"><button class="btn btn-info" type="button"> Volver </button> 
                                    </div>
                                </div>
                            </div>            
                        <?php
                    }
                    else
                    {
                        console.log("ha habido algún error");
                    }
                }
            }
        }

        //funcionalidad para borrar niño de la lista 
        public function borrarNino()
        {
            if(isset($_POST['borrar']))
            {
                   if(strlen($_POST['idNino']) > 0)
                   {
                        $idNino = $_POST['idNino'];

                        $sql = "DELETE FROM ninos where idNino = ('$idNino')";
                        $con = new Conexion();
                        $con = $con -> __construct(); 
                        $sql = mysqli_query($con, $sql);

                        if($sql)
                        {
                           ?>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 text-center py-5">
                                            <p>Se ha quitado de la lista el niño indicado</p> 
                                        </div>
                                        <div class="col-12 text-center py-5">
                                            <a href="ninos.php"><button class="btn btn-info"  type="button">Volver</button> 
                                        </div>
                                    </div>
                                </div>   
                           <?php
                        }
                        else
                        {
                           console.log("No se ha podido borrar debido a un error");
                       }
                }
            }
        }

        //funcionalidad editar niño
        public function modificarNino()
        {
            if(isset($_POST['modificar']))
            {
                if(strlen($_POST['idNino']) > 0 && strlen($_POST['nombreNino']) > 0 && strlen($_POST['apellidosNino']) > 0 && strlen($_POST['anoNacimientoNino']) > 0 && strlen($_POST['buenoNino']) > 0)
                {
                    $idNino = $_POST['idNino'];
                    $nombreNino = $_POST['nombreNino'];
                    $apellidosNino = $_POST['apellidosNino'];
                    $anoNacimientoNino = $_POST['anoNacimientoNino'];
                    $buenoNino = $_POST['buenoNino'];

                    if( $buenoNino == "si"){
                        $bueno = 1;
                    }
                    else if($buenoNino == "no")
                    {
                        $bueno = 0;
                    }
                    $fecha_original = $anoNacimientoNino;
                    $marca_tiempo = strtotime($fecha_original);
                    $fecha_formateada = date('Y/m/d', $marca_tiempo);

                    $sql = "UPDATE ninos SET nombreNino = '$nombreNino', apellidosNino = '$apellidosNino', anoNacimientoNino = '$fecha_formateada', buenoNino = '$bueno' WHERE idNino = '$idNino'" ;
                    $con = new Conexion();
                    $con = $con -> __construct(); 
                    $sql = mysqli_query($con, $sql);

                    if($sql)
                    {
                    ?>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 text-center py-5">
                                    <p>Se ha modificado niño indicado</p> 
                                </div>
                                <div class="col-12 text-center py-5">
                                    <a href="ninos.php"><button class="btn btn-info" type="button">Volver</button> 
                                </div>
                            </div>
                        </div>                
                    <?php
                    }
                    else
                    {
                        console.log("No se ha podido modificar debido a un error");
                    }
                }
            }
        }
    }
?>
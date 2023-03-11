<?php
    require("conexion.php");

    class Regalos extends Conexion
    {
        //Consulta para crear la lista de regalos
        public function listaRegalos()
        {
            $sql = "SELECT * FROM regalos";
            return $this -> conexion -> query($sql);
        }

        //funcionalidad para agregar un regalo nuevo
        public function agregarRegalo()
        {
            if(isset($_POST['agregar']))
            {
                if(strlen($_POST['nombreRegalo']) > 0 && strlen($_POST['precioRegalo']) > 0 && strlen($_POST['idReyFK']) > 0)
                {
                    
                    $nombreRegalo = $_POST['nombreRegalo'];
                    $precioRegalo = $_POST['precioRegalo'];
                    $idReyFK = $_POST['idReyFK'];

                    if( $idReyFK == "melchor"){
                        $rey = 1;
                    }
                    else if( $idReyFK == "gaspar")
                    {
                        $rey = 2;
                    }
                    else if( $idReyFK == "baltasar")
                    {
                        $rey = 3;
                    }

                    $sql = "INSERT INTO regalos (nombreRegalo, precioRegalo, idReyFK) VALUES ('$nombreRegalo','$precioRegalo','$rey')";
                
                    $con = new Conexion();
                    $con = $con -> __construct(); 
                    $sql = mysqli_query($con, $sql);

                    if($sql)
                    {
                        ?>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 text-center py-5">
                                        <p>Se ha agregado el regalo</p> 
                                    </div>
                                    <div class="col-12 text-center py-5">
                                        <a href="regalos.php"><button class="btn btn-info"  type="button">Volver</button> 
                                    </div>
                                </div>
                            </div>            
                        <?php
                    }
                    else
                    {
                        console.log("No se ha podido agregar debido a un error");
                    }
                }
            }
        }

        //funcionalidad borrar regalos
        public function borrarRegalo()
        {
            if(isset($_POST['borrar']))
            {
                   if(strlen($_POST['idRegalo']) > 0)
                   {
                        $idRegalo = $_POST['idRegalo'];

                        $sql = "DELETE FROM regalos where idRegalo = ('$idRegalo')";
                        $con = new Conexion();
                        $con = $con -> __construct(); 
                        $sql = mysqli_query($con, $sql);

                        if($sql)
                        {
                           ?>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 text-center py-5">
                                            <p>Se ha borrado el regalo</p> 
                                        </div>
                                        <div class="col-12 text-center py-5">
                                        <a href="regalos.php"><button class="btn btn-info"  type="button">Volver</button>  
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

        //funcionalidad modificar regalo
        public function modificarRegalo()
        {
            if(isset($_POST['modificar']))
            {
                if(strlen($_POST['idRegalo']) > 0 && strlen($_POST['nombreRegalo']) > 0 && strlen($_POST['precioRegalo']) > 0 && strlen($_POST['idReyFK']) > 0)
                {
                    $idRegalo = $_POST['idRegalo'];
                    $nombreRegalo = $_POST['nombreRegalo'];
                    $precioRegalo = $_POST['precioRegalo'];
                    $idReyFK = $_POST['idReyFK'];
                    
                    if( $idReyFK == "melchor"){
                        $rey = 1;
                    }
                    else if( $idReyFK == "gaspar")
                    {
                        $rey = 2;
                    }
                    else if( $idReyFK == "baltasar")
                    {
                        $rey = 3;
                    }

                    $sql = "UPDATE regalos SET nombreRegalo = '$nombreRegalo', precioRegalo = '$precioRegalo', idReyFK = '$rey' WHERE idRegalo = '$idRegalo'" ;
                    $con = new Conexion();
                    $con = $con -> __construct(); 
                    $sql = mysqli_query($con, $sql);

                    if($sql)
                    {
                    ?>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 text-center py-5">
                                    <p>Se ha modificado el regalo indicado</p> 
                                </div>
                                <div class="col-12 text-center py-5">
                                <a href="regalos.php"><button class="btn btn-info" type="button">Volver</button> 
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
<?php
    require("conexion.php");

    class ReyesMagos extends Conexion
    {

        public function tablaMelchor()
        {
            $sql = "SELECT * FROM recibidos JOIN regalos ON recibidos.idRegaloFK = regalos.idRegalo JOIN ninos ON recibidos.idNinoFK = ninos.idNino WHERE idReyFK = 1";

            return $this -> conexion -> query($sql);
        }

        public function tablaGaspar()
        {
            $sql = "SELECT * FROM recibidos JOIN regalos ON recibidos.idRegaloFK = regalos.idRegalo JOIN ninos ON recibidos.idNinoFK = ninos.idNino WHERE idReyFK = 2";

            return $this -> conexion -> query($sql);
        }

        public function tablaBaltasar()
        {
            $sql = "SELECT * FROM recibidos JOIN regalos ON recibidos.idRegaloFK = regalos.idRegalo JOIN ninos ON recibidos.idNinoFK = ninos.idNino WHERE idReyFK = 3";

            return $this -> conexion -> query($sql);
        }
    }
?>
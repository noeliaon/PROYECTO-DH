<? php
    class conectar{
        private $servidor="localhost";
        private $usuario="root";
        private $bd="smnk";
        private $password="";

        public function conexion(){
            $conexion=mysqli_connect(
                $this->servidor,
                $this->usuario,
                $this->password,
                $this->bd);
            return $conexion;
        }
    }
//Pruebo si conecta como corresponde
    //$obj= new conectar();
//if($obj->conexion()){
  //  echo "Conectado con exito";
//}
//else{
  //  echo "Fallo al conectar";
//}
?>
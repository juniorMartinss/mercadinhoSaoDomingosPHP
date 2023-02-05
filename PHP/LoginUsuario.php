<?php
    namespace PHP\Modelo\DAO;

    class LoginUsu{
        private $usuario;
        private $senha;

        public function __construct($usuario, $senha){
            $this->usuario = $usuario;
            $this->senha = $senha;
        }

        public function autenticar(){
            $conn = mysqli_connect('localhost', 'root', '', 'phpLivrariaCrud');
            $query = "SELECT * FROM login WHERE usuario = '$this->usuario' AND senha = '$this->senha'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) == 1){
                return true;
            }
            return false;
        }
    }//fim da class LoginUsu



?>

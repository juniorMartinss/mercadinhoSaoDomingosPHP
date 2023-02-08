<?php
    namespace PHP;

    require_once('Modelo/DAO/Conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class LoginUsu{
        private $usuario;
        private $senha;

        public function __construct($usuario, $senha){
            $this->usuario = $usuario;
            $this->senha = $senha;
        }

        public function autenticar(Conexao $conexao){
            $conn = $conexao->conectar();
            $sql = "SELECT * FROM login WHERE usuario = '$this->usuario' AND senha = '$this->senha'";
            $result = mysqli_query($conn, $sql);
            if($result){
                return true;
            }
            return false;
        }
    }//fim da class LoginUsu





?>

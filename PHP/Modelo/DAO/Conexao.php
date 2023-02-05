<?php
    namespace PHP\Modelo\DAO;

    class Conexao{

        public function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root', '', 'phpLivrariaCrud');
                if ($conn) {
                    echo "<br>Conectado com SUCESSO!!!";
                    return $conn;
                }
                echo "<br>Não ENTREI!!!";
            }catch(Exception $erro){
                echo $erro;
            }
        }//fim do conectar
    }//fim da class Conexão
?>


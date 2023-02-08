<?php
    namespace PHP\Modelo\DAO;
        
    require_once('Conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        public function consultarIndividual(Conexao $conexao, string $nomeDaTabela, int $cod)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeDaTabela where codigo = '$cod'";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["cod"] == $cod){
                        echo "<br>Código: ".$dados["cod"]."<br>Nome do Livro: ".$dados["nomeProduto"]."<br>Quantidade: ".$dados["quantidade"];
                        return;

                    }

                }//fim do while

                echo "Código digitado não foi encontrado!";

            }//fim do try

            catch(Exception $erro)
            {
                echo $erro;
            }//fim do catch

        }//fim da função

    } //fim da class   
?>                                      
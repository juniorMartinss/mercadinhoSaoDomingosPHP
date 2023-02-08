<?php 
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class Excluir{
        public function deletar(Conexao $conexao, string $nomeDaTabela, int  $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "delete from $nomeDaTabela where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);
            }catch(Except $erro){
                echo $erro;
            }
        }

        public function excluirTudo(Conexao $conexao, string $nomeDaTabela){
            try{
                $conn = $conexao->conectar();
                $sql = "truncate table $nomeDaTabela";
                $result = mysqli_query($conn, $sql);

                if($result){
                    echo "EXCLUIDO";
                    return;
                }
                echo "NÃO EXCLUIDO";
            }catch(Except $erro){
                echo $erro;
            }
            
        }
    }



?>
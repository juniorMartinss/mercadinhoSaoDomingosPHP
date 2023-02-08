<?php

    namespace PHP;

    require_once('Modelo/DAO/Conexao.php');
    require_once('produtos.php');
    
    use PHP\Modelo\DAO\Conexao;
    use PHP\Produtos;

    class Estoque{
        private $produtos;
            

        public function __construct()
        {

        }//fim do construtor

    
/*
        public function listarProdutos(){
            $this->produtos->rewind();
            while($this->produtos->valid()){
                $produto = $this->produtos->current();
                echo "Nome: ".$produto->nomeProduto."<br><br>Quantidade: ".$produto->quantidade."<br><br>Valor Unitario: ".$produto->valor."<br><br>";
                $this->produtos->next();
            }
        }//fim da função listar produtos
*/
        public function inserirProduto(Conexao $conexao, Produtos $produto){
            $conn = $conexao->conectar();
            $sql = "INSERT INTO estoque(codigo, nomeProduto, quantidade, valor) VALUES ('', '$produto->nomeProduto', '$produto->quantidade', '$produto->valor')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "Produto adicionado com sucesso!";
            } else {
                echo "Erro ao adicionar produto: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        }

        public function __get($nomeVariavel){
            return $this->$nomeVariavel;
        }

        public function __set($nomeVariavel, $valor) : void{
            $this->$nomeVariavel = $valor;
        }
    }//fim da classe estoque

?>

<?php
    namespace PHP;

    require_once ("Modelo/DAO/Conexao.php");

    use PHP\Modelo\DAO\Conexao;

    Class Endereco{
        public int $codigo;
        private string $logradouro;
        private string $numero;
        private string $complemento;
        private string $bairro;
        private string $cidade;
        private string $uf;
        private string $pais;
        private string $cep;

        public function __construct(int $codigo, string $logradouro, string $numero, string $complemento, string $bairro, string $cidade, string $uf, string $pais, string $cep)
        {
            
           $this->codigo =$codigo;
           $this->logradouro = $logradouro;
           $this->numero = $numero;
           $this->complemento = $complemento;
           $this->bairro = $bairro;
           $this->cidade = $cidade;
           $this->uf = $uf;
           $this->pais = $pais;
           $this->cep = $cep;
        }//fim do construtor

        public function inserirEndereco(Conexao $conexao, Endereco $endereco){
            $conn = $conexao->conectar();
            $sql = "INSERT INTO endereco(codigo, logradouro, numero, complemento, bairro, cidade, uf, pais, cep) VALUES ('', '$endereco->logradouro', '$endereco->numero', '$endereco->complemento', '$endereco->bairro', '$endereco->cidade', '$endereco->uf', '$endereco->pais', '$endereco->cep')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "Endereço adicionado com sucesso!";
            } else {
                echo "Erro ao adicionar endereço: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        }

        public function __get(string $nomeDaVariavel){
            return $this->$nomeDaVariavel;
        }//fim do get

        public function __set(string $nomeDaVariavel, $valor) : void
        {
            $this->nomeDaVariavel = $valor;
        }//fim do set

    }//fim da classe endereço

?>
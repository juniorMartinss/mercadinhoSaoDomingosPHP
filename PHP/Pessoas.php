<?php
    namespace PHP;

    require_once('Endereco.php');

    class Pessoas{
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected Endereco $endereco;

        public function __construct(string $cpf,  string $nome, string $telefone, Endereco $endereco)
        {
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//fim do construtor

        public function __get(string $nome)
        {
            return $this->$nome;
        }//fim do get

    }//fim da classe pessoa


?>
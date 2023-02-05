<?php

    Class Endereco{
        private string $logradouro;
        private string $numero;
        private string $complemento;
        private string $bairro;
        private string $cidade;
        private string $uf;
        private string $pais;
        private string $cep;

        public function __construct(string $logradouro, string $numero, string $complemento, string $bairro, string $cidade, string $uf, string $pais, string $cep)
        {
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->complemento = $complemento;
            $this->bairro = $bairro;
            $this->cidade = $cidade;
            $this->uf = $uf;
            $this->pais = $pais;
            $this->cep = $cep;
        }//fim do construtor

        public function __get(string $nomeDaVariavel){
            return $this->$nomeDaVariavel;
        }//fim do get

        public function __set(string $nomeDaVariavel, $valor) : void
        {
            $this->nomeDaVariavel = $valor;
        }//fim do set

    }//fim da classe endereço

?>
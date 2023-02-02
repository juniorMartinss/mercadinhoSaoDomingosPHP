<?php

    Class Endereco{
        protected string $logradouro;
        protected string $numero;
        protected string $complemento;
        protected string $bairro;
        protected string $cidade;
        protected string $uf;
        protected string $pais;
        protected string $cep;

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
        }

        public function __set(string $nomeDaVariavel, $valor) : void
        {
            $this->nomeDaVariavel = $valor;
        }

    }//fim da classe endereço

?>
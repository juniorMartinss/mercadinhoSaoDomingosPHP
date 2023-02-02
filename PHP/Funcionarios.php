<?php

    require_once('Endereco.php');

    Class Funcionario extends Pessoas{
        protected string $matricula;
        protected float $salario;
        protected string $cargo;

        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco, string $matricula, float $salario, string $cargo)
        {
            parent::__construct($cpf, $nome, $telefone, $endereco);
            $this->matricula = $matricula;
            $this->salario = $salario;
            $this->cargo = $cargo;

        }//fim do construtor

        public function __get(string $nomeVariavel){
            return $this->nomeVariavel;
        }//fim do get

        public function __set(string $nomeVariavel, string $valor) : void
        {
            $this->nomeVariavem = $valor;
        }

        public function __toString() : string
        {
            return "<br>Matrícula: ".$this->matricula."<br>Cargo: ".$this->cargo."<br>Salário: ".$this->salario;
        }//fim do toString

    }//fim da classe Funcionario

?>
<?php

    class produtos{
        protected $nomeProduto;
        protected $quantidade;
        protected $valorUnitario;

        public function __construct(string $nomeProduto, int $quantidade, float $valorUnitario )
        {
            $this->nomeProduto = $nomeProduto;
            $this->quantidade = $quantidade;
            $this->valorUnitario = $valorUnitario;
        }//fim do construtor

        public function __get(string $nomeProduto)
        {
            return $this->$nomeProduto;
        }//fim do get

        public function __set(string $quantidade, $valorUnitario) : void
        {
            $this->quantidade = $valorUnitario;
        }
    }//fim da classe produto


?>
<?php

    namespace PHP;

    class produtos{
        
        protected $nomeProduto;
        protected $quantidade;
        protected $valor;

        public function __construct(string $nomeProduto, int $quantidade, float $valor )
        {
            
            $this->nomeProduto = $nomeProduto;
            $this->quantidade = $quantidade;
            $this->valor = $valor;
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
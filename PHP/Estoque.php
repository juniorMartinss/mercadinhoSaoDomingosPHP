<?php

class Estoque{
    protected $produtos;

    public function __construct()
    {
        $this->produtos = new SplDoublyLinkedList();
    }//fim do construtor

    public function adicProduto(Produtos $produto){
        $this->produtos->push($produto);
    }//fim do adicionar produtos

    public function listarProdutos(){
        $this->produtos->rewind();
        while($this->produtos->valid()){
            $produto = $this->produtos->current();
            echo "Nome: ".$produto->nomeProduto."<br><br>Quantidade: ".$produto->quantidade."<br><br>Valor Unitario: ".$produto->valorUnitario."<br><br>";
            $this->produtos->next();
        }
    }//fim da função listar produtos
}//fim da classe estoque

?>

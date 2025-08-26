<?php

require_once 'Cliente.php';
require_once 'Carrinho.php';

class Pedido    {
    private Cliente $cliente;
    private Carrinho $carrinho;    
    private string $data;

    public function __construct(Cliente $cliente, Carrinho $carrinho) {
        $this->cliente = $cliente;
        $this->carrinho = $carrinho;
        $this->data = date('Y-m-d H:i:s');
    }

    public function getCliente(): Cliente {
        return $this->cliente;
    }
    public function getCarrinho(): Carrinho {
        return $this->carrinho;
    }
    public function getData(): string {
        return $this->data;
    }
    public function exibirDetalhes() : void {
        echo "Detalhes do Pedido\n";
        echo "------------------------\n";
        echo "Cliente:" . $this->cliente->getNome() ."\n";
        echo "Data:" .$this->data ."\n";
        echo "Produtos:\n";
        echo "------------------------\n";
        //Exibir detalhes dos produtos
        foreach ($this->carrinho->getProdutos() as $item) {
            echo $item->exibirDetalhes();
        }
        echo "------------------------\n";
        echo "Total: R$ " . 
        number_format($this->carrinho->getTotal(),2,",",".") . "\n";
        echo "------------------------\n";
        echo "Obrigado pela compra!\n";
    }
}
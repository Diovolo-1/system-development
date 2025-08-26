<?php

class Carrinho{
    private array $produto = [];

    public function adicionaProduto(Produto $produto): void{
        $this->produto[] = $produto;
    }
    public function getProdutos(): array{
        return $this->produto;
    }
    public function getTotal(): float{
        $total = 0.0;
        foreach($this->produto as $produto){
            $total += $produto->getPreco();
        }
        return $total;
    }
}
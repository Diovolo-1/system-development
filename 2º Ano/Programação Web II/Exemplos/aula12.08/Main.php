<?php  

    require_once 'model/Cliente.php';
    require_once 'model/Produto.php';
    require_once 'model/Carrinho.php';
    require_once 'model/Pedido.php';

    // Criar um objeto Cliente
    $cliente1 = new Cliente(1, "Joao da silva");
    $cliente2 = new Cliente(2, "Ronaldo");

    //Simulando a criacao de dois produtos

    $produto1 = new Produto(11, "camisa", 89.99);
    $produto2 = new Produto(12, "calça", 99.99);
    $produto3 = new Produto(13, "sapato", 79.99);
    $produto4 = new Produto(14, "meia", 49.99);
    $produto5 = new Produto(15, "bone", 59.99);
    $produto6 = new Produto(16, "tenis", 69.99);
    $produto7 = new Produto(17, "pantalonas", 69.99);

   //Criar um carrinho vazio
    $carrinho = new Carrinho(); //carrinho vazio

    //Adicionar produtos ao carrinho
    $carrinho->adicionaProduto($produto2);
    $carrinho->adicionaProduto($produto6);
    $carrinho->adicionaProduto($produto5);

    //Criar um pedido do joao 
    $pedidoJoao = new Pedido($cliente1, $carrinho);
    $pedidoJoao->exibirDetalhes();
    echo "\n\n";

    //Criar um novo carrinho para Ronaldo
    $carrinhoRonaldo = new Carrinho();

    $carrinhoRonaldo->adicionaProduto($produto1);
    $carrinhoRonaldo->adicionaProduto($produto3);
    $carrinhoRonaldo->adicionaProduto($produto7);

    //Criar um pedido do ronaldo
    $pedidoRonaldo = new Pedido($cliente2, $carrinhoRonaldo);
    $pedidoRonaldo->exibirDetalhes();
    echo "\n\n";
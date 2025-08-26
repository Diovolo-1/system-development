<?php

    class Cliente{
        //Atributos

        private int $id;
        private string $nome;

        //Metodo construtor

        public function __construct(int $id, string $nome){
            $this ->id = $id;
            $this ->nome = $nome;
        }

        //Metodo getter

        public function getId(): int {
            return $this->id;
        }

        public function getNome(): string {
            return $this->nome;
        }

        //Metodo comum

        public function exibirDetalhes(): String {
            return "ID: $this->id | Nome: $this->nome \n";
        }


        
    }
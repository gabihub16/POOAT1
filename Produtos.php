<?php
// criando a classe Produtos
class Produto{

    //atributos:
    public $nome;
    public $preco;

    //metodos:
    public function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }
    public function cadastrar(){
        echo "/n Produto: {this->nome} Cadastrado com sucesso!\n";
    }
    public function mostraProdutos(){
        echo "Nome: ". $this->nome . "<br>";
        echo "R$ ". $this->preco . "<br>";
    }
}

// Dois produtos instanciados

// $p1 = new Produto("Garrafinha", 20.00);
// $p1->mostraProdutos();

// $p2 = new Produto("Coca-cola", 9.50);
// $p2->mostraProdutos();
?>
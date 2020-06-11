<?php

class ProdutosEditaMod {
    
    private $id;
    private $nome;
    private $categoria;
    private $descricao;
    private $preco;
    private $estoque;

    function __construct($id, $Nome, $Categoria, $Descricao, $Preco, $Estoque){
        $this->id = $id;
        $this->nome = $Nome;
        $this->categoria = $Categoria;
        $this->descricao = $Descricao;
        $this->preco = $Preco;
        $this->estoque = $Estoque;
    }

    public function setID($id){
        $this->id = $id;
        return $id;
    }

    public function getID(){
        return $this->id;
    }

    public function setNome($Nome){
        $this->nome = $Nome;
        return $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setCategoria($Categoria){
        $this->categoria = $Categoria;
        return $categoria;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function setDescricao($Descricao){
        $this->descricao = $Descricao;
        return $descricao;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setPreco($Preco){
        $this->preco = $Preco;
        return $preco;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setEstoque($Estoque){
        $this->estoque = $Estoque;
        return $estoque;
    }

    public function getEstoque(){
        return $this->estoque;
    }
}

?>
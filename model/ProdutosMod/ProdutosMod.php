<?php

class ProdutosMod {
    
    private $ID;
    private $nomeProd;
    private $categoria;
    private $descricao;
    private $preco;
    private $estoque;
    private $userName;
    private $userLast;

    function __construct($id, $nomeProd, $Categoria, $Descricao, $Preco, $Estoque, $userName, $userLast){
        $this->ID = $id;
        $this->nomeProd = $nomeProd;
        $this->categoria = $Categoria;
        $this->descricao = $Descricao;
        $this->preco = $Preco;
        $this->estoque = $Estoque;
        $this->userName = $userName;
        $this->userLast = $userLast;
    }

    public function setID($id){
        $this->ID = $id;
        return $ID;
    }

    public function getID(){
        return $this->ID;
    }

    public function setNomeProd($NomeProd){
        $this->nomeProd = $NomeProd;
        return $nomeProd;
    }

    public function getNomeProd(){
        return $this->nomeProd;
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

    public function setUserName($userName){
        $this->userName = $userName;
        return $userName;
    }

    public function getUserName(){
        return $this->userName;
    }

    public function setUserLast($userLast){
        $this->userLast = $userLast;
        return $userLast;
    }

    public function getUserLast(){
        return $this->userLast;
    }

}
?>
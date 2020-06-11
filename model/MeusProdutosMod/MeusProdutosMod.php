<?php

class ProdutosMod {

    private $ID;
    private $nomeProd;
    private $categoria;
    private $preco;

    function __construct($ID, $nomeProd, $Categoria, $Preco){
        $this->ID = $ID;
        $this->nomeProd = $nomeProd;
        $this->categoria = $Categoria;
        $this->preco = $Preco;
    }

    public function setID($ID){
        $this->ID = $ID;
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

    public function setPreco($Preco){
        $this->preco = $Preco;
        return $preco;
    }

    public function getPreco(){
        return $this->preco;
    }

}
?>
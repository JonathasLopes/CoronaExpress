<?php

class AdicionarProdMod {
    
    private $nome;
    private $categoria;
    private $descricao;
    private $preco;
    private $estoque;
    private $emailUser;

    function __construct($Nome, $Categoria, $Descricao, $Preco, $Estoque, $emailUser){
        $this->nome = $Nome;
        $this->categoria = $Categoria;
        $this->descricao = $Descricao;
        $this->preco = $Preco;
        $this->estoque = $Estoque;
        $this->emailUser = $emailUser;
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

    public function setEmailUser($emailUser){
        $this->emailUser = $emailUser;
        return $emailUser;
    }

    public function getEmailUser(){
        return $this->emailUser;
    }

}

?>
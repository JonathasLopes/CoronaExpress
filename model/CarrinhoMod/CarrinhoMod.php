<?php

class CarrinhoMod {
    
    private $IDProduto;
    private $Quantidade;

    function __construct($idProd, $qtd){
        
        $this->IDProduto = $idProd;
        $this->Quantidade = $qtd;
    
    }

    public function setIdProduto($IdProd){
        $this->IDProduto = $IdProd;
        return $IDProduto;
    }

    public function getIdProduto(){
        return $this->IDProduto;
    }

    public function setQuantidade($quantidade){
        $this->Quantidade = $Quantidade;
        return $Quantidade;
    }

    public function getQuantidade(){
        return $this->Quantidade;
    }

}

?>
<?php
    class MostraCarrinhoMod {
    
        private $ID;
        private $IDProduto;
        private $Quantidade;
        private $NomeProd;
        private $Categoria;
        private $Preco;
    
        function __construct($id, $idProd, $qtd, $nomeProd, $categoria, $preco){
            
            $this->ID = $id;
            $this->IDProduto = $idProd;
            $this->Quantidade = $qtd;
            $this->NomeProd = $nomeProd;
            $this->Categoria = $categoria;
            $this->Preco = $preco;
        
        }
    
        public function setID($id){
            $this->ID = $id;
            return $ID;
        }
    
        public function getID(){
            return $this->ID;
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
    
        public function setNomeProd($NomeProd){
            $this->NomeProd = $NomeProd;
            return $NomeProd;
        }
    
        public function getNomeProd(){
            return $this->NomeProd;
        }
    
        public function setCategoria($Categoria){
            $this->Categoria = $Categoria;
            return $Categoria;
        }
    
        public function getCategoria(){
            return $this->Categoria;
        }
    
        public function setPreco($Preco){
            $this->Preco = $Preco;
            return $Preco;
        }
    
        public function getPreco(){
            return $this->Preco;
        }
    
    }
?>
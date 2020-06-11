<?php

require_once ('../../model/ProdutosMod/ProdutosMod.php');
require_once ('../../DAO/DAOConnection.php');
if (!isset($_SESSION)) {
    session_start();
}

    class ProdutosDAO {
        private $Connection;
        
        function __construct(){
            $con = new DAOConnection();
            $this->Connection = $con->conect();
        }

        function ListarProdutos($cat) {
            
            $arr = array();

            $row = $this->Connection->query('SELECT * from Produto p inner join Usuario u on p.emailUser = u.Email where p.Categoria = "'.$cat.'"');             
            $count = $row->rowCount();
            $_SESSION['qtd'] = $count;

            for($i = 0; $i < $count; $i++){
                $result = $row->fetch(PDO::FETCH_ASSOC);

                $id = $result['ID'];
                $NomeProd = $result['NomeProd'];
                $Categoria = $result['Categoria'];
                $Descricao = $result['Descricao'];
                $preco = $result['Preco'];
                $Estoque = $result['Estoque'];
                $userName = $result['Nome'];
                $userLast = $result['Sobrenome'];

                $produto = new ProdutosMod($id, $NomeProd, $Categoria, $Descricao, $preco, $Estoque, $userName, $userLast);
                $arr[] = (object) $produto;

            }

            $_SESSION['Produtos'] = $arr;
        }
    }

?>
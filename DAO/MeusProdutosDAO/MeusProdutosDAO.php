<?php

require_once ('../../model/MeusProdutosMod/MeusProdutosMod.php');
require_once ('../../model/MeusProdutosMod/ProdutosEditaMod.php');
require_once ('../../DAO/DAOConnection.php');
if (!isset($_SESSION)) {
    session_start();
}

    class MeusProdutosDAO {
        private $Connection;
        
        function __construct(){
            $con = new DAOConnection();
            $this->Connection = $con->conect();
        }

        function ListarMeusProdutos($email) {
            
            $arr = array();

            $row = $this->Connection->query('SELECT * from Produto p where p.EmailUser = "'.$email.'"');             
            $count = $row->rowCount();
            $_SESSION['qtdL'] = $count;

            for($i = 0; $i < $count; $i++){
                $result = $row->fetch(PDO::FETCH_ASSOC);

                $ID = $result['ID'];
                $NomeProd = $result['NomeProd'];
                $Categoria = $result['Categoria'];
                $preco = $result['Preco'];

                $produto = new ProdutosMod($ID, $NomeProd, $Categoria, $preco);
                $arr[] = (object) $produto;

            }

            $_SESSION['MeusProdutos'] = $arr;
        }

        function DeletaProduto($id){
            $this->Connection->query('DELETE FROM Produto p WHERE p.ID = "'.$id.'"');
        }

        function ObtemProduto($id){

            $row = $this->Connection->query("SELECT * from Produto p where p.ID = '$id'");             

            $result = $row->fetch(PDO::FETCH_ASSOC);

            $NomeProd = $result['NomeProd'];
            $Categoria = $result['Categoria'];
            $descricao = $result['Descricao'];
            $preco = $result['Preco'];
            $estoque = $result['Estoque'];

            $produto = new ProdutosEditaMod($id, $NomeProd, $Categoria, $descricao, $preco, $estoque);

            $_SESSION['MP'] =  serialize($produto);

           echo "<script> 
                    location = '../../View/MeusProdutos/EditarProdutos.php'; 
                </script>";
        }

        function EditaProduto(ProdutosEditaMod $produto){

            $id = $produto->getID();
            $nome = $produto->getNome();
            $categoria = $produto->getCategoria();
            $descricao = $produto->getDescricao();
            $preco = $produto->getPreco();
            $estoque = $produto->getEstoque();

            $this->Connection->query("UPDATE Produto SET NomeProd = '$nome', Categoria = '$categoria', Descricao = '$descricao', Preco = '$preco' , Estoque = '$estoque' WHERE ID = '$id'");

            echo "<script>
                        alert('Edição de Produto Feito com Sucesso!');
                        location = '../../View/MeusProdutos/MeusProdutos.php';
                    </script>";
        }
    }

?>
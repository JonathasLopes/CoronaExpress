<?php

    require_once ('../../model/AdicionarProdMod/AdicionarProdMod.php');
    require_once ('../../DAO/DAOConnection.php');

    class AdicionarProdDAO {
        private $Connection;
        
        function __construct(){
            $con = new DAOConnection();
            $this->Connection = $con->conect();
        }

        function AdicionarProduto(AdicionarProdMod $produto) {

            $nome = $produto->getNome();
            $categoria = $produto->getCategoria();
            $descricao = $produto->getDescricao();
            $preco = $produto->getPreco();
            $estoque = $produto->getEstoque();
            $emailUser = $produto->getEmailUser();

            $row = $this->Connection->query('SELECT ID FROM Produto ORDER BY ID DESC LIMIT 1');
            $qtdId = $row->rowCount();
            
            if($qtdId == 0 || $qtdId == null){
                $id = 100;
            }else{
                $comp = $row->fetch(PDO::FETCH_ASSOC);
                $lastid = $comp['ID'];
                $id = 1 + $lastid;
            }

            try {
                $e_query = $this->Connection->prepare("INSERT INTO Produto (ID, NomeProd, Categoria, Descricao, Preco, Estoque, EmailUser) 
                VALUES (?,?,?,?,?,?,?)");
            
                $e_query->bindParam(1, $id);
                $e_query->bindParam(2, $nome);
                $e_query->bindParam(3, $categoria);
                $e_query->bindParam(4, $descricao);
                $e_query->bindParam(5, $preco);
                $e_query->bindParam(6, $estoque);
                $e_query->bindParam(7, $emailUser);

                $e_query->execute();

                echo "<script>
                        alert('Cadastro de Produto Feito com Sucesso!');
                        location = '../../View/AdicionarProduto/adicionar.php';
                    </script>";
            } catch(PDOException $e) {
                throw $e;
            }
        }
    }

?>
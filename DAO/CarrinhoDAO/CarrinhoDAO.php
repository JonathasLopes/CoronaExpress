<?php
    require_once ('../../model/CarrinhoMod/CarrinhoMod.php');
    require_once ('../../model/CarrinhoMod/MostraCarrinhoMod.php');
    require_once ('../../DAO/DAOConnection.php');
    if (!isset($_SESSION)) {
        session_start();
    }

        class CarrinhoDAO {
            private $Connection;
            
            function __construct(){
                $con = new DAOConnection();
                $this->Connection = $con->conect();
            }
    
            function InsertCarrinho(CarrinhoMod $carrinho) {
                $email = $_SESSION['email'];
                $IDProd = $carrinho->getIdProduto();
                $Quantidade = $carrinho->getQuantidade();

                $row = $this->Connection->query('SELECT IDC FROM Carrinho ORDER BY IDC DESC LIMIT 1');
                $qtdId = $row->rowCount();
                
                if($qtdId == 0 || $qtdId == null){
                    $ID = 0;
                }else{
                    $comp = $row->fetch(PDO::FETCH_ASSOC);
                    $lastid = $comp['IDC'];
                    $ID = 1 + $lastid;
                }
    
                 try {
                    $e_query = $this->Connection->prepare("INSERT INTO Carrinho (IDC, IDProduto, Quantidade, emailU) VALUES (?,?,?,?)");
                
                    $e_query->bindParam(1, $ID);
                    $e_query->bindParam(2, $IDProd);
                    $e_query->bindParam(3, $Quantidade);
                    $e_query->bindParam(4, $email);
    
                    $e_query->execute();

                    $this->QuantidadeLinhas();

                } catch(PDOException $e) {
                    throw $e;
                }
            }

            function QuantidadeLinhas(){
                $email = $_SESSION['email'];
                $row = $this->Connection->query('SELECT * FROM Carrinho c INNER JOIN Produto p ON c.IDProduto = p.ID WHERE c.emailU = "'.$email.'"');             
                
                $count = $row->rowCount();
                $_SESSION['qtdcarrinho'] = $count;
            }

            function CalculaTotal(){
                $total = array();
                $tot = 0;
                $email = $_SESSION['email'];

                $row = $this->Connection->query('SELECT Quantidade, Preco FROM Carrinho c INNER JOIN Produto p ON c.IDProduto = p.ID  WHERE c.emailU = "'.$email.'"');
                $count = $row->rowCount();

                for($i = 0; $i < $count; $i++){
                    $result = $row->fetch(PDO::FETCH_ASSOC);
                    $qtd = $result['Quantidade'];
                    $preco = $result['Preco'];
                    $total[] = $qtd * $preco;
                }

                for($j = 0; $j < $count; $j++){
                    $tot += $total[$j];
                }

                $_SESSION['total'] = $tot;
            }

            function ShowCarrinho(){
                $arr = array();
                $email = $_SESSION['email'];

                $row = $this->Connection->query('SELECT * FROM Carrinho c INNER JOIN Produto p ON c.IDProduto = p.ID WHERE c.emailU = "'.$email.'"');
                
                $count = $row->rowCount();
                $_SESSION['qtdcarrinho'] = $count;

                for($i = 0; $i < $count; $i++){
                    $result = $row->fetch(PDO::FETCH_ASSOC);

                    $id = $result['IDC'];
                    $idProduto = $result['IDProduto'];
                    $qtd = $result['Quantidade'];
                    $NomeProd = $result['NomeProd'];
                    $Categoria = $result['Categoria'];
                    $preco = $result['Preco'];

                    $carrinho = new MostraCarrinhoMod($id, $idProduto, $qtd, $NomeProd, $Categoria, $preco);
                    $arr[] = (object) $carrinho;

                }

                $_SESSION['Carrinho'] = $arr;

            }

            function DeleteCarrinho($idCarrinho){
               $this->Connection->query('DELETE FROM Carrinho WHERE IDC = "'.$idCarrinho.'" ');
                $this->QuantidadeLinhas();
            }
        }
?>
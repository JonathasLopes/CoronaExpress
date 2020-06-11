<?php
    require_once ('../../model/LoginMod/LoginMod.php');
    require_once ('../../DAO/DAOConnection.php');
    require_once ('../../DAO/CarrinhoDAO/CarrinhoDAO.php');

    if (!isset($_SESSION)) {
        session_start();
    }

        class LoginDAO {
            private $Connection;
            
            function __construct(){
                $con = new DAOConnection();
                $this->Connection = $con->conect();
            }
    
            function FazerLogin(LoginMod $usuario) {
                $Carrinho = new CarrinhoDAO();
                $email = $usuario->getEmail();
                $senha = $usuario->getSenha();

                //Deixa a primeira letra maiúscula:
                $newEmail = ucfirst($email);
                
                $row = $this->Connection->query('SELECT * FROM Usuario where Email = "'.$newEmail.'"');             
                $result = $row->fetch(PDO::FETCH_ASSOC);
                
                $e = $result['Email'];

                if($e == null || $e == ""){
                    $this->Connection = null;
                    echo "<script>
                            alert('Conta não cadastrada!');
                            location = '../../View/cadastro/cadastro.html';
                        </script>";
                }

                $s = $result['Senha'];
                $nome = $result['Nome'];

                if(($s != $senha && $e != null) || ($e != "" && $s != $senha)){
                    $this->Connection = null;
                    echo "<script>
                            alert('$nome sua senha: $s está incorreta!');
                            location = '../../View/Login/Login.html';
                        </script>"; 
                }

                if($s == $senha){
                    $_SESSION['logado'] = TRUE;
                    $_SESSION['email'] = $email;
                    $_SESSION['nome'] = $nome;
                    $Carrinho->QuantidadeLinhas();

                    echo '<script>
                            location = "../../View/Principal/Logado.php";
                        </script>';
                }
            }
        }
    
?>
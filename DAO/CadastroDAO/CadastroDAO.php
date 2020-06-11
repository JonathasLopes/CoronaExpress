<?php

require_once ('../../model/CadastroMod/CadastroMod.php');
require_once ('../../DAO/DAOConnection.php');

    class CadastroDAO {
        private $Connection;
        
        function __construct(){
            $con = new DAOConnection();
            $this->Connection = $con->conect();
        }

        function InsertUsuario(CadastroMod $usuario) {

            $nome = $usuario->getNome();
            $sobrenome = $usuario->getSobrenome();
            $cpf = $usuario->getCPF();
            $sexo = $usuario->getSexo();
            $nascimento = $usuario->getDtNascimento();
            $cep = $usuario->getCep();
            $rua = $usuario->getRua();
            $numero = $usuario->getNumero();
            $complemento = $usuario->getComplemento();
            $cidade = $usuario->getCidade();
            $estado = $usuario->getEstado();
            $estadoCivil = $usuario->getEstadoCivil();
            $tel = $usuario->getTelRes();
            $cel = $usuario->getCelular();
            $email = $usuario->getEmail();
            $senha = $usuario->getSenha();

            $newDate = date('Y-m-d', strtotime($nascimento));

            $row = $this->Connection->query('SELECT Email FROM Usuario');

            if($row->fetchColumn() != $email){

                try {
                    $e_query = $this->Connection->prepare("INSERT INTO Usuario (Nome, Sobrenome, CPF, Sexo, DtNascimento, CEP, Rua, Numero, Complemento, 
                        Cidade, Estado, EstadoCivil, TelRes, Celular, Email, Senha) 
                        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            
                    $e_query->bindParam(1, $nome);
                    $e_query->bindParam(2, $sobrenome);
                    $e_query->bindParam(3, $cpf);
                    $e_query->bindParam(4, $sexo);
                    $e_query->bindParam(5, $newDate);
                    $e_query->bindParam(6, $cep);
                    $e_query->bindParam(7, $rua); 
                    $e_query->bindParam(8, $numero);
                    $e_query->bindParam(9, $complemento);
                    $e_query->bindParam(10, $cidade);
                    $e_query->bindParam(11, $estado);
                    $e_query->bindParam(12, $estadoCivil);
                    $e_query->bindParam(13, $tel);
                    $e_query->bindParam(14, $cel);
                    $e_query->bindParam(15, $email);
                    $e_query->bindParam(16, $senha);

                    $e_query->execute();

                    echo "<script>
                            alert('Cadastro Feito com Sucesso!');
                            location = '../../View/Login/Login.html';
                        </script>";
                } catch(PDOException $e) {
                    throw $e;
                }
                
            }else{
                echo "<script>
                    alert('Email: $email Já Cadastrado!');
                    location = '../../View/Login/Login.html';
                </script>";
            }
        }
    }

?>
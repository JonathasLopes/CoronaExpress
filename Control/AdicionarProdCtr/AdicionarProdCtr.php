<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    if(!($_SESSION['logado'])){
        unset($_SESSION['logado']);
        header('location: ../../index.html');
    }

    require_once ('../../model/AdicionarProdMod/AdicionarProdMod.php');
    require_once ('../../DAO/AdicionarProdDAO/AdicionarProdDAO.php');

    $DAOadd = new AdicionarProdDAO();

    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $emailUser = $_SESSION['email'];

    $Newpreco = substr($preco, 3);
    $Newpreco = str_replace(',', '', $Newpreco);

    $adicionar = new AdicionarProdMod($nome, $categoria, $descricao, $Newpreco, $estoque, $emailUser);

    $DAOadd->AdicionarProduto($adicionar);
?>
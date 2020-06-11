<?php
    require_once ('../../DAO/MeusProdutosDAO/MeusProdutosDAO.php');
    require_once ('../../model/MeusProdutosMod/ProdutosEditaMod.php');
    if (!isset($_SESSION)) {
        session_start();
    }

    $DAOMeu = new MeusProdutosDAO();

    $produto = unserialize($_SESSION['MP']);
    $id = $produto->getID();

    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $Newpreco = substr($preco, 3);
    $Newpreco = str_replace(',', '', $Newpreco);

    $ModMeu = new ProdutosEditaMod($id, $nome, $categoria, $descricao, $Newpreco, $estoque);

    $DAOMeu->EditaProduto($ModMeu);

?>
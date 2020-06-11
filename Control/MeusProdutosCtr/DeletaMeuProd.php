<?php
    require_once ('../../DAO/MeusProdutosDAO/MeusProdutosDAO.php');
    if (!isset($_SESSION)) {
        session_start();
    }

    $id = $_GET['Id'];

    $DAOMeu = new MeusProdutosDAO();

    $DAOMeu->DeletaProduto($id);

    echo "<script> location = '../../View/MeusProdutos/MeusProdutos.php';</script>";

?>
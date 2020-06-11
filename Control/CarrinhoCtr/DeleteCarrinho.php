<?php

    require_once ('../../DAO/CarrinhoDAO/CarrinhoDAO.php');
    if (!isset($_SESSION)) {
        session_start();
    }

    $id = $_GET['Id'];

    $DAOcarrinho = new CarrinhoDAO();

    $DAOcarrinho->DeleteCarrinho($id);

    echo "<script> location = '../../View/Carrinho/Carrinho.php';</script>";

?>
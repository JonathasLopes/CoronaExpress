<?php
    require_once ('../../DAO/CarrinhoDAO/CarrinhoDAO.php');

    if (!isset($_SESSION)) {
        session_start();
    }

    $DAOCarrinho = new CarrinhoDAO();

    $id = $_GET['id'];
    $qtd = $_GET['Qtd'];

    $CadCarrinho = new CarrinhoMod($id, $qtd);
    $cat = $_SESSION['Categoria'];
    $DAOCarrinho->InsertCarrinho($CadCarrinho);

    echo '<script> location = "../../View/Carrinho/Carrinho.php" ; </script>';

?>
<?php
    require_once ('../../DAO/MeusProdutosDAO/MeusProdutosDAO.php');

    $id = $_GET['Id'];

    $DAOMeu = new MeusProdutosDAO();

    $DAOMeu->ObtemProduto($id);

?>
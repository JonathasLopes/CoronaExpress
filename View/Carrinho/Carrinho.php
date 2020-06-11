<?php

    if (!isset($_SESSION)) {
        session_start();
    }

    if(!($_SESSION['logado'])){
        unset($_SESSION['logado']);
        header('location: ../../index.php');
    }

    $qtdp = intval($_SESSION['qtdcarrinho']);
    $nome = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho - Corona Express</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../@media.css">
    <link rel="shortcut icon" href="../../Assets/favicon.ico">
    <link rel="stylesheet" href="../Principal/Logado.css">
    <link rel="stylesheet" href="Carrinho.css">
    <link rel="stylesheet" href="@Carrinho.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <!--Mobile-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="../Principal/Logado.php" id="nav_Img">
            <img src="../../Assets/NewLogo.png" alt="Logo CoronaExpress">
        </a>
        <a class="nav-link" href="" id="navCarrinho">
            <img src="../../Assets/shopping-cart.svg" alt="Carrinho">
            <div id="qtd_animated">
                <?php echo "$qtdp" ?>
            </div>
        </a>

        <!--Desktop-->

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <a class="navbar-brand" href="../Principal/Logado.php" id="navImg">
                <img src="../../Assets/NewLogo.png" alt="Logo CoronaExpress">
            </a>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="O que está procurando..."
                aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">
                    <img src="../../Assets/search.svg" alt="Pesquisar">
                </button>
            </form>
            <div id="log">
                <span style="color: white; font-size: 15px; text-align: center;"><?php echo "Bem Vindo, $nome!" ?></span>
                <a href="../AdicionarProduto/adicionar.php">➕ Vender Produto</a>
                <a href="../MeusProdutos/MeusProdutos.php">💎 Meus Produtos</a>
                <div class="dropdown-divider"></div>
                <a id="button" style="text-decoration: none; color: white; border: none; padding: 7px; border-radius: 8px; background-color: #04BA55; text-align: center;" href="../Principal/exit.php?exit=true">Logout</a>
            </div>
            <ul class="nav navbar-nav navbar-right" id="navbar_itens">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../../Assets/user.svg" alt="Login" style="filter: invert(1);">
                        <span style="color: white;">
                            <?php
                                echo "$nome";  
                            ?>
                        </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../AdicionarProduto/adicionar.php">➕ Vender Produto</a>
                        <a href="../MeusProdutos/MeusProdutos.php">💎 Meus Produtos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" id="carrinho">
                        <img src="../../Assets/shopping-cart.svg" alt="Carrinho">
                        <span id="qtd_animated">
                            <?php echo "$qtdp" ?>
                        </span>
                    </a>
                </li>
                <a id="sair" href="../Principal/exit.php?exit=true">
                    <img src="../../Assets/log-out.svg" alt="Sair">
                </a>
            </ul>
        </div>
    </nav>

    <main>
        <div class="container-fluid">
            <?php include '../../Control/CarrinhoCtr/ShowCarrinho.php' ?>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="../../js/Carrinho.js"></script>
</body>
</html>
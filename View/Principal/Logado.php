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
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Corona Express</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../@media.css">
    <link rel="shortcut icon" href="../../Assets/favicon.ico">
    <link rel="stylesheet" href="Logado.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">

        <!--Mobile-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="Logado.php" id="nav_Img">
            <img src="../../Assets/NewLogo.png" alt="Logo CoronaExpress">
        </a>
        <a class="nav-link" href="../Carrinho/Carrinho.php" id="navCarrinho">
            <img src="../../Assets/shopping-cart.svg" alt="Carrinho">
            <div id="qtd_animated">
                <?php echo "$qtdp" ?>
            </div>
        </a>

        <!--Desktop-->

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <a class="navbar-brand" href="Logado.php" id="navImg">
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
                <a id="button" style="text-decoration: none; color: white; border: none; padding: 7px; border-radius: 8px; background-color: #04BA55; text-align: center;" href="exit.php?exit=true">Logout</a>
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
                        <a class="dropdown-item" href="../MeusProdutos/MeusProdutos.php">💎 Meus Produtos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Carrinho/Carrinho.php" id="carrinho">
                        <img src="../../Assets/shopping-cart.svg" alt="Carrinho">
                        <span id="qtd_animated">
                            <?php echo "$qtdp" ?>
                        </span>
                    </a>
                </li>
                <a id="sair" href="exit.php?exit=true">
                    <img src="../../Assets/log-out.svg" alt="Sair">
                </a>
            </ul>
        </div>
    </nav>

    <!--Principal-->

    <main>
        <div class="container-fluid">
            <h2 id="Subtitulo"><?php echo "Bem Vindo, $nome!" ?></h2>
            <div class="row row-cols-1 row-cols-md-5">
                <div class="card text-center">
                    <img src="../../Assets/Processador.png" class="card-img-top" alt="Processador">
                    <div class="card-body">
                        <h5 class="card-title">Processador</h5>
                        <a href="../Produtos/Produtos.php?Categoria=Processador" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="../../Assets/Placa-Mae.png" class="card-img-top" alt="Placa-Mãe">
                    <div class="card-body">
                        <h5 class="card-title">Placa-Mãe</h5>
                        <a href="../Produtos/Produtos.php?Categoria=Placa-Mae" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="../../Assets/Memoria Ram.png" class="card-img-top" alt="Memória Ram">
                    <div class="card-body">
                        <h5 class="card-title">Memória Ram</h5>
                        <a href="../Produtos/Produtos.php?Categoria=Memoria Ram" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 5rem;">
                    <img src="../../Assets/Placa de Video.png" class="card-img-top" alt="Placa de Vídeo">
                    <div class="card-body">
                        <h5 class="card-title">Placa de Vídeo</h5>
                        <a href="../Produtos/Produtos.php?Categoria=Placa de Video" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="../../Assets/Fonte.png" class="card-img-top" alt="Fontes">
                    <div class="card-body">
                        <h5 class="card-title">Fontes</h5>
                        <a href="../Produtos/Produtos.php?Categoria=Fonte" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="../../Assets/HD.png" class="card-img-top" alt="HDs">
                    <div class="card-body">
                        <h5 class="card-title">HDs</h5>
                        <a href="../Produtos/Produtos.php?Categoria=HD" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 5rem;">
                    <img src="../../Assets/SSD.png" class="card-img-top" alt="SSDs">
                    <div class="card-body">
                        <h5 class="card-title">SSDs</h5>
                        <a href="../Produtos/Produtos.php?Categoria=SSD" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="../../Assets/Cooler.png" class="card-img-top" alt="Coolers">
                    <div class="card-body">
                        <h5 class="card-title">Coolers</h5>
                        <a href="../Produtos/Produtos.php?Categoria=Cooler" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="../../Assets/Teclado.png" class="card-img-top" alt="Teclados">
                    <div class="card-body">
                        <h5 class="card-title">Teclados</h5>
                        <a href="../Produtos/Produtos.php?Categoria=Teclado" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 5rem;">
                    <img src="../../Assets/Monitor.svg" class="card-img-top" alt="Monitores">
                    <div class="card-body">
                        <h5 class="card-title">Monitores</h5>
                        <a href="../Produtos/Produtos.php?Categoria=Monitor" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="../../Assets/Mouse.svg" class="card-img-top" alt="Mouses">
                    <div class="card-body">
                        <h5 class="card-title">Mouses</h5>
                        <a href="../Produtos/Produtos.php?Categoria=Mouse" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="../../Assets/Cadeira.svg" class="card-img-top" alt="Cadeiras">
                    <div class="card-body">
                        <h5 class="card-title">Cadeiras</h5>
                        <a href="../Produtos/Produtos.php?Categoria=Cadeira" class="btn btn-success">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include '../../Usavel/Footer.php' ?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>
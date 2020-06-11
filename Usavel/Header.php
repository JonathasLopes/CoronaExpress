<?php

if (!isset($_SESSION)) {
    session_start();
}

if(!(isset($_SESSION['logado']))){

    echo '<nav class="navbar navbar-expand-lg navbar-light fixed-top">

        <!--Mobile-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="../../index.php" id="nav_Img">
                <img src="../../Assets/NewLogo.png" alt="Logo CoronaExpress">
            </a>
            <a class="nav-link" href="../Login/Login.html" id="navCarrinho">
                <img src="../../Assets/shopping-cart.svg" alt="Carrinho">
            </a>

            <!--Desktop-->

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <a class="navbar-brand" href="../../index.php" id="navImg">
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
                <a href="../Login/Login.html">🚀 Login</a>
                <a href="../cadastro/cadastro.html">🎮 Cadastrar</a>
                <div class="dropdown-divider"></div>
                    <a href="../Login/Login.html">➕ Vender Produto</a>
                </div>
                <ul class="nav navbar-nav navbar-right" id="navbar_itens">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../../Assets/user.svg" alt="Login" style="filter: invert(1);">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../Login/Login.html">🚀 Login</a>
                            <a class="dropdown-item" href="../Cadastro/cadastro.html">🎮 Cadastrar</a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../Login/Login.html">➕ Vender Produto</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Login/Login.html" id="nav_carrinho">
                            <img src="../../Assets/shopping-cart.svg" alt="Carrinho">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>';
}else{
    echo '<nav class="navbar navbar-expand-lg navbar-light fixed-top">

            <!--Mobile-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="../Principal/Logado.php" id="nav_Img">
                <img src="../../Assets/NewLogo.png" alt="Logo CoronaExpress">
            </a>
            <a class="nav-link" href="../Carrinho/Carrinho.php" id="navCarrinho">
                <img src="../../Assets/shopping-cart.svg" alt="Carrinho">
                <div id="qtd_animated">';
                    echo "$qtdp";
            echo '</div>
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
                        <span style="color: white;">';
                        echo $nome;  
                        echo '</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../AdicionarProduto/adicionar.php">➕ Vender Produto</a>
                            <a href="../MeusProdutos/MeusProdutos.php">💎 Meus Produtos</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../carrinho/Carrinho.php" id="carrinho">
                            <img src="../../Assets/shopping-cart.svg" alt="Carrinho">
                            <span id="qtd_animated">';
                            echo "$qtdp";
                        echo '</span>
                        </a>
                    </li>
                    <a id="sair" href="../Principal/exit.php?exit=true">
                        <img src="../../Assets/log-out.svg" alt="Sair">
                    </a>
                </ul>
            </div>
        </nav>';
}



?>
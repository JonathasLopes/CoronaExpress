<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Corona Express</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="@media.css">
    <link rel="shortcut icon" href="./Assets/favicon.ico">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">

        <!--Mobile-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="./index.php" id="nav_Img">
            <img src="./Assets/NewLogo.png" alt="Logo CoronaExpress">
        </a>
        <a class="nav-link" href="./View/Login/Login.html" id="navCarrinho">
            <img src="./Assets/shopping-cart.svg" alt="Carrinho">
        </a>

        <!--Desktop-->

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <a class="navbar-brand" href="./index.php" id="navImg">
                <img src="./Assets/NewLogo.png" alt="Logo CoronaExpress">
            </a>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="O que está procurando..."
                    aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">
                    <img src="./Assets/search.svg" alt="Pesquisar">
                </button>
            </form>
            <div id="log">
                <a href="./View/Login/Login.html">🚀 Login</a>
                <a href="./View/Cadastro/cadastro.html">🎮 Cadastrar</a>
                <div class="dropdown-divider"></div>
                <a href="./View/AdicionarProduto/adicionar.php">➕ Vender Produto</a>
            </div>
            <ul class="nav navbar-nav navbar-right" id="navbar_itens">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="./Assets/user.svg" alt="Login" style="filter: invert(1);">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./View/Login/Login.html">🚀 Login</a>
                        <a class="dropdown-item" href="./View/Cadastro/cadastro.html">🎮 Cadastrar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./View/Login/Login.html">➕ Vender Produto</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./View/Login/Login.html" id="nav_carrinho">
                        <img src="./Assets/shopping-cart.svg" alt="Carrinho">
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Principal-->

    <main>
        <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-5">
                <div class="card text-center">
                    <img src="./Assets/Processador.png" class="card-img-top" alt="Processador">
                    <div class="card-body">
                        <h5 class="card-title">Processador</h5>
                        <a href="./View/Produtos/Produtos.php?Categoria=Processador" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="../../Assets/Placa-Mae.png" class="card-img-top" alt="Placa-Mãe">
                    <div class="card-body">
                        <h5 class="card-title">Placa-Mãe</h5>
                        <a href="./View/Produtos/Produtos.php?Categoria=Placa-Mae" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="./Assets/Memoria Ram.png" class="card-img-top" alt="Memória Ram">
                    <div class="card-body">
                        <h5 class="card-title">Memória Ram</h5>
                        <a href="./View/Produtos/Produtos.php?Categoria=Memoria Ram" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 5rem;">
                    <img src="./Assets/Placa de Video.png" class="card-img-top" alt="Placa de Vídeo">
                    <div class="card-body">
                        <h5 class="card-title">Placa de Vídeo</h5>
                        <a href="./View/Produtos/Produtos.php?Categoria=Placa de Video" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="./Assets/Fonte.png" class="card-img-top" alt="Fontes">
                    <div class="card-body">
                        <h5 class="card-title">Fontes</h5>
                        <a href="./View/Produtos/Produtos.php?Categoria=Fonte" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="./Assets/HD.png" class="card-img-top" alt="HDs">
                    <div class="card-body">
                        <h5 class="card-title">HDs</h5>
                        <a href="./View/Produtos/Produtos.php?Categoria=HD" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 5rem;">
                    <img src="./Assets/SSD.png" class="card-img-top" alt="SSDs">
                    <div class="card-body">
                        <h5 class="card-title">SSDs</h5>
                        <a href="./View/Produtos/Produtos.php?Categoria=SSD" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="./Assets/Cooler.png" class="card-img-top" alt="Coolers">
                    <div class="card-body">
                        <h5 class="card-title">Coolers</h5>
                        <a href="./View/Produtos/Produtos.php?Categoria=Cooler" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="./Assets/Teclado.png" class="card-img-top" alt="Teclados">
                    <div class="card-body">
                        <h5 class="card-title">Teclados</h5>
                        <a href="./View/Produtos/Produtos.php?Categoria=Teclado" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 5rem;">
                    <img src="./Assets/Monitor.svg" class="card-img-top" alt="Monitores">
                    <div class="card-body">
                        <h5 class="card-title">Monitores</h5>
                        <a href="./View/Produtos/Produtos.php?Categoria=Monitor" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="./Assets/Mouse.svg" class="card-img-top" alt="Mouses">
                    <div class="card-body">
                        <h5 class="card-title">Mouses</h5>
                        <a href="./View/Produtos/Produtos.php?Categoria=Mouse" class="btn btn-success">Comprar</a>
                    </div>
                </div>
                <div class="card text-center">
                    <img src="./Assets/Cadeira.svg" class="card-img-top" alt="Cadeiras">
                    <div class="card-body">
                        <h5 class="card-title">Cadeiras</h5>
                        <a href="./View/Produtos/Produtos.php?Categoria=Cadeira" class="btn btn-success">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--Mensagem Central -->
    <div class="container-fluid" id="mensagem">
        Sobre nossa Empresa
    </div>

    <div class="container-fluid" id="about">
        <!--Quem Somos -->

        <div class="conjunto">
            <div id="Sobre">
                <h2>Quem somos ?</h2>
                <p>
                    Os desktops estão sofrendo uma transformação e se tornando em verdadeiras máquinas para
                    entretenimento
                    no
                    qual chamamos de PC Gamer! Hoje, o mercado que mais cresce é o de computador gamer voltado para
                    jogos e
                    entusiastas. A Corona Express já sabendo dessa tendência vem trazendo produtos de ótima qualidade
                    para
                    sua
                    casa.
                </p>
                <p>
                    Somos uma empresa que presa produtos de qualidade e testes rigorosos, o que assegura a nossos
                    clientes receber o melhor produto e confiança.
                </p>
                <p>
                    Trazemos garantia avançada em nosso produtos, pois para nós cada cliente é
                    único e especial e devem ser tratados da mesma forma.
                </p>
                <p>
                    A Corona Express vem sendo considerada a mais querida e que mais respeita o consumidor.
                </p>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.2655613162556!2d-46.66114738447576!3d-23.55890396738786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59cd06feea05%3A0x34166339e4cc57c6!2sUAM%20Campus%20Paulista%201!5e0!3m2!1spt-BR!2sbr!4v1589416236245!5m2!1spt-BR!2sbr"
                    frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
        </div>

        <!-- Misão, Visão e Valores -->

        <div class="mvv">
            <div class="card mb-3">
                <div class="card-header">Missão</div>
                <div class="card-body">
                    <p class="card-text">
                        Nossa missão é fornecer um ambiente de compra e venda, que seja eficiente e eficaz,
                        além de fornecer segurança nas compras e vendas de nossos usuários.
                    </p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">Visão</div>
                <div class="card-body">
                    <p class="card-text">
                        Ser a empresa nº 1 de compra e vendas on-line do mundo.
                    </p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">Valores</div>
                <div class="card-body">
                    <p class="card-text">
                        Confiabilidade,
                        Integridade,
                        Simplicidade,
                        Responsabilidade e
                        Qualidade
                    </p>
                </div>
            </div>
        </div>
        <!-- Nossa Equipe -->

        <h2 class="subtitulo">Nossa Equipe:</h2>
        <div class="group">
            <div>
                <p>
                    <a class="btn btn_foto" data-toggle="collapse" href="#collapseOne" role="button"
                        aria-expanded="false" aria-controls="collapseOne">
                        <img src="./Assets/IMG_7080.JPG" alt="Foto Jonathas">
                    </a>
                </p>
                <div class="collapse" id="collapseOne">
                    <div class="card card-body">
                        <div class="name">
                            <h2>Jonathas Lopes</h2>
                            <h3>Estudante</h3>
                        </div>

                        <div>
                            <p>Cursando Análise e Desenvolvimento de Sistemas pela
                                <a href="http://www.fateczl.edu.br/">Fatec - Zona Leste</a>
                            </p>
                            <p>Cursando Ciências da Computação pela
                                <a href="https://portal.anhembi.br/">Universidade Anhembi Morumbi</a>
                            </p>
                        </div>

                        <div>
                            <h2>Conhecimentos Técnicos:</h2>
                            <ul>
                                <li>BackEnd: Java, SQL Server, MySQL, Assembly MIPS, NodeJs</li>
                                <li>FrontEnd: JavaScript, CSS, HTML, ReactJs, React-Native</li>
                                <li>Outros: Pacote Office, VBA, Photoshop, Sony Vegas, Android, Redes Cisco</li>
                            </ul>
                        </div>

                        <div>
                            <h2>Cursos Realizados:</h2>
                            <ul>
                                <li>Desenvolvimento Android Completo 2020 - Udemy</li>
                                <li>Introdução a Linguagem html - Udemy</li>
                                <li>Informática e Tecnologia Office 2007 - Data Byte</li>
                            </ul>
                        </div>

                        <div>
                            <h2>Hobbies:</h2>
                            <ul>
                                <li>Amo jogar Video Game</li>
                                <li>Amo tocar Violão</li>
                            </ul>
                        </div>

                        <div class="social_Media">
                            <a href="https://www.instagram.com/jony_lopes/">
                                <img src="./Assets/instagram.png" alt="Instagram">
                            </a>
                            <a href="https://pt-br.facebook.com/people/Jonathas-Lopes/100004210178552">
                                <img src="./Assets/facebook.png" alt="Facebook">
                            </a>
                            <a href="https://br.linkedin.com/in/jonathas-lopes-9b99aaa8">
                                <img src="./Assets/linkedin.png" alt="Linkedin">
                            </a>
                            <a href="https://github.com/JonathasLopes">
                                <img src="./Assets/github-image.png" alt="Github">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p>
                    <a class="btn btn_foto" data-toggle="collapse" href="#collapseTwo" role="button"
                        aria-expanded="false" aria-controls="collapseTwo">
                        <img src="./Assets/Nicholas.png" alt="Foto Nicholas">
                    </a>
                </p>
                <div class="collapse" id="collapseTwo">
                    <div class="card card-body">
                        <div class="name">
                            <h2>Nicholas Isola da Silva</h2>
                            <h3>Estudante</h3>
                        </div>

                        <div>
                            <p>Cursando Ciências da Computação pela
                                <a href="https://portal.anhembi.br/">Universidade Anhembi Morumbi</a>
                            </p>
                        </div>

                        <div>
                            <h2>Conhecimentos Técnicos:</h2>
                            <ul>
                                <li>BackEnd: C, C++, Java, MySQL</li>
                                <li>FrontEnd: HTML</li>
                                <li>Outros: Pacote Office</li>
                            </ul>
                        </div>

                        <div>
                            <h2>Cursos Realizados:</h2>
                            <ul>
                                <li>Mineração de Dados completo em 2019 - Anhembi Morumbi</li>
                                <li>Curso de Html completo em 2019 - Anhembi Morumbi</li>
                                <li>Curso de c e c++ completo em 2019 - Udemy</li>
                            </ul>
                        </div>

                        <div>
                            <h2>Hobbies:</h2>
                            <ul>
                                <li>Amo jogar Video Game</li>
                                <li>Amo manipular algoritmos</li>
                            </ul>
                        </div>

                        <div class="social_Media">
                            <a href="https://www.facebook.com/profile.php?id=100008375580468">
                                <img src="../../Assets/facebook.png" alt="Facebook">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p>
                    <a class="btn btn_foto" data-toggle="collapse" href="#collapseThree" role="button"
                        aria-expanded="false" aria-controls="collapseThree">
                        <img src="./Assets/Thiago.png" alt="Foto Thiago">
                    </a>
                </p>
                <div class="collapse" id="collapseThree">
                    <div class="card card-body wCard">
                        <div class="name">
                            <h2>Tiago Campanario Braga</h2>
                            <h3>Estudante</h3>
                        </div>

                        <div>
                            <p>Cursando Ciências da Computação pela
                                <a href="https://portal.anhembi.br/">Universidade Anhembi Morumbi</a>
                            </p>
                        </div>

                        <div>
                            <h2>Conhecimentos Técnicos:</h2>
                            <ul>
                                <li>BackEnd: C/C++, C#, Java, Lua</li>
                                <li>FrontEnd: JavaScript, HTML, CSS</li>
                                <li>Outros: Photoshop, Office, Unity, Unreal, 3dMax,
                                    OpenOffice, Corel Draw, Blender, Indesign,
                                    Audition, WebGL, OpenGL
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h2>Cursos Realizados:</h2>
                            <ul>
                                <li>Opengl</li>
                                <li>raytracing</li>
                                <li>UCR</li>
                            </ul>
                        </div>

                        <div>
                            <h2>Hobbies:</h2>
                            <p>Amo cultura</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p>
                    <a class="btn btn_foto" data-toggle="collapse" href="#collapseFour" role="button"
                        aria-expanded="false" aria-controls="collapseFour">
                        <img src="./Assets/Caio.png" alt="Foto Caio">
                    </a>
                </p>
                <div class="collapse" id="collapseFour">
                    <div class="card card-body">
                        <div class="name">
                            <h2>Caio Nascimento</h2>
                            <h3>Estudante</h3>
                        </div>

                        <div>
                            <p>Cursando Ciências da Computação pela
                                <a href="https://portal.anhembi.br/">Universidade Anhembi Morumbi</a>
                            </p>
                        </div>

                        <div>
                            <h2>Conhecimentos Técnicos:</h2>
                            <ul>
                                <li>BackEnd: SQL Server, Oracle, Mongo db, Java e Python</li>
                                <li>FrontEnd: Javascript, html e css</li>
                            </ul>
                        </div>

                        <div>
                            <h2>Cursos Realizados:</h2>
                            <ul>
                                <li>Git e github - estudonauta</li>
                                <li>Java - estudonauta</li>
                                <li>Python - udemy</li>
                            </ul>
                        </div>

                        <div>
                            <h2>Hobbies:</h2>
                            <ul>
                                <li>Amo Jogar video game</li>
                                <li>Amo RPG de mesa</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p>
                    <a class="btn btn_foto" data-toggle="collapse" href="#collapseFive" role="button"
                        aria-expanded="false" aria-controls="collapseFive">
                        <img src="./Assets/Luis.png" alt="Foto Luis">
                    </a>
                </p>
                <div class="collapse" id="collapseFive">
                    <div class="card card-body">
                        <div class="name">
                            <h2>Luiz Filipe Teixeira Marin</h2>
                            <h3>Estudante</h3>
                        </div>

                        <div>
                            <p>Cursando Ciências da Computação pela
                                <a href="https://portal.anhembi.br/">Universidade Anhembi Morumbi</a>
                            </p>
                        </div>

                        <div>
                            <h2>Conhecimentos Técnicos:</h2>
                            <ul>
                                <li>BackEnd: C++, Java, Python, LabVIEW</li>
                                <li>FrontEnd: HTML5, CSS, Javascript</li>
                                <li>Outros: Microsoft Office</li>
                            </ul>
                        </div>

                        <div>
                            <h2>Cursos Realizados:</h2>
                            <ul>
                                <li>Nenhum</li>
                            </ul>
                        </div>

                        <div>
                            <h2>Hobbies:</h2>
                            <ul>
                                <li>Amo leitura</li>
                                <li>Amo ouvir música</li>
                                <li>Amo jogar Vidaeo Game</li>
                            </ul>
                        </div>

                        <div class="social_Media">
                            <a href="https://www.facebook.com/luizfilipe.teixeiramarin?ref=bookmarks">
                                <img src="../../Assets/facebook.png" alt="Facebook">
                            </a>
                            <a href="https://www.linkedin.com/in/luiz-filipe-teixeira-marin-007106132/">
                                <img src="../../Assets/linkedin.png" alt="Linkedin">
                            </a>
                            <a href="https://github.com/Luiz-Fi">
                                <img src="../../Assets/github-image.png" alt="Github">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './Usavel/Footer.php' ?>


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
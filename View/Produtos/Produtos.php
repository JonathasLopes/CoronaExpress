<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    
    if(isset($_SESSION['logado'])){
        $qtdp = intval($_SESSION['qtdcarrinho']);
        $nome = $_SESSION['nome'];
    }

    $categoria = $_GET['Categoria'];
    $_SESSION['Categoria'] = $categoria;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Corona Express</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../@media.css">
    <link rel="shortcut icon" href="../../Assets/favicon.ico">
    <link rel="stylesheet" href="Produtos.css">
    <link rel="stylesheet" href="@Produtos.css">
    <link rel="stylesheet" href="../Principal/Logado.css">
</head>

<body>
    <?php include '../../Usavel/Header.php'?>
    <main>
        <div class="container-fluid">
        <?php if(!isset($_SESSION['logado'])){
            echo '<a href="../../index.php" id="seta">';
        } else{
            echo '<a href="../Principal/Logado.php" id="seta">';
        }
         ?>
                <img src="../../Assets/keyboard_backspace-24px.svg" alt="Voltar para Pagina Inicial">
            </a>
            <h1><?php echo "$categoria" ?></h1>
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
            
            <?php
                include '../../Control/ProdutosCtr/ProdutosCtr.php';
            ?>
            </div>
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
    <script src="../../js/Produtos.js"></script>
</body>

</html>
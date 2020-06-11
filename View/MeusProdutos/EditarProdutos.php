<?php
    require_once ('../../model/MeusProdutosMod/ProdutosEditaMod.php');
    if (!isset($_SESSION)) {
        session_start();
    }

    if(!($_SESSION['logado'])){
        unset($_SESSION['logado']);
        header('location: ../Login/Login.php');
    }
    
    $produto = unserialize($_SESSION['MP']);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar - Corona Express</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../@media.css">
    <link rel="shortcut icon" href="../../Assets/favicon.ico">
    <link rel="stylesheet" href="../AdicionarProduto/adicionar.css">
    <link rel="stylesheet" href="../AdicionarProduto/@mediaAdicionar.css">
    <link rel="stylesheet" href="@MeusProdutos.css">
</head>

<body>
    <div class="container">
        <a href="./MeusProdutos.php" id="seta">
            <img src="../../Assets/keyboard_backspace-24px.svg" alt="Voltar para Pagina Inicial">
        </a>
        <h1 id="title">Editar Produto</h1>
        <form action="../../Control/MeusProdutosCtr/EditaProduto.php" method="post" id="form">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="Text" class="form-control" name="nome" id="nome" placeholder="<?php echo $produto->getNome() ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" id="categoria" class="form-control">
                        <option value="" disabled selected><?php echo $produto->getCategoria() ?></option>
                        <option value="Processador">Processador</option>
                        <option value="Placa-Mae">Placa-Mãe</option>
                        <option value="Memoria Ram">Memória Ram</option>
                        <option value="Placa de Video">Placa de Vídeo</option>
                        <option value="Fonte">Fonte</option>
                        <option value="HD">HD</option>
                        <option value="SSD">SSD</option>
                        <option value="Cooler">Cooler</option>
                        <option value="Teclado">Teclado</option>
                        <option value="Monitor">Monitor</option>
                        <option value="Mouse">Mouse</option>
                        <option value="Cadeira">Cadeira</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" placeholder="<?php echo $produto->getDescricao() ?>"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="preco">Valor Unitário</label>
                    <input type="text" data-prefix="R$ " name="preco" id="preco" class="form-control" placeholder=" R$ <?php echo $produto->getPreco() ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="estoque">Estoque</label>
                    <input type="number" name="estoque" id="estoque" class="preco form-control" placeholder="<?php echo $produto->getEstoque() ?>">
                </div>
            </div>
            <div class="button">
                <button id="Cancelar" onClick="cancelar()" class="btn btn-secondary" type="button">Cancelar</button>
                <button id="Cadastrar" class="btn btn-success" type="submit">Salvar</button>
            </div>
        </form>
    </div>
    <footer class="py-4 mt-auto">
        <div class="d-flex justify-content-between">
            <div class="text" style="color: white; text-align: center;">Copyright © Corona Express</div>
            <div>
                <a href="">Privacy Policy</a>
                ·
                <a href="">Terms &amp; Conditions</a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
    <script>
        jQuery(function () {
            jQuery('#preco').maskMoney();
        });
    </script>
    <script src="../../js/MeusProdutos.js"></script>
    <script src="../../js/AdicionarProd.js"></script>

</body>

</html>
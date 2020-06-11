<?php
    require_once ('../../DAO/CarrinhoDAO/CarrinhoDAO.php');
    if (!isset($_SESSION)) {
        session_start();
    }
    $DAOcarrinho = new CarrinhoDAO();

    $DAOcarrinho->ShowCarrinho();
    $DAOcarrinho->CalculaTotal();

    $qtdLinhas = intval($_SESSION['qtdcarrinho']);
    $array = (object) $_SESSION['Carrinho'];
    $total = $_SESSION['total'];

    if($qtdLinhas > 0){
        echo '<div class="prod">';

        for($i = 0; $i < $qtdLinhas; $i++){
            echo '<div class="row row-cols-1 row-cols-md-3">
                    <div class="card text-center" id="card">
                        <h2 class="card-title">'.$array->$i->getNomeProd().'</h2>
                        <img src="../../Assets/'.$array->$i->getCategoria().'.png" class="card-img-top" alt="'.$array->$i->getCategoria().'">
                        <div class="card-body">
                            <div>
                                <span>R$ '.$array->$i->getPreco().'</span>
                            </div>
                            <button class="lata" onclick="Deleta('.$array->$i->getID().')">
                                <img src="../../Assets/LataLixo.svg" alt="Lata de Lixo">
                            </button>
                        </div>
                    </div>
                </div>';
        }

        echo '</div>
            <div class="lista">
                <div class="list">';

        for($j = 0; $j < $qtdLinhas; $j++){
            echo '<p class="listp">
                    '.$array->$j->getQuantidade().' X '.$array->$j->getNomeProd().' -> Unid. R$ '.$array->$j->getPreco().'
                </p>';
        }

        echo '</div>
                <div class="total">
                    <span id="textTot">Total:</span>
                    <span id="tot">R$ '.$total.'</span>
                </div>
                <div class="botoes">
                    <button id="cancelar" class="btn btn-light">cancelar</button>
                    <button id="comprar" class="btn btn-success">comprar</button>
                </div>
            </div>';

    }else{
        echo '<div id="Mens">
                Não há produtos no carrinho! 💳
            </div>
            <div class="lista">
                <div class="list">
                    <div id="mens2">Poxa.. 😔 Ainda não há produtos em seu carrinho...</div>
                    <div id="mens3">Insira um produto no carrinho para que ele seja mostrado aqui!</div>
                </div>
                <div class="total">
                    <span id="textTot">Total:</span>
                    <span id="tot">R$ '.$total.'</span>
                </div>
                <div class="botoes">
                    <button id="cancelar" class="btn btn-light">cancelar</button>
                    <button id="comprar" class="btn btn-success">comprar</button>
                </div>
            </div>
            ';
    }
?>
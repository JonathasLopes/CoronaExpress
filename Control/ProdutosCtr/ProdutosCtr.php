<?php
    require_once ('../../DAO/ProdutosDAO/ProdutosDAO.php');
    if (!isset($_SESSION)) {
        session_start();
    }

    $DAOprod = new ProdutosDAO();

    $cat = $_SESSION['Categoria'];

    $DAOprod->ListarProdutos($cat);

    $vetor = (object) $_SESSION['Produtos'];
    $qtdLinhas = intval($_SESSION['qtd']);

    if($qtdLinhas > 0){
        for($i = 0; $i < $qtdLinhas; $i++){
            echo '<div class="col mb-3">
                    <div class="card text-center">
                    <h3 class="card-title">'.$vetor->$i->getNomeProd().'</h3>
                        <div class="imgdesc">
                            <div class="imgpreco">
                                <img src="../../Assets/'.$cat.'.png" class="card-img-top" id="img" alt="'.$cat.'">
                                <p> R$ '.$vetor->$i->getPreco().'</p>
                            </div>
                            <div class="descEst">
                                <p>'.$vetor->$i->getDescricao().'</p>
                                <p class="estoque">Estoque: <b>'.$vetor->$i->getEstoque().'</b></p>
                            </div>
                        </div>
                        <div class="but">
                            <div class="quantidade-produtos">
                                <button type="button" class="buttons qty-minus"
                                style="border-radius: 8px 0 0 8px;">-</button>
                                <input id="'.$vetor->$i->getID().'" value="0" min="0" max="1000" step="1" type="number">
                                <button type="button" class="buttons qty-plus"
                                style="border-radius: 0 8px 8px 0;">+</button>
                            </div>';
                            if(!isset($_SESSION['logado'])){
                                echo '<button id="buy" class="btn btn-success button">Comprar</button>
                                <span class="vendedor">Vendido por: <b>'.$vetor->$i->getUserName().' '.$vetor->$i->getUserLast().'</b></span>
                                </div>
                            </div>
                     </div>';
                            }else{
                            echo '
                        <button id="comprar" onClick="enviaCarrinho('.$i.','.$vetor->$i->getID().')" class="btn btn-success button">Comprar</button>
                        <span class="vendedor">Vendido por: <b>'.$vetor->$i->getUserName().' '.$vetor->$i->getUserLast().'</b></span>
                    </div>
                </div>
            </div>';};
        }
    }else{
        echo '<div id="Mens">
                Não há produtos no momento! 😞
            </div>';
    }

?>
<script src="../../js/Produtos.js"></script>
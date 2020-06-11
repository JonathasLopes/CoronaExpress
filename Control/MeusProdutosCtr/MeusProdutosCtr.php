<?php
    require_once ('../../DAO/MeusProdutosDAO/MeusProdutosDAO.php');
    if (!isset($_SESSION)) {
        session_start();
    }

    $DAOMeu = new MeusProdutosDAO();

    $email = $_SESSION['email'];

    $DAOMeu->ListarMeusProdutos($email);

    $vetor = (object) $_SESSION['MeusProdutos'];
    $qtdLinhas = intval($_SESSION['qtdL']);

    if($qtdLinhas > 0){
        for($i = 0; $i < $qtdLinhas; $i++){
            echo '<div class="col mb-3">
                    <div class="card text-center">
                    <h3 class="card-title">'.$vetor->$i->getNomeProd().'</h3>
                        <div class="edit">
                            <button class="lapis" onclick="EditaProd('.$vetor->$i->getID().')">
                                <img src="../../Assets/pen.svg" alt="Editar Produto">
                            </button>
                        </div>
                        <div class="corpo">
                            <div class="imgpreco">
                                <img src="../../Assets/'.$vetor->$i->getCategoria().'.png" class="card-img-top" id="img" alt="'.$vetor->$i->getCategoria().'">
                                <p> R$ '.$vetor->$i->getPreco().'</p>
                            </div>
                            <div class="lixo">
                                <button class="lata" onclick="DeletaProd('.$vetor->$i->getID().')">
                                    <img src="../../Assets/LataLixo.svg" alt="Excluir Produto">
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>';
        }
    }else{
        echo '<div id="Mens">
                Você não está vendendo nenhum produto ... 🤯
            </div>';
    }

?>
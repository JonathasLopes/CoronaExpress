var btnCancelar = document.getElementById('cancelar');

btnCancelar.addEventListener('click', function(){
    location = '../Principal/Logado.php';
});

function Deleta(id){
    location = `../../Control/CarrinhoCtr/DeleteCarrinho.php?Id=${id}`;
};
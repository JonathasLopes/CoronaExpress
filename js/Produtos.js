$(document).on('click', '.qty-plus', function () {
    $(this).prev().val(+$(this).prev().val() + 1);
});
$(document).on('click', '.qty-minus', function () {
    if ($(this).next().val() > 0) $(this).next().val(+$(this).next().val() - 1);
});

function enviaCarrinho(id, idp){
    var input = document.getElementById(idp);
    let qtd = input.value;
    input.value = 0;
    if(qtd > 0){
        location = `../../Control/CarrinhoCtr/CarrinhoCtr.php?id=${idp}&&Qtd=${qtd}`;
    }
    if(qtd == 0){
        alert('Não pode inserir sem uma quantidade!');
    }
}

var btnBuy = document.getElementById('buy');

btnBuy.addEventListener('click', function(){
    alert('Você não pode comprar, porque não está logado!');
    location = '../Login/Login.html';
});
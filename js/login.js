//ver senha e ocultar senha

var verSenha = document.getElementById('seePassword');

verSenha.addEventListener('click', function () {
    
    let naoVer = document.getElementById('noSee');
    let ver = document.getElementById('see');
    let senha = document.getElementById('InputSenha');

    if(senha.getAttribute('type') == 'password'){
        ver.style.display = 'none';
        naoVer.style.display = 'inherit';
        senha.setAttribute('type', 'text');
    }else{
        naoVer.style.display = 'none';
        ver.style.display = 'inherit';
        senha.setAttribute('type', 'password');
    }

});
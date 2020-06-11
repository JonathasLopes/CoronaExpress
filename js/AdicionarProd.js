var form = document.getElementById('form');

form.addEventListener('submit', function(e){
    let nome = form.nome;
    let categoria = form.categoria;
    let descricao = form.descricao;
    let preco = form.preco;
    let estoque = form.estoque;

    if(nome.value === "" || nome.value === null){
        alert('Nome não inserido!');
        e.preventDefault();
    }
    if(nome.value.length > 99){
        alert('Nome muito grande!');
        e.preventDefault();
    }

    if(categoria.value === "" || categoria.value === null){
        alert('Categoria não selecionada!');
        e.preventDefault();
    }
    
    if(descricao.value === "" || descricao.value === null){
        alert('Descrição sem informações!');
        e.preventDefault();
    }

    if(descricao.value.length > 999){
        alert('Descrição muito extensa!');
        e.preventDefault();
    }

    if(preco.value == "0.00" || preco.value == 0 || preco.value == null){
        alert('Valor não inserido!');
        e.preventDefault();
    }
    if(preco.value.length > 12){
        alert('Valor muito alto!');
        e.preventDefault();
    }

    if(estoque.value === "" || estoque.value === null || estoque.value == 0){
        alert('Estoque não pode ser vazio!');
        e.preventDefault();
    }
});
function EditaProd(id){
    location = `../../Control/MeusProdutosCtr/ObtemMeuProd.php?Id=${id}`;
}

function DeletaProd(id){
    if(confirm("Tem Certeza que deseja excluir seu produto?")){
        location = `../../Control/MeusProdutosCtr/DeletaMeuProd.php?Id=${id}`;
    }
}

function cancelar(){
    location = './MeusProdutos.php';
};
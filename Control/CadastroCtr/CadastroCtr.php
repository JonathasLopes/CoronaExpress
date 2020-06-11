<?php
    require_once ('../../model/CadastroMod/CadastroMod.php');
    require_once ('../../DAO/CadastroDAO/CadastroDAO.php');
            
    $DAOCad = new CadastroDAO();

    $Nome = $_POST['Input_Nome'];
    $Sobrenome = $_POST['Input_Sobrenome'];
    $CPF = $_POST['Input_CPF'];
    $Sexo = $_POST['Input_Sexo'];
    $Data = $_POST['Input_Data'];
    $CEP = $_POST['Input_CEP'];
    $Rua = $_POST['Input_Rua'];
    $Numero = $_POST['Input_Numero'];
    $Complemento = $_POST['Input_Complemento'];
    $Cidade = $_POST['Input_Cidade'];
    $UF = $_POST['Input_Estado'];
    $EstadoCivil = $_POST['Input_EstadoCivil'];
    $Tel = $_POST['Input_TelRes'];
    $Cel = $_POST['Input_Cel'];
    $Email = $_POST['Input_Email'];
    $Senha = $_POST['Input_Senha'];

    $CadUsuario = new CadastroMod($Nome, $Sobrenome, $CPF, $Sexo, $Data, $CEP, $Rua, 
    $Numero, $Complemento, $Cidade, $UF, $EstadoCivil, $Tel, $Cel, $Email, $Senha);

    $DAOCad->InsertUsuario($CadUsuario);

?>
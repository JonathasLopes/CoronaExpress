<?php
    require_once ('../../model/LoginMod/LoginMod.php');
    require_once ('../../DAO/LoginDAO/LoginDAO.php');
            
    $DAOLog = new LoginDAO();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $Login = new LoginMod($email, $senha);

    $DAOLog->FazerLogin($Login);
?>
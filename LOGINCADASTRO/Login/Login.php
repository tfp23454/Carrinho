<?php
    ini_set ( 'display_errors' , 1); 
    error_reporting (E_ALL);
    session_start();
    include("conexao.php");
    include("Funcoes.php");
    
    $login = $_POST['login'];
    $senha = $_POST['senha_login'];
    $admin = false;
    
    if($login <> '')
    {
        $_SESSION['logado'] = funcaoLogin($login, $senha,$admin);
        DefineCookie('loginCookie', $login, time() + (86400 * 30));    
        $_SESSION['adm'] = $admin;
    }
    else
    {
        echo"<script language='javascript'>";
        echo"alert('ERRO! LOGIN VAZIO OU INVÁLIDO.')";
        echo"</script>";
    }

?>
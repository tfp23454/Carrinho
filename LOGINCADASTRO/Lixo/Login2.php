<?php
    echo "teste0";
    ini_set ( 'display_errors' , 1); 
    error_reporting (E_ALL);
    session_start();
    include("conexao.php");
    echo"teste1";
    if($_SESSION['cadastrado']==true)
    {
        $email = $_SESSION['login'];
        $senha = $_SESSION['senha_login'];
        $_SESSION['cadastrado']=false;
        $_SESSION['email'] = "";
        $_SESSION['senha'] = "";
    }
    else
    {
        $email = $_POST["login"];
        $senha = $_POST["senha_login"];
        echo"Logou sozinho";
    }
    echo"teste3";
    $sql = "select * from tbl_usuario where email = $email and senha = $senha";
    $resultado = pg_query($conecta,$sql);
    if(pg_num_rows($resultado) > 0) /*Se existe usuário com tal nome e senha*/
    {
        $linha = pg_fetch_array($resultado); /*Percorre o resultado.*/

        $_SESSION['logado'] = $linha;
        $_SESSION['eh_adm'] = $linha['adm'];
    
    }
    echo"teste5";
    else
    {
        echo"NÃO EXISTE ESSE USER!";
    }
    echo"teste6";
<?php
function funcaoLogin ($paramLogin, $paramSenha, &$paramAdmin)  
  {
  //$paramAdmin = ($paramLogin == 'emailadmin' and $paramSenha = 'senhadoadm');
include("../conexao.php");
    $sql = "select * from tbl_usuario where email = '$paramLogin' and senha = '$paramSenha'";
    $resultado = pg_query($conecta, $sql);

    $linhas = pg_num_rows($resultado);

    if ($linhas > 0) //Se existe usuário com esse e-mail e senha
    {
        $varConectado = true;
        echo"LOGOOOOOU!";
    
    }
    else //Sem usuario com esse login e senha
    {
        $varConectado = false;
        echo "LOGIN INVALIDO!";
    }
  }

  function DefineCookie($paramNome, $paramValor, $paramMinutos) 
  {
   setcookie($paramNome, $paramValor, time() + $paramMinutos * 60); 
  }
?>
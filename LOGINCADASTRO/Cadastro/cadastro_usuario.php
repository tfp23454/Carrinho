<?php
   ini_set ('display_errors' ,1); 
   error_reporting (E_ALL);
    session_start();
    include "conexao.php";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $cpf = $_POST['CPF'];

    $sql = "SELECT * FROM tbl_usuario WHERE excluido = false AND cpf = $cpf";

    pg_send_query($conecta, $sql);
    $resultado = pg_get_result($conecta);
    $linhas = pg_affected_rows($resultado);

         if ($linhas > 0)
         {
            echo"Usuário ja existe!";
             /*Enviar um alerta dizendo que o usuário já existe. Redirecionar para Login*/
         }

/*$senha = md5($senha); //Criptografia da senha*/


// Inserção
$sql = "INSERT INTO tbl_usuario (cod_usuario, nome, email, senha, telefone, cpf, administrador, excluido, endereco)
            VALUES(DEFAULT,'$nome','$email','$senha','$telefone','$cpf', DEFAULT, DEFAULT, 'RUA C');";
// Execução
pg_send_query($conecta, $sql);    
$resultado = pg_get_result($conecta);
$linhas = pg_affected_rows($resultado);

if ($linhas == 0)
{
   /*Se a query de inserção falhar 
   (0 linhas afetadas, ele envia de volta para a página de cadastro.)*/
   echo'<script language="javascript">';
   echo"alert('Ocorreu um erro inesperado. Tente novamente.')</script>";
   header('Location: Cadastro.html');
}
else
{
   echo'<script language="javascript">';
   echo'alert("Cadastro bem sucedido.")';
   echo'</script>';

      $_SESSION['email']=$email;
      $_SESSION['senha']=$senha;
      header("Location: ../Login/Login.html"); 
}
pg_close($conecta);
?>
<?php

$stringdeconexao = "host= pgsql.projetoscti.com.br
                    port= 5432
                    dbname= projetoscti28
                    user= projetoscti28
                    password= 721794";

$conecta = pg_connect($stringdeconexao);

if (!$conecta) {
    echo '<script language="javascript">';
    echo "alert('A conexão com nosso banco de dados falhou. Tente novamente, por favor.')";
    echo '</script>';
    exit;
}
    else
    {
         echo '<script language="javascript">';
         echo "alert('Conexão com B.D bem sucedida (Mudar isso)')";
         echo '</script>';	
    }

?>
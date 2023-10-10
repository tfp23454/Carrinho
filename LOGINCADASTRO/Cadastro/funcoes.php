<?php

// $stringdeconexao = "host=
//                     port=
//                     dbname=
//                     user=
//                     password=";

$stringdeconexao = "Host = projetoscti.com.br; Port = 5432; 
dbname = projetoscti28; user = projetoscti16; password = 721794"

$conexao = pg_connect($stringdeconexao);

if (!$conexao) {
    echo '<script language="javascript">';
    echo "alert('Não foi possível estabelecer conexão com o banco de dados!')";
    echo '</script>';

    exit;
}
else
     {
         echo "Conexão estabelecida com o banco de dados!";
     }
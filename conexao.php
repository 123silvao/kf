<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bdname = "dbkf";

//criar conexao
$conexao = new mysqli ($servidor, $usuario, $senha, $bdname);

   if ($conn ->connect_errno)
   {
        echo "falha na conexao";
    }
    else
    {
        echo "conexão efetuata com sucesso";
    }

?>
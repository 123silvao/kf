<?php

if(isset($_POST['submit']))

include_once("conexao.php");

$nome =  $_POST['nome'];
$email = $_POST['email'];
$telefone= $_POST['telefone'];
$data = $_POST['data'];
$cidade= $_POST['cidade'];


//echo "nome: $nome <br>";
//echo "email: $email <br>";
//echo "cidade: $cidade <br>";
//echo "telefone: $telefone <br>";
//echo "data: $data <br>";

$result_cliente = "INSERT INTO cliente (nome, email,telefone,data,cidade,) VALUES('$nome', '$email', '$telefone', '$data','$cidade')";
$resultado_cliente = mysqli_query($conn, $result_cliente);






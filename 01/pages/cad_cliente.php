<?php

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];

$query = "INSERT INTO cliente(nome,email,telefone) VALUES ('$nome','$email','$telefone')";

$link = mysqli_connect("localhost", "root", "", "teste");

mysqli_query($link, $query);

echo "<script>alert('Cliente Cadastrado com Sucesso!');</script>";

echo "<script>location='index'</script>";


?>
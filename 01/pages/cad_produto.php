<?php

$nome = $_REQUEST['nome'];
$preco = $_REQUEST['preco'];
$desc = $_REQUEST['desc'];

$query = "INSERT INTO produto(nome,descricao,preco) VALUES ('$nome','$desc','$preco')";

$link = mysqli_connect("localhost", "root", "", "teste");

mysqli_query($link, $query);

echo "<script>alert('Produto Cadastrado com Sucesso!');</script>";

echo "<script>location='index'</script>";


?>
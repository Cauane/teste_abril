<?php

$id_produto = $_REQUEST['id_prod'];
$id_cliente = $_REQUEST['id_cliente'];

$query = "INSERT INTO pedido(id_produto,id_cliente) VALUES ('$id_produto','$id_cliente')";

$link = mysqli_connect("localhost", "root", "", "teste");

mysqli_query($link, $query);

echo "<script>alert('Pedido Cadastrado com Sucesso!');</script>";

echo "<script>location='index'</script>";


?>
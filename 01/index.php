
<?php 
include("conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>	

	<link rel="stylesheet" href="stilo.css" />

</head>

<body>

<!-- TOPO -->

	<!-- MENU -->

	<div class="util">

		<ul id="menu">
			<li><a href="cadastrar_produto">Cadastrar Produto</a></li>
			<li><a href="cadastrar_cliente">Cadastrar Cliente</a></li>
			<li><a href="cadastrar_pedido">Cadastrar Pedido</a></li>
		</ul>

	</div>



<!-- INTERNAS -->
<?php
$dir = 'pages/';
$ext = '.php';
$prm = array();	
$url = ( isset($_GET['page']) ) ? $_GET['page'] : 'index';
if ( substr_count($url, '/') > 0 ){
$atual = explode('/', $url);
$page  = ( file_exists( $dir . $atual[0] . $ext ) ) ? $atual[0] : 'help';
}else{
$page  = ( file_exists( $dir . $url . $ext ) ) ? $url : 'help';
}
include( $dir . $page . $ext );
?>


<!-- ESTOQUE -->

<div class="util">

	<a href="estoque"><input type="button" name="estoque" value="VER ESTOQUE" class="btn_estoque"></a>

</div>

</body>
</html>
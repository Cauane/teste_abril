<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>	

	<link rel="stylesheet" href="stilo.css" />
	<link rel="stylesheet" href="mobile.css" />
	<title>Quatro Rodas</title>

	<script src="//code.jquery.com/jquery-2.2.1.min.js"></script>

	<script type="text/javascript">
		
		$(document).ready(function(){

		    $('.menu-mobile').on('click touchstart', function(e){

		        $('html').toggleClass('menu-active');
		        e.preventDefault();

		    });

		    $('#icon_sair').on('click touchstart', function(e){

		        $('html').toggleClass('menu-active');
		        e.preventDefault();

		    });

		})


	</script>

</head>

<body>

<!-- TOPO -->

	<!-- PUBLICIDADE -->

	<div class="util">

		<center><img src="parts/img_anuncio.jpg" border="0" id="img_anuncio"> </center>

	</div> 

	<!-- MENU MOBILE -->

	 <span class="menu-mobile"></span>

	 <ul id="menu_m">

	 	<li><img src="parts/logo.jpg" border="0" id="logom"> <img src="parts/icon_sair.jpg" border="0" id="icon_sair"></li>

		<li>CARROS <img src="parts/icon_seta.jpg" border="0" id="seta_menu"></li>
		<li>TESTES<img src="parts/icon_seta.jpg" border="0" id="seta_menu"></li>
		<li>NOTÍCIAS<img src="parts/icon_seta.jpg" border="0" id="seta_menu"></li>
		<li>AUTO-SERVIÇO<img src="parts/icon_seta.jpg" border="0" id="seta_menu"></li>
		<li>GUIA DE COMPRAS<img src="parts/icon_seta.jpg" border="0" id="seta_menu"></li>
		<li>TABELA FIPE<img src="parts/icon_seta.jpg" border="0" id="seta_menu"></li>

	</ul>

	<!-- MENU -->

	<div class="util" id="bg_menu">

		<img src="parts/logo.jpg" border="0" id="logo">

		<ul id="menu">

			<li>CARROS <img src="parts/icon_seta.jpg" border="0"></li>
			<li>TESTES<img src="parts/icon_seta.jpg" border="0"></li>
			<li>NOTÍCIAS<img src="parts/icon_seta.jpg" border="0"></li>
			<li>AUTO-SERVIÇO<img src="parts/icon_seta.jpg" border="0"></li>
			<li>GUIA DE COMPRAS<img src="parts/icon_seta.jpg" border="0"></li>
			<li>TABELA FIPE<img src="parts/icon_seta.jpg" border="0"></li>
			<li>ASSINE</li>

		</ul>

		<div style="float:right; margin-right: 90px; margin-top: -5px;">

			<input type="text" name="pesq" placeholder="PESQUISAR" class="inp_pesq">
			<input type="image" src="parts/icon_lupa.jpg" class="btn_lupa">

		</div>

	</div>

	<!-- MENU 2 -->

	<div class="util" id="bg_menu2">

		<ul id="menu2">
			<li>+ ACESSADOS</li>
			<li>SALÃO DO AUTOMÓVEL</li>
			<li>RENEGADE</li>
			<li>NOVO SANDERO</li>
			<li>NOVO FOX</li>
			<li>NOVO KA</li>
			<li>HB20</li>
			<li>DUSTER</li>
			<li>GOLF</li>
			<li>COROLLA</li>
			<li>CIVIC</li>
			<li>A - Z</li>
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



</body>
</html>
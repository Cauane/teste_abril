<div class="util" style="margin-top: 100px;clear: both;">

	<div id="titulo_int">ESTOQUE</div> <br><br>

	<span>PRODUTOS:</span>

	<br><br>

	<?php

		$query = "SELECT * FROM produto";

		$link = mysqli_connect("localhost", "root", "", "teste");

		$sqlc = mysqli_query($link, $query);

		$num = mysqli_num_rows($sqlc);

		while($rowc = mysqli_fetch_array($sqlc)) {

			echo "- ".$rowc['nome'];
			echo "<br>";

		};
	?>

	<br><hr><br>

	<span>ESTOQUE:</span>

	<br><br>

	<?php

		$query2 = "SELECT c.nome, p.nome FROM pedido pe, cliente c, produto p where pe.id_cliente = c.id and pe.id_produto = p.id;";

		$link = mysqli_connect("localhost", "root", "", "teste");

		$sqlp = mysqli_query($link, $query2);

		$num2 = mysqli_num_rows($sqlp);

		while($rowp = mysqli_fetch_array($sqlp)) {

			echo "- Produto ".$rowp['nome']." vendido";
			echo "<br>";

		};

		echo "<br><br><br>";
		echo "<i>TOTAL DE PRODUTOS: ".$num."</i><br>";
		echo "<i>TOTAL DE PRODUTOS VENDIDOS: ".$num2."</i>";
	?>




</div>
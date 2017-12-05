<div class="util" style="margin-top: 100px;clear: both;">

	<div id="titulo_int">CADASTRO DE PEDIDO</div>

	<form action="cad_pedido" method="POST">
		
		<ul id="form_interno">
			<li>

				<select name="id_cliente" class="inp_forms">
					<option value="">Cliente</option>
					<?php

						$query = "SELECT * FROM cliente";

						$link = mysqli_connect("localhost", "root", "", "teste");

						$sqlc = mysqli_query($link, $query);

						while($rowc = mysqli_fetch_array($sqlc)) {
					?>

						<option value="<?=$rowc['id']?>"><?=$rowc['nome']?></option>

					<?php }; ?>

				</select>

			</li>

			<li>

				<select name="id_prod" class="inp_forms">
					<option value="">Produto</option>
					<?php

						$query2 = "SELECT * FROM produto";

						$link = mysqli_connect("localhost", "root", "", "teste");

						$sqlp = mysqli_query($link, $query2);

						while($rowp = mysqli_fetch_array($sqlp)) {
					?>

						<option value="<?=$rowp['id']?>"><?=$rowp['nome']?></option>

					<?php }; ?>

				</select>

			</li>

			<li><input type="submit" value="CADASTRAR" class="btn_forms"></li>
		</ul>

	</form>


</div>
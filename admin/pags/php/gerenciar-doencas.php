<div class="panel-content">
	<h4 class="titulo">Gerenciar Doenças</h4>
	<br>

	<div class="row">
		<div class="col-sm-7">
			<h5>Cadastrar</h5>
			<hr>

			<form method="POST" class="form-inline">
			<input type="text" name="doenca" class="form-control" placeholder="Nome da Doença">
			<input type="submit" value="Cadastrar" class="btn btn-primary">
			<input type="hidden" name="env" value="doen">
			</form><br>
			<?php addDoenca();?>


		</div>

		<div class="col-sm-5">
			<h5>Doenças</h5>
			<hr>
			<ul class="ul-adm">
                <?php getDoencasMenu();?>
            </ul>
		</div>
	</div>
</div>
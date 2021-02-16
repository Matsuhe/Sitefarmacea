<div class="panel-content">
	<h4 class="titulo">Gerenciar Subcategorias</h4>
	<br>

	<div class="row">
		<div class="col-sm-7">
			<h5>Cadastrar</h5>
			<hr>

			<form method="POST" class="form-inline" style="display: inline;">
			<input type="text" name="subcategoria" class="form-control" placeholder="Nome da Subcategoria">
			<br>
			<br>
			Categorias
      			<p><select class='form-control' name='categoria'>
        			<?php get_categorias();?>
      			</select></p>
    		<br>

    		<input type="submit" value="Cadastrar" class="btn btn-primary">
			<input type="hidden" name="env" value="subcat">
			</form><br>
			<?php addSubCategoria();?>


		</div>

		<div class="col-sm-5">
			<h5>Subcategorias</h5>
			<hr>
			<ul class="ul-adm">
                <?php getSubCategoriasMenu();?>
            </ul>
		</div>
	</div>
</div>
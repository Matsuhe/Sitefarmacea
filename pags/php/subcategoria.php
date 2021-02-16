<div class="busca">
  BUSCANDO PELA DOENÇA <b><?php echo strtoupper(getNomeCategoria($explode['1']));?></b>
</div>
<br>

<?php getPostsFromCategoria($explode['1']);?>

<ul class="pagination justify-content-center">
  <?php listaPaginasFromCategoria($explode['1']);?>
</ul>
        
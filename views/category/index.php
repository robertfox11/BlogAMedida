<h1>Gestionar categorias</h1>
<?php while($cat = $categorys->fetch_object()):?>
	<?=$cat->nombre;?>
<?php endwhile;?>
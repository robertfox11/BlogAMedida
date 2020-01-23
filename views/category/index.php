<h1>Gestionar categorias</h1>

<a href="<?=URL?>categoria/crear" class="button button-small">
	Crear categoria
</a>

<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
	</tr>
	<?php while($cat = $categorias->fetch_object()): ?>
		<tr>
			<td><?=$cat->id;?></td>
			<td><?=$cat->name;?></td>
		</tr>
	<?php endwhile; ?>
</table>


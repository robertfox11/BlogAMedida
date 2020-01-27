<h1>Crear Comments</h1>
<p>Añade nuevas entradas al blog para que puedan leerlas y disfrutarlas</p>
<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
	<strong class=".alert_green">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
	<strong class="alert_red">Registro fallido, introduce bien los datos</strong>
<?php endif; ?>
<?php Util::deleteSession('register'); ?>
<?php $categorys = Util::showCategory(); ?>
<div id="register">
<form action="<?=URL?>comments/saveComments" method="POST">
    <label for="categoria_id">Category</label>
    <select name="categoria_id" required>
        <?php while ($cat = $categorys->fetch_object()) : ?>
        <option name="categoria_id"value="<?= $cat->id; ?>"><?= $cat->name; ?></option>
        <?php endwhile; ?>
    </select>
    <label for="titulo">Title</label>
    <input type="text" name="titulo" required><br>
    <textarea name="descripcion" type="text" required>Description</textarea><br>
    <input type="submit" name="usuario_id" value="Guardar" />
</form>
</div>
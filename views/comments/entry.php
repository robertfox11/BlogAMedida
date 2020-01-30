<?php if (isset($edit)) : ?>
    <h1>Editar Comments</h1>
<?php else : ?>
    <h1>Crear Comments</h1>
    <p>Añade nuevas entradas al blog para que puedan leerlas y disfrutarlas</p>
<?php endif ?>


<?php $comments = Util::showComments(); ?>
<div id="register">
    <form action="<?= URL ?>comments/saveComments" method="POST">
        <label for="categoria_id">Category</label>
        <select name="categoria_id" required>
            <?php $categorys = Util::showCategory(); ?>
            <?php while ($cat = $categorys->fetch_object()) : ?>
                <option type="number" value="<?= $cat->id; ?>"><?= $cat->name; ?></option>
            <?php endwhile; ?>
        </select>
        <label for="titulo">Title</label>
        <input type="text" name="titulo" required><br>
        <textarea name="descripcion" type="text" required>Description</textarea><br>
        <input type="submit" value="Guardar" />
    </form>
</div>
<h1>Crear Nueva Category</h1>

<form action="<?=URL?>/category/saveCategory" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name" required>
    <input type="submit" value="Guardar"/>
</form>
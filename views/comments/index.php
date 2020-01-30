<h1>Hola Comments Views</h1>
<?php $comments = Util::showComments(); ?>
<?php while ($com = $comments->fetch_object()) : ?>
    <article class="entry">
        <a href="<?= URL ?>comments/ver&id">
            <h2><?= $com->titulo ?></h2>
            <span><?= $com->categoriaName . ' | ' . $com->fecha ?></span>
            <p><?= $com->descripcion ?></p>
        </a>
            <a href="<?= URL ?>comments/updateCategory&id=<?= $com->id; ?>"" class=" button button-small category category-green">Editar</a>
            <a href="<?= URL ?>comments/deleteComments&id=<?= $com->id; ?>" class="button button-small category category-blue">Delete</a>
    </article>
<?php endwhile; ?>
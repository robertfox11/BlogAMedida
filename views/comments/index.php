<h1>Hola Comments Views</h1>
<?php $comments = Util::showComments(); ?>
<?php while ($com = $comments->fetch_object()) : ?>
<article class="entry">
    <a href="<?=URL?>comments/ver&id">
        <h2><?=$com->titulo?></h2>
        <span><?=$com->categoriaName.' | '.$com->fecha?></span>
        <p><?=$com->descripcion?></p>
    </a>
</article>
<?php endwhile; ?>
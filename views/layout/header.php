<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= URL ?>assets/css/default.css">
    <title></title>
</head>

<body>
    <header id="header">
        <h1 id="blog">Blog</h1>
        <?php $categorias = Util::showCategory(); ?>
		<nav id="menu">
			<ul>
				<li>
				<a href="<?= URL ?>">Inicio</a>
				</li>
				<?php while ($cat = $categorias->fetch_object()) : ?>
					<li>
						<a href="<?= URL ?>categoria/ver&id=<?= $cat->id ?>"><?= $cat->name ?></a>
					</li>
				<?php endwhile; ?>
			</ul>
		</nav>
       
    </header>
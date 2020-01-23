<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=URL?>assets/css/default.css">
    <title></title>
</head>

<body>
    <header id="header">
        <h1 id="blog">Blog</h1>
        <nav>
            <ul>
           <?php if (isset($_SESSION['admin'])):?>
                <li><a href="alimentation">Alimentation</a></li>
                <li><a href="sport">Sport</a></li>
                <li><a href="cars">Cars</a></li>
            <?php endif; ?>
            <?php if (isset($_SESSION['identity'])):?> 
                <li><a href="home">home</a></li>
              <li><a href="<?=URL?>usuario/logout">Logout</a></li>
              <?php endif; ?>
            </ul>
        </nav>
    </header>
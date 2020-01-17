<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/default.css">
    <title></title>
</head>

<body>
    <header id="header">
        <h1 id="blog">Blog</h1>
        <nav>
            <ul>
                <li><a href="home">home</a></li>
                <li><a href="alimentation">Alimentation</a></li>
                <li><a href="sport">Sport</a></li>
                <li><a href="cars">Cars</a></li>
            </ul>
        </nav>
    </header>
    <div id="content">
        <!-- lateral -->
        <aside id="asideLogin">
            <div id="login" class="blockAside">
                <h3>Login</h3>
                <form action="#" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" />
                    <label for="passwoord">Password</label>
                    <input type="password" name="password" />
                    <input type="submit" value="Entrar" />
                </form>
            </div>
            <div id="register" class="blockAside">
                <h3>Register</h3>
                <form action="register.php" method="POST">
                    <label for="name">Name</label>
                    <input type="name" name="name" />
                    <label for="lastname">LastName</label>
                    <input type="lastname" name="lastname" />
                    <label for="email">Email</label>
                    <input type="email" name="email" />
                    <label for="passwoord">Password</label>
                    <input type="password" name="password" />
                    <input type="submit" value="Entrar" />
                </form>
            </div>
        </aside>
        <!-- principal -->
        <div id="chief">
            <!-- //titulos de enlaces -->
            <h1>Last entries</h1>
            <!-- entradas -->
            <article class="entry">
                <a href="">
                    <h2>Title</h2>
                    <p>
                        Description
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, mollitia quae blanditiis esse cupiditate vitae cumque vero dolorem nam aspernatur porro molestias sit. Aut id soluta vero? Aliquam, suscipit eos.
                    </p>
                </a>
            </article>
            <article class="entry">
                <a href="">
                    <h2>Title</h2>
                    <p>
                        Description
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, mollitia quae blanditiis esse cupiditate vitae cumque vero dolorem nam aspernatur porro molestias sit. Aut id soluta vero? Aliquam, suscipit eos.
                    </p>
                </a>
            </article>
            <article class="entry">
                <a href="">
                    <h2>Title</h2>
                    <p>
                        Description
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, mollitia quae blanditiis esse cupiditate vitae cumque vero dolorem nam aspernatur porro molestias sit. Aut id soluta vero? Aliquam, suscipit eos.
                    </p>
                </a>
            </article>
            <article class="entry">
                <a href="">
                    <h2>Title</h2>
                    <p>
                        Description
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, mollitia quae blanditiis esse cupiditate vitae cumque vero dolorem nam aspernatur porro molestias sit. Aut id soluta vero? Aliquam, suscipit eos.
                    </p>
                </a>
            </article>
            <!-- ver  entradas -->
            <div id="lookEntry">
                <a href="">Look All Entry</a>
            </div>
        </div>

    </div>
    <footer id="footer">
        <p>Robert Salazar &copy; 2020</p>
    </footer>

</body>

</html>
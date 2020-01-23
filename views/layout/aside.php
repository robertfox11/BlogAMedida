<div id="content">
    <!-- lateral -->
    <aside id="asideLogin">
        <div id="login" class="blockAside">
            <?php if (!isset($_SESSION['identity'])) : ?>
                <h3>Entrar en la Web</h3>
                <form action="<?= URL ?>usuario/login" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" />
                    <input type="submit" value="Entrar" />
                </form>
                <div>
                    <a href="" class="category category-blue">Crear Entradas</a>
                    <a href="" class="category category-green">Crear Category</a>
                    <a href="" class="category category-orange">Mis Datos</a>
                </div>
            <?php else : ?>
                <h3><?= $_SESSION['identity']->name ?> <?= $_SESSION['identity']->lastname ?></h3>
            <?php endif; ?>

        </div>
        <?php require_once 'views/user/register.php' ?>
    </aside>
    <!-- principal -->
    <div id="chief">
        <!-- //titulos de enlaces -->

        <h1>Last entries</h1>
        <!-- entradas -->
        <?php if (isset($_SESSION['identity'])) : ?>
            <article class="entry">
                <a href="">
                    <h2>Title</h2>
                    <p>
                        Description
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, mollitia quae blanditiis esse cupiditate vitae cumque vero dolorem nam aspernatur porro molestias sit. Aut id soluta vero? Aliquam, suscipit eos.
                    </p>
                </a>
            </article>
        <?php endif; ?>
        <article class="entry">
            <a href="">
                <h2>Title</h2>
                <p>
                    Description
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, mollitia quae blanditiis esse cupiditate vitae cumque vero dolorem nam aspernatur porro molestias sit. Aut id soluta vero? Aliquam, suscipit eos.
                </p>
            </a>
        </article>
        <?php if (isset($_SESSION['identity'])) : ?>
            <article class="entry">
                <a href="">
                    <h2>Title</h2>
                    <p>
                        Description
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, mollitia quae blanditiis esse cupiditate vitae cumque vero dolorem nam aspernatur porro molestias sit. Aut id soluta vero? Aliquam, suscipit eos.
                    </p>
                </a>
            </article>
        <?php endif; ?>
        <?php if (isset($_SESSION['identity'])) : ?>
            <article class="entry">
                <a href="">
                    <h2>Title</h2>
                    <p>
                        Description
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, mollitia quae blanditiis esse cupiditate vitae cumque vero dolorem nam aspernatur porro molestias sit. Aut id soluta vero? Aliquam, suscipit eos.
                    </p>
                </a>
            </article>
        <?php endif; ?>
        <!-- ver  entradas -->
        <div id="lookEntry">
            <a href="">Look All Entry</a>
        </div>
    </div>

</div>
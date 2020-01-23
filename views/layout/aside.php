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
    </aside>
    <!-- principal -->
    <div id="chief">
        <!-- //titulos de enlaces -->

        
        <!-- entradas -->
        
            <!-- <article class="entry">
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
            </article> -->
        
        <!-- ver  entradas -->
       

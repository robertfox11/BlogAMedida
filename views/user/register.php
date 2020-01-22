<h1>Registrarse</h1>

<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
	<strong class="alert_green">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
	<strong class="alert_red">Registro fallido, introduce bien los datos</strong>
<?php endif; ?>
<?php Util::deleteSession('register'); ?>

<div id="register" class="blockAside">
    <h3>Register</h3>
    <!-- index.php?controller=usuario&action=saveUser -->
    <form action="<?=URL?>usuario/saveUser" method="POST">
        <label for="name">Name</label>
        <input type="name" name="name" />
        <label for="lastname">LastName</label>
        <input type="lastname" name="lastname" />
        <label for="email">Email</label>
        <input type="email" name="email" />
        <input type="submit" value="Entrar" />
    </form>
</div>
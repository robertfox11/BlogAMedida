<!-- 
<h1>Register</h1>
<form action="" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name"/>

    <label for="lastname">Lastname</label>
    <input type="text" name="lastname"/>

    <label for="email">Email</label>
    <input type="emal" name="email"/>

    <label for="password">Password</label>
    <input type="password" name="password"/>

    <input type="submit" value="register">

</form> -->

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
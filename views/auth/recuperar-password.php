<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">A continuación ingresa tu nuevo password</p>

<?php include_once __DIR__ . "/../templates/alertas.php" ?>

<?php if($error) return; ?>

<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Password</label>
        <input name="password" id="password" type="password" placeholder="Ingresa aquí tu nuevo password">
    </div>
    <input type="submit" value="Actualizar Password" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes cuenta?, iniciar Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes cuenta?, crear una</a>
</div>
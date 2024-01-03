<h1 class="nombre-pagina">Olvidé mi password</h1>
<p class="descripcion-pagina">Ingresa tu email para reestablecer tu password</p>

<?php 
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" placeholder="Tu Email">
    </div>
    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Iniciar sesión</a>
    <a href="/crear-cuenta">Crear Cuenta</a>
</div>
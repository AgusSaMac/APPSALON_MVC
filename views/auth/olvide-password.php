<h1 class="nombre-pagina">Reestablece la contraseña</h1>
<p class="descripcion-pagina">Introduce tu correo para reestablecer la contraseña</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form action="/olvide" class="formulario" method="POST">
    <div class="campo">
        <label for="email">E-mail</label>
        <input type="email" id="email" placeholder="Tu E-mail" name="email">
    </div>
    <input type="submit" class="boton" value="Enviar instrucciones">
</form>

<div class="acciones">
    <a href="/">Ya tienes una cuenta? Inicia sesión!</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crea una!</a>
</div>
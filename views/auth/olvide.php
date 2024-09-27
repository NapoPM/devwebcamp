<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Recuperar Acceso en DevWebCamp</p>

    <form action="" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input type="email" class="formulario__input" placeholder="Tu Email" name="email" id="email">
        </div>

        <input type="submit" class="formulario__submit" value="Enviar Instruccioes">
    </form>

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Registrate.</a>
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Inicia Sesión.</a>
    </div>
</main>
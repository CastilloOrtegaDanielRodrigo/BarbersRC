<!-- Este es un encabezado para la página de inicio de sesión -->
<h1 class="nombre-pagina">Registrarse</h1>

<!-- Esta es una descripción breve que indica a los usuarios que ingresen sus datos -->
<div class="nombre-pagina-register">
    <p class="descripcion-pagina">Crea una cuenta en</p> <p class="loader">Barber's RC</p>
</div>

<?php 
    include_once __DIR__ . "/../templates/alertas.php"
?>

<!-- Formulario para registro de cuenta -->
<form class="formulario-pag-register" action="/register-account" method="POST">
    <div class="campo-pag-register">
        <label for="nombre">Nombre</label> 
        <div class="box-input">
            <div class="border">
                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    placeholder="Tu nombre"
                    value="<?php echo s($usuario->nombre);?>"
                    class="input">
            </div>
        </div>
    </div>

    <div class="campo-pag-register">
        <label for="apellido">Apellido</label> 
        <div class="box-input">
            <div class="border">
                <input
                    type="text"
                    id="apellido"
                    name="apellido"
                    placeholder="Tus Apellido"
                    value="<?php echo s($usuario->apellido);?>"
                    class="input">
            </div>
        </div>
    </div>

    <div class="campo-pag-register">
        <label for="telefono">Teléfono</label> 
        <div class="box-input">
            <div class="border">
                <input
                    type="tel"
                    id="telefono"
                    name="telefono"
                    placeholder="Tu número de teléfono"
                    value="<?php echo s($usuario->telefono);?>"
                    class="input">
            </div>
        </div>
    </div>

    <div class="campo-pag-register">
        <label for="email">Correo Electrónico</label> 
        <div class="box-input">
            <div class="border">
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Tu correo electrónico"
                    value="<?php echo s($usuario->email);?>"
                    class="input">
            </div>
        </div>
    </div>

    <div class="campo-pag-register">
        <label for="password">Contraseña</label> 
        <div class="box-input">
            <div class="border">
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Tu contraseña"
                    class="input">
            </div>
        </div>
    </div>

    <div class="contenedor-pag-register-boton">
        <input type="submit" class="boton-pag-register" value="Crear Cuenta">
    </div>
</form>

<!-- Acciones adicionales -->
<div class="acciones-inicio-olvidar">
    <div class="svg-wrapper">
        <svg height="60" width="190" xmlns="http://www.w3.org/2000/svg">
            <rect class="shape" height="60" width="190"></rect>
        </svg>
        <a href="/" class="text">Iniciar sesión</a>
    </div>
    <a href="/recovery" class="boton-olvidar">¿Olvidaste tu contraseña?</a>
</div>

<!-- Este es un encabezado para la página de inicio de sesión -->
<h1 class="nombre-pagina">Registrarse</h1>
<!-- Esta es una descripción breve que indica a los usuarios que ingresen sus datos -->
<div class="nombre-pagina-register">
    <p class="descripcion-pagina">Crea una cuenta en </p> <p class="loader">Barber's RC</p>
</div>

    <form class="formulario-pag-register" method="POST" action="/register-account">
    <div class="campo-pag-register">
        <label for="nombre">Nombre</label> 
        <div class="box-input"> <!-- validación selectiva de la entrada del usuario -->
            <div class="border"> <!-- Extremo u orilla de algo -->
                <input
                type="text"
                id="nombre"
                name="nombre"
                placeholder="Tu nombre"
                class="input">
            </div>
        </div>
    </div>

    <form class="formulario-pag-register" method="POST" action="/register-account">
    <div class="campo-pag-register">
        <label for="apellido">Apellido</label> 
        <div class="box-input"> <!-- validación selectiva de la entrada del usuario -->
            <div class="border"> <!-- Extremo u orilla de algo -->
                <input
                type="text"
                id="apellido"
                name="apellido"
                placeholder="Tus Apellido"
                class="input">
            </div>
        </div>
    </div>

    <form class="formulario-pag-register" method="POST" action="/register-account">
    <div class="campo-pag-register">
        <label for="telefono">Telefono</label> 
        <div class="box-input"> <!-- validación selectiva de la entrada del usuario -->
            <div class="border"> <!-- Extremo u orilla de algo -->
                <input
                type="tel"
                id="telefono"
                name="telefono"
                placeholder="Tu numero de telefono"
                class="input">
            </div>
        </div>
    </div>

    <form class="formulario-pag-register" method="POST" action="/register-account">
    <div class="campo-pag-register">
        <label for="email">Correo Electronico</label> 
        <div class="box-input"> <!-- validación selectiva de la entrada del usuario -->
            <div class="border"> <!-- Extremo u orilla de algo -->
                <input
                type="email"
                id="email"
                name="email"
                placeholder="Tu Correo Electronico"
                class="input">
            </div>
        </div>
    </div>

    <form class="formulario-pag-register" method="POST" action="/register-account">
    <div class="campo-pag-register">
        <label for="password">Contraseña</label> 
        <div class="box-input"> <!-- validación selectiva de la entrada del usuario -->
            <div class="border"> <!-- Extremo u orilla de algo -->
                <input
                type="password"
                id="password"
                name="password"
                placeholder="Tu Contraseña"
                class="input">
            </div>
        </div>
    </div>

    <div class="contenedor-pag-register-boton">
        <input type="submit" class="boton-pag-register" value="Crear Cuenta">
    </div>
</form>

<div class="acciones-inicio-olvidar">
<div class="svg-wrapper">
  <svg height="60" width="190" xmlns="http://www.w3.org/2000/svg">
    <rect class="shape" height="60" width="190"></rect>
    </svg>
    <a href="/" class="text">Iniciar sesión</a>
</div>
    <a href="/recovery" class="boton-olvidar">¿Olvidaste tu contraseña?</a>
</div>
<h1 class="nombre-pagina">Recuperar contraseña</h1>
<p class="descripcion-pagina">Ingresando su correo electronico</p>

<form class="formulario-pag-login" action="/recover" method="POST">
    <div class="campo-pag-login">
        <label for="Email">Correo Electronico</label>
        <div class="box-input">
            <div class="border">
                <input  
                    type="email"
                    id="email" 
                    placeholder="Ejemplo@barber.com" 
                    name="email" 
                    class="input">
            </div>
        </div>
    </div>

    <div class="contenedor-pag-login-boton">
        <input type="submit" class="boton-pag-login" value="Enviar">
    </div>
</form>
<div class="caja">
<div class="acciones-inicio-olvidar">
<div class="svg-wrapper">
  <svg height="60" width="190" xmlns="http://www.w3.org/2000/svg">
    <rect class="shape" height="60" width="190"></rect>
    </svg>
    <a href="/" class="text">Iniciar sesión</a>
</div>
    <div class="boton-ol">
        <div class="acciones-inicio-olvidar">
    <div class="svg-wrapper-login">
    <svg height="60" width="190" xmlns="http://www.w3.org/2000/svg">
        <rect class="shape-login" height="60" width="190"></rect>
        </svg>
        <a href="/register-account" class="text">Crear cuenta</a> 
    </div>
</div>    

    </div>
</div>

</div>



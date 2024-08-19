<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use Controllers\LoginControllers;
use MVC\Router;

$router = new Router();

//INICIAR SESION
$router->get('/', [LoginControllers::class, 'login']);
$router->post('/', [LoginControllers::class, 'login']);
$router->get('/logout', [LoginControllers::class, 'logout']); //CERRAR SESION

//RECUPERAR PASSWORD
$router->get('/recovery', [LoginControllers::class, 'recovery']);
$router->post('/recovery', [LoginControllers::class, 'recovery']);
$router->get('/recover', [LoginControllers::class, 'recover']); //VALIDAR QUE SE LE ENVIA AL USUARIO POR MEDIO DE SU EMAIL Y COMPROBAR QUE ES ESA PERSONA
$router->post('/recover', [LoginControllers::class, 'recover']); //PERMIRIR QUE PUEDAN AGREREGAR UNA NUEVA CONTRASEÑA

//CREAR CUENTAS
$router->get('/register-account', [LoginControllers::class, 'register']);
$router->post('/register-account', [LoginControllers::class, 'register']);
// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
<?php
namespace Controllers;

use Model\Usuario;
use MVC\Router;

class LoginControllers{

    public static function login(Router $router){ //INISIAR SESION

        $router->render('auth/login');
    }

    public static function logout(){ //CERRA SESION
        echo "Ubicacion: LOGOUT";
    }

    public static function recovery(Router $router){ //OLVIDE  PASSWORD
        $router->render('auth/forgot-password',[

        ]);
    }

    public static function recover(){ //RECUPEAR PASSWORD
        echo "Ubicacion: RECOVER";
    }

    public static function register(Router $router){ //REGISTAR CUENTA CREAR-CUENTA
        $usuario = new Usuario;

        //ALERTAS VACIAS
        $alertas = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();

            //reviar que alertas este vacio

            if(empty($alertas)){
                //VERIFICAR QUE EL USUARIO NO ESTE REGGISTRADO
            }
        }

        $router->render('auth/register-account', [
            'usuario' => $usuario,
            'alertas' => $alertas,


        ]);
    }
}
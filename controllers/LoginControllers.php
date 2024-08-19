<?php
namespace Controllers;

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

    public static function register(Router $router){ //REGISTAR CUENTA
        $router->render('auth/register-account');
    }
}
<?php

namespace Model;

class Usuario extends ActiveRecord { //mantiene una referencia en memoria ActiveRecord
    //BASE DE DATOS
    protected static $tabla = 'usuarios';
    protected static $columnsDB = ['id','nombre','apellido','email','password','telefono','admin','confirmado','token']; //PARA NORMALIZAR LOS DATOS, VA ITERAR SOBRE LOS REGISTROS Y LOS VA INSERTANDO 
    //ATRIBUTOS
    public$id;
    public$nombre;
    public$apellido;
    public$email;
    public$password;
    public$telefono;
    public$admin;
    public$confirmado;
    public$token;

    //DEFINIMOS EL CONTRUCTOR
    public function __construct($args = []) {
         $this->id = $args['id']?? null; //VALIDAR SI ESTAN VACIOS ESOS DATOS EN EL OBJETO
         $this->nombre = $args['nombre']?? '';
         $this->apellido = $args['apellido']?? '';
         $this->email = $args['email']?? '';
         $this->password = $args['password']?? '';
         $this->telefono = $args['telefono']?? '';
         $this->admin = $args['admin']?? null;
         $this->confirmado = $args['confirmado']?? null;
         $this->token = $args['token']?? '';

    }  

    //MENSAJES DE VALIDACION DE USUARIO{
    public function validarNuevaCuenta() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El nombre es Obligatorio';
        }

        if(!$this->apellido) {
            self::$alertas['error'][] = 'El apellido es Obligatorio';
        }

        if(!$this->email) {
            self::$alertas['error'][] = 'El Correo Electronico es Obligatorio';
        }
        if(!$this->telefono) {
            self::$alertas['error'][] = 'El Telefono es Obligatorio';
        }

        if(!$this->password) {
            self::$alertas['error'][] = 'La contraseña es Obligatorio';
        }

        if(strlen($this->password) < 6) {
            self::$alertas['error'][] = 'La Contraseña debe contener al menos 6 caracteres';
        }
    
    
        return self::$alertas;
    }
//REVISA SI EL USUARIO EXISTE
    public function existeUsuario() {
        $query = " SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1";
        
        $resultado = self::$db->query($query);

        if($resultado->num_rows) {
            self::$alertas['error'][] = 'El Usuario ya esta registrado';

        }

        return $resultado;
    }

    public function hashPassword() {
        $this->password = password_haSh($this->password, PASSWORD_BCRYPT);
    }

    public function creaToken() {
        $this->token = uniqid();
    }
}
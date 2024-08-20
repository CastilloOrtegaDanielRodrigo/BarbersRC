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
         $this->admin = $args['noadminmbre']?? null;
         $this->confirmado = $args['confirmado']?? null;
         $this->token = $args['token']?? '';

    }  
}
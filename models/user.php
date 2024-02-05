<?php
    include_once 'conexion.php';
    class User{
        var $objetos;
        public function __construct(){
            $db = new Conexion();
            $this->acceso = $db->pdo;
        }
        function login($user,$pass){
            $sql = "SELECT * FROM user
                    JOIN tipo_user ON id_tipo= tipo_user.id
                    WHERE user=:user AND pass=:pass";
            $consulta = $this->acceso->prepare($sql);
            $consulta-> execute(array("user"=> $user,"pass"=> $pass));
            $this->objetos = $consulta->fetchAll();
            return $this->objetos;
        }
    }
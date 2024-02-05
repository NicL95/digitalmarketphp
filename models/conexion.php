<?php
class Conexion {
    private $servidor="localhost";
    private $db= "digitalmarket";
    private $puerto= "3306";
    private $charset= "utf8";
    private $user= "root";
    private $pass= "";
    public $pdo = null;
    private $atributes= [PDO::ATTR_CASE=>PDO::CASE_LOWER, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_ORACLE_NULLS=>PDO::NULL_EMPTY_STRING,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ];
    function __construct(){
        $this->pdo = new PDO("mysql:dbname={$this->db};gost={$this->servidor};port={$this->puerto};charset={$this->charset}",
        $this->user,
        $this->pass,
        $this->atributes);
    }
}
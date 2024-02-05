<?php
include_once '../models/user.php';
session_start();
$usuario = new User();
if($_POST ['funcion'] == 'login'){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $usuario->login($user,$pass);
    if($usuario->objetos!=null){
        foreach ($usuario->objetos as $objeto) {
            $_SESSION['id'] = $objeto->id;
            $_SESSION['id'] = $objeto->user;
            $_SESSION['id'] = $objeto->id_tipo;
            $_SESSION['id'] = $objeto->image;
            
    echo 'login';
        }
    } else { echo 'no login'; }
    
}

if($_POST ['funcion'] == 'verificar_sesion'){
    if(!empty($_SESSION['id'])){
        $json[]=array('id'=>$_SESSION['id'],
        'user'=>$_SESSION['user'],
        'tipo_user'=>$_SESSION['tipo_user'],
        'image'=>$_SESSION['image'],
    );
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}
    else{
        echo 'nada';
    }
}
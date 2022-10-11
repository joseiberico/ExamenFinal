<?php
session_start();
require_once('database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $accion = $_POST['accion'];
    if($accion === 'login'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT id, nombre, username, estado
                FROM `usuarios`
                WHERE username='$username' AND password='$password'";
        $user = $db->query($sql)->fetch(PDO::FETCH_ASSOC);
        if($user){
            $_SESSION['username'] = $user;
           
            $respuesta = [
                "codigo" => 200,
                "data" => $user
            ];
        } else {
            $respuesta = [
                "codigo" => 404,
                "mensaje" => "Usuario y/o password incorrecto"
            ];
        }
        echo json_encode($respuesta);
    }
}
?>
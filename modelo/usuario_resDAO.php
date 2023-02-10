<?php

include_once("usuario_res.php");
function create_usuario_res($usuario_res){
    include_once("conexion.php");
    $sql="INSERT INTO usuario_respuesta(id_usuario_res, id_usuario,".
    "id_respuesta)VALUES ('".
        $usuario_res->getId_usuario_res()."','".
        $usuario_res->getId_usuario()."','".
        $usuario_res->getId_respuesta()."');";

    $stmt = $base_de_datos->prepare($sql);
    if($stmt->execute())
        return true;
    else
    return false;
}


function read_fecha($id_usuario_res){
    include_once("conexion.php");
    $stmt=$base_de_datos->prepare("select fecha from usuario_respuesta where id_usuario_res=$id_usuario_res");
    $stmt->execute();
    $b =$stmt->fetch(PDO::FETCH_OBJ);
    return $b;
}//buscar
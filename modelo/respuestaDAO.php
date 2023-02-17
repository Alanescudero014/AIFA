<?php

include_once("respuesta.php");
function create_respuesta($respuesta){
    include_once("conexion.php");
    $sql="INSERT INTO respuesta(id_respuesta, id_usuario, nombre, res1, res2, res3, res4, res5,".
    "res6, res7, res8, res9, res10, res11, res12,".
    "res13, res14, res15, res16, res17, res18,".
    "res19, res20)VALUES ('".
        $respuesta->getId_respuesta()."','".
        $respuesta->getId_usuario()."','".
        $respuesta->getNombre()."','".
        $respuesta->getRes1()."','".
        $respuesta->getRes2()."','".
        $respuesta->getRes3()."','".
        $respuesta->getRes4()."','".
        $respuesta->getRes5()."','".
        $respuesta->getRes6()."','".
        $respuesta->getRes7()."','".
        $respuesta->getRes8()."','".
        $respuesta->getRes9()."','".
        $respuesta->getRes10()."','".
        $respuesta->getRes11()."','".
        $respuesta->getRes12()."','".
        $respuesta->getRes13()."','".
        $respuesta->getRes14()."','".
        $respuesta->getRes15()."','".
        $respuesta->getRes16()."','".
        $respuesta->getRes17()."','".
        $respuesta->getRes18()."','".
        $respuesta->getRes19()."','".
        $respuesta->getRes20()."');";

    $stmt = $base_de_datos->prepare($sql);
    if($stmt->execute())
        return true;
    else
    return false;
}

function read_todos(){
    include_once("conexionP.php");

    $stmt=$conexion->prepare("SELECT id_respuesta FROM respuesta ORDER BY id_respuesta DESC LIMIT 1");
    $stmt->execute();
    if($stmt -> rowCount()>0){
    $results= $stmt->fetchAll(PDO::FETCH_OBJ);
    }else
        $results=null;

        return $results;
}//read_todos


function read_buscar($id_respuesta){
    include_once("conexion.php");
    $stmt=$base_de_datos->prepare("select id_respuesta from respuesta where id_respuesta=$id_respuesta");
    $stmt->execute();
    $c =$stmt->fetch(PDO::FETCH_OBJ);
    return $c;
}//buscar


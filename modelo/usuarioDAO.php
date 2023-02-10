<?php

include_once("usuario.php");
function create_usuario($usuario){
    include_once("conexion.php");
    $sql="INSERT INTO usuario(nombre, empleado, direccion,".
    "subdireccion, gerencia, cargo, correo, contrasena, estatus)VALUES ('".
        $usuario->getNombre()."','".
        $usuario->getEmpleado()."','".
        $usuario->getDireccion()."','".
        $usuario->getSubdireccion()."','".
        $usuario->getGerencia()."','".
        $usuario->getCargo()."','".
        $usuario->getCorreo()."','".
        $usuario->getContrasena()."','".
        $usuario->getEstatus()."');";

    $stmt = $base_de_datos->prepare($sql);
    if($stmt->execute())
        return true;
    else
        return false;


}//alta

function update_usuario($usuario){
    include_once("conexion.php");
    $sql="update usuario set nombre=?, ap_paterno=?, ap_materno=?, empleado=?, area=?, correo=?, contrasena=? where id_usuario=?";
    $stmt= $base_de_datos->prepare($sql);
    $n= $usuario->getNombre();
    $p= $usuario->getAp_paterno();
    $m= $usuario->getAp_materno();
    $e= $usuario->getEmpleado();
    $a= $usuario->getArea();
    $c= $usuario->getCorreo();
    $ps= $usuario->getContrasena();
    $id=$usuario->getId_usuario();
    $stmt->bindParam(1,$n);
    $stmt->bindParam(2,$p);
    $stmt->bindParam(3,$m);
    $stmt->bindParam(4,$e);
    $stmt->bindParam(5,$a);
    $stmt->bindParam(6,$c);
    $stmt->bindParam(7,$ps);
    $stmt->bindParam(8,$id);
    if($stmt->execute())
        return true;
    else    
        return false;
}//update



function update_status($usuario){
    include_once("conexion.php");
    $sql="update usuario set estatus=? where id_usuario=?";
    $stmt= $base_de_datos->prepare($sql);
    $n= $usuario->getStatus();
    $id=$usuario->getId_usuario();
    $stmt->bindParam(1,$s);
    $stmt->bindParam(2,$id);
    if($stmt->execute())
        return true;
    else    
        return false;
}//update

function delete_usuario($id_usuario){
    include_once("conexion.php");
    $sql="delete from usuario where id_usuario=?";
    $stmt=$base_de_datos->prepare($sql);
    $stmt->bindParam(1,$id_usuario);
    if($stmt->execute())
        return true;
    else    
        return false;
}

function read_todos(){
    include_once("conexion.php");

    $stmt=$base_de_datos->prepare("select * from usuario order by id_usuario");
    $stmt->execute();
    if($stmt -> rowCount()>0){
    $results= $stmt->fetchAll(PDO::FETCH_OBJ);
    }else
        $results=null;

        return $results;
}//read_todos


function read_buscar($id_usuario){
    include_once("conexion.php");
    $stmt=$base_de_datos->prepare("select * from usuario where id_usuario=$id_usuario");
    $stmt->execute();
    $c =$stmt->fetch(PDO::FETCH_OBJ);
    return $c;
}//buscar


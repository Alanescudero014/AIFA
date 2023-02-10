<?php

Class Usuario_res{
    private $id_usuario_res;
    private $id_usuario;
    private $id_respuesta;



public function __construct($id_usuario_res, $id_usuario, $id_respuesta){
                    $this->id_usuario_res = $id_usuario_res;
                    $this->id_usuario = $id_usuario;
                    $this->id_respuesta = $id_respuesta;

}

public function getId_usuario_res(){
    return $this->id_usuario_res;
}
public function setId_usuario_res($id_usuario_res){
    $this->id_usuario_res = $id_usuario_res;
}
public function getId_usuario(){
    return $this->id_usuario;
}
public function setId_usuario($id_usuario){
    $this->id_usuario = $id_usuario;
}
public function getId_respuesta(){
    return $this->id_respuesta;
}
public function setId_respuesta($id_respuesta){
    $this->id_respuesta = $id_respuesta;
}


}
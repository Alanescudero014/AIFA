<?php

class Usuario{
    private $id_usuario;
    private $nombre;
    private $empleado;
    private $direccion;
    private $subdireccion;
    private $gerencia;
    private $cargo;
    private $correo;
    private $contrasena;
    private $estatus;

    public function __construct($id_usuario, $nombre, $empleado, $direccion,
                            $subdireccion, $gerencia, $cargo, $correo, $contrasena, $estatus){
                    $this->id_usuario = $id_usuario;
                    $this->nombre = $nombre;
                    $this->empleado = $empleado;
                    $this->direccion = $direccion;
                    $this->subdireccion = $subdireccion;
                    $this->gerencia = $gerencia;
                    $this->cargo = $cargo;
                    $this->correo = $correo;
                    $this->contrasena = $contrasena;    
                    $this->estatus = $estatus;
                }

public function getId_usuario(){
    return $this->id_usuario;
}
public function setId_usuario($id_usuario){
    $this->id_usuario = $id_usuario;
}
public function getNombre(){
    return $this->nombre;
}
public function setNombre($nombre){
    $this->nombre = $nombre;
}
public function getEmpleado(){
    return $this->empleado;
}
public function setEmpleado($empleado){
    $this->empleado = $empleado;
}
public function getDireccion(){
    return $this->direccion;
}
public function setDireccion($direccion){
    $this->direccion = $direccion;
}
public function getSubdireccion(){
    return $this->subdireccion;
}
public function setSubdireccion($subdireccion){
    $this->subdireccion = $subdireccion;
}
public function getGerencia(){
    return $this->gerencia;
}
public function setGerencia($gerencia){
    $this->gerencia = $gerencia;
}
public function getCargo(){
    return $this->cargo;
}
public function setCargo($cargo){
    $this->cargo = $cargo;
}
public function getCorreo(){
    return $this->correo;
}
public function setCorreo($correo){
    $this->correo = $correo;
}
public function getContrasena(){
    return $this->contrasena;
}
public function setContrasena($contrasena){
    $this->contrasena = $contrasena;
}
public function getEstatus(){
    return $this->estatus;
}
public function setEstatus($estatus){
    $this->estatus = $estatus;
}
}
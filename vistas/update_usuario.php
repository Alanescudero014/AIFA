<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo '
    <script>
        alert("Por favor debes iniciar sesión");
        window.location = "../index.php";
    </script>
    ';
    session_destroy();
    die();
}
include_once("../modelo/usuario.php");
include('../modelo/cone.php');

$conn = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}

$id = $_SESSION['usuario']; 
                
$resultAll=mysqli_query($conn, "UPDATE usuario SET estatus = '1' WHERE id_usuario = $id ") or die(mysqli_error());

if(!$resultAll){
    die(mysqli_error($conn));
}

session_destroy();
header("location:../index.php");


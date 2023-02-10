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

include_once("../modelo/usuario_resDAO.php");

include('../modelo/cone.php');
$conn = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}

                
$resultAll=mysqli_query($conn, "SELECT * FROM respuesta ORDER BY id_respuesta DESC LIMIT 1;") or die(mysqli_error());

if(!$resultAll){
    die(mysqli_error($conn));
}
if (mysqli_num_rows($resultAll) > 0){
    while($rowData = mysqli_fetch_array($resultAll)){
        echo $rowData["id_respuesta"].'<br>';
$res = $rowData["id_respuesta"];

    }
}



$usuario_res = new Usuario_res("",$_SESSION['usuario'],$res);
create_usuario_res($usuario_res);

echo "<script>alert('OK.');</script>";



header("location:update_usuario.php");

//header("refresh:2;url=../index.php");

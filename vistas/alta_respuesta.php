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

include_once("../modelo/respuestaDAO.php");

if($_POST["res1"] == null){
    $_POST["res1"] == 0;
}

$respuesta = new Respuesta("",$_SESSION["usuario"],$_SESSION["nombre"],$_POST["res1"],$_POST["res2"],$_POST["res3"],$_POST["res4"],$_POST["res5"],$_POST["res6"],$_POST["res7"],$_POST["res8"],$_POST["res9"],$_POST["res10"],$_POST["res11"],$_POST["res12"],$_POST["res13"],$_POST["res14"],$_POST["res15"],$_POST["res16"],$_POST["res17"],$_POST["res18"],$_POST["res19"],$_POST["res20"]);

create_respuesta($respuesta);


echo "<script>alert('RESPUESTAS GUARDADAS EXITOSAMENTE, GRACIAS.');</script>";
header("refresh:1;url=update_usuario.php");

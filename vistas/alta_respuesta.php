<?php
include_once("../modelo/respuestaDAO.php");



$respuesta = new Respuesta("",$_POST["res1"],$_POST["res2"],$_POST["res3"],$_POST["res4"],$_POST["res5"],$_POST["res6"],$_POST["res7"],$_POST["res8"],$_POST["res9"],$_POST["res10"],$_POST["res11"],$_POST["res12"],$_POST["res13"],$_POST["res14"],$_POST["res15"],$_POST["res16"],$_POST["res17"],$_POST["res18"],$_POST["res19"],$_POST["res20"]);

create_respuesta($respuesta);




echo "<script>alert('RESPUESTAS GUARDADAS EXITOSAMENTE, GRACIAS.');</script>";
/*
$sql = "SELECT id_respuesta FROM respuesta ORDER BY id_respuesta DESC LIMIT 1";
$stmt = $base_de_datos->prepare($sql);
$stmt->execute();
    if($stmt->rowCount()>0)
        $respuesta = $stmt->fetch(PDO::FETCH_OBJ);
    else
     $id_respuesta = null;
    return $respuesta;*/
//header("refresh:2;url=../index.php");
header("refresh:1;url=alta_usuario_res.php");

<?php
session_start();

function validar($u,$c){
    include_once("conexion.php");
    $sql = "select * from usuario where correo = ? and contrasena = ?";
    $stmt = $base_de_datos->prepare($sql); 
    $stmt->bindParam(1,$u);
    $stmt->bindParam(2,$c);
    $stmt->execute();
    if($stmt->rowCount()>0)
        $usuario = $stmt->fetch(PDO::FETCH_OBJ);
    else
     $usuario = null;
    return $usuario;

}//funcion validar
$correo = $_POST['ingresoUsuario'];

$r= validar($_POST['ingresoUsuario'],$_POST['ingresoContrasena']);
$correo= $r->id_usuario;
$tiempo = 0;

if($r!=null){
    switch($r->estatus){
        case '0':
            $_SESSION['usuario'] = $correo;
            $_SESSION['nombre'] = $r->nombre;
            $_SESSION['time'] = $tiempo;
            header("location:../vistas/form.php");
        break;

        case '1':
            $_SESSION['usuario'] = $correo;
            $_SESSION['nombre'] = $r->nombre;
            echo '
                <script>
                    alert("Formulario ya contestado");
                    window.location = "../index.php";
                </script>
                ';

        break;


    } 
    
    //header("location:../vistas/form.php");

}else{    
    echo '
    <script>
        alert("Error, correo o contraseña incorrectos, vuelve a intentar");
        window.location = "../index.php";
    </script>
    ';
}
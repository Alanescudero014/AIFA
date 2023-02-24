<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

    function validar($u){
        include_once("../modelo/conexion.php");
        $sql = "select * from usuario where correo = ?";
        $stmt = $base_de_datos->prepare($sql); 
        $stmt->bindParam(1,$u);
        $stmt->execute();
        if($stmt->rowCount()>0)
            $usuario = $stmt->fetch(PDO::FETCH_OBJ);
        else
         $usuario = null;
        return $usuario;
    
    }//funcion validar
    $correo = $_POST['ingresoUsuario'];
    
    $r= validar($_POST['ingresoUsuario']);
    $correo= $r->id_usuario;
    $nom= $r->nombre;
    $password= $r->contrasena;

    if($r!=null){

        $mail = new PHPMailer;
        $url="http://localhost/AIFA/index.php";	
        $correo=$_POST['ingresoUsuario'];
        $pass=$password;
        $nombre=$nom;
        $body = "Hola $nombre, gracias por colaborar con está evaluación, la contraseña para ingresar es: $pass. <br>Ingresa la siguiente url para comenzar la evaluación: $url";

        $body= str_replace("#URL#", $url, $body);
        $body= str_replace("#USER#", $correo, $body);	
        $body= str_replace("#PASS#", $pass, $body);	
        $body= str_replace("#NAME#", $nombre, $body);	
        // Set PHPMailer to use the sendmail transport
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        $mail->SMTPAuth = true; 
        $mail->Username = "formprueba1@gmail.com";
        $mail->Password = "uxutguxywploddwh";
        $mail->setFrom ('formprueba1@gmail.com', 'AIFA');
        $mail->AddReplyTo ('formprueba1@gmail.com', 'AIFA');
        $mail->Subject = utf8_decode('Acceso a Evaluación');
        $mail->Body=$body;
        $mail->AltBody=$body;
        $mail->AddAddress($correo);
            if (!$mail->send()) {
                    $envio="no";
                    echo "<li>Mailer Error: " . $mail->ErrorInfo;
                } else {
                    $envio="si";
                echo "<li> Se envió correctamente";
                echo "<script>alert('Bienvenido, se envió un email con la contraseña para ingresar.')</script>;";
                header("refresh:1;url=../index.php");
                }

    }

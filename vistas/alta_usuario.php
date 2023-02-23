<?php
include_once("../modelo/usuarioDAO.php");
include '../modelo/conexionP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


$logitud = 8;
$psswd = substr( md5(microtime()), 1, $logitud);

if (isset($_POST["nombre"])) {
    
    if (
        preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nombre"]) &&
        preg_match('/^[0-9 ]+$/', $_POST["empleado"]) &&
        preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["direccion"]) &&
        preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["subdireccion"]) &&
        preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["gerencia"]) &&
        preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["cargo"])
    ) {
        $correo = $_POST['correo'];
        $nombre = $_POST['nombre'];



        $usuario = new Usuario("",$_POST["nombre"],$_POST["empleado"],$_POST["direccion"],$_POST["subdireccion"],$_POST["gerencia"],$_POST["cargo"],$_POST["correo"],$psswd,$_POST["estatus"]);

        $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo = '$correo'");

        if(mysqli_num_rows($verificar_correo) > 0){
            echo '
                <script>
                    alert("Este correo ya esta registrado, intenta con otro diferente");
                    window.location = "sesion.php";
                </script>
            ';
            exit();
        }else{

        create_usuario($usuario);

        

        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        $url="http://localhost/AIFA/index.php";	
        $correo=$_POST["correo"];
        $pass=$psswd;
        $nombre=$_POST["nombre"];
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
        $mail->Username = "2521180003ajescuderoa@gmail.com";
        $mail->Password = "mpyhasgjvhhfoiom";
        $mail->setFrom ('2521180003ajescuderoa@gmail.com', 'AIFA');
        $mail->AddReplyTo ('2521180003ajescuderoa@gmail.com', 'AIFA');
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
    }else{
        echo "<script>alert('Error, vuelve a intentarlo')</script>;";
        header("refresh:1;url=../index.php");
    }
}
<?php
include_once("../modelo/usuarioDAO.php");
include '../modelo/conexionP.php';


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
        echo "<script>alert('Bienvenido, ingresa usuario y contraseña')</script>;";
        header("refresh:1;url=../index.php");
/*
        $para      = 'Alanescudero014@gmail.com';
        $titulo    = 'Datos de Acceso';
        $mensaje   = '
                        <html>
                        <head>
                          <title>Datos de Acceso</title>
                        </head>
                        <body>
                          <p>Hola</p>
                          <br>
                          <p>Gracias por registrarse a la evaluación ética.</p>
                          <br><br>
                          <p><b>Estos son los datos de acceso para realizar su evalúación:</b></p>
                          <p><b>Usuario:</b></p>
                          <p><b>Contraseña: </b></p>
                          <input type="button" value="Inicie su evalúación" class="btn btn-danger">
                        </body>
                        </html>
                        ';
mail($para, $titulo, $mensaje);

        }
    }else{
        echo "<script>alert('ERROR, vuelve a intentarlo.');</script>";
        header("refresh:1;url=../index.php");
    */}
    }
}
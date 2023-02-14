<?php
//session_set_cookie_params(600,"/");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INICIO DE SESIÓN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
  main {
    background: #d9d7d5;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  footer{
	background-color: #111F2D;
	height: 50px;
	width: 100%;
	position: absolute;
	bottom: 0;
	text-align:center;
  }

  div {
    flex-basis: 100%;
    /*height: 100px;*/
    margin-bottom: 0.5rem;
	height: 52%;/*52 - 60*/
	width: 50%;
	margin:0px auto;
	border-radius: 40px;
	border: 0;
	
  }

  #contenedorPadre {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

  @media (min-width: 600px) {
    main {
      flex-wrap: nowrap;
    }

    div {
      flex-basis: 33%;
    }
  }
  input{
		border-radius: 10px;
		border: 0;
	}
	p{
        color: white;
    }
	a{
		
	}
	header{
		background-color: #111F2D;
		height: 70px;
	}

</style>

<body>
	<header class="navbar sticky-top flex-md-nowrap p-1 text-white m" style="background-color: #002b49">
    <a class="navbar-brand p-2">
        <img src="img/logo.svg" height="60rem"></a>
    <div class="navbar-nav">
    </div>
  </header>
	<div id="contenedorPadre" style="text-align: center;">
		<h1 style="color: #111F2D;">INICIO DE SESIÓN</h1>
		<hr>
		<div style="height: auto; background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/avion.png');">
				<form method="post" action="modelo/entrar.php"><br>
                    <p><b>Correo Electrónico:</b></p>
					<input type="email" name="ingresoUsuario" placeholder="Email" required><br><br>
					<p><b>Contraseña:</b></p>
					<input type="password" name="ingresoContrasena" placeholder="Password" required><br><br>
					<input type="submit" class="btn btn-light" value="Acceder">
					<p></p>
			</form>
			<br>
				</div>
				<hr>
		<div>
			<a href="#" class="btn btn-outline-dark">Olvide contraseña</a>
				<a href="vistas/sesion.php" class="btn btn-outline-dark">No tengo cuenta</a>
		
		</div>
	</div><!-- poner footer -->	
</body>
<footer>
	<p id="pie">Copyright © 2023 Aeropuerto Internacional Felipe Ángeles. </p>
</footer>
</html>
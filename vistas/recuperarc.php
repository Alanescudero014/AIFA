<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recuperar Contraseña</title>
	<link href='https://fonts.googleapis.com/css?family=Anton|Passion+One|PT+Sans+Caption' rel='stylesheet' type='text/css'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<style>
	*
    {
      font-family: 'PT Sans Caption', sans-serif, 'arial', 'Times New Roman';
    }
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
  }

  div {

    flex-basis: 100%;
    height: 100px;
    margin-bottom: 0.5rem;
		width: 50%;
		height: 90%;
		margin:0px auto;
		border-radius: 40px;
  }

  @media (min-width: 600px) {
    main {
      flex-wrap: nowrap;
    }

    div {
      flex-basis: 33%;
    }
  }
  input, textarea{
		border-radius: 6px;
		border: 0;
	
	}
	p, label{
		color: white;
	}

	#pie{
		text-align: center;
	}
	/* Por debajo de 700px */
    @media screen and (max-width: 1000px){
label, h1, p{
font-size:20px;
size: 20px;
}
input{
font-size:15px;
}
button{
	height: auto;
	width: auto;
	font-size: 20px;
	size: 20px;
	padding: 20px;
}

}
	/* Por debajo de 700px */
    @media screen and (max-width: 700px){
label, h1, p{
font-size:12px;
size: 12px;
}
input{
font-size:8px;
}
.titulo{
font-size:18px;
}
button{
	height: auto;
	width: auto;
	font-size: 12px;
	size: 12px;
	padding: 12px;
}
}
/* Por debajo de 400px */
@media screen and (max-width: 400px){
label, h1, p{
font-size:10px;
size: 10px;
}
input{
font-size:5px;
}
button{
	height: auto;
	width: auto;
	font-size: 5px;
	size: 5px;
	padding: 5px;
}
.titulo{
font-size:16px;
}
}

body{
	position: relative;
	padding-bottom: 33em;
}
header{
		background-color: #111F2D;
		height: 70px;
	}

#imagen{
	backdrop-filter: blur(10px);
}
</style>
<body id="imagen" style="border: 1px solid #aaaaaa; background-image: url('../img/pista.jpeg'); background-size: cover; background-repeat: no-repeat;">
<header class="navbar sticky-top flex-md-nowrap p-1 text-white m" style="background-color: #002b49">
    <a class="navbar-brand p-2">
        <img src="../img/logo.svg" height="60rem"></a>
    <div class="navbar-nav">
    </div>
    <a style="color: white;" class="btn btn-outline-primary" href="cerrar_sesion.php">ATRÁS</a>
  </header>
  <hr>
	<div style="width: 50%; text-align: center; height: auto; ">
			<h1 style="color: white; height: 100%; border-radius: 20px;">Recuperar Contraseña</h1>
		</div>
	<div style="text-align: center;justify-content: center;">		
	<br><br>
		<div style="border: 1px solid #aaaaaa;  width: 60%; height: 70%; background-color: rgba(0, 0, 0, 0.5);  ">
				<form method="post" action="envio_contra.php">
					<div style="width: 80%;">
					<br>
                    <label for="">Ingresa tu correo electrónico para enviar tu contraseña por email:</label><br><br>
					<p><input type="text" name="ingresoUsuario" placeholder="Correo Electrónico" required style="width: 80%;"></p><br>
						
						<p></p>
					</div><button type="submit" class="btn btn-outline-primary"><label>ENVIAR</label></button><p></p>
				</form>
		</div>
	</div>
</body>

<footer>
	<p id="pie" style="color: white;">Copyright © 2023 Aeropuerto Internacional Felipe Ángeles. </p>
</footer>
</html>
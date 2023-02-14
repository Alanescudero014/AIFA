<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CREAR SESIÓN</title>
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
		border-radius: 10px;
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
	padding-bottom: 8em;
}
</style>
<body>
<header class="navbar sticky-top flex-md-nowrap p-1 text-white m" style="background-color: #002b49">
    <a class="navbar-brand p-2">
        <img src="../img/logo.svg" height="60rem"></a>
    <div class="navbar-nav">
    </div>
  </header>
  <hr>
	<div style="width: 50%; text-align: center; height: auto; ">
			<h1 style="color: white; background-color: #111F2D; height: 100%; border-radius: 20px;">Registro de usuario a la Evaluación de Ética del<br> Aeropuerto Internacional Felipe Ángeles</h1>
		</div>
	<div style="text-align: center;justify-content: center;">		
	<br><br>
		<div style="border: 1px solid #aaaaaa; background-image: url('../img/form.png'); width: 60%; height: 70%;">
				<form method="post" action="alta_usuario.php">
					<br>
				<p><b>Nombre Completo:</b></p>
					<input type="text" name="nombre" required>
					<p><b>No. Empleado:</b></p>
					<input type="text" name="empleado" required>
					<p><b>Dirección:</b></p>
					<input type="text" name="direccion" required>
					<p><b>Subdirección:</b></p>
					<input type="text" name="subdireccion" required>
					<p><b>Gerencia:</b></p>
					<input type="text" name="gerencia" required >
					<p><b>Cargo:</b></p>
					<input type="text" name="cargo" required >
					<p><b>Correo Electrónico:</b></p>
					<input type="email" name="correo" required><br><br>
					<input type="hidden" name="estatus" value="0">
					<button type="submit" class="btn btn-outline-primary"><label>REGISTRAR</label></button>
					<p></p>
			</form>
		</div>
	</div>
</body>

<footer>
	<p id="pie">Copyright © 2023 Aeropuerto Internacional Felipe Ángeles. </p>
</footer>
</html>
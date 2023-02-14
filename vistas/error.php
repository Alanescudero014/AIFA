<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CREAR SESIÓN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<style>
      #contenedorPadre {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -30%);
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
}

body{
	position: relative;
	padding-bottom: 40em;
}
#pie{
    text-align:center;
}
h1{
    font-size: 100px;
}

</style>
<body>
<header class="navbar sticky-top flex-md-nowrap p-1 text-white m" style="background-color: #002b49;">
    <a class="navbar-brand p-2">
        <img src="../img/logo.svg" height="60rem"></a>
    <div class="navbar-nav">
    </div>
  </header>
  <hr>
	<div id="contenedorPadre" style="text-align: center;justify-content: center;">		
        <h1>404</h1>
        <p style="font-size">Página no encontrada</p>
        <div>
        <a href="index.php?pagina=registro" class="btn btn-danger">Volver</a>
    </div>
	</div>
    
</body>

<footer>
	<p id="pie" style="color: white;">Copyright © 2023 Aeropuerto Internacional Felipe Ángeles. </p>
</footer>
</html>
</body>
</html>
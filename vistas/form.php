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

if($_SESSION['time'] == null){
	$_SESSION['time'] = 0;
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>FORMULARIO</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Anton|Passion+One|PT+Sans+Caption' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<style>
*
    {
      font-family: 'PT Sans Caption', sans-serif, 'arial', 'Times New Roman';
    }

	* {
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-size: 16px;
    background: #fff;
    /*font-family: "Roboto";*/
}
/*
.wrap {
    width: 90%;
    max-width: 1500px;
    margin: 0 20px;
    margin: auto;
}*/


  main {
    background: #111F2D;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  	div {

    flex-basis: 100%;
    height: 100px;
    margin-bottom: 0.5rem;
	width: 90%;
		height: 90%;
		margin:0px auto;

  }
  .contenedor{
		width:100%;
		height:120px;
		display: flex;
		justify-content: space-between | space-around;
	}
	.contenido{
		height:80px;
		width:20%;

		margin: 10px;
	}

  footer{
	background-color: #111F2D;
	height: 50px;
	width: 100%;
	position: absolute;
	bottom: -20;
	text-align:center;
  }

  @media (min-width: 600px) {
    main {
      flex-wrap: nowrap;
    }

    div {
      flex-basis: 33%;
    }
  }
	section{
        background-color: #111F2D;
        color: white;
        width: 230px;
        height: 25px;
        border-radius: 40px;
        text-align: center;
    }

	/* Por debajo de 700px */
    @media screen and (max-width: 700px){
input, label, h1{
font-size:12px;
}
.titulo{
font-size:18px;
}
}
/* Por debajo de 400px */
@media screen and (max-width: 400px){
input, label, h1{
font-size:10px;
}
.titulo{
font-size:16px;
}
}
</style>

<script>
        alert("Bienvenido, gracias por colaborar con esta evaluación. Tienes 10 minutos para terminar."); //inicia alert
    </script>
    <script src="../js/alert.js">//temporizador</script>

<script language="javascript" type="text/javascript">
        var formulario = document.getElementById('formulario'); // el id del formulario
        var redirect = function(){
                    setTimeout("document.getElementById('formulario').submit()",599000)
        }
    </script><!-- Está función envia automaticamente el formulario en caso de 
    que el usuario no de clic en el botón de enviar -->


	<script language="javascript" type="text/javascript">

        function ahora(){
                    setTimeout("document.getElementById('formulario').submit()",1000)
        }
    </script><!-- Está función envia automaticamente el formulario en caso de 
    que el usuario no de clic en el botón de enviar -->

<body onload="redirect()">

<script>
		function mensaje() {
			a = "Menos de 1 minuto para terminar";
			document.getElementById('aviso').value = a;
 //alert("Tienes 1 minuto para terminar"); // mensaje de 1 min. para terminar
}
 
setTimeout(mensaje,540000);//540000 (9 minutos)
	</script>


<script>//SCRIPT 1
    var contador = 0;

	


	// replace() usando una expresión Regex para reemplazar espacios en blanco


	//console.log($variable);
	//id = localStorage.$variable;

    if (localStorage.usuario<?php echo $_SESSION['usuario'] ?> == null){
        var acumulado = 0;
    }else{
        var acumulado = Number(localStorage.usuario<?php echo $_SESSION['usuario'] ?>);//Aquí se guarda el tiempo
		var acu2 = <?php echo intval($_SESSION['time']) ?>;
    }
    
    function contadores(){
    
	contador++;
    console.log(contador);
    acumulado = acumulado + 1;
    localStorage.usuario<?php echo $_SESSION['usuario'] ?> = acumulado; 
}

setInterval('contadores()',1000);//1000 CADA SEGUNDO SE EJECUTA LA FUNCIÓN
    
    console.log(acumulado);

</script><!-- Esta función se utiliza para guardar en las varibles el tiempo que 
lleva el usuario, aun cuando refresque la página -->

<script> //SCRIPT 2
    function checar(){


    if(acumulado >= 599){// 15 -> tiempo de formulario en segundos (599 s / 10 minutos)
		ahora();
		delete localStorage.$variable;
    }else{
        //console.log('ok');
    }
}
setInterval('checar()',1000);// CADA SEGUNDO SE EJECUTA LA FUNCIÓN
</script><!-- Está función es para preguntar si ya han pasado el tiempo limite del formulario -->
<header class="navbar sticky-top flex-md-nowrap p-1 text-white m" style="background-color: #002b49">
    <a class="navbar-brand p-2">
        <img src="../img/logo.svg" height="60rem"></a>
    <div class="navbar-nav">
    </div>
  </header>
	<hr>
	<div style="text-align: center;">
	<div style="background-color: #111F2D; border-radius: 20px;">
		<h1 style="color: white; ">Evaluación del Código Ético de la Administración Pública Federal y Derechos Humanos</h1>
		</div>
		<hr><br>
		<div style="width: 60%;">
				<b><p style="color: black;">El examen se conforma de una sección de opción múltiple con 20 preguntas, constituyendo el 100% de calificación,
						cuenta con 10 minutos para contestarlo; deberá elegir la respuesta correcta. Tiene prohibido consultar apuntes, libros o cualquier
					otro artículo o material no específicado para la resolución de su examen.</p>
				<p style="color: black;">Lea detenidamente las preguntas y eliga la respuesta correcta (valor por cada pregunta 5 puntos).<?php echo $_SESSION['usuario'] ?></b></p>
				<hr>
				</div>
		<div style="text-align: left;" class="wrap">
		<div></div>
		<section>
			<p>
				<span id="minutes"></span> minutos : <span id="seconds"></span> segundos    
			</p>
			
		</section> <input type="text" name="aviso" id="aviso" style=" border: 0; color:red; font-weight: bold; width: 270px;" readonly><br>
				<form method="post" action="alta_respuesta.php" class="formulario" id="formulario">
					<div class="radio">
					<p>1. Tiene por objeto establecer los principios, valores, reglas de integridad y compromisos que deben ser conocidos
						y aplicados por todas las personas servidoras públicas, para propiciar ambientes laborales adecuados, fomentar su
						actuación ética, responsable y erradicar conductas que presenten actos de corrupción.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a1" name="res1" value="1">
						<label for="a1">a) Código de ética</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b1" name="res1" value="2">
						<label for="b1">b) Código de ética</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c1" name="res1" value="3">
						<label for="c1">c) Código de ética</label>
						</div>
					</div>
					<p>2. Comunicación verbal y escrita que tiene como finalidad visibilizar a las mujeres para equilibrar las asimetrías
						de género, así como valorar la diversidad que compone nuestra sociedad haciendo visibles a las personas y grupos históricamente
						discriminados.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a2" name="res2" value="1">
						<label for="a2">a) Lenguaje incluyente y no <br>sexista</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b2" name="res2" value="2">
						<label for="b2">b) Lineamientos</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c2" name="res2" value="3">
						<label for="c2">c) Código de conducta</label>
						</div>
					</div>
					<p>3. Es una forma de violencia de carácter sexual en la cual hay un ejercicio abusivo de poder por parte de quién la realiza
						y tiene lugar en una relación de subordinación jerárquica real de la victima frente a la persona agresora. Es expresada en 
						conductas verbales o de hecho, fisícas o visuales, independiente de que se realice en uno o varios eventos.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a3" name="res3" value="1">
						<label for="a3">a) Hostigamiento sexual</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b3" name="res3" value="2">
						<label for="b3">b) Acoso sexual</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c3" name="res3" value="3">
						<label for="c3">c) Acoso laboral</label>
						</div>
					</div>
					<p>4. Conjunto de ingresos financieros y materiales de los que disponen las Dependencias y Entidades para el
						cumplimiento de objetivos.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a4" name="res4" value="1">
						<label for="a4">a) Recursos públicos</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b4" name="res4" value="2">
						<label for="b4">b) Ingresos públicos</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c4" name="res4" value="3">
						<label for="c4">c) Programas gubernamentales</label>
						</div>
					</div>
					<p>5. De acuerdo al Código de Ética, se entiende como la situación en la cual las mujeres y los hombres acceden con las
						mismas posibilidades y oportunidades, al uso, control y beneficio de bienes, servicios y recursos de la sociedad.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a5" name="res5" value="1">
						<label for="a5">a) Equidad de género</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b5" name="res5" value="2">
						<label for="b5">b) Igualdad de género</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c5" name="res5" value="3">
						<label for="c5">c) Perspectiva de género</label>
						</div>
					</div>
					<p>6. Es una forma de violencia que se presenta en una serie de eventos que tienen como objeto intimidar, excluir, 
						opacar, amendentrar o consumir emocionalmente o intelectualmente a la víctima, causando daño físico, económico, 
						laboral-profesional.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a6" name="res6" value="1">
						<label for="a6">a) Hostigamiento sexual</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b6" name="res6" value="2">
						<label for="b6">b) Acoso laboral</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c6" name="res6" value="3">
						<label for="c6">c) Hostigamiento laboral</label>
						</div>
					</div>
					<p>7. Valor del servicio público, establecido en el Código de Ética, que hace mención que las personas servidoras públicas
						deben ser una figura ejemplar frente la sociedad y a sus equipos de trabajo, principalmente ante quienes se encuentren en cargo.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a7" name="res7" value="1">
						<label for="a7">a) Liderazgo</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b7" name="res7" value="2">
						<label for="b7">b) Cooperación</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c7" name="res7" value="3">
						<label for="c7">c) Respeto</label>
						</div>
					</div>
					<p>8. Es el abuso de cualquier posición de poder público o privado, con el objetivo de generar un beneficio indebido a costa
						del bienestar colectivo o individual.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio"id="a8" name="res8" value="1">
						<label for="a8">a) Corrupción</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b8" name="res8" value="2">
						<label for="b8">b) Peculado</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c8" name="res8" value="3">
						<label for="c8">c) Cohecho</label>
						</div>
					</div>
					<p>9. Las personas servidoras públicas deben distinguirse por actuar con rectitud, sin utlizar su cargo para obtener,
						pretender o aceptar cualquier beneficio para sí o a favor de terceras personas, nos referimos al principio de:
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a9" name="res9" value="1">
						<label for="a9">a) Honestidad</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b9" name="res9" value="2">
						<label for="b9">b) Honradez</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c9" name="res9" value="3">
						<label for="c9">c) Lealtad</label>
						</div>
					</div>
					<p>10. La secretaría, los Comités de Ética y los Órganos Internos de Control, en las dependencias y entidades, conforme al
						ámbito de sus atribuciones, vigilarán _______ de lo dispuesto de este Código de Ética.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a10" name="res10" value="1">
						<label for="a10">a) La observancia</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b10" name="res10" value="2">
						<label for="b10">b) Los lineamientos</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c10" name="res10" value="3">
						<label for="c10">c) La aplicación</label>
						</div>
					</div>
					<p>11. Son necesarios para asegurar la dignidad inherente a todas las personas:
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a11" name="res11" value="1">
						<label for="a11">a) Derechos humanos</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b11" name="res11" value="2">
						<label for="b11">b) Derechos universales</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c11" name="res11" value="3">
						<label for="c11">c) Derechos sociales</label>
						</div>
					</div>
					<p>12. Es el principio en el ejercicio del servicio público que significa la cobertura, sin exclusión ni discriminación
						de ningún tipo, hacia las personas que soliciten una atención o un servicio.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a12" name="res12" value="1">
						<label for="a12">a) Principio de universalidad</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b12" name="res12" value="2">
						<label for="b12">b) Principio de igualdad</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c12" name="res12" value="3">
						<label for="c12">c) Principio de no <br>discriminación</label>
						</div>
					</div>
					<p>13. Son aquellos derechos que forman parte de la base necesaria para que todas las personas puedan subsistir
						y alcanzar un desarrollo pleno.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a13" name="res13" value="1">
						<label for="a13">a) Políticos</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b13" name="res13" value="2">
						<label for="b13">b) Derechos económicos,<br> sociales,<br>culturales y ambientales</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c13" name="res13" value="3">
						<label for="c13">c) Progresivos</label>
						</div>
					</div>
					<p>14. Obliga a las y los servidores públicos a que los derechos humanos sean respetados y grantizados sin
						discriminación por motivo algúno, incluidos el sexo, la raza, el color, el idioma, la religión, la opinión política
						o de otra índole.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a14" name="res14" value="1">
						<label for="a14">a) El derecho a la igualdad y equidad</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b14" name="res14" value="2">
						<label for="b14">b) El derecho a la protección <br>social</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c14" name="res14" value="3">
						<label for="c14">c) El derecho a la igualdad</label>
						</div>
					</div>
					<p>15. ¿Qué significa que los derechos humanos sean inalienables?.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a15" name="res15" value="1">
						<label for="a15">a) Que nadie puede renunciar a <br>sus derechos humanos.</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b15" name="res15" value="2">
						<label for="b15">b) Que pueden transferirse <br> a quienes los necesite.</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c15" name="res15" value="3">
						<label for="c15">c) Que no pueden cancelarse <br>o quitársele a las personas</label>
						</div>
					</div>
					<p>16. La familia de Carolina, joven a quién le fue negado su derecho a estudiar, por identificarse como persona
						transgénero, solicita al Estado que a la joven le sea restituido su derecho humano y, que además, la secundaria
						de donde fue excluida ofrezca disculpas públicas y emprenda un programa de formación de docentes en materia de 
						Perspectiva de Género. ¿Qué deber cumple el Estado al adoptar esta medida?.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a16" name="res16" value="1">
						<label for="a16">a) Deber de sancionar</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b16" name="res16" value="2">
						<label for="b16">b) Deber de reparar</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c16" name="res16" value="3">
						<label for="c16">c) Deber de investigar</label>
						</div>
					</div>
					<p>17. Deben prevenir, investigar y sancionar toda la violación de derechos reconocidos por la Convención Americana,
						procurando además el restablecimiento, de ser posible, del derecho conculcado y, en su caso, la repración de los daños
						producidos por la violación de los derechos humanos.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a17" name="res17" value="1">
						<label for="a17">a) Los Estados</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b17" name="res17" value="2">
						<label for="b17">b) Leyes Generales para la Igualdad</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c17" name="res17" value="3">
						<label for="c17">c) Los ciudadanos</label>
						</div>
					</div>
					<p>18. Es una herramienta jurídica que permite defenderse a todas las personas dentro del territorio nacional
						de manera pacífica, de los actos de la autoridad que violen los derecho humanos.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a18" name="res18" value="1">
						<label for="a18">a) Acción Inconstitucional</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b18" name="res18" value="2">
						<label for="b18">b) Juicio de amparo</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c18" name="res18" value="3">
						<label for="c18">c) Mecanismos de protección jurisdiccional</label>
						</div>
					</div>
					<p>19. El deber constitucional de promover, respetar, proteger y garantizar los derechos humanos le corresponde a:
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a19" name="res19" value="1">
						<label for="a19">a) Los gobernados</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b19" name="res19" value="2">
						<label for="b19">b) Todas las autoridades</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c19" name="res19" value="3">
						<label for="c19">c) Los ciudadanos</label>
						</div>
					</div>
					<p>20. ¿Cuáles son los principios de los derechos humanos establecidos en la Constitución?.
					</p>
					<div class="contenedor" style="text-align:center;">
						<div class="contenido">
						<input type="radio" id="a20" name="res20" value="1">
						<label for="a20">a) Universalidad, interdependencia<br>indivisibilidad y progresividad</label>
						</div>
						<div class="contenido">
						<input type="radio" id="b20" name="res20" value="2">
						<label for="b20">b) Participación ciudadana e <br> inclusión social</label>
						</div>
						<div class="contenido">
						<input type="radio" id="c20" name="res20" value="3">
						<label for="c20">c) Organización social económica,<br>  política y cultural</label>
						</div>
					</div>
					</div>
					<div style="text-align:center;">
					<button type="submit" class="btn btn-outline-dark">GUARDAR</button></div>
			</form>
		</div>
	</div>
	<a href="cerrar_sesion.php">SALIR</a>
</body>
<footer>
	<p id="pie" style="color: white;">Copyright © 2023 Aeropuerto Internacional Felipe Ángeles. </p>
</footer>
</html>
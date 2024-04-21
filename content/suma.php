<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Juego de suma</title>
	<link rel="stylesheet" href="../css/stylesSuma.css">
</head>

<body>
	<h1>¡Diviértete practicando las sumas!</h1>
	<div class="container">
		<div class="izquierdo">
			<div class="container-operacion">
				<span id="suma">9 + 9 =</span>
				<span class="resultado" id="resultado"> 18</span>
			</div>
			<span class="msj" id="msj">

			</span>
		</div>
		<div class="derecha">
			<span id="op1" class="opcion" onclick="controlarRespuesta(this)">18</span>
			<span id="op2" class="opcion" onclick="controlarRespuesta(this)">17</span>
			<span id="op3" class="opcion" onclick="controlarRespuesta(this)">8</span>
		</div>
	</div>

	<a href="../content/home-user.php" class="rounded-corner-button">Ir al inicio</a>

	<script src="../js/scriptsuma.js"></script>

	<audio id="audioCorrecto" src="../audios/correcto.mp3"></audio>
	<audio id="audioPerdedor" src="../audios/incorrecto.mp3"></audio>

</body>

</html>
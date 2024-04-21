<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/stylesmate.css">
    <title>Operaciones</title>
</head>

<body>
    <div class="container">
        <h2>¡Elije una operación matemática y resuelve!</h2>
        <section class="container-operadores">
            <button id="suma" onclick="btnSumar()">
                <i class="fa-solid fa-plus"></i>
            </button>
            <button id="resta" onclick="btnResta()">
                <i class="fa-solid fa-minus"></i>
            </button>
            <button id="producto" onclick="btnProducto()">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <button id="division" onclick="btnDivision()">
                <i class="fa-solid fa-divide"></i>
            </button>
        </section>

        <section class="container-operacion">
            <span id="num1"></span>
            <span id="operacion"></span>
            <span id="num2"></span>
            <span> = </span>
            <input type="text" id="respuesta_usuario">
            <button id="corregir" onclick="corregir()">Checar</button>

        </section>

        <section id="msj_correccion">

        </section>
    </div>

    <a href="../content/home-user.php" class="rounded-corner-button">Ir al inicio</a>

    <script src="../js/scriptMatematicas.js"></script>

    <audio id="audioCorrecto" src="../audios/correcto.mp3"></audio>
    <audio id="audioPerdedor" src="../audios/incorrecto.mp3"></audio>

</html>
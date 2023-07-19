<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sodoku Matemático</title>
    <link rel="stylesheet" href="estilo_multiplicar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<header>
    <?php include "header.php"; ?>
</header>
<body>
    <br>
        <div class="contenedor">
        <h1>MULTIPLICAR</h1>
        <table>
            <tr>
                <td class="contiene">12</tr>
                <td class="contiene">*</td>
                <td class="contiene">6</td>
                <td class="contiene">=</td>
                <td class="no-contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            </tr>
            <tr>
                <td class="contiene">45</td>
                <td class="contiene">*</td>
                <td class="contiene">5</td>
                <td class="contiene">=</td>
                <td class="no-contiene" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            </tr>
            <tr>
                <td class="no-contiene" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">*</td>
                <td class="no-contiene" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="contiene">10</td>
            </tr>
            <tr>
                <td class="contiene">14</td>
                <td class="contiene">*</td>
                <td class="contiene">3</td>
                <td class="contiene">=</td>
                <td class="no-contiene" id="4" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            </tr>
            <tr>
                <td class="no-contiene" id="5" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">*</td>
                <td class="contiene">2</td>
                <td class="contiene">=</td>
                <td class="contiene">36</td>
            </tr>
        </table>
    <br>
        <div class="contenedor-alternativo">
            <div class="caja" draggable="true" ondragstart="drag(event)" id="a">72</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="b">225</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="c">2</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="d">5</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="e">18</div>
        </div>
    <br>
    <br>
    <div class="marco">
            <div class="tiempo" id="tiempo">00:00:00.000</div>
            <div class="botones-contenedor">
            <div class="btn" onclick="iniciar()">
            <i class="fas fa-play"></i>
        </div>
        <div class="btn" onclick="pausar()">
            <i class="fas fa-pause"></i>
        </div>
        <div class="btn" onclick="reiniciar()">
            <i class="fas fa-undo-alt"></i>
        </div>
        <br>
        <br>
        <div class="resultado">
        <h2>resultado</h2>
        </div>
        <script src="multiplicar.js"></script>
        <script src="tiempo.js"></script>
    </div>
</body>
</html>

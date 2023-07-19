<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sodoku Matemático</title>
    <link rel="stylesheet" href="estilo_restar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<header>
    <?php include "header.php"; ?>
</header>
<body>
    <div class="contenedor">
        <h1>restar</h1>
        <table>
            <tr>
                <td class="contiene">22</td>
                <td class="contiene">-</td>
                <td class="no-contiene" id="0" ondrop="drop(avent)" andragrover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="contiene">2</td>
            </tr>
            <tr>
                <td class="no-contiene" id="1" ondrop="drop(avent)" andragrover="allowDrop(event)"></td>
                <td class="contiene">-</td>
                <td class="no-contiene" id="2" ondrop="drop(avent)" andragrover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="contiene">24</td>
            </tr>
            <tr>
                <td class="contiene">12</td>
                <td class="contiene">-</td>
                <td class="no-contiene" id="3" ondrop="drop(avent)" andragrover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="contiene">0</td>
            </tr>
            <tr>
                <td class="contiene">45</td>
                <td class="contiene">-</td>
                <td class="no-contiene" id="4" ondrop="drop(avent)" andragrover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="contiene">7</td>
            </tr>
            <tr>
                <td></td>
                <td class="contiene">-</td>
                <td></td>
                <td class="contiene">=</td>
                <td></td>
            </tr>
        </table>
        <br>
        <div class="contenedor-alternativo">
        <div class="caja" draggable="true" ondragstart="drag(event)" id="a">10</div>
        <div class="caja" draggable="true" ondragstart="drag(event)" id="b">48</div>
        <div class="caja" draggable="true" ondragstart="drag(event)" id="a">24</div>
        <div class="caja" draggable="true" ondragstart="drag(event)" id="a">12</div>
        <div class="caja" draggable="true" ondragstart="drag(event)" id="a">38</div>
        </div>
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
        <script src="restar.js"></script>
        <script src="tiempo.js"></script>
    </div>
</body>
</html>
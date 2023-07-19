<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sodoku matematico</title>
    <link rel="stylesheet" type="text/css" href="estilo_division.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<header>
    <?php include "header.php";?>
</header>
<body>
    <div class="contenedor"> 
        <h1>division</h1>
        <Table>
            <tr>
                <td class="no-contiene" id="0" ondrop="drop(avent)" andragrover="allowDrop(event)"></td>
                <td class="contiene">:</td>
                <td class="no-contiene" id="1" ondrop="drop(avent)" andragrover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="contiene">6</td>
            </tr>
            <tr>
                <td class="contiene">12</td>
                <td class="contiene">:</td>
                <td class="no-contiene" id="2" ondrop="drop(avent)" andragrover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="no-contiene" id="3" ondrop="drop(avent)" andragrover="allowDrop(event)"></td>
            </tr>
            <tr>
                <td class="no-contiene" id="1" ondrop="drop(avent)" andragrover="allowDrop(event)"></td>
                <td class="contiene">:</td>
                <td class="contiene">25</td>
                <td class="contiene">=</td>
                <td class="contiene">5</td>
            </tr>
            <tr>
                <td class="contiene">=</td>
                <td></td>
                <td class="contiene">=</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="contiene">81</td>
                <td class="contiene">:</td>
                <td class="no-contiene" id="0" ondrop="drop(avent)" andragrover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="no-contiene" id="0" ondrop="drop(avent)" andragrover="allowDrop(event)"></td>
            </tr>
        </Table>
        <br>
        <div class="contenedor-alternativo">
                <div class="caja" draggable="true" ondragstart="drag(event)" id="a">52</div>
                <div class="caja" draggable="true" ondragstart="drag(event)" id="b">1</div>
                <div class="caja" draggable="true" ondragstart="drag(event)" id="c">17</div>
                <div class="caja" draggable="true" ondragstart="drag(event)" id="d">16</div>
                <div class="caja" draggable="true" ondragstart="drag(event)" id="e">9</div>
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
        <script src="division.js"></script>
        <script src="tiempo.js"></script>
    </div>
</body>
</html>
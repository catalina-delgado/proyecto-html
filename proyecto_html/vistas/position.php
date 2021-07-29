<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: lightblue;
        }
        .cuadrado{
            width: 50px;
            height: 50px;
            background-color: yellow;
            position: fixed;
        }
        .referencia{
            background-color: mediumslateblue;
            padding: 30px;
            height: 150vh;
        }
        .contenedor{
            background-color: lightsalmon;
            width: 70%;
            height: 300px;
            margin: auto;
            /* position: relative; */
        }
        .circulo{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: limegreen;
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
</head>
<body>
        <div class="contenedor">
            <div class="circulo"></div>
        </div>
</body>
</html>
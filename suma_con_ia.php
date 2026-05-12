<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Sumas</title>

    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body{
            background: #f4f4f4;
            /* flex-wrap: hace que el contenido si no cabe en la pantalla baje, va con display flex */
            display: flex;
            flex-wrap: wrap;
            /* texto justificado y centrado */
            justify-content: center;
            /* le pone un margin-right:15px; a cada componente del body */
            gap: 15px;
            padding: 20px;
        }

        .tabla{
            background: goldenrod;
            border: 4px solid black;
            border-radius: 20px;
            width: 220px;
            padding: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .titulo{
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
            color: black;
        }

        .par,
        .impar{
            padding: 8px;
            margin: 5px 0;
            border-radius: 10px;
            text-align: center;
            font-weight: bold;
            transition: transform 0.2s;
        }

        .par{
            background: #ff6b6b;
            border: 2px solid darkred;
            color: white;
        }

        .impar{
            background: #4dd0e1;
            border: 2px solid #0077b6;
            color: black;
        }

        .par:hover,
        .impar:hover{
            transform: scale(1.03);
        }
    </style>
</head>

<body>

<?php
/* he aprendido que es mas eficiente usar la ia para complementar el desarrollo
de una web que para que lo haga todo, ademas si le das solo una tarea como el
estilo por ejemplo es mas eficiente */
for ($i = 0; $i <= 10; $i++) {

    echo '<div class="tabla">';
    echo '<div class="titulo">Tabla del ' . $i . '</div>';

    for ($j = 0; $j <= 10; $j++) {

        $suma = $i + $j;

        $clase = ($suma % 2 == 0) ? 'par' : 'impar';

        echo '<div class="' . $clase . '">';
        echo "$i + $j = $suma";
        echo '</div>';
    }

    echo '</div>';
}

?>

</body>
</html>
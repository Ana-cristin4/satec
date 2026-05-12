<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUMAS</title>
    <style>
    body{
        display: flex;
        
    }
    #tabla{
        background-color: goldenrod;
        border: 4px solid black;
        border-radius: 25px;
        margin: 4px;
        height: auto;
        width: 20%;
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    #par{
        background-color: red;
        height: auto;
        width: 90%;
        margin: 3px;
        margin-right: 5%;
        margin-left: 5%;
        text-align: center;
        border-radius: 12px;
        border: 3px solid darkred;
    }
    #impar{
        background-color: aqua;
        height: auto;
        width: 90%;
        margin: 3px;
        margin-right: 5%;
        margin-left: 5%;
        text-align: center;
        border-radius: 12px;
        border: 3px solid blue;
    }
    </style>
</head>
<body>
    <?php 
    for ($i=0; $i < 11; $i++) { 
        echo('<div id="tabla">');

        for ($j=0; $j < 11; $j++) { 

            if (($j+$i)%2==0) {

                echo('<div id="par">');
            } else {
                echo('<div id="impar">');
            }
            
            echo($i." + ".$j." = ".$i+$j."<br>");

            echo("</div>"); 
        }
        echo("</div>");
    }

     ?>
</body>
</html>
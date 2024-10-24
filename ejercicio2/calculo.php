<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Cálculo</title>
</head>
<body>
    <h1>Resultado del Cálculo del Tiempo de Viaje</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $distancia = $_POST['distancia'];
        $velocidad = $_POST['velocidad'];

        
        if ($velocidad > 0) {
           
            $tiempo = $distancia / $velocidad;

            echo "<h2>El tiempo estimado de viaje es: " . round($tiempo, 2) . " horas.</h2>";
        } else {
            echo "<h2>La velocidad debe ser mayor que 0.</h2>";
        }
    } else {
        echo "<h2>Por favor, envía el formulario correctamente.</h2>";
    }
    ?>
    
    <br>
    <a href="index.html">Volver al formulario</a>
</body>
</html>

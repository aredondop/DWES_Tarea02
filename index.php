<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES - Tarea 02 - Ángel Redondo Pliego</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
        <a class="navbar-brand" href="#">DWES</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#tarea2">Tarea 2</a></li>
            </ul>
        </div>
    </nav>

    <div class="container" style="padding-top: 70px;">

        <section id="tarea2">
            <div class="page-header"><h1>Tarea 2</h1></div>
            <p><?php echo 'Angel 0#######D'; ?></p>
            <p><?php echo 'El código del script php siempre se incluye entre las etiquetas <?php y ?>'; ?>

            <?php
            /**
             * Definimos todo lo que se nos pide!
             */
            
            $varEntera = 10;
            $varDecimal = 8.22;
            $varBooleana = true;
            $varCadena = 'cadena';
            define( 'CONSTANTE', 3.14);

            // Y ahora lo pintamos :-)

            echo '<li> 
                    <ul>varEntera: ' .$varEntera .' </ul>
                    <ul>varDecimal: ' .$varDecimal .' </ul>
                    <ul>varBooleana: ' .$varBooleana .' </ul>
                    <ul>varCadena: ' .$varCadena .' </ul>
                    <ul>constante: ' . CONSTANTE  .' </ul>
                    <ul>varEntera + varDecimal: ' . ($varEntera + $varDecimal) .' </ul>
                </li>';

            ?>

        </section>

       
    </div>

    <!-- Pie de página -->
    <footer class="footer">
        <div class="container">
            <p class="text-muted">© 2024 Ángel Redondo Pliego</p>
        </div>
    </footer>

</body>
</html>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web II Calculadora</title>
    </head>
    <body>
        <h1>Trabajo practico web 2 TUDAI UNICEN</h1>
        <nav>
            <ul>
                <li><a href="index.html">calculadora</a></li>
                <li><a href="pi.php">numero pi</a></li>
                <li><a href="about.php">about</a></li>
            </ul>
        </nav>

        <h1>Acerca de nosotros... </h1>
        <p>neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
        <ul>
            <li><a href="about.php?developer=matias">Matias</a></li>
            <li><a href="about.php?developer=matias">Selene</a></li>
        </ul>
    <?php
        if (isset($_GET['developer'])){
            $developer = $_GET['developer'];
            if ($developer='matias'){
                echo '<h2>Matias</h2>';
                echo '<p>Es re gags :v</p>';
            }
            if ($developer='selene'){
                echo '<h2>Selene</h2>';
                echo '<p>No me pegues u.u</p>';
            }
        }
    ?>

    </body>
</html>
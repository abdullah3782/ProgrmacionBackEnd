<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/vueling.css">
    <title>JUEGO 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #fff34a;" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <button class="nav-link " id="log" ><a class="nav-link" href="home.php">Exercici 1</a></button>
            </li>
            <li class="nav-item">
                <button class="nav-link " id="log" ><a class="nav-link" href="home.php">Exercici 2</a></button>
            </li>
            <li>
                <button class="nav-link " id="log" ><a class="nav-link" href="home.php">Exercici 3</a></button>
            </li>
        </ul>

    </div>
</nav>
<br>
<form method="post">
    <button type="submit">Tiremos el dado !</button>
</form>

<?php
if (isset($_SESSION['totalTiradas'])) {

    $totalTiradas = $_SESSION['totalTiradas'];
    echo "Total de las tiradas: $totalTiradas";
}
?>

<?php

function jugador1() {
    $dado = ['dado1.jpg','dado2.jpg','dado3.jpeg','dado4.png','dado5.jpeg','dado6.png'];
    $i = rand(0, count($dado) - 1);
    echo '<div><h1>Jugador 1</h1><img src="'.$dado[$i] . '"></div>';
    return $i + 1;
}

function jugador2() {
    $dado = ['dado1.jpg','dado2.jpg','dado3.jpeg','dado4.png','dado5.jpeg','dado6.png'];
    $i = rand(0, count($dado) - 1);
    echo '<div><h1>Jugador 2</h1><img src="'.$dado[$i] . '"></div>';
    return $i + 1;
}

function main(): void {
    $puntos = 0;
    $tiradas = 0;
    $dado1 = jugador1();
    $dado2 = jugador2();
    while ($tiradas < 5) {
 

    $puntos += $dado1;
    $puntos += $dado2;

    $tiradas++;
    if ($dado1 > $dado2) {
        echo "Ha ganado el jugador 1 <br>";
    } elseif ($dado2 > $dado1) {
        echo "Ha ganado el jugador 2 <br>";
    } else {
        echo "Es un empate <br>";
    }
    }
    echo "La Tirada $tiradas: $dado1<br>";
    echo "La Tirada $tiradas: $dado2<br>";

}

main();
?>

</body>
</html>

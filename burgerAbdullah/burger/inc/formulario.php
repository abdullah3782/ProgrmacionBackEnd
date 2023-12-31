<?php
require __DIR__ . '/header2.php';
session_start();


if (!isset($_SESSION['user'])) {
    header('Location: login.php'); 
    exit;
}


 if (isset($_SESSION['user'])) : ?>
     <nav style="background-color: black;" id="navbar">       
     <img src="foto.png" alt="Logo del usuario" style="width: 40px;  margin-left: 1880px;"> 
     <a href="usuario.php" class="nav-link" style="color: white; margin-left: 1650px;">¡Hola, <?php echo $_SESSION['user']; ?>!</a>

    </nav>
<?php endif; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="/burger/css/style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
  max-height: 500px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  box-sizing: border-box;
  position: absolute; 
  top: 20%; 
  right: 100px; 
  margin-top: 20%;
           
        }

        input[type="checkbox"],
        input[type="radio"] {
            margin-right: 8px;
        }

        label {
            display: inline-block;
            margin-bottom: 9px;
            margin-left:9px;
        }

       

        .row {
            display: flex;
            justify-content: space-between;
        }

        .text-right {
            text-align: right;
        }

        .mt-4 {
            border: 60px;
            height:696px;
            width: 698px;
            border: 2px solid black;
            border-radius: 19px;
            margin: 50px;
        }

        .boton{
            margin: left 30px;

        }

        p {
            margin: 8px 0;
        }

        .form-check {
            margin-bottom: 8px;
        }

        footer {
            margin-top: 55%;
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
        }

        .footer-section {
            max-width: 300px;
        }

        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .footer-section p, .footer-section ul {
            font-size: 14px;
            margin: 0;
            padding: 0;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 5px;
        }

        .footer-section a {
            color: #fff;
            text-decoration: none;
        }

        .footer-section a:hover {
            text-decoration: underline;
        }

        #search {
            margin-left: 350%;
        }

        #searchBar {
            margin-left: 230%;
            margin-bottom: -17%;
        }




    </style>
</head>
<body>

    <div class="mt-4">
        <form method="post" action="pedido.php" >
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">

            <label for="correo">Correo electrónico:</label>
            <input type="email" name="correo" id="correo">

            <p>CANTIDAD:</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tamanio[]" id="grande" value="2">
                <label class="form-check-label" for="grande">Large</label> <br>
                <label for="cantidad_grande">Cantidad:</label>
                <input type="text" name="cantidad_grande" id="cantidad_grande">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="tamanio[]" id="small" value="1.5">
                <label class="form-check-label" for="small">Small</label><br>
                <label for="cantidad_small">Cantidad:</label>
                <input type="text" name="cantidad_small" id="cantidad_small">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="tamanio[]" id="extrasmall" value="1">
                <label class="form-check-label" for="extrasmall">Extra Small</label><br>
                <label for="cantidad_extrasmall">Cantidad:</label>
                <input type="text" name="cantidad_extrasmall" id="cantidad_extrasmall">
            </div>

            <div >
                <label for="tipo_pan">Choose the type of bread:</label>
                <select name="tipo_pan" id="tipo_pan">
                    <option value="blanco">White Bread</option>
                    <option value="integral">Whole Wheat Bread</option>
                    <option value="centeno">Rye Bread</option>
                </select>
            </div>

            <div >
                <p>INGREDIENTES:</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ingredientes[]" id="ingrediente1" value="0.25">
                    <label class="form-check-label" for="ingrediente1">Mayonesa</label>
                    <label for="cantidad_ingrediente1">Cantidad:</label>
                    <input type="text" name="cantidad_ingrediente1" id="cantidad_ingrediente1">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ingredientes[]" id="ingrediente4" value="0.25">
                    <label class="form-check-label" for="ingrediente4">Kétchup</label>
                    <label for="cantidad_ingrediente4">Cantidad:</label>
                    <input type="text" name="cantidad_ingrediente4" id="cantidad_ingrediente4">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ingredientes[]" id="ingrediente2" value="0.25">
                    <label class="form-check-label" for="ingrediente2">Pepinillo</label>
                    <label for="cantidad_ingrediente2">Cantidad:</label>
                    <input type="text" name="cantidad_ingrediente2" id="cantidad_ingrediente2">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ingredientes[]" id="ingrediente3" value="0.25">
                    <label class="form-check-label" for="ingrediente3">Bacon</label>
                    <label for="cantidad_ingrediente3">Cantidad:</label>
                    <input type="text" name="cantidad_ingrediente3" id="cantidad_ingrediente3">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="ingredientes[]" id="ingrediente4" value="0.25">
                    <label class="form-check-label" for="ingrediente4">Patatas</label>
                    <label for="cantidad_ingrediente4">Cantidad:</label>
                    <input type="text" name="cantidad_ingrediente4" id="cantidad_ingrediente4">
                </div>
                <button type="submit" class="btn btn-primary " name="submit" class="boton" >Enviar</button>
                
            </div>

            
        </form>
    </div>
   

    
</body>
</html>

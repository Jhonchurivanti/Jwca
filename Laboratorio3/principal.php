<?php
$usuario = $_POST['usuario'];
$email = $_POST['email'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <!--
        my-3
        //  my-3 => Magen tanto arriba como abajo
        // mb-4 => Para separar card y dar espacios-->

    <div class="container my-3 bg-success">
        <div class="row">
        <?php
        if ($usuario == 'Jhon Churivanti' && $email == 'churivantialvajhonn@gmail.com') {
            echo "<h1 class='text-center'>¡NOS ALEGRA VOLVER A VERTE! :)</h1>";
            echo "<p>Usuario: " . $usuario . "</p>";
            echo "<a href='principal2.php' class='btn btn-primary mb-4'>Ir a la página principal</a>";
        }
        else {
        ?>
            <h1>Usuario No Válido</h1>
            <a href="index.php" class="btn btn-danger">Regresar al login</a>
        <?php
        }
        ?>
        </div>
    </div>
    <!--BOOSTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
<?php
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$usuario_ingresado = 'Jhon Churivanti';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <!--
        my-3
        //  my-3 => Magen tanto arriba como abajo
        // mb-4 => Para separar card y dar espacios-->

    <div class="container my-3 rounded">
        <div class="row">
            <h1>
        <?php
        
            echo "<h1 class='text-center'>Bienvenido-Saludos Cordiales</h1>";
            echo "<p>Usuario: " . $usuario_ingresado . "</p>";
        ?>
            </h1>
            <div class="class-group">
                    <?php echo "<a href='index.php' class='btn btn-info'>Salir</a>" ?>
            </div> 
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-12 mb-4">
                <img src="imag/user.jpg" class="img-fluid rounded" alt="image" width="40%">
            </div>
        </div>
        
        <div class="row">
            <h4 class="text-center">DISFRUTA DE LAS SIGUIENTES FUNCIONES:</h4>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">CALCULADORA</h4>
                        <p>En esta oportunidad podrás realizar las diferentes operaciones matemáticas, así como jugar con tus númerps reales.</p>
                       <?php  echo "<a href='calculadora.html' class='btn btn-info'>Usar</a> "?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">COMPARACIÓN</h4>
                        <p>Compración de dos números, si el primero es mayor, muestra lasuma y diferencia, caso contrario, el producto y la división.</p>
                        <?php echo " <a href='comparacion.html' class='btn btn-info'>Usar</a> "?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">PROMEDIO DE NOTAS</h4>
                        <p>Para este caso se ingresará tres notas, si el promedio es mayor o igual a 13, 'aprobado', caso contrario 'reprobado'.</p>
                        <?php echo "<a href='promedio.html' class='btn btn-info'>Usar</a>" ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">MAYOR NÚMERO</h4>
                        <p>Eliga sus números favoritos, entre los tres se mostrará el mayor de ellos, es parte de la motivación.</p>
                        <?php echo "<a href='mayor.html' class='btn btn-info'>Usar</a>" ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--ESTILO-->
    <style>
        body {
            background-color: rgb(178, 245, 233);
        }
        .container {
            background-image: url('');
            font-family: 'Courier New', Courier, monospace;
            background-color: rgb(224, 255, 255);

        }
         footer .redes {
            margin-bottom: 20px;
            text-align: center;
            background-color: rgb(64, 224, 208);
            font-family: 'Courier New', Courier, monospace;
        }
        footer .redes a {
           color: #fff;
           display: inline-block;
           text-decoration: none;
           border: 1px solid #fff;
           border-radius: 100%;
           width: 42px;
           height: 42px;
           line-height: 42px;
           margin: 48px 4px;
           font-size: 28px;
           transition: .3s;
        }

    </style>
    <!--BOOSTSTRAP-->
    <footer>
    <div class="redes mb-2">
        <h4>Desarrollado por: Jhon Williams Churivanti Alva</h4>
        <a href="https://www.facebook.com/jhon.churivantialva"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/jhon_wca/"><i class="fa-brands fa-square-instagram"></i></a>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
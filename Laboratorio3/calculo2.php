<?php

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    if ($numero2 == 0) {
        echo "<h1 class='text-center'>Número incorrecto, no se aceptan 0</h1>";
        
    } else {
        if($numero1 > $numero2) {
            
            $resultado1 = $numero1 + $numero1;
            $resultado2 = $numero1 - $numero2;
            $mensaje = "Suma y Diferencia";
        }else {
            $resultado1 = $numero1 * $numero2;
            $resultado2 = $numero1 / $numero2;
            $mensaje = "Multiplicación y División";
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
          <div class="row">
                <div class="col-md-6 mt-5" >
                    <div class="card">
                        <div class="card-header bg-primary">
                           <div class="card-tittle text-white">Comparación: <?php echo $mensaje ?></div> 
                        </div>                               
                        <div class="card-body">
                            <form action="calculo2.php" method="post">
                               <div class="form-group">
                                  <label>Numero 1:</label>
                                  <h1><?php echo  $numero1 ?></h1>
                               </div> 
                               <div class="form-group">
                                  <label>Numero 2:</label>
                                  <h1><?php echo  $numero2 ?></h1>
                               </div> 
                               <div class="form-group">
                                  <label>RESULTADO 1:</label>
                                  <h1><?php echo  $resultado1 ?></h1>
                               </div>
                               <div class="form-group">
                                  <label>RESULTADO 2:</label>
                                  <h1><?php echo  $resultado2 ?></h1>
                               </div>
                               <div class="class-group mb-4">
                                   <?php echo "<a href='comparacion.html' class='btn btn-info'>NUEVA OPERACIÓN</a>" ?>
                               </div> 
                            </form>
                            <div class="class-group">
                                   <?php echo "<a href='principal2.php' class='btn btn-info'>Menú</a>" ?>
                            </div> 
                        </div>
                    </div>
                </div>
          </div>  
    </div>
    <style>
        body {
            background-color: rgb(178, 245, 233);
        }
        .container {
            background-image: url('imag/logo.jpg');
            height: 90vh;
            font-family: 'Courier New', Courier, monospace;

        }

    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>

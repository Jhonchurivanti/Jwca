<?php
  $numero1 = $_POST['numero1'];
  $numero2 = $_POST['numero2'];
  $operacion = $_POST['operacion'];
 

  switch($operacion) {
    case "sumar":
        $resultado = $numero1 + $numero2;
        break;
    case "restar":
        $resultado = $numero1 - $numero2;
        break;
    case "multiplicar":
        $resultado = $numero1 * $numero2;
        break;
    case "division":
        $resultado =  $numero1 / $numero2;
        break;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
          <div class="row">
                <div class="col-md-6 mt-5" >
                    <div class="card">
                        <div class="card-header bg-primary">
                           <div class="card-tittle text-white">Calculadora</div> 
                        </div>                               
                        <div class="card-body">
                            <form>
                               <div class="form-group">
                                  <label>Numero 1:</label>
                                  <h1><?php echo  $numero1 ?></h1>
                               </div> 
                               <div class="form-group">
                                  <label>Numero 2:</label>
                                  <h1><?php echo  $numero2 ?></h1>
                               </div> 
                               <div class="form-group">
                                  <label>Operación: </label> 
                                  
                                     <p><?php echo  $operacion ?></p>
                                   
                               </div>
                               <div class="form-group">
                                   <label>RESULTADO: </label>
                                   <h1><?php echo  $resultado ?></h1>
                                </div>
                                <div class="class-group mb-4">
                                   <?php echo "<a href='calculadora.html' class='btn btn-info'>NUEVA OPERACIÓN</a>" ?>
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
    <!--ESTILO-->
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
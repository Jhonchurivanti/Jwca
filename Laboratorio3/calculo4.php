
<?php
   $num1 = $_POST['nume1'];
   $num2 = $_POST['nume2'];
   $num3 = $_POST['nume3'];

   if ($num1 > $num2) {
      if ($num1 > $num3) {
          $mayor = $num1;
      } else {
          $mayor = $num3;
      }
   } else {
      if ($num2 > $num3) {
          $mayor = $num2;
      } else {
          $mayor = $num3;
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor Número</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
          <div class="row">
                <div class="col-md-6 mt-5" >
                    <div class="card">
                        <div class="card-header bg-primary">
                           <div class="card-tittle text-white">Obteniendo mayor número</div> 
                        </div>                               
                        <div class="card-body">
                            <form>
                               <div class="form-group">
                                  <label>Número 1:</label>
                                  <h1><?php echo  $num1 ?></h1>
                               </div> 
                               <div class="form-group">
                                  <label>Número 2:</label>
                                  <h1><?php echo  $num2 ?></h1>
                               </div> 
                               <div class="form-group">
                                  <label>Número 3:</label>
                                  <h1><?php echo  $num3 ?></h1>
                               </div>
                               <div class="form-group">
                                  <label>MAYOR NÚMERO:</label>
                                  <h1><?php echo  $mayor ?></h1>
                               </div>
                               <div class="class-group mb-3">
                                  <?php echo "<a href='mayor.html' class='btn btn-info'>NUEVA EVALUACIÓN</a>" ?>
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
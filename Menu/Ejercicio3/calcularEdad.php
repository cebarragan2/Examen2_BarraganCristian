<?php
    $fechaNacimiento= $_POST['fecha'];

    $fecha = new DateTime(date('Y/m/d',strtotime($fechaNacimiento))); 
    $fechaActual =  new DateTime(date('Y/m/d',time())); 
    $edad = date_diff($fechaActual,$fecha); 
    $anios=$edad->format('%Y');
    $meses=$edad->format('%m');
    $dias=$edad->format('%d');
    $edadPersona="$anios años, $meses meses y $dias dias";
    if($fecha>=$fechaActual){
        $edadPersona="Fecha incorrecta";   
    }
?>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
</head>
<body>
    <div style="display: flex;align-items: center;justify-content: center;">
        <div class="abs-center">
            <div class=" align-items-center justify-content-between ">
                <h4 style="text-align: center; margin-top: 50px;">Calculo de edad a partir de fecha de nacimiento</h4><br>
                <p><strong>Fecha de nacimiento ingresada:</strong> <?=$fechaNacimiento?></p>
                <p><strong>Edad: </strong><?=$edadPersona?></p>
            </div>
            <div class="form-group row" style="justify-content: center;">
                <div class="col-sm-6">
                <a href="./edad.html" style="text-decoration: none;"><input type="button" class="btn btn-primary btn-user btn-block" value="Regresar"></a>
                </div>
                <div class="col-sm-6">
                <a href="../index.html" style="text-decoration: none;"><input type="button" class="btn btn-primary btn-user btn-block" value="Menu Principal"></a>
                </div>
            </div>
    </div>      
</body>
</html>
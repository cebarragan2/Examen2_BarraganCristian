<?php
    $numTabla= $_POST['numTabla'];
    $resulado = array();
    $cont=0;
    for ($i = 1; $i <= 20; $i++) {
        array_push($resulado,"$i x $numTabla =".$numTabla*$i);
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
    <title>Tabla del <?=$numTabla?></title>
</head>
<body>
    <div style="display: flex;align-items: center;justify-content: center;">
        <div class="abs-center ">
            <div class=" align-items-center justify-content-center ">
                <h4 style="text-align: center; margin-top: 50px;">Tabla del <?=$numTabla?> </h4>
            </div>

            <div class="row justify-content-center border">
                <div class="col-6 text-center">
                <?php
                    foreach ($resulado as $value) {
                        if($cont<10)
                        {
                             echo "$value <br>";
                             $cont++;
                        }
                    
                    }
                    $cont=0;
                ?> 
                </div>
                <div class="col-6 text-center">
                <?php
                    foreach ($resulado as $value) {
                        if($cont>=10)
                        {
                             echo "$value <br>";
                        }
                        $cont++;
                    }
                ?> 
                </div>
            </div>

            <div class="form-group row p-4 justify-content-center" >
                <div class="col-6">
                <a href="./tablaMultiplicar.html" style="text-decoration: none;"><input type="button" class="btn btn-primary btn-user" value="Regresar"></a>
                </div>
                <div class="col-6">
                <a href="../index.html" style="text-decoration: none;"><input type="button" class="btn btn-primary btn-user " value="Menu Principal"></a>
                </div>
            </div>
    </div>      
</body>
</html>
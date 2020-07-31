<?php
    $ladoT1 = $_POST['ladoT1'];
    $ladoT2 = $_POST['ladoT2'];
    $ladoT3 = $_POST['ladoT3'];
    $areaT;
    $perimetroT;
    $semiPerimetro;

    //TRIÁNGULO
    if((($ladoT1+$ladoT2)>$ladoT3) && (($ladoT1+$ladoT3)>$ladoT2) && (($ladoT3+$ladoT2)>$ladoT1)) {
        $semiPerimetro=(($ladoT1+$ladoT2+$ladoT3)/2);
        $areaT=sqrt($semiPerimetro*($semiPerimetro-$ladoT1)*($semiPerimetro-$ladoT2)*($semiPerimetro-$ladoT3));
        $perimetroT=($ladoT1+$ladoT2+$ladoT3);
    }
    else{
        $areaT='---';
        $perimetroT='---';
    }

?>
<!DOCTYPE html>
<html lang="en">

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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Triángulo</title>
</head>

<body>
<br><a href="../index.html" style="text-decoration: none;"><input type="button" class="btn btn-primary" value="<--Menu Principal"></a>
    <div style="display: flex; align-items: center; justify-content: center;">
        <div class="abs-center">
            <div class="align-items-center justify-content-between"><br>
                <form name="calculoAreaPerimetro"  class="border p-5 form">
                    <h4 style="text-align: center;">
                        TRIÁNGULO
                    </h4><br>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Figuras Geométricas
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="cuadrado.html">Cuadrado</a>
                                <a class="dropdown-item" href="rectangulo.html">Rectángulo</a>
                                <a class="dropdown-item" href="circulo.html">Círculo</a>
                            </div>
                        </li>
                    </ul>
                    <div class="form-group row" style="justify-content: center;">
                        <div class="col-sm-6">
                            <label for="ladoT1" class="col-form-label">1er Lado:<?=$ladoT1?></label>
                        </div>
                        <div class="col-sm-6">
                            <label for="ladoT2" class="col-form-label">2do Lado: <?=$ladoT2?></label>
                        </div>
                        <div class="col-sm-6">
                            <label for="ladoT3" class="col-form-label">3er Lado: <?=$ladoT3?></label>
                        </div>
                    </div>
                    <div class="form-group row" style="justify-content: center;">
                        <div class="col-sm-6">
                            <label for="areaT" class="col-form-label">Área:</label>
                            <input type="text" class="form-control" name="areaT" disabled placeholder=<?=$areaT?>>
                        </div>
                        <div class="col-sm-6">
                            <label for="perimetroT" class="col-form-label">Perímetro:</label>
                            <input type="text" class="form-control" name="perimetroT" disabled placeholder=<?=$perimetroT?>>
                        </div>
                    </div>
                    <div class="form-group row" style="justify-content: center;">
                        <div class="col-sm-6">
                        <a href="triangulo.html" style="text-decoration: none;"><input type="button" class="btn btn-primary btn-user btn-block" value="OTRO CÁLCULO "></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
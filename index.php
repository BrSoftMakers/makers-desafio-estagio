<?php
require_once "includes/header.html";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title></title>
</head>
<body>

        <!-- carrosel -->
        <div class="container-fluid info">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/info.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="img/info2.jpg" class="d-block w-100">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            
        </div>
        </div>

        <!--  -->
        <div class="container-fluid type">
        <h3>Marcas</h3>
            <div class="row">

                <div class="col">
                    <div class="card" style="width: 10rem;">
                    <a href="list.php"><img src="img/chevrolet-logo.png" class="card-img-top"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 10rem;">
                    <a href="list.php"><img src="img/fiat-logo.png" class="card-img-top"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 10rem;">
                        <a href="list.php"><img src="img/ford-logo.png" class="card-img-top"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 10rem;">
                        <a href="list.php"><img src="img/honda-logo.png" class="card-img-top"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 10rem;">
                        <a href="list.php"><img src="img/toyota-logo.png" class="card-img-top"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 10rem;">
                        <a href="list.php"><img src="img/volks-logo.png" class="card-img-top"></a>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 10rem;">
                        <a href="list.php"><img src="img/renault-logo.png" class="card-img-top"></a>
                    </div>
                </div>

            </div>
        </div>

        <!-- -->
        <div class="container-fluid model">
        <h3>Modelos</h3>
            <div class="row">

                <div class="col">
                    <div class="card" style="width: 10rem;">
                        <a href="list.php?tipo=Compacto"><img src="img/small-model.png" class="card-img-top"></a>
                        <h5 class="card-title">Compacto</h5>
                    </div>
                </div>   

                <div class="col">
                    <div class="card" style="width: 10rem;">
                        <a href="list.php?tipo=Normal"><img src="img/medium-model.png" class="card-img-top"></a>
                        <h5 class="card-title">Normal</h5>
                    </div>
                </div>   

                <div class="col">                
                    <div class="card" style="width: 10rem;">
                        <a href="list.php?tipo=Sedan"><img src="img/big-model.png" class="card-img-top"></a>
                        <h5 class="card-title">Sedan</h5>
                    </div>
                </div>   

                <div class="col"> 
                    <div class="card" style="width: 10rem;">
                        <a href="list.php?tipo=Premium"><img src="img/premium-model.png" class="card-img-top"></a>
                        <h5 class="card-title">Premium</h5>
                    </div>
                </div>    

                <div class="col">
                    <div class="card" style="width: 10rem;">
                        <a href="list.php?tipo=Minivan"><img src="img/minivan-model.png" class="card-img-top"></a>
                        <h5 class="card-title">Minivan</h5>
                    </div>
                </div> 

                <div class="col">
                    <div class="card" style="width: 10rem;">
                        <a href="list.php?tipo=SUV"><img src="img/suv-model.png" class="card-img-top"></a>
                        <h5 class="card-title">SUV</h5>
                    </div>
                </div>  

            </div>
        </div>
</body>
</html>
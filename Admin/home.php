<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/validate.js"></script>
</head>

<body>
    <!-- ...existing code... -->
    <div class="container">
        <h1 style="text-align: center; margin-top: 40px;">WELCOME TO ADMIN SIDE</h1>
        <!--<div class="col-xxl-9 col-xl-9 col-lg-8 col-md-6 col-sm-12 col-12">-->
        <div class="container">
            <div class="row">
                <div class="center col-12 mt-5 mb-5 bg-dark text-white">
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">
                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../images/redlilies.jpg" alt="Flowers" class="d-block w-100 img-fluid" />
                            </div>
                            <div class="carousel-item">
                                <img src="../images/sunflower.jpg" alt="Flowers" class="d-block w-100" />
                            </div>
                            <div class="carousel-item">
                                <img src="../images/2.jpg " alt="Flowers" class="d-block w-100" />
                            </div>
                        </div>

                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <h2 align="center">🌹 Our Products 🌹</h2>

            <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12">

                <div class="card" style="width:400px">
                    <img class="card-img-top" src="../images/sunflower.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">RED LILIES</h4>
                        <p class="card-text">PRICE:249</p>
                        <a href="#" class="btn btn-primary">BUY</a></br>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="../images/redlilies.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">RED LILIES</h4>
                        <p class="card-text">PRICE:249</p>
                        <a href="#" class="btn btn-primary">BUY</a></br>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="../images/2.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">RED LILIES</h4>
                        <p class="card-text">PRICE:249</p>
                        <a href="#" class="btn btn-primary">BUY</a></br>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card mt-5" style="width:400px">
                    <img class="card-img-top" src="../images/3.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">RED LILIES</h4>
                        <p class="card-text">PRICE:249</p>
                        <a href="#" class="btn btn-primary">BUY</a></br>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card mt-5" style="width:400px">
                    <img class="card-img-top" src="../images/4.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">RED LILIES</h4>
                        <p class="card-text">PRICE:249</p>
                        <a href="#" class="btn btn-primary">BUY</a></br>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card mt-5" style="width:400px">
                    <img class="card-img-top" src="../images/redlilies.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">RED LILIES</h4>
                        <p class="card-text">PRICE:249</p>
                        <a href="#" class="btn btn-primary">BUY</a></br>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<?php
$content1 = ob_get_clean();
include_once('layout.php');
include("footer.php");
?>
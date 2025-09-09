<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <div class="container-fuild">
        <!--first row-->
        <div class="row">
            <!--NAVBAR-->
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="javascript:void(0)">🌷<b>Flowers</b></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav me-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="home.php"> Home </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#"> Product </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#"> Category </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.php"> Contact Us </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.php"> About Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="register.php"> Registration </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php"> Login </a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="text" placeholder="Search">
                            <button class="btn btn-primary" type="button">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

        <!--second row-->
        <div class="row">
            <?php

            if (isset($title_page)) {
                echo $title_page;
            }
            if (isset($content1)) {
                echo $content1;
            }
            ?>
        </div>


        <!--third row-->
        <div class="row">
            <!--FOOTER-->
            <footer class="bg-dark text-white text-center py-3 w-100 m-0">
                <p>© 2025 Flower Shop | Designed by [Diya Apte]</p>
            </footer>
        </div>

    </div>
</body>

</html>
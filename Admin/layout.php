<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/additional-methods.js"> </script>
    <script src="js/validate.js"> </script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="javascript:void(0)">🌷<b>Flowers</b></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="home.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="register.php">Register</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="add_product.php">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="manage-user.php">Userdata</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="manage_order.php">Orders</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown">Dropdown</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="manage_feedback.php">Feedback</a></li>
                                        <li><a class="dropdown-item" href="home.php">Logout</a></li>
                                        <li><a class="dropdown-item" href="change_password.php">Change Password</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

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
    </div>

    <div class="wrapper" align="center">

        <!--<footer class="bg-dark text-white text-center">

            <p id="legal"><b>Copyright &copy; 2025 Unique Flower Shop. All Rights Reserved. Designed by :
                    Hiral,Jagruti,Diya</p>

        </footer>-->

    </div>

</body>

</html>
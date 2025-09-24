<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$isLoggedIn = isset($_SESSION['username']);
$username = $isLoggedIn ? $_SESSION['username'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Product Page</title>
    <!---bootstrap css link--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!----bootstrap js link---->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-----font awesome--->
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!--update css-->
     <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <!---custom css--->
    <link rel="stylesheet" href="./css/style.css" />
    <!---custom js--->
    <script src="./js/script.js"></script>
    <!---jQuery--->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>

    <script src="js/validate.js"></script>
    <script src="js/addtional-methods.js"></script>
<!--update css-->
    <style>
    body 
    {
        font-family: 'Lora', serif;
    }

    /* ========== Reset & Base Styles ========== */
body {
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: linear-gradient(135deg, #f1f8e9, #e0f7fa);
  color: #333;
  min-height: 100vh;
}

/* ========== Navbar Styling with Animations ========== */
.navbar {
  background-color: #198754; /* rich green */
  padding: 0.75rem 1.5rem;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  position: sticky;
  top: 0;
  z-index: 9999;
  transition: background-color 0.4s ease;
}

.navbar:hover {
  background-color: #146c43; /* darker on hover */
}

.navbar-brand {
  color: #fff;
  font-weight: 700;
  font-size: 1.8rem;
  text-transform: uppercase;
  letter-spacing: 3px;
  transition: color 0.3s ease;
  cursor: pointer;
}

.navbar-brand:hover {
  color: #d4edda;
}

.navbar-nav {
  display: flex;
  align-items: center;
  gap: 2rem;
}

.navbar-nav .nav-link {
  color: #fff;
  font-weight: 500;
  font-size: 1.05rem;
  position: relative;
  padding: 0.5rem 0;
  transition: color 0.3s ease;
  cursor: pointer;
}

/* Animated underline */
.navbar-nav .nav-link::after {
  content: '';
  position: absolute;
  width: 0;
  height: 3px;
  bottom: 0;
  left: 0;
  background-color: #d4edda;
  border-radius: 3px;
  transition: width 0.3s ease;
}

.navbar-nav .nav-link:hover {
  color: #d4edda;
}

.navbar-nav .nav-link:hover::after,
.navbar-nav .nav-link.active::after {
  width: 100%;
}

/* Active link style */
.navbar-nav .nav-link.active {
  color: #d4edda;
  font-weight: 700;
}

/* Remove default dropdown caret */
.navbar .dropdown-toggle::after {
  display: none;
}

/* Dropdown menu styling */
.dropdown-menu {
  border-radius: 10px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
  border: none;
  background-color: #fff;
  padding: 0.5rem 0;
  transition: opacity 0.3s ease, transform 0.3s ease;
  transform-origin: top center;
  opacity: 0;
  visibility: hidden;
  transform: translateY(15px);
  min-width: 12rem;
  z-index: 10000;
}

/* Show dropdown on hover */
.dropdown:hover .dropdown-menu {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}

/* Dropdown items */
.dropdown-item {
  color: #198754;
  font-weight: 600;
  padding: 0.5rem 1.5rem;
  transition: background-color 0.2s ease, color 0.2s ease;
  border-radius: 6px;
  cursor: pointer;
}

.dropdown-item:hover {
  background-color: #d4edda;
  color: #145c32;
}

/* ========== Container & Layout ========== */
.container {
  max-width: 1140px;
  margin: 0 auto;
  padding: 2rem 1rem;
}

/* Card Enhancements */
.card {
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: translateY(-6px);
  box-shadow: 0 14px 35px rgba(0,0,0,0.15);
}

/* Card Body Flex */
.card-body {
  display: flex;
  flex-direction: column;
  flex: 1 1 auto;
}

/* Footer Align Fix */
.card-footer {
  margin-top: auto;
  padding: 1rem 1.5rem;
  background-color: #f1f8e9;
  border-top: 1px solid #d4edda;
  border-radius: 0 0 15px 15px;
}

/* Buttons */
.btn-primary {
  background-color: #198754;
  border: none;
  padding: 10px 20px;
  font-weight: 600;
  border-radius: 8px;
  transition: background-color 0.3s ease, box-shadow 0.2s ease;
  cursor: pointer;
}

.btn-primary:hover,
.btn-primary:focus {
  background-color: #146c43;
  box-shadow: 0 4px 15px rgba(20, 108, 67, 0.6);
  outline: none;
}

/* Headings */
h1, h2, h3, h4 {
  color: #145c32;
  font-weight: 700;
  margin-bottom: 1rem;
  letter-spacing: 1px;
}

/* Responsive Navbar */
@media (max-width: 768px) {
  .navbar-nav {
    flex-direction: column;
    gap: 0.5rem;
    background-color: #198754;
    padding: 1rem;
    border-radius: 0 0 10px 10px;
    display: none;
  }

  .navbar-nav.show {
    display: flex;
  }

  .navbar-toggler {
    border: none;
    background: none;
    color: #fff;
    font-size: 1.4rem;
    cursor: pointer;
  }
}
/* ======update style according to icons .btn-primary Icon Styling for Navbar ====== */
.navbar .nav-link i {
  font-size: 1.3rem;
  color: white;
  transition: transform 0.2s ease, color 0.2s ease;
}

.navbar .nav-link:hover i {
  color: #d4edda;
  transform: scale(1.2);
}

/* Optional: Add subtle shadow or glow */
.navbar .nav-link i::before {
  transition: text-shadow 0.3s ease;
}

.navbar .nav-link:hover i::before {
  text-shadow: 0 0 6px rgba(255, 255, 255, 0.4);
}

/* ====== Badge for icons (e.g., cart count) ====== */
.icon-badge {
  position: relative;
  display: inline-block;
}

.icon-badge[data-count]:after {
  content: attr(data-count);
  position: absolute;
  top: -6px;
  right: -10px;
  background: #dc3545;
  color: white;
  font-size: 0.7rem;
  font-weight: bold;
  padding: 2px 6px;
  border-radius: 50%;
  box-shadow: 0 0 3px rgba(0,0,0,0.3);
}


/* Navbar Option Links Styling (Register, Login, etc.) */

.navbar-nav .nav-link {
  color: #ffffff;
  font-size: 1.05rem;
  font-weight: 600;
  padding: 0.5rem 0.85rem;
  margin: 0 0.25rem;
  border-radius: 6px;
  transition: all 0.3s ease-in-out;
  position: relative;
  display: inline-block;
}

/* Hover effect like icons */
.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  color: #d4edda;
  transform: translateY(-1px);
}

/* Active link underline effect */
.navbar-nav .nav-link::after {
  content: '';
  position: absolute;
  width: 0%;
  height: 2px;
  bottom: 4px;
  left: 50%;
  transform: translateX(-50%);
  background-color: #d4edda;
  transition: width 0.3s ease-in-out;
}

.navbar-nav .nav-link:hover::after,
.navbar-nav .nav-link.active::after {
  width: 100%;
}

/* Active state */
.navbar-nav .nav-link.active {
  color: #d4edda;
  background-color: rgba(255, 255, 255, 0.15);
}


</style>
</head>

<body>
    <!-- NAVBAR OUTSIDE container -->
    <nav class="navbar navbar-expand-sm bg-success navbar-dark">
        <div class="container-fluid">

            <!-- Brand on left -->
            <a class="navbar-brand" href="#">🌼 Unique Flower Shop 🌼</a>

            <!-- Toggler for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Centered nav links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                  
                    <!---<li class="nav-item"><a class="nav-link" href="add_to_cart.php">Add to cart</a></li>-->
                </ul>
            </div>

            <!-- Icons on right -->
            <div class="d-flex align-items-center">
                <!-- User Icon with conditional link -->
                <a href="<?= $isLoggedIn ? 'profile.php' : 'register.php' ?>" class="nav-link text-white me-3" title="User">
                    <i class="fas fa-user fa-lg"></i>
                </a>

                <!-- Heart / Wishlist Icon -->
                <a href="whishlist.php" class="nav-link text-white me-3" title="Wishlist">
                    <i class="fas fa-heart fa-lg"></i>
                </a>

                <!-- Cart Icon -->
                <a href="add_to_cart.php" class="nav-link text-white" title="Cart">
                    <i class="fas fa-shopping-cart fa-lg"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- Now the container for your page content -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- page content -->
            </div>
        </div>

        <div class="row g-4 mt-4">
            <?php
            if (isset($title_page))
                echo $title_page;
            if (isset($Content1))
                echo $Content1;
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center bg-info">Copyright &copy; 2025. All rights reserved by Flowershop.</div>
    </div>



  </body>

</html>

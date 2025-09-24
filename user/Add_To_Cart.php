<!-- add_to_cart.php -->

<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(to right, #e0f7fa, #f8f9fa);
    color: #198754;
  }
  .message-box {
    background: white;
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 12px 25px rgba(0,0,0,0.1);
    text-align: center;
    font-weight: 600;
    font-size: 1.2rem;
  }
</style>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Get product data from URL
$productId = isset($_GET['product']) ? (int)$_GET['product'] : 0;
$name = isset($_GET['name']) ? trim($_GET['name']) : '';
$price = isset($_GET['price']) ? (float)$_GET['price'] : 0.0;
$quantity = isset($_GET['quantity']) ? (int)$_GET['quantity'] : 1;

// Validate inputs
if ($productId <= 0 || $price <= 0 || $quantity <= 0 || $name === '') {
    echo '<div class="message-box">Invalid product data. Please try again.</div>';
    exit;
}

// Initialize cart if not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add or update product quantity in cart
if (isset($_SESSION['cart'][$productId])) {
    $_SESSION['cart'][$productId]['quantity'] += $quantity;
} else {
    $_SESSION['cart'][$productId] = [
        'name' => $name,
        'price' => $price,
        'quantity' => $quantity
    ];
}

// Optionally show a success message before redirect (commented out)
// echo '<div class="message-box">Added ' . $quantity . ' x "' . htmlspecialchars($name) . '" to your cart.</div>';

// Redirect to cart page after 1 second delay
header("refresh:1; url=cart_show.php");
exit;
?>

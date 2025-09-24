<!--updated code-->
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f8f9fa;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    min-height: 100vh;
    padding-top: 60px;
  }

  .container {
    background: white;
    max-width: 600px;
    width: 90%;
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    color: #145c32;
  }

  h2 {
    color: #198754;
    font-weight: 700;
    margin-bottom: 25px;
    font-size: 2rem;
    text-align: center;
  }

  p {
    font-size: 1.1rem;
    margin-bottom: 14px;
    line-height: 1.4;
  }

  strong {
    color: #0f5132;
  }

  a.btn {
    display: inline-block;
    background-color: #198754;
    color: white;
    padding: 12px 25px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    margin-top: 20px;
    transition: background-color 0.3s ease;
  }

  a.btn:hover {
    background-color: #146c43;
  }

  /* Responsive */
  @media (max-width: 480px) {
    .container {
      padding: 20px 25px;
    }

    h2 {
      font-size: 1.6rem;
    }

    p {
      font-size: 1rem;
    }
  }
</style>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data to prevent XSS
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
    $mobile  = htmlspecialchars(trim($_POST['mobile'] ?? ''));
    $address = htmlspecialchars(trim($_POST['address'] ?? ''));
    $city    = htmlspecialchars(trim($_POST['city'] ?? ''));
    $state   = htmlspecialchars(trim($_POST['state'] ?? ''));
    $country = htmlspecialchars(trim($_POST['country'] ?? ''));
    $pincode = htmlspecialchars(trim($_POST['pincode'] ?? ''));
    $payment = htmlspecialchars(trim($_POST['payment'] ?? ''));
    $total   = htmlspecialchars(trim($_POST['total'] ?? '0'));

    // Optional: You can validate data here again before processing (recommended)

    echo "<div class='container mt-5'>";
    echo "<h2>✅ Order Placed Successfully!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Mobile:</strong> $mobile</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>City:</strong> $city</p>";
    echo "<p><strong>State:</strong> $state</p>";
    echo "<p><strong>Country:</strong> $country</p>";
    echo "<p><strong>Pincode:</strong> $pincode</p>";
    echo "<p><strong>Payment Method:</strong> " . 
         ($payment === 'cod' ? 'Cash on Delivery' : ($payment === 'online' ? 'Online Payment' : 'N/A')) 
         . "</p>";
    echo "<p><strong>Total:</strong> ₹$total</p>";
    echo "<a href='products.php' class='btn btn-primary mt-3'>🔙 Back to Products</a>";
    echo "</div>";
} else {
    header("Location: cart_show.php");
    exit;
}
?>


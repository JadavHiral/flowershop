<?php
// Start session before output
if (session_status() === PHP_SESSION_NONE) {
    session_start();
    ob_start();
}

// Handle "Forgot Password" form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';

    // Simulate email check (in real use, check DB and send email)
    if (isset($_SESSION['user']) && $_SESSION['user']['email'] === $email) {
        // Simulate sending reset email (you can integrate PHPMailer later)
        $_SESSION['reset_msg'] = "📧 A password reset link has been sent to your email.";
    } else {
        $_SESSION['reset_msg'] = "❌ Email not found. Please register or try again.";
    }

    header("Location: forgetPassword.php");
    exit;
}

// Show message if available
$reset_msg = $_SESSION['reset_msg'] ?? '';
unset($_SESSION['reset_msg']);
?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forgot Password | FlowerShop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">-->

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #e0f7fa, #f8f9fa);
      font-family: 'Segoe UI', sans-serif;
    }

    .form-container {
      max-width: 450px;
      margin: 60px auto;
      padding: 40px 30px;
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      border-top: 5px solid #198754;
    }

    h2.text-center {
      color: #198754;
      font-weight: 700;
      font-size: 2rem;
    }

    .form-control {
      border-radius: 8px;
      border: 1px solid #ced4da;
    }

    .form-control:focus {
      border-color: #198754;
      box-shadow: 0 0 0 0.2rem rgba(25, 135, 84, 0.25);
    }

    .btn-reset {
      background-color: #198754;
      color: white;
      font-weight: 600;
      padding: 10px;
      border-radius: 8px;
      border: none;
      transition: 0.3s;
    }

    .btn-reset:hover {
      background-color: #157347;
      transform: scale(1.03);
    }

    .error {
      color: #d9534f;
      font-size: 0.85rem;
      margin-top: 5px;
      font-weight: 500;
    }

    .footer-text {
      font-size: 0.95rem;
      margin-top: 20px;
      text-align: center;
    }

    .footer-text a {
      color: #198754;
      text-decoration: none;
      font-weight: 500;
    }

    .footer-text a:hover {
      text-decoration: underline;
    }

    .alert-message {
      margin-bottom: 20px;
    }

    @media (max-width: 576px) {
      .form-container {
        padding: 30px 20px;
      }

      h2.text-center {
        font-size: 1.6rem;
      }
    }
  </style>
<!--</head>
<body>-->

<div class="container">
  <div class="form-container">
    <h2 class="text-center mb-4">🔐 Forgot Password</h2>

    <?php if ($reset_msg): ?>
      <div class="alert alert-info alert-message text-center"><?= htmlspecialchars($reset_msg) ?></div>
    <?php endif; ?>

    <form id="forgotForm" action="forgetPassword.php" method="post" novalidate>
      <div class="mb-3">
        <label for="email" class="form-label">Registered Email *</label>
        <input type="email" class="form-control" id="email" name="email" />
      </div>

      <button type="submit" class="btn btn-reset w-100">Send Reset Link</button>

      <div class="footer-text mt-4">
        Remembered your password? <a href="login.php">Back to Login</a>
      </div>
    </form>
  </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<script>
  $(document).ready(function () {
    $("#forgotForm").validate({
      errorElement: 'div',
      errorClass: 'error',
      rules: {
        email: {
          required: true,
          email: true
        }
      },
      messages: {
        email: "Please enter a valid registered email address."
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
</script>

<!--</body>
</html>-->
<?php
$Content1 = ob_get_clean();
//$title_page = '<h1 class="text-center my-4">Register</h1>';
include 'layout.php';
?>

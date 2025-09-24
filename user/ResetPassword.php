<?php
// Start session and output buffering
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
ob_start();

// Simulate a registered user if not set (for demo only)
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = [
        'username' => 'testuser',
        'email' => 'test@example.com',
        'password' => 'oldpassword123'
    ];
}

// Handle reset form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $newPassword = $_POST['new_password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';

    if ($email === $_SESSION['user']['email']) {
        if ($newPassword === $confirmPassword) {
            $_SESSION['user']['password'] = $newPassword;
            $_SESSION['reset_msg'] = "✅ Password reset successful! You can now <a href='login.php'>login</a>.";
        } else {
            $_SESSION['reset_msg'] = "❌ Passwords do not match.";
        }
    } else {
        $_SESSION['reset_msg'] = "❌ Email not found.";
    }

    header("Location: resetPassword.php");
    exit;
}

// Get and clear message
$reset_msg = $_SESSION['reset_msg'] ?? '';
unset($_SESSION['reset_msg']);
?>

<div class="container">
  <div class="form-container">
    <h2 class="text-center mb-4">🔐 Reset Password</h2>

    <?php if ($reset_msg): ?>
      <div class="alert alert-info alert-message text-center"><?= $reset_msg ?></div>
    <?php endif; ?>

    <form id="resetForm" action="resetPassword.php" method="post" novalidate>
      <div class="mb-3">
        <label for="email" class="form-label">Registered Email *</label>
        <input type="email" class="form-control" id="email" name="email" />
      </div>

      <div class="mb-3">
        <label for="new_password" class="form-label">New Password *</label>
        <input type="password" class="form-control" id="new_password" name="new_password" />
      </div>

      <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm Password *</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" />
      </div>

      <button type="submit" class="btn btn-reset w-100">Reset Password</button>

      <div class="footer-text mt-4">
        Go back to <a href="login.php">Login</a>
      </div>
    </form>
  </div>
</div>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery & Validation -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<!-- Validation Script -->
<script>
  $(document).ready(function () {
    $("#resetForm").validate({
      errorElement: 'div',
      errorClass: 'error',
      rules: {
        email: {
          required: true,
          email: true
        },
        new_password: {
          required: true,
          minlength: 6
        },
        confirm_password: {
          required: true,
          equalTo: "#new_password"
        }
      },
      messages: {
        email: "Enter your registered email",
        new_password: "Enter a new password (min 6 chars)",
        confirm_password: "Passwords must match"
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
</script>

<!-- CSS -->
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
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
    border-top: 5px solid #198754;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .form-container:hover {
    transform: scale(1.01);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
  }

  h2.text-center {
    color: #198754;
    font-weight: 700;
    font-size: 2rem;
  }

  .form-control {
    border-radius: 8px;
    border: 1px solid #ced4da;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
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
    transition: background-color 0.3s ease, transform 0.2s ease;
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
    transition: color 0.3s ease;
  }

  .footer-text a:hover {
    text-decoration: underline;
    color: #145c32;
  }

  .alert-message {
    margin-bottom: 20px;
    font-weight: 500;
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

<?php
$Content1 = ob_get_clean();
include 'layout.php';
?>

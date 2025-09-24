<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
    ob_start();
}

// Handle login form POST submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $remember = $_POST['remember'] ?? '';

    // Simulated user validation
    if (
        isset($_SESSION['user']) &&
        $_SESSION['user']['username'] === $username
    ) {
        $_SESSION['logged_in_user'] = $_SESSION['user'];

        // If 'Remember Me' is checked, set cookie for 7 days
        if ($remember === 'on') {
            setcookie("remember_username", $username, time() + (7 * 24 * 60 * 60));
        } else {
            setcookie("remember_username", "", time() - 3600);
        }

        header("Location: products.php");
        exit;
    } else {
        header("Location: register.php?msg=not_registered");
        exit;
    }
}

$remembered_username = $_COOKIE['remember_username'] ?? '';
?>

<!-- Login Page Content -->
<div class="container">
  <div class="login-container">
    <h2 class="text-center mb-4">🔐 Login</h2>

    <form id="loginForm" action="login.php" method="post" novalidate>
      <div class="mb-3">
        <label for="username" class="form-label">Username *</label>
        <input type="text" class="form-control" id="username" name="username" value="<?= htmlspecialchars($remembered_username) ?>" />
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password *</label>
        <input type="password" class="form-control" id="password" name="password" />
      </div>

      <div class="mb-3 form-check d-flex justify-content-between">
        <div>
          <input type="checkbox" class="form-check-input" id="remember" name="remember">
          <label class="form-check-label" for="remember">Remember Me</label>
        </div>
        <div>
          <a href="resetPassword.php" class="forgot-link">Forgot Password?</a>
        </div>
      </div>

      <button type="submit" class="btn btn-login w-100">Login</button>

      <div class="footer-text mt-4">
        Don't have an account?
        <a href="register.php" class="register-link">Register now</a>
      </div>
    </form>
  </div>
</div>

<!-- Styles -->
<style>
  body {
    background: linear-gradient(to right, #e0f7fa, #f8f9fa);
    font-family: 'Segoe UI', sans-serif;
  }

  .login-container {
    max-width: 450px;
    margin: 60px auto;
    padding: 40px 30px;
    background: #ffffff;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    border-top: 5px solid #198754;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .login-container:hover {
    transform: scale(1.02);
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
    transition: 0.3s;
  }

  .form-control:focus {
    border-color: #198754;
    box-shadow: 0 0 0 0.2rem rgba(25, 135, 84, 0.25);
  }

  .btn-login {
    background-color: #198754;
    color: white;
    font-weight: 600;
    padding: 10px;
    border-radius: 8px;
    transition: 0.3s;
    border: none;
  }

  .btn-login:hover {
    background-color: #157347;
    transform: scale(1.03);
  }

  .form-check-label {
    margin-left: 5px;
  }

  .error {
    color: #d9534f;
    font-size: 0.85rem;
    margin-top: 5px;
    font-weight: 500;
  }

  .forgot-link,
  .register-link {
    color: #198754;
    text-decoration: none;
    font-weight: 500;
  }

  .forgot-link:hover,
  .register-link:hover {
    text-decoration: underline;
  }

  .footer-text {
    font-size: 0.95rem;
    margin-top: 20px;
    text-align: center;
  }

  @media (max-width: 576px) {
    .login-container {
      padding: 30px 20px;
    }

    h2.text-center {
      font-size: 1.6rem;
    }
  }
</style>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script>
  $(document).ready(function () {
    $("#loginForm").validate({
      errorElement: 'div',
      errorClass: 'error',
      rules: {
        username: {
          required: true,
          minlength: 3
        },
        password: {
          required: true,
          minlength: 6
        }
      },
      messages: {
        username: "Please enter at least 3 characters.",
        password: "Password must be at least 6 characters long."
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
</script>

<?php
$Content1 = ob_get_clean();
include 'layout.php';
?>

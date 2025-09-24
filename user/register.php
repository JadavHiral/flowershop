<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
    ob_start();
}

$error = '';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username         = trim($_POST['username'] ?? '');
    $name             = trim($_POST['name'] ?? '');
    $email            = trim($_POST['email'] ?? '');
    $phone            = trim($_POST['phone'] ?? '');
    $city             = trim($_POST['city'] ?? '');
    $state            = trim($_POST['state'] ?? '');
    $country          = trim($_POST['country'] ?? '');
    $address          = trim($_POST['address'] ?? '');
    $password         = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Basic required fields validation
    if (empty($username) || empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $error = "Please fill in all required fields.";
    } 
    // Password match validation
    elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } 
    // Phone validation: exactly 10 digits
    elseif (!empty($phone) && !preg_match('/^\d{10}$/', $phone)) {
        $error = "Phone number must be exactly 10 digits.";
    }
    else {
        // Hash password and simulate saving to DB (session)
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $_SESSION['user'] = [
            'username' => $username,
            'name'     => $name,
            'email'    => $email,
            'phone'    => $phone,
            'city'     => $city,
            'state'    => $state,
            'country'  => $country,
            'address'  => $address,
            'password_hash' => $password_hash
        ];

        $_SESSION['success'] = "✅ Registration successful! Please login.";

        header("Location: login.php");
        exit;
    }
}
?>

<style>
/* Reusing login page background and layout */
body {
  background: linear-gradient(to right, #e0f7fa, #f8f9fa);
  font-family: 'Segoe UI', sans-serif;
}

.box-container {
  border: 1px solid #ccc;
  background: #ffffff;
  padding: 40px 30px;
  border-radius: 15px;
  box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
  border-top: 5px solid #198754;
  max-width: 500px;
  margin: 60px auto;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.box-container:hover {
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
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-control:focus {
  border-color: #198754;
  box-shadow: 0 0 0 0.2rem rgba(25, 135, 84, 0.25);
}

button[type="submit"] {
  background-color: #198754;
  color: #fff;
  font-weight: 600;
  font-size: 1rem;
  padding: 10px;
  border-radius: 8px;
  transition: background-color 0.3s ease, transform 0.2s ease;
  border: none;
  cursor: pointer;
  width: 100%;
}

button[type="submit"]:hover {
  background-color: #157347;
  transform: scale(1.03);
}

.box-container p {
  font-size: 0.95rem;
  margin-top: 20px;
  text-align: center;
}

.box-container a {
  color: #198754;
  text-decoration: none;
  font-weight: 500;
}

.box-container a:hover {
  text-decoration: underline;
}

/* Error messages aligned left */
.error {
  color: red;
  font-size: 0.9rem;
  margin-bottom: 15px;
  text-align: left;
}

@media (max-width: 576px) {
  .box-container {
    padding: 30px 20px;
  }

  h2.text-center {
    font-size: 1.6rem;
  }
}
</style>

<div class="container">
  <div class="box-container">
    <h2 class="text-center mb-4">📝 Register</h2>

    <?php if ($error): ?>
      <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form id="registerForm" action="register.php" method="post" novalidate>
      <div class="mb-3">
        <label for="username" class="form-label">Username *</label>
        <input type="text" class="form-control" id="username" name="username" value="<?= htmlspecialchars($_POST['username'] ?? '') ?>" />
      </div>

      <div class="mb-3">
        <label for="name" class="form-label">Full Name *</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" />
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email *</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" />
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">Phone *</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>" />
      </div>

      <div class="mb-3">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" id="city" name="city" value="<?= htmlspecialchars($_POST['city'] ?? '') ?>" />
      </div>

      <div class="mb-3">
        <label for="state" class="form-label">State</label>
        <input type="text" class="form-control" id="state" name="state" value="<?= htmlspecialchars($_POST['state'] ?? '') ?>" />
      </div>

      <div class="mb-3">
        <label for="country" class="form-label">Country</label>
        <input type="text" class="form-control" id="country" name="country" value="<?= htmlspecialchars($_POST['country'] ?? '') ?>" />
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" id="address" name="address" rows="3"><?= htmlspecialchars($_POST['address'] ?? '') ?></textarea>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password *</label>
        <input type="password" class="form-control" id="password" name="password" />
      </div>

      <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm Password *</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" />
      </div>

      <button type="submit">Register</button>

      <p>
        Already have an account? <a href="login.php">Login now</a>
      </p>
    </form>
  </div>
</div>

<!-- jQuery & Validation -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<script>
  // Custom method for phone number validation (exactly 10 digits)
  $.validator.addMethod("phone10", function(phone_number, element) {
    return this.optional(element) || /^\d{10}$/.test(phone_number);
  }, "Please enter exactly 10 digits");

  $(document).ready(function () {
    $("#registerForm").validate({
      errorElement: 'div',
      errorClass: 'error',
      rules: {
        username: {
          required: true,
          minlength: 3
        },
        name: {
          required: true,
          minlength: 3
        },
        email: {
          required: true,
          email: true
        },
        phone: {
          required: true,
          phone10: true
        },
        password: {
          required: true,
          minlength: 6
        },
        confirm_password: {
          required: true,
          equalTo: "#password"
        }
      },
      messages: {
        username: "Username must be at least 3 characters",
        name: "Name must be at least 3 characters",
        email: "Please enter a valid email",
        phone: "Please enter 10 digits only",
        password: {
          required: "Enter your password",
          minlength: "Must be at least 6 characters"
        },
        confirm_password: {
          required: "Confirm your password",
          equalTo: "Passwords do not match"
        }
      }
    });
  });
</script>

<?php
$Content1 = ob_get_clean();
include 'layout.php';
?>


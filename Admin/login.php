<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body background="../images/aesthetic.jpg" style="background-size:cover;">
  <form action="login.php" method="post"
    style="max:width 400px; margin:auto; padding:10px; border:1px solid #5c4033; background-color:#fffbea; margin-top:50px;">
    <div class="mb-3 mt-3">
      <label for="username" class="form-label">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
    </div>
    <div class="mb-3">
      <label for="pswd" class="form-label">Password:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" required>
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary margin:center">Submit</button>

  </form>

</body>

</html>

<?php
$content1 = ob_get_clean();
include_once("layout.php");
include("footer.php");
?>
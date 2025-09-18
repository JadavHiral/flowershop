<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: hotpink;
            font-size: 0.875em;
            margin-top: 0.25em;
        }
    </style>
    <script>

    </script>
</head>

<body background="../images/sun_f.jpg" style="background-size:cover;">
    <form action="signup.php" method="post" id="signup" enctype="multipart/form-data"
        style="max-width:600px; margin:auto; padding:20px; border:1px solid #5c4033; background-color:#fffbea; margin-top:50px; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1);">

        <div class="row mb-3 mt-5">
            <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter first name"
                    required alpha>
                <div class="error" id="firstNameError"></div>

            </div>
            <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter last name"
                    required alpha>
                <div class="error" id="lastNameError"></div>
            </div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                data-validation="required email">
            <div class="error" id="emailError"> </div>
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile Number"
                name="mobile" data-validation="required numeric min max" data-min="10" data-max="10">
            <div class="error" id="mobileError"></div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Create password"
                data-validation="required strongPassword min max" data-min="8" data-max="25">
            <div class="error" id="passwordError"></div>
        </div>

        <div class=" mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                placeholder="Confirm password" data-validation="required confirmPassword" data-password-id="password">
            <div class="error" id="confirmPasswordError"></div>
        </div>

        <div class=" mb-3">
            <label for="profile_picture" class="form-label">Profile Picture</label>
            <input type="file" class="form-control" id="profile_picture" name="profile_picture"
                placeholder="Confirm password" data-validation="required file filesize" data-filesize="200">
            <div class="error" id="profile_pictureError"></div>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="terms" name="terms" data-validation="terms">
            <label class="form-check-label" for="terms">I agree to the Terms & Conditions</label>
            <div class="error" id="termsError"></div>
        </div>
        <button type="submit" class="btn btn-outline-dark w-100 mb-3" name="signup_btn">Register</button>
        <div class="text-center">
            <p class="mb-0">Already have an account?
                <a href="login.php" class="text-primary text-decoration-none"><u>Login</u></a>
            </p>
        </div>
    </form>
</body>

</html>
<?php
$content1 = ob_get_clean();
include_once('layout.php');
include("footer.php");
?>
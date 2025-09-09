<?php
//$title_page = "Register";
ob_start();
?>

<script>
</script>
<form id="register" method="post">
    <div class="mb-3 mt-3">
        <label for="name1" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name1" placeholder="Enter Name" name="fname"
            data-validation="required">
        <div class="error" id="fnameError"></div>
    </div>
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
            data-validation="required">
        <div class="error" id="emailError"></div>
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Password:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd"
            data-validation="required">
        <div class="error" id="pswdError"></div>
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Confirm Password:</label>
        <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="repswd"
            data-validation="required">
        <div class="error" id="repswdError"></div>
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Select Gender:</label>
        <input type="radio" name="gender" id="gender1" value="m" data-validation="required">Male
        <input type="radio" name="gender" id="gender1" value="f" data-validation="required">Female
        <div class="error" id="genderError"></div>
    </div>
    <div class="form-check mb-3">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember" data-validation="required"> Remember me
        </label>
        <div class="error" id="rememberError"></div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
$content1 = ob_get_clean();
include_once('home.php');
?>
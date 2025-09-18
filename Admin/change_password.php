<?php
ob_start();

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<style>
    input.error {
        border: 2px solid red;
    }

    label.error {
        color: red;
        font-size: 12px;
        margin-top: 5px;
        display: block;
    }
</style>

<body background="../images/aesthetic2.jpg" style="background-size:cover;">
    <form action="" method="post"
        style="max-width:800px; margin:auto; padding:10px; border:1px solid #5c4033; background-color:#fffbea; margin-top:50px; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1);">
        <div class="mb-3 mt-3">
            <label for="current_password" class="form-label">Current Password:</label>
            <input type="password" class="form-control" id="current_password" placeholder="Enter current password"
                name="current_password" data-validation="required">
            <div class="error" id="current_passwordError"></div>
        </div>
        <div class="mb-3">
            <label for="new_password" class="form-label">New Password:</label>
            <input type="password" class="form-control" id="new_password" placeholder="Enter new password"
                name="new_password" data-validation="required strongPassword min max" data-min="8" data-max="25">
            <div class="error" id="new_passwordError"></div>
        </div>
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirm New Password:</label>
            <input type="password" class="form-control" id="confirm_password" placeholder="Confirm new password"
                name="confirm_password" data-validation="required confirmPassword" data-password-id="new_password">
            <div class="error" id="confirm_passwordError"></div>
        </div>
        <!--<button type="submit" class="btn btn-primary">Change Password</button>-->
        <input type="button" id="b1" value="Change Password" style="background-color: #ff69b4; color: white;"></input>
        <script>
            $("#b1").click(function () {
                alert("Password Changed Successfully!");
            }
            );
        </script>

    </form>
</body>

<?php
$content1 = ob_get_clean();

include_once("layout.php");
include("footer.php");
?>
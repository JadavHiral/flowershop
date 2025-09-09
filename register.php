<?php
$title_page;
ob_start();
?>
<!--Registration-->

<body>
    <div style="width: 80%; margin: 0 auto; text-align: center;">
        <div class="my_form">
            <h2> <b> Registration </b></h2>

            <form id="register" method="POST">
                <div class="mb-3 mt-3">
                    <label>Name:</label>
                    <input type="text" name="name">
                </div>

                <div class="mb-3 mt-3">
                    <label>Email:</label>
                    <input type="text" name="email">
                </div>

                <div class="mb-3 mt-3">
                    <label>Password:</label>
                    <input type="password" name="password">
                </div>

                <div class="mb-3 mt-3">
                    <label>Confirm Password:</label>
                    <input type="password" name="cpassword">
                </div>

                <div class="mb-3 mt-3">
                    <label>Gender:</label>
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="male">Male
                </div>

                <div class="mb-3 mt-3">
                    <label>Mobile No:</label>
                    <input type="text" name="mobile">
                </div>

                <div class="mb-3 mt-3">
                    <label>City:</label>
                    <input type="text" name="city">
                </div>

                <div class="mb-3 mt-3">
                    <label>Address:</label>
                    <textarea name="aadress"></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
    </div>
</body>

<?php
$content1 = ob_get_clean();
include_once("layout.php");
?>
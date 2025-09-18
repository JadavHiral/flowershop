<?php
ob_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Manage Users - Flower Shop Admin</title>
    <style>
        /*body {
            font-family: Arial, sans-serif;
            background-color: #fdf6f9;
            padding: 20px;
        }*/

        h2 {
            color: brown;
        }

        h3 {
            font-style: italic bold;
            color: #fffbea;
            margin-top: 40px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
        }

        .error {
            color: red;
            font-size: 24px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th,
        td {
            border: 1px solid #5c4033;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #5c4033;
        }

        tr {
            background-color: white;
        }
    </style>
</head>

<body background="../images/aesthetic3.jpg" style="background-size:cover;">

    <form method="post"
        style="max : width 600px; margin:auto; padding:10px; border:1px solid #5c4033; background-color:#fffbea; margin-top:50px;">
        <h2 align="center">Manage Users</h2>

        <label>Name:</label>
        <input type="text" name="name">

        <label>Email:</label>
        <input type="text" name="email">

        <label>Role:</label>
        <select name="role">
            <option value="">Select Role</option>
            <option value="Admin">Admin</option>
            <option value="Editor">Editor</option>
            <option value="Viewer">Viewer</option>
        </select>

        <input type="submit" name="submit" value="Add User">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $role = $_POST['role'] ?? '';

        // Simple validation
        if ($name && $email && $role) {
            echo "<h3>User Added:</h3>";
            echo "<table>";
            echo "<tr><th>Name</th><th>Email</th><th>Role</th></tr>";
            echo "<tr><td>$name</td><td>$email</td><td>$role</td></tr>";
            echo "</table>";
        } else {
            echo "<p class='error'>Please fill all fields.</p>";
        }
    }
    ?>

</body>

</html>
<?php
$content1 = ob_get_clean();
include_once("layout.php");
include("footer.php");
?>
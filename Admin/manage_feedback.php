<?php
ob_start();

// Dummy feedback records (only loaded once per session)
if (!isset($_SESSION['feedback'])) {
    $_SESSION['feedback'] = [
        ['name' => 'Amit Patel', 'email' => 'amit@example.com', 'message' => 'Loved the rose bouquet!'],
        ['name' => 'Sneha Shah', 'email' => 'sneha@example.com', 'message' => 'Delivery was quick and flowers were fresh.'],
        ['name' => 'Rahul Mehta', 'email' => 'rahul@example.com', 'message' => 'Please add more orchid varieties.']
    ];
}

// Handle delete request
if (isset($_GET['delete'])) {
    $index = $_GET['delete'];
    if (isset($_SESSION['feedback'][$index])) {
        unset($_SESSION['feedback'][$index]);
        $_SESSION['feedback'] = array_values($_SESSION['feedback']); // Reindex
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin - Manage Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;

        }

        h2 {
            color: #c71585;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #ffe4e1;
        }

        .delete-btn {
            color: red;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h2 style="margin-top: 40px; text-align: center; margin-bottom: 20px;">Admin Panel: Manage Feedback</h2>

    <?php if (!empty($_SESSION['feedback'])): ?>
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            <?php foreach ($_SESSION['feedback'] as $index => $fb): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($fb['name']) ?></td>
                    <td><?= htmlspecialchars($fb['email']) ?></td>
                    <td><?= htmlspecialchars($fb['message']) ?></td>
                    <td><a href="?delete=<?= $index ?>" class="delete-btn">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No feedback available.</p>
    <?php endif; ?>

</body>

</html>
<?php
$content1 = ob_get_clean();
include "layout.php";
include "footer.php";
?>
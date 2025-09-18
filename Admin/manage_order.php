<?php
ob_start();

// Initialize orders array
if (!isset($_SESSION['orders'])) {
    $_SESSION['orders'] = [
        ['customer' => 'Amit Patel', 'product' => 'Rose Bouquet', 'quantity' => 2, 'delivery' => '2025-09-20'],
        ['customer' => 'Sneha Shah', 'product' => 'Tulip Basket', 'quantity' => 1, 'delivery' => '2025-09-22'],
        ['customer' => 'Rahul Mehta', 'product' => 'Orchid Arrangement', 'quantity' => 3, 'delivery' => '2025-09-25']
    ];
}

// Handle new order submission
if (isset($_POST['add_order'])) {
    $order = [
        'customer' => $_POST['customer'],
        'product' => $_POST['product'],
        'quantity' => $_POST['quantity'],
        'delivery' => $_POST['delivery']
    ];
    $_SESSION['orders'][] = $order;
}

// Handle delete request
if (isset($_GET['delete'])) {
    $index = $_GET['delete'];
    if (isset($_SESSION['orders'][$index])) {
        unset($_SESSION['orders'][$index]);
        $_SESSION['orders'] = array_values($_SESSION['orders']); // Reindex
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin - Manage Orders</title>
    <style>
        /*body {
            font-family: Arial;
            background: #fff8f0;
            padding: 20px;
        }*/

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
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
            background-color: #Fff;
        }

        th {
            background-color: #fff;
        }

        .delete-btn {
            color: red;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body background="../images/aesthetic3.jpg" style="background-size:cover;">

    <form method="post"
        style="max:width 500px; margin:auto; padding:10px; border:1px solid #5c4033; background-color:#fffbea; margin-top:50px;">
        <h2 align="center">Manage Orders</h2>

        <label>Customer Name:</label>
        <input type="text" name="customer" required>

        <label>Product Name:</label>
        <input type="text" name="product" required>


        <label>Quantity:</label>
        <input type="number" name="quantity" min="1" required>

        <label>Delivery Date:</label>
        <input type="date" name="delivery" required>

        <input type="submit" name="add_order" value="Add Order">
    </form>

    <?php if (!empty($_SESSION['orders'])): ?>
        <h3 style="margin-top: 5px; ">Current Orders:</h3>
        <table>
            <tr>
                <th>#</th>
                <th>Customer</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Delivery</th>
                <th>Action</th>
            </tr>
            <?php foreach ($_SESSION['orders'] as $index => $order): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($order['customer']) ?></td>
                    <td><?= htmlspecialchars($order['product']) ?></td>
                    <td><?= htmlspecialchars($order['quantity']) ?></td>
                    <td><?= htmlspecialchars($order['delivery']) ?></td>
                    <td><a href="?delete=<?= $index ?>" class="delete-btn">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No orders yet.</p>
    <?php endif; ?>

</body>

</html>
<?php
$content1 = ob_get_clean();
include 'layout.php';
include 'footer.php';
?>
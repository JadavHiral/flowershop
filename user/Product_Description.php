<?php
ob_start();
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Sanitize and get product ID from URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Define products array
$products = [
    1 => [
        'id' => 1,
        'name' => 'White Rose Bouquet',
        'price' => 599,
        'image' => './assets/images/WhiteRoseBouquet.png',
        'description' => 'A beautiful bouquet of fresh white roses perfect for any occasion.'
    ],
    2 => [
        'id' => 2,
        'name' => 'Red Rose Bouquet',
        'price' => 499,
        'image' => './assets/images/RedRose_Bouquet.webp',
        'description' => 'Classic red rose bouquet symbolizing love and passion.'
    ]
];

$product = $products[$id] ?? null;

if (!$product) {
    echo "<p>Product not found.</p>";
    exit;
}
?>

<style>
  .product-container {
    max-width: 900px;
    margin: 40px auto;
    display: flex;
    gap: 40px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .product-image {
    flex: 1;
  }

  .product-image img {
    width: 100%;
    border-radius: 12px;
    object-fit: contain;
  }

  .product-info {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .product-info h2 {
    margin-bottom: 15px;
    color: #218838;
    font-size: 2rem;
  }

  .product-info p.description {
    font-size: 1.1rem;
    margin-bottom: 25px;
    color: #555;
  }

  .product-info .price {
    font-weight: 700;
    font-size: 1.5rem;
    color: #198754;
    margin-bottom: 25px;
  }

  .product-info label {
    font-weight: 600;
    margin-bottom: 8px;
  }

  .product-info input[type="number"] {
    width: 80px;
    padding: 8px;
    font-size: 1rem;
    border: 1.5px solid #ccc;
    border-radius: 8px;
    margin-bottom: 25px;
  }

  .product-info .actions {
    display: flex;
    gap: 15px;
  }

  .product-info button {
    flex: 1;
    padding: 12px 0;
    font-size: 1rem;
    border-radius: 8px;
    cursor: pointer;
    border: none;
    transition: background-color 0.3s ease;
  }

  .btn-cart {
    background-color: #198754;
    color: white;
  }
  .btn-cart:hover {
    background-color: #146c43;
  }

  .btn-wishlist {
    background-color: transparent;
    border: 2px solid #dc3545;
    color: #dc3545;
  }
  .btn-wishlist:hover {
    background-color: #dc3545;
    color: white;
  }
</style>

<div class="product-container">
  <div class="product-image">
    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
  </div>
  <div class="product-info">
    <h2><?= htmlspecialchars($product['name']) ?></h2>
    <p class="description"><?= htmlspecialchars($product['description']) ?></p>
    <p class="price">₹<?= number_format($product['price'], 2) ?></p>

    <form method="GET" action="add_to_cart.php">
      <label for="quantity">Quantity:</label>
      <input type="number" id="quantity" name="quantity" value="1" min="1" max="100" required>

      <input type="hidden" name="product" value="<?= $product['id'] ?>">
      <input type="hidden" name="name" value="<?= htmlspecialchars($product['name']) ?>">
      <input type="hidden" name="price" value="<?= $product['price'] ?>">

      <div class="actions">
        <button type="submit" class="btn-cart">🛒 Add to Cart</button>
    </form>

    <form method="POST" action="add_to_wishlist.php" style="flex:1;">
      <input type="hidden" name="product" value="<?= $product['id'] ?>">
      <input type="hidden" name="name" value="<?= htmlspecialchars($product['name']) ?>">
      <button type="submit" class="btn-wishlist">❤️ Add to Wishlist</button>
    </form>
      </div>
  </div>
</div>

<?php
$Content1 = ob_get_clean();
include_once("layout.php");
?>

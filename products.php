<?php
ob_start();
?>

<div class="col-12">
  <h2 class="mb-4 text-center">Products 🛍️</h2>
  <div class="row g-4">

    <!-- Product Item 1 -->
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
      <div class="card h-100">
        <img src="./assets/images/WhiteRoseBouquet.png" class="card-img-top" alt="White Rose Bouquet">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title d-flex justify-content-between align-items-center">
            White Rose Bouquet
            <button class="btn btn-sm btn-info btn-toggle-desc" title="Show Description">ℹ️</button>
          </h5>
          <p class="product-desc" style="display: none;">
            A beautiful bouquet of fresh white roses perfect for any occasion.
          </p>
          <p class="text-success fw-bold">₹599.00</p>
          <div class="mt-auto d-grid gap-2">
            <button class="btn btn-success btn-add-to-cart"
                    data-id="1"
                    data-name="White Rose Bouquet"
                    data-price="599">🛒 Add to Cart</button>

            <button class="btn btn-outline-danger btn-add-to-wishlist"
                    data-id="1"
                    data-name="White Rose Bouquet">❤️ Add to Wishlist</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Item 2 -->
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
      <div class="card h-100">
        <img src="./assets/images/RedRose_Bouquet.webp" class="card-img-top" alt="Red Rose Bouquet">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title d-flex justify-content-between align-items-center">
            Red Rose Bouquet
            <button class="btn btn-sm btn-info btn-toggle-desc" title="Show Description">ℹ️</button>
          </h5>
          <p class="product-desc" style="display: none;">
            Classic red rose bouquet symbolizing love and passion.
          </p>
          <p class="text-success fw-bold">₹499.00</p>
          <div class="mt-auto d-grid gap-2">
            <button class="btn btn-success btn-add-to-cart"
                    data-id="2"
                    data-name="Red Rose Bouquet"
                    data-price="499">🛒 Add to Cart</button>

            <button class="btn btn-outline-danger btn-add-to-wishlist"
                    data-id="2"
                    data-name="Red Rose Bouquet">❤️ Add to Wishlist</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Hidden form to submit to add_to_cart.php using GET -->
<form id="addToCartForm" method="GET" action="add_to_cart.php" style="display:none;">
  <input type="hidden" name="product" id="formProductId">
  <input type="hidden" name="name" id="formProductName">
  <input type="hidden" name="price" id="formProductPrice">
</form>

<script>
  // Toggle product description
  document.querySelectorAll('.btn-toggle-desc').forEach(button => {
    button.addEventListener('click', () => {
      const desc = button.closest('.card-body').querySelector('.product-desc');
      desc.style.display = (desc.style.display === 'none' || desc.style.display === '') ? 'block' : 'none';
    });
  });

  // Add to Cart
  document.querySelectorAll('.btn-add-to-cart').forEach(button => {
    button.addEventListener('click', () => {
      if (confirm('Add this item to your cart?')) {
        const id = button.getAttribute('data-id');
        const name = button.getAttribute('data-name');
        const price = button.getAttribute('data-price');

        document.getElementById('formProductId').value = id;
        document.getElementById('formProductName').value = name;
        document.getElementById('formProductPrice').value = price;

        document.getElementById('addToCartForm').submit();
      }
    });
  });

  // Wishlist button (optional)
  document.querySelectorAll('.btn-add-to-wishlist').forEach(button => {
    button.addEventListener('click', () => {
      const name = button.getAttribute('data-name');
      alert(`"${name}" added to wishlist ❤️`);
    });
  });
</script>

<?php
$Content1 = ob_get_clean();
include_once("layout.php");
?>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

ob_start();
?>

<style>
  /* Container for wishlist */
  .container {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 15px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  /* Page title */
  h2.text-center {
    color: #198754;
    font-weight: 700;
    font-size: 2.4rem;
    margin-bottom: 40px;
  }

  /* Wishlist grid */
  .row.g-4 {
    display: flex;
    flex-wrap: wrap;
    gap: 24px;
    justify-content: center;
  }

  /* Wishlist card */
  .card {
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    background-color: #fff;
  }

  .card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
  }

  /* Card image */
  .card-img-top {
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    object-fit: cover;
    height: 200px;
    width: 100%;
  }

  /* Card body */
  .card-body {
    padding: 18px 20px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
  }

  /* Product title + info button container */
  .card-title {
    font-size: 1.1rem;
    font-weight: 700;
    color: #145c32;
    margin-bottom: 10px;
  }

  /* Info button styling */
  .btn-toggle-desc {
    background: #0dcaf0;
    border: none;
    color: white;
    font-size: 1.1rem;
    line-height: 1;
    padding: 4px 8px;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .btn-toggle-desc:hover {
    background: #0bb9d9;
  }

  /* Product description */
  .product-desc {
    font-size: 0.95rem;
    color: #444;
    margin-bottom: 15px;
    line-height: 1.4;
  }

  /* Price */
  .text-success {
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 20px;
  }

  /* Buttons container */
  .mt-auto {
    margin-top: auto;
  }

  /* Add to cart button */
  .btn-success {
    background-color: #198754;
    border-color: #198754;
    font-weight: 600;
    border-radius: 8px;
    padding: 10px 0;
    font-size: 1rem;
    transition: background-color 0.3s ease;
    text-align: center;
    display: block;
    text-decoration: none;
    color: white;
  }

  .btn-success:hover {
    background-color: #146c43;
    border-color: #146c43;
  }

  /* Remove from wishlist button */
  .btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
    font-weight: 600;
    border-radius: 8px;
    padding: 10px 0;
    font-size: 1rem;
    transition: background-color 0.3s ease;
    width: 100%;
  }

  .btn-danger:hover {
    background-color: #a52732;
    border-color: #a52732;
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .card-img-top {
      height: 160px;
    }

    .card-title {
      font-size: 1rem;
    }

    .text-success {
      font-size: 1.1rem;
    }
  }

  @media (max-width: 480px) {
    .row.g-4 {
      flex-direction: column;
      gap: 30px;
    }
  }
</style>

<div class="container">
  <h2 class="mb-4 text-center">My Wishlist ❤️</h2>
  <div class="row g-4">

    <!-- Wishlist Item 1 -->
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
          <div class="mt-auto">
            <a href="add_to_cart.php?product=white_rose_bouquet&name=White Rose Bouquet&price=599" class="btn btn-success">
              🛒 Add to Cart
            </a>
            <button class="btn btn-danger btn-remove-wishlist mt-2">Remove from Wishlist</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Wishlist Item 2 -->
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
          <div class="mt-auto">
            <a href="add_to_cart.php?product=red_rose_bouquet&name=Red Rose Bouquet&price=499" class="btn btn-success">
              🛒 Add to Cart
            </a>
            <button class="btn btn-danger btn-remove-wishlist mt-2">Remove from Wishlist</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Add more wishlist items here as needed -->

  </div>
</div>

<script>
  // Toggle product description on info button click
  document.querySelectorAll('.btn-toggle-desc').forEach(button => {
    button.addEventListener('click', () => {
      const desc = button.closest('.card-body').querySelector('.product-desc');
      if (desc.style.display === 'none' || desc.style.display === '') {
        desc.style.display = 'block';
      } else {
        desc.style.display = 'none';
      }
    });
  });

  // Remove from wishlist button functionality (just removes from DOM here)
  document.querySelectorAll('.btn-remove-wishlist').forEach(button => {
    button.addEventListener('click', () => {
      if (confirm('Remove this item from wishlist?')) {
        button.closest('.col-xxl-3').remove();
      }
    });
  });
</script>

<?php
$Content1 = ob_get_clean();
include_once("layout.php");
?>


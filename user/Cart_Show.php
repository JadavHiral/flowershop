<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
ob_start();
?>

<style>
  /* ==============================
     Cart Show Page Styling - Improved
     ============================== */

  body {
    background: #f8fafb;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  /* Container Box */
  .box-container {
    max-width: 900px;
    margin: 40px auto;
    background-color: #fff;
    padding: 30px 35px;
    border-radius: 15px;
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .box-container:hover {
    transform: scale(1.02);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
  }

  /* Page Title */
  h2.text-center {
    color: #198754;
    font-weight: 700;
    font-size: 2.4rem;
    margin-bottom: 30px;
  }

  /* Cart Table */
  .table {
    width: 100%;
    border-collapse: collapse;
  }

  .table thead {
    background-color: #198754;
    color: #fff;
    font-weight: 700;
  }

  .table th,
  .table td {
    padding: 14px 20px;
    text-align: center;
    border-bottom: 1px solid #e5e5e5;
    font-size: 1rem;
    vertical-align: middle;
    word-break: break-word;
  }

  /* Product name aligned left */
  .table td:first-child {
    text-align: left;
    font-weight: 600;
    color: #145c32;
  }

  /* Hover effect on rows */
  .table tbody tr:hover {
    background-color: #e6f4ea;
  }

  /* Buttons */
  .btn {
    border-radius: 8px;
    font-weight: 600;
    padding: 10px 18px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }

  .btn-primary {
    background-color: #198754;
    border-color: #198754;
    color: #fff;
  }

  .btn-primary:hover {
    background-color: #146c43;
    border-color: #146c43;
    box-shadow: 0 6px 15px rgba(20, 108, 67, 0.6);
  }

  .btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
    color: #fff;
  }

  .btn-danger:hover {
    background-color: #a52732;
    border-color: #a52732;
    box-shadow: 0 6px 15px rgba(165, 39, 50, 0.6);
  }

  /* Form inputs styling */
  .form-control,
  .form-select {
    border-radius: 8px;
    border: 1px solid #ced4da;
    padding: 10px 12px;
    font-size: 1rem;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
  }

  .form-control:focus,
  .form-select:focus {
    border-color: #198754;
    box-shadow: 0 0 8px rgba(25, 135, 84, 0.3);
    outline: none;
  }

  /* Textarea adjustment */
  textarea.form-control {
    resize: vertical;
  }

  /* Total price styling */
  .cart-total {
    font-size: 1.3rem;
    font-weight: 700;
    color: #198754;
    text-align: right;
    margin-top: 15px;
  }

  /* Action buttons container */
  .text-center.mt-3,
  .text-center.mt-4 {
    margin-top: 20px;
    display: flex;
    justify-content: center;
    gap: 12px;
    flex-wrap: wrap;
  }

  /* Empty Cart Styling */
  .empty-cart {
    text-align: center;
    color: #6c757d;
    margin-top: 60px;
  }

  .empty-cart i {
    font-size: 4rem;
    margin-bottom: 15px;
    color: #adb5bd;
    transition: color 0.3s ease;
  }

  .empty-cart i:hover {
    color: #198754;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .box-container {
      padding: 25px 20px;
    }

    .table th,
    .table td {
      font-size: 0.9rem;
      padding: 12px 10px;
    }

    .btn {
      padding: 8px 14px;
      font-size: 0.9rem;
    }

    h2.text-center {
      font-size: 1.8rem;
    }

    .text-center.mt-3,
    .text-center.mt-4 {
      flex-direction: column;
      gap: 10px;
    }
  }
</style>

<div class="container my-5">
  <h2 class="text-center mb-4">🛒 Shopping Cart</h2>

  <?php if (!empty($_SESSION['cart'])): ?>

    <!-- Cart Items Box -->
    <div class="box-container">
      <table class="table table-bordered align-middle">
        <thead class="table-dark">
          <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $grandTotal = 0;
          foreach ($_SESSION['cart'] as $item):
              $itemTotal = $item['price'] * $item['quantity'];
              $grandTotal += $itemTotal;
          ?>
            <tr>
              <td><?= htmlspecialchars($item['name']) ?></td>
              <td>₹<?= number_format($item['price'], 2) ?></td>
              <td><?= (int)$item['quantity'] ?></td>
              <td>₹<?= number_format($itemTotal, 2) ?></td>
            </tr>
          <?php endforeach; ?>
          <tr class="table-secondary fw-bold">
            <td colspan="3" class="text-end">Grand Total</td>
            <td>₹<?= number_format($grandTotal, 2) ?></td>
          </tr>
        </tbody>
      </table>

      <div class="text-center mt-3">
        <a href="clear_cart.php" class="btn btn-danger me-2"><i class="fas fa-trash"></i> Clear Cart</a>
        <a href="products.php" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back to Products</a>
      </div>
    </div>

    <!-- Order Form Box -->
    <div class="box-container">
      <h4 class="text-center mb-4">📦 Place Your Order</h4>
      <form id="orderForm" action="order_process.php" method="post" novalidate>

        <div class="mb-3">
          <label for="name" class="form-label">Full Name *</label>
          <input type="text" name="name" id="name" class="form-control" />
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email *</label>
          <input type="email" name="email" id="email" class="form-control" />
        </div>

        <div class="mb-3">
          <label for="mobile" class="form-label">Mobile *</label>
          <input type="text" name="mobile" id="mobile" class="form-control" />
        </div>

        <div class="mb-3">
          <label for="address" class="form-label">Shipping Address *</label>
          <textarea name="address" id="address" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
          <label for="city" class="form-label">City *</label>
          <input type="text" name="city" id="city" class="form-control" />
        </div>

        <div class="mb-3">
          <label for="state" class="form-label">State *</label>
          <input type="text" name="state" id="state" class="form-control" />
        </div>

        <div class="mb-3">
          <label for="country" class="form-label">Country *</label>
          <input type="text" name="country" id="country" class="form-control" />
        </div>

        <div class="mb-3">
          <label for="pincode" class="form-label">Pincode *</label>
          <input type="text" name="pincode" id="pincode" class="form-control" />
        </div>

        <div class="mb-3">
          <label for="payment" class="form-label">Payment Method *</label>
          <select name="payment" id="payment" class="form-select">
            <option value="">-- Select --</option>
            <option value="cod">Cash on Delivery</option>
            <option value="online">Online Payment</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="total" class="form-label">Total Amount (₹)</label>
          <input type="text" name="total" id="total" class="form-control" value="<?= number_format($grandTotal, 2) ?>" readonly />
        </div>

        <div class="text-center mt-4">
          <button type="submit" class="btn btn-success px-4">📦 Place Order</button>
          <a href="clear_cart.php" class="btn btn-danger px-4 ms-2">❌ Cancel Order</a>
        </div>

      </form>
    </div>

    <!-- jQuery validation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#orderForm").validate({
          errorElement: 'div',
          errorClass: 'error',
          rules: {
            name: {
              required: true,
              minlength: 3
            },
            email: {
              required: true,
              email: true
            },
            mobile: {
              required: true,
              digits: true,
              minlength: 10,
              maxlength: 10
            },
            address: {
              required: true,
              minlength: 10
            },
            city: {
              required: true
            },
            state: {
              required: true
            },
            country: {
              required: true
            },
            pincode: {
              required: true,
              digits: true,
              minlength: 6,
              maxlength: 6
            },
            payment: {
              required: true
            }
          },
          messages: {
            name: "Please enter your name (min 3 characters)",
            email: "Enter a valid email",
            mobile: "Enter a valid 10-digit mobile",
            address: "Enter your full address (min 10 characters)",
            city: "Enter your city",
            state: "Enter your state",
            country: "Enter your country",
            pincode: "Enter a valid 6-digit pincode",
            payment: "Select a payment method"
          },
          highlight: function (element) {
            $(element).addClass('is-invalid');
          },
          unhighlight: function (element) {
            $(element).removeClass('is-invalid');
          },
          submitHandler: function(form) {
            form.submit();
          }
        });
      });
    </script>

  <?php else: ?>
    <!-- Empty Cart Box -->
    <div class="box-container text-center">
      <i class="fas fa-shopping-cart fa-2x mb-3 text-muted"></i>
      <h4 class="mb-3 text-muted">Your cart is currently empty.</h4>
      <a href="products.php" class="btn btn-primary mt-2"><i class="fas fa-arrow-left"></i> Back to Products</a>
    </div>
  <?php endif; ?>
</div>

<?php
$Content1 = ob_get_clean();
//$title_page = '<h1 class="text-center my-4">Shopping Cart</h1>';
include 'layout.php';
?>

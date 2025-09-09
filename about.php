<?php

ob_start();

?>


<div class="container-fluid p-0">
  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/greenbookey.jpg" alt="flowers" class="d-block w-100 img-fluid" style="width: 120% ; height: 600px;">
        <div class="carousel-caption">
          <h4><b> Fresh Flowers, Fresh Smiles.😊</b></h4>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/whiterose.jpg" alt="flowers" class="d-block w-100 img-fluid" style="width: 120% ; height:600px">
        <div class="carousel-caption">
          <h4><b>Fresh Flowers, Fresh Smiles.😊</b></h4>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/tulip.jpg" alt="flowers" class="d-block w-100 img-fluid" style="width: 120% ; height:600px">
        <div class="carousel-caption">
          <h4><b> Fresh Flowers, Fresh Smiles.😊</b></h4>
        </div>
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</div>

<!--About us contant-->

<body style="background-color:#fff0f5;">

  <div style="width: 80%; margin: 0 auto; text-align: center;">
    <h2><b>🌸 About Flower Shop 🌸</b></h2>
    <p>Welcome to <strong>Unique Flower Shop</strong>!We believe flowers bring joy and positivity to life.
      Our mission is to provide fresh and beautiful flowers for every occasion whether it's a birthday, wedding, anniversary,
      or just to make someone smile 🌼.
    </p>
    <p>
      We also offer custom bouquets, event decorations, and same-day delivery in your city.</p>
    <h4>Our Mission</h4>
    <p>Our mission is to deliver fresh, high-quality flowers at affordable prices.
      Whether it’s a birthday, wedding, anniversary, or just a “thank you” moment,
      we are here to make it memorable with our special floral arrangements. 💐</p>
    <h4>Why Choose Us?</h6>
      <ul style="list-style: none; padding: 0;">
        <li>🪷 Wide variety of flowers</li>
        <li>💰 Affordable prices</li>
        <li>🚚 Same-day delivery available</li>
        <li>✅ 100% customer satisfaction guarantee</li>
      </ul>
  </div>

</body>

<?php
$content1 = ob_get_clean();
include_once("layout.php");

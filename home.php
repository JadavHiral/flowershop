<?php

ob_start();
?>

<body>
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
  <!--Welcome-->
  <h1 style="text-align: center;">🌸 Welcome To Unique flower Shop. 🌸</h1>

  <!--card images-->
  <div class="container my-5">
    <div class="row">
      <!-- Card 1 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card">
          <img src="images/lotus.jpg" class="card-img-top" alt="Flower 1">
          <div class="card-body text-center">
            <h5 class="card-title"><b>Lotus</b></h5>
          </div>

        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card">
          <img src="images/tulipbasket.jpg" class="card-img-top" alt="Flower 2">
          <div class="card-body text-center">
            <h5 class="card-title"><b>Tulip Bouquet</b></h5>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card">
          <img src="images/rose.jpg" class="card-img-top" alt="Flower 3">
          <div class="card-body text-center">
            <h5 class="card-title"><b>Pink Rose</b></h5>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Card 4 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card">
          <img src="images/flowerpot.jpg" class="card-img-top" alt="Flower 4">
          <div class="card-body text-center">
            <h5 class="card-title"><b>Flower Pot</b></h5>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card">
          <img src="images/redtulip.jpg" class="card-img-top" alt="Flower 5">
          <div class="card-body text-center">
            <h5 class="card-title"><b>Red Tulip</b></h5>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card">
          <img src="images/white.jpg" class="card-img-top" alt="Flower 6">
          <div class="card-body text-center">
            <h5 class="card-title"><b>White Rose</b></h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  $content1 = ob_get_clean();
  include_once("layout.php");

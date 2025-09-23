<?php

ob_start();
?>


<head>
  <style>
    /* Hero Section */
    .hero {
      background: url('images/wp15.jpg') center/cover no-repeat;
      height: 400px;
      padding: 100px 20px;
      text-align: center;
      color: #030005ff;
    }

    .hero h2 {
      font-size: 2.8em;
      margin-bottom: 15px;
      font-weight: bold;
    }

    .hero p {
      font-size: 1.2em;
      margin-bottom: 25px;
    }
  </style>
</head>

<body>

  <!--banner image-->
  <section class="hero">

    <h2>Fresh Blooms Delivered With Love</h2>
    <p>Discover our handpicked collection of flowers for every occasion.</p>
    <p> Fresh Flowers, Fresh Smiles.😊</p>
    <a href="#" class="btn">Shop Now</a>
  </section>


  <!--Welcome-->
  <marquee behavior="alternate" direction="left">
    <h1 style="text-align: center;  padding: 15px 10px; display:inline-block;"> Welcome To Unique Flower Shop </h1>
  </marquee>


  <!--card images-->
  <div class="container my-5">
    <div class="row">
      <!-- Card 1 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card">
          <img src="images/lotus2.jpg" class="card-img-top" alt="Flower 1">
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
  ?>
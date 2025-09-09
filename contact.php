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



  <body style="background-color:#fff0f5;">
    <div style="width: 80%; margin: 0 auto; text-align: center;">
      <h2 class="mb-3" align="center">📞 Contact Us </h2>
      </br>
      <p align="center"><b>Name:</b> Diya Apte </p>
      <p align="center">📍 <b>Address:</b> "Uniqueflowers" Navrang Street-1, 
                    </br>Kalavad Road Rajkot Gujarat </p>
      <p align="center">📧 <b>Email: </b>uniqueflowers@gmail.com</p>
      <p align="center">📞 <b>Phone:</b> +91 9876543210 </p>
    </div>
  </body>

  <?php
  $content1 = ob_get_clean();
  include_once("layout.php");
  ?>
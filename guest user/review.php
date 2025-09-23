<?php
  $title_page;
  ob_start();
  ?>

  <style>
    body {
       background-image: url("images/tulip2.jpg");
     background-size: cover;
      /* Makes image fill the screen */
      background-repeat: no-repeat;
      /* Prevents tiling */
      background-position: center center;
    margin: 0;
    padding: 0;
    
    }
    .review-box {
      max-width: 600px;
      margin: 50px auto;
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      padding: 30px;
      height: 600px;
      border: 2px solid #f66797;
    }
    .review-box h2 {
      color: #050505ff;
      font-weight: bold;
      margin-bottom: 20px;
      text-align: center;
    }
    .stars {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }
    .star {
      font-size: 30px;
      color: #ccc;
      cursor: pointer;
      transition: color 0.3s;
    }
    .star.selected, .star:hover, .star:hover ~ .star {
      color: #f66797;
    }
    .review-list {
      margin-top: 30px;
    }
    .review-item {
      background: #ffe6f0;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 15px;
    }
    .review-item strong {
      color: #f66797;
    }
  </style>
</head>
<body>

  <div class="review-box">
    <h2><u> Customer Reviews </u></h2>
    
    <!-- Rating Stars -->
    <div class="stars" id="stars">
      <span class="star" data-value="1">★</span>
      <span class="star" data-value="2">★</span>
      <span class="star" data-value="3">★</span>
      <span class="star" data-value="4">★</span>
      <span class="star" data-value="5">★</span>
    </div>
    
    <!-- Review Form -->
    <form id="reviewForm">
      <input type="hidden" name="rating" id="ratingValue">

      <div class="mb-3">
        
        <input type="text" class="form-control" name="name" placeholder="Enter your name" require>
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="Enter your email" require>
      </div>
      <div class="mb-3">
        <textarea class="form-control" name="comment" rows="3" placeholder="Write your review..."></textarea>
      </div>
      <button type="submit" class="btn w-100" style="background:#f66797; color:white;">Submit Review</button>
    </form>

    <!-- Review List -->
    <div class="review-list" id="reviewList">
      <h5 class="mt-4">Recent Reviews:</h5>
      <!-- Reviews dynamically added here -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(document).ready(function(){
      let rating = 0;

      // Star Rating Selection
      $(".star").click(function(){
        rating = $(this).data("value");
        $("#ratingValue").val(rating);
        $(".star").removeClass("selected");
        $(this).prevAll().addBack().addClass("selected");
      });

      // Review Submit
      $("#reviewForm").submit(function(e){
        e.preventDefault();

        let name = $("input[name='name']").val();
        let email = $("input[name='email']").val();
        let comment = $("textarea[name='comment']").val();
        let stars = rating;

        if(name && email && comment && stars > 0){
          let reviewHTML = `
            <div class="review-item">
              <strong>${name}</strong> - 
              ${"★".repeat(stars)}${"☆".repeat(5-stars)}
              <p>${comment}</p>
            </div>
          `;
          $("#reviewList").append(reviewHTML);

          // Reset form
          $("#reviewForm")[0].reset();
          $(".star").removeClass("selected");
          rating = 0;
        } else {
          alert("Please fill all fields and select rating.");
        }
      });
    });
  </script>

</body>
 <?php
  $content1 = ob_get_clean();
  include_once("layout.php");
  ?>

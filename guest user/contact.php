<?php
$title_page;
ob_start();
?>
<style>
  body {
    background-image: url("images/wp17.jpg");
     background-size: cover;
      /* Makes image fill the screen */
      background-repeat: no-repeat;
      /* Prevents tiling */
      background-position: center center;
    margin: 0;
    padding: 0;
  }

  .contact-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: stretch;
    padding: 40px;
    gap: 30px;
  }

  .contact-info,
  .contact-form {
    background-color: white;
    border-radius: 15px;
    border: 2px solid #f66797;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    padding: 40px;
    flex: 1 1 300px;
    max-width: 550px;
    height: 650px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .contact-info h2,
  .contact-form h2 {
    color: #000000ff;
    margin-bottom: 20px;
    text-align: center;
  }

  .contact-info p {
    font-size: 1em;
    color: #333;
    margin-bottom: 15px;
    text-align: left;
  }

  .contact-info b {
    color: #6a1b9a;
  }

  .social-row {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 10px 0;
  }

  .social-row img {
    width: 20px;
    height: 20px;
  }

  .form-group {
    margin-bottom: 30px;
  }

  label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #6a1b9a;
  }

  input[type="text"],
  input[type="email"],
  textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 1em;
    resize: vertical;
  }

  textarea {
    height: 120px;
  }

  

  @media (max-width: 768px) {
    .contact-container {
      flex-direction: column;
      align-items: center;
    }
  }

    .error {
    color: red;
    font-size: 14px;
    margin-top: 5px;
    margin-bottom: 0;
    text-align: center;
  }

</style>
</head>

<body>

  <div class="contact-container">
    <!-- Left Side: Contact Info -->
    <div class="contact-info">
      <div>
        <h2>📞 <u>Contact Us</u></h2>
        <p>📍<b>Main Shop Address:</b><br><b>"Uniqueflowers.🌷"</b><br>Nr. Darshnam Society,<br>Railway Station Road, Rajkot - 360004, <br>Gujarat, India</p>
        <p> <b>2nd Shop Address:</b><br><b>"Uniqueflowers.🌷"</b><br>Shop No.12, Navrangpura Street-1,<br>Nr. RK bhavan, Kalavad Main Road,<br> Rajkot, Gujarat, India</p>
        <p>📧 <b>Email:</b><br>uniqueflowers@gmail.com</p>
        <p>📞 <b>Phone:</b><br>+91 9876543210<br>+91 9826545240</p>
      </div>
      <div>
        <div class="social-row">
          <img src="images/fb.png" alt="Facebook">
          <span><b>@Uniqueflowers</b></span>
        </div>
        <div class="social-row">
          <img src="images/insta.png" alt="Instagram">
          <span><b>@Uniqueflowers</b></span>
        </div>
      </div>
    </div>

    <!-- Right Side: Contact Form -->
    <div class="contact-form">
      <h2>📝<u>Send Us a Message</u></h2>
      <form action="contact_process.php" method="POST">
        <div class="form-group">
          <label for="name1" class="form-label"> Your Name:</label>
        <input type="text" class="form-control" id="name1" placeholder="Enter Name" name="fname" data-validation="required">
        <div class="error text-danger" id="fnameError"></div>
        </div>
        <div class="form-group">
          <label for="email" class="form-label">Email:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" data-validation="required email">
        <div class="error" id="emailError"></div>
        </div>
        <div class="form-group">
          <label for="message">Your Message</label>
          <textarea name="message" id="message" ></textarea>
        </div>
        <button type="submit" class="btn w-100">Send Message</button>
      </form>
    </div>
  </div>

</body>

<?php
$content1 = ob_get_clean();
include_once("layout.php");
?>
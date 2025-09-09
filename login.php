  <?php
    $title_page = "Login";
    ob_start();
    ?>


  <!--Login-->

  <body align="center">
      <div class="mb-3 mt-3">
          <label>Email:</label>
          <input type="text" name="email">
      </div>

      <div class="mb-3 mt-3">
          <label>Password:</label>
          <input type="password" name="password">
      </div>

      <div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </body>
  <?php
    $content1 = ob_get_clean();
    include_once("layout.php");
    ?>
<header class="header">

   <div class="flex">

      <img src="juicelogo.jpeg" alt="logo" width="200" height="150">

      <nav class="navbar">
         <a href="admin.php">add products</a>
         <a href="products.php">view products</a>
         <a href="aboutus.php">Aboutus</a>
         <a href="form.php">Register</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>
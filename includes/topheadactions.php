     <?php
      $total_cart_items = 0;
     if(isset($_SESSION['mycart']))
     {
      $total_cart_items = count($_SESSION['mycart']);
     }
    

     ?>

     
     
    

      <div class="header-main">
        <div class="container">
          <!-- logo section -->
          <a href="./index.php?id=<?php echo (isset( $_SESSION['customer_name']))? $_SESSION['id']: 'unknown';?>" class="header-logo" style="color: hsl(0, 0%, 13%);">

            <h1 style="text-align: center;">

            <img src="admin/upload/<?php echo $_SESSION['web-img']; ?>" alt="logo" width="200px">

            </h1>

          </a>

          <!-- search input -->
          <div class="header-search-container">
            <form class="search-form" method="post" action="./search.php">
              <input type="search" name="search" class="search-field" placeholder="Enter your product name..." required oninvalid="this.setCustomValidity('Enter product name...')" oninput="this.setCustomValidity('')" />

              <button class="search-btn" type="submit" name="submit">
                <ion-icon name="search-outline"></ion-icon>
              </button>
            </form>
          </div>

          <div class="header-user-actions">

            <!-- Logout button -->
    <?php if( isset( $_SESSION['id'])) { ?>

            <button id="lg-btn" class="action-btn">
              <a   href="logout.php"  id="a" role="button" >
                <ion-icon name="log-out-outline"></ion-icon>
              </a>
            </button> 

            <!-- TODO: This script doesnot execute: Work o this, Directly logout user -->
		        <script src="./js/logout.js"></script>

	  <?php } else { ?>
            <!-- Login Button -->
            <button class="action-btn">
              <a href="./login.php"  id="a">
                <ion-icon name="person-outline"></ion-icon>
              </a>
            </button>

	  <?php } ?>

           

            <!-- Favourite Counter -->
            

            <!-- Cart Button -->
	  

          </div>
        </div>
      </div>

      
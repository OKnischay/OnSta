<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="./images/logo.png" type="image/svg+xml">

  <!-- import the CSS file in HTML -->
  <link rel="stylesheet" href="css/style.css">

  <!--Icon font link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <?php
   session_start();
  ?>
</head>

<body>
<?php
  $count = 0;
  if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']); //use for number of click in the cart


  }

  ?>
  <!--Header Section Start -->
  <section id="header" class="header">
  <nav class="navbar">
    <a href="index.php" class="text-decoration-none navbar-brand">Home</a>
    <?php
    if(isset($_SESSION['user'])){
      echo '<span class="fa-solid fa-user" style="font-size: 25px; margin-right: 25px; color: #3498db;">' . $_SESSION['user'] . '</span>';
      echo '<a href="form/logout.php" style="color: #e74c3c; text-decoration: none;"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign Out </a>';
    }
    else{
      echo '<a href="form/login.php" style="color: #2ecc71; text-decoration: none;"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a>';
    }
    ?>
  </nav>
  <div class="icons">
    <div id="menu-btn" class="fas fa-bars" style="color: #2c3e50; cursor: pointer;"></div>
    <a href="../user/viewCart.php" style="color: #ff9778; text-decoration: none;"><i class="fas fa-shopping-cart"></i> Cart <?php echo $count?></a>
    <a href="../user/orderhistory.php" style="color: #ff9778; text-decoration: none;"><i class="fas fa-shopping-cart"></i> Ordered</a>
  </div>
</section>


  <!-- header section ends -->

  <!-- Home section starts -->
  
 
     <nav style="background-color: #c6e2e9; display: flex; justify-content: center;">
          <ul style="list-style-type: none; margin: 0; padding: 0; display: flex;">
            <li style="display: flex;">
              <a href="notebooks.php" style="display: flex; align-items: center; padding: 15px 25px; text-decoration: none; color: #809bce; font-size: 25px">Notebooks</a>
            </li>
            <li style="display: flex;">
              <a href="pens.php" style="display: flex; align-items: center; padding: 15px 25px; text-decoration: none; color: #809bce; font-size: 25px">Pens</a>
            </li>
            <li style="display: flex;">
              <a href="pencils.php" style="display: flex; align-items: center; padding: 15px 25px; text-decoration: none; color: #809bce; font-size: 25px">Pencils</a>
            </li>
            <li style="display: flex;">
              <a href="pencilcase.php" style="display: flex; align-items: center; padding: 15px 25px; text-decoration: none; color: #809bce; font-size: 25px">Pencils Case & Box</a>
            </li>
          </ul>
        </nav>
        <section class="home" id="home">
    <!-- 1-->
    <div class="slide active">
        <div class="content">
            <span>Welcome to Online Stationary</span>
      
        </div>
    </div>
</section>

    <!--link of javascript file-->
    <script src="app.js"></script>
</body>

</html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <?php
  include 'header.php';

  ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center md-5">
        <h1 class="" style=" text-align: center; font-weight: bold; color:#ff9778; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 32px; ">My Cart</h1>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row justify-content-around">
      <div class="col-sm-12 col-md-6 col-lg-9">
        <table class="table table-bordered text-center">
          <thead>
            <th>S.N
            <th>
            <th>Name
            <th>
            <th>Price
            <th>
            <th>Quantity
            <th>
            <th>Total Price
            <th>
            <th>Update
            <th>
            <th>Delete
            <th>
          </thead>
          <tbody>
            <?php
            $subtotal = 0;
            $ptotal = 0;
            if (isset($_SESSION['cart'])) {
              foreach ($_SESSION['cart'] as $key => $value) {
                $ptotal = intval($value['productPrice']) * intval($value['productQuantity']);
                $subtotal += intval($value['productPrice']) * intval($value['productQuantity']);
                $_SESSION['subtotal'] = $subtotal;

                echo "
    <form action='insertcart.php' method='POST'>
    <tr>
        <td>$key</td>
        <td></td>
        <td><input type='hidden' name='Pname' value='" . $value['productName'] . "' style='color: black'>" . $value['productName'] . "</td>
        <td></td>
        <td><input type='hidden' name='PPrice' value='" . $value['productPrice'] . "'>" . $value['productPrice'] . "</td>
        <td></td>
        <td><input type='text' name='PQuantity' value='" . $value['productQuantity'] . "' class='text-center'></td>
        <td></td>
        <td>$ptotal</td>
        <td></td>
        <td><button style='background-color: #ff9778; color: black;' name='update' >Update</button></td>
        <td></td>
        <td><button button style='background-color: #ff9778; color: black;' name='remove'>Delete</button></td>
        <td><input type='hidden' name='item' value='" . $value['productName'] . "'></td>
    </tr>
    </form>";


              }
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="col-lg-3">
        <h3>Total</h3>
        <h1>
          <?php echo $subtotal ?> 
        </h1>
      </div>
    </div>
  </div>
  <div style="display: flex; justify-content: space-between; margin: 20px;">
    <div style="background-color: #3498db; padding: 20px; margin-right: 20px;">
        <a href="index.php" class="text-decoration-none text-white fs-4 fw-bold">Continue shopping</a>
    </div>
    <div style="background-color: #2ecc71; padding: 20px; margin-left: 20px;">
        <a href="billcheck.php" class="text-decoration-none text-white fs-4 fw-bold">Checkout</a>
    </div>
</div>



</body>

</html>
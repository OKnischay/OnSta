<?php
session_start();
$subtotal = $_SESSION['subtotal'];
?>

<!DOCTYPE html>
<html>
<head>
  <style>
    .big-text {
      font-size: 24px;
      font-weight: bold;
      color: red;
    }
    #overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity as desired */
  z-index: 9999;
  display: none;
}

  </style>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-black mt-3">

                <form action="billing1.php" method="POST" >
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-black">Total Payment:
                            <span class="big-text"><?php echo $subtotal; ?></span>
                            <input type="hidden" name="username" value="<?php echo $_SESSION['user']; ?>">
                            <input type="hidden" name="total" value="<?php echo $subtotal; ?>">
                            <input type="hidden" name="product" value="<?php 
                            if (isset($_SESSION['cart'])) {
                                $productCount = count($_SESSION['cart']);
                                $counter = 0;
                            
                                foreach ($_SESSION['cart'] as $value) {
                                    echo $value['productName'];
                                    echo ' (' . $value['productQuantity'] . ')';
                                    $counter++;
                            
                                    if ($counter < $productCount) {
                                        echo ", ";
                                    }
                                }
                            }
                            
                            ?>">
                        </p>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Full Name: </label>
                        <input type="text" name="Fname" class="form-control" placeholder="Enter Your Full Name">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Delivery Address: </label>
                        <input type="text" name="Address" class="form-control" placeholder="Enter Delivery Address">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Contact Number: </label>
                        <input type="text" name="Phone" class="form-control" placeholder="Enter Your Phone Number">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Select Payment Option</label>
                        <select class="form-select" name="Pages">
                            <option value="Cash on Delievery">Cash on Delievery</option>
                        </select>
                    </div>
                    <button onclick="done(event)" name="submit" class="bg-success fs-4 fw-bold my-5 form-control text-white">Place Order</button>
                </form>
            </div>
        </div>
    </div>
 
</body>
</html>

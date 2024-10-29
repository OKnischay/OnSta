<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'mystore.php';
    $con = mysqli_connect('localhost', 'root', '', 'stationary');
    $Record = mysqli_query($con, "SELECT * FROM `tblorder` WHERE `status` <> 'Complete' ");
    $row_count = mysqli_num_rows($Record);
        ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
                
    <table class="table table-secondary table-bordered">
        <thead class="text-center">
            <th>Id</th>
            <th>UserName</th>
            <th>Total Amount</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Payment Option</th>
            <th>Product</th>
            <th>Delivery</th>
        </thead>

        <tbody class="text-center text-danger">
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($Record)) {
                echo "
            <tr>
            <td>";?><?php echo ++$i; ?> <?php echo "</td>
            <td>$row[UserName]</td>
            <td>$row[Totalamount]</td>
             <td>$row[Address]</td>
             <td>$row[Phnumber]</td>
             <td>$row[Paymentoption]</td>
             <td>$row[Product]</td>
             <td><a href='confirmorder.php?id=$row[Id]&status=Complete' class='btn btn-outline-danger'>Complete</a></td>
            
        </tr>
            ";
            }
            ?>



        </tbody>
    </table>

    </div>
        
            
    
    <div class="col-md-2 pr-5 text-center">
        <h3 class="text-white">Total</h3>
        <h1 class="bg-secondary text-white"><?php echo$row_count;?></h1>

    </div>
    </div>
    </div>    

</body>

</html>
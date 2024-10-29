<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'header.php';
    $con = mysqli_connect('localhost', 'root', '', 'stationary');
    $selectedUser = $_SESSION['user'];
    // $Record = mysqli_query($con, "SELECT * FROM `tblorder` WHERE UserName = '$selectedUser' ");
    // $row_count = mysqli_num_rows($Record);
    
    // Fetch all orders
    $query = "SELECT * FROM `tblorder` WHERE UserName = '$selectedUser'";
    $Record = mysqli_query($con, $query);

    // Fetch total amount from pending orders
    $total_price_result = mysqli_fetch_assoc(mysqli_query($con, "SELECT SUM(Totalamount) AS total_price FROM `tblorder` WHERE UserName = '$selectedUser' AND `Status` <> 'Complete'"));
    $total_price = $total_price_result['total_price'];

    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
                <table style="width: 100%; border-collapse: collapse; margin-top: 20px; font-size: 15px;">
                    <thead style="text-align: center; background-color: red; color: #fff;">
                        <th style="padding: 10px;">Order Id</th>
                        <th style="padding: 10px;">UserName</th>
                        <th style="padding: 10px;">Total Amount</th>
                        <th style="padding: 10px;">Address</th>
                        <th style="padding: 10px;">Contact Number</th>
                        <th style="padding: 10px;">Payment Option</th>
                        <th style="padding: 10px;">Product</th>
                        <th style="padding: 10px;">Status</th>
                    </thead>

                    <tbody style="text-align: center;">
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($Record)) {
                            $statusText = ($row['Status'] == 'Complete') ? 'Complete' : 'Pending';
                            echo "
                        <tr>
                            <td style='padding: 15px;'>$row[Id]</td>
                            <td style='padding: 15px;'>$row[UserName]</td>
                            <td style='padding: 15px;'>$row[Totalamount]</td>
                            <td style='padding: 15px;'>$row[Address]</td>
                            <td style='padding: 15px;'>$row[Phnumber]</td>
                            <td style='padding: 15px;'>$row[Paymentoption]</td>
                            <td style='padding: 15px;'>$row[Product]</td>
                            <td style='padding: 15px; color: black; font-weight: bold; background-color: white'>$statusText</td>
                        </tr>
                        ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-md-2 pr-5 text-center">
                <h3 style="color: red; font-size: 35px;"><strong>Total</strong></h3>
                <h1 style="background-color: black; color: #fff; padding: 10px; font-size: 36px;"><?php echo $total_price; ?></h1>
            </div>
        </div>
    </div>
</body>

</html>

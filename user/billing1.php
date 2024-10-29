<?php
session_start(); // Start the session
include 'conn.php';
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $username = $_POST['username'];
    $totalPayment = $_POST['total'];
    $fullName = $_POST['Fname'];
    $deliveryAddress = $_POST['Address'];
    $contactNumber = $_POST['Phone'];
    $paymentOption = $_POST['Pages'];
    $product = $_POST['product'];

    // Perform validation
    if (empty($fullName) || empty($deliveryAddress) || empty($contactNumber)) {
        echo "Please fill in all the required fields.";
        
    } else {
        mysqli_query($con, "INSERT INTO `tblorder`(`UserName`, `Totalamount`, `Fullname`, `Address`,`Phnumber`, `Paymentoption`,`Product`) VALUES ('$username','$totalPayment','$fullName','$deliveryAddress','$contactNumber','$paymentOption','$product')");
        $submit = $_POST['submit'];
        echo "<script>
            alert('Your Order has been succesfully placed.');
            window.location.href='cartdestroy.php';
            </script>";
    }
}
?>
<?php
include 'product/conn.php';

if (isset($_GET['id']) && isset($_GET['status'])) {
    $orderId = $_GET['id'];
    $status = $_GET['status'];

    // Update the order status in the database
    $updateSql = "UPDATE tblorder SET Status = '$status' WHERE Id = $orderId";
    mysqli_query($con, $updateSql);

    // Redirect back to the appropriate page
    header("Location: orderlist.php"); // Redirect to user order history
    exit();
}
?>

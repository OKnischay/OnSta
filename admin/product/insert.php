<?php

// after clicking submit this will work
if (isset($_POST['submit'])) {
    include 'conn.php';
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    // print_r($product_image);//This will show location in array form
    $image_loc = $_FILES['Pimage']['tmp_name']; //These are the variables
    $image_name = $_FILES['Pimage']['name'];
    $img_des = "Uploadimage/" . $image_name; //destination to store the location of the image $img is a variable
    move_uploaded_file($image_loc, "Uploadimage/" . $image_name); //To upload the file
    $product_category = $_POST['Pages'];


    //insert product into database

    mysqli_query($con, "INSERT INTO `tblproduct`( `PName`, `PPrice`, `Image`, `PCategory`) VALUES ('$product_name','$product_price','$img_des','$product_category')");

    header("location:index.php");

}
?>


